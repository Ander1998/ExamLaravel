<h2>Assign aircraft to flight:</h2>

    <div class="form-group">
        <label for="title">Flight:</label>
        <select name="flight" class="form-control" style="width:350px">
            <option value="">--- Select Flight ---</option>
            @foreach ($flights as $flight)
                <option value="{{ $flight->id }}">{{ $flight->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title">Airplane:</label>
        <select name="airplane" class="form-control" style="width:350px">
            <option value="">--- Select Airplane ---</option>
            @foreach ($airplanes as $airplane)
                <option value="{{ $airplane->id }}">{{ $airplane->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="btnAddAirplane" value="btnAddAirplane" form-action="{{ route('/addairplane') }}">
    </div>

    <h2>Flights asigned to airplanes:</h2>

    <table>
        <tr>
        <th>Flight ID</th>
        <th>Plane ID</th>
        </tr>
        @foreach $reserve in $reserves
            <tr>
                <th>$reserve->id</th>
                <th>$reserve->fligth_id</th>
                <th>$reserve->plane_id</th>
                <th><input type="button" action="{{ route('delete_asignation')}}"></th>
            </tr>
        @endforeach
    </table>