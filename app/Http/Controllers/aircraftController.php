<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Flight;
use App\Models\airplane;
use App\Models\flightplane;
use App\Models\reserve;

class aircraftController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function assign_aircraft() {
        $flights = Flight::all();
        $airplanes = airplane::all();
        $reserves = reserve::all();
        return view('asign_aircraft', compact('flights', 'airplanes', 'reserves'));
    }

    public function addairplane(Request $request) {
       
        $flightplane = new flightplane;

        $flightplane->flight_id = $request->fligth_id;

        $flightplane->airplane_id = $request->airplane_id;


        $flightplane->save();

        $flight = Flight::where('flight_id', $flightplane->flight_id)->first();
        $airplane = airplane::where('airplane_id', $flightplane->airplane_id)->first();

        $flight->available_seats = $airplane->available_seats;

        $flight->save();
    }

    public function delete_asignation($id) { 
        $flightplane = flightplane::find($id);

        $flightplane->delete();
    }

    public function pending_fligths() { 
        $pending_fligths = Flight::all()->orderBy('date','ASC');
        return view('pending_fligths', compact('pending_fligths'));
    }

    public function reserve_flight($flight) { 
        $user = Auth::user();
        $available_flight = Flight::where('id', $flight)->first;
        $reserves = reserve::all();

        //reservation
        if ($flight->input('seats') <= $available_flight->available_seats) { 
            $reserves = new reserve;

            $reserves->flight_id = $available_flight->id;
            $reserves->user_id = $user->id;

            $reserves->save();

            $available_flight->available_seats -= $flight->input('seats');

            $available_flight->save();

        }
    }

}
