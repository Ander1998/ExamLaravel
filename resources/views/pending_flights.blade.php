<h2>Coming flights:</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Origin</th>
      <th>Destiny</th>
      <th>Available Seats</th>
    </tr>
    @foreach $flight in $pending_fligths
        @if $flight->date >= now();
        <tr>
            <th>$flight->name</th>
            <th>$flight->date</th>
            <th>$flight->origin</th>
            <th>$flight->destiny</th>
            <th>$flight->available_seats</th>

            <th><label for="seats">Seats:</label><input type="text" name="seats"></th>
            <th><input type="button" name="reserve" value="Reserve" action="{{ route('reserve_flight', compact('flight')) }}"/></th>
        </tr>
        @endif
    @endforeach
  </table>