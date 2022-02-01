<h2>Coming flights:</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Origin</th>
      <th>Destiny</th>
      <th>Available Seats</th>
    </tr>
    @foreach $flight in $flightsreseved
        <tr>
            <th>$flight->name</th>
            <th>$flight->date</th>
            <th>$flight->origin</th>
            <th>$flight->destiny</th>
            <th>$flight->available_seats</th>
        </tr>
    @endforeach
  </table>