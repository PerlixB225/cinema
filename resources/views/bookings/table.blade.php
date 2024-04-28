<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
        <tr>
            <th>Booking Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Member Id</th>
        <th>Movie Id</th>
        <th>Seat Number</th>
        <th>Ticket Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->booking_date }}</td>
            <td>{{ $booking->start_time }}</td>
            <td>{{ $booking->end_time }}</td>
            <td>{{ $booking->member_id }}</td>
            <td>{{ $booking->movie_id }}</td>
            <td>{{ $booking->seat_number }}</td>
            <td>{{ $booking->ticket_price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$booking->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bookings.edit', [$booking->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
