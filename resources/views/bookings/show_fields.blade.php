<!-- Booking Date Field -->
<div class="col-sm-12">
    {!! Form::label('booking_date', 'Booking Date:') !!}
    <p>{{ $booking->booking_date }}</p>
</div>

<!-- Start Time Field -->
<div class="col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $booking->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="col-sm-12">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $booking->end_time }}</p>
</div>

<!-- Member Id Field -->
<div class="col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{{ $booking->member_id }}</p>
</div>

<!-- Movie Id Field -->
<div class="col-sm-12">
    {!! Form::label('movie_id', 'Movie Id:') !!}
    <p>{{ $booking->movie_id }}</p>
</div>

<!-- Seat Number Field -->
<div class="col-sm-12">
    {!! Form::label('seat_number', 'Seat Number:') !!}
    <p>{{ $booking->seat_number }}</p>
</div>

<!-- Ticket Price Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    <p>{{ $booking->ticket_price }}</p>
</div>

