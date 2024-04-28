<!-- Booking Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_date', 'Booking Date:') !!}
    {!! Form::text('booking_date', null, ['class' => 'form-control','id'=>'booking_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#booking_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Member Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', 'Member Id:') !!}
    <select name="memberid" class="form-control">
        @foreach($members as $member)
            <option value="{{$member->id}}">{{$member}}</option>
        @endforeach

    </select>
</div>

<!-- Movie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('movie_id', 'Movie Id:') !!}
     <select name="movieid" class="form-control">
        @foreach($movies as $movie)
            <option value="{{$movie->id}}">{{$movie}}</option>
        @endforeach

    </select>
</div>

<!-- Seat Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seat_number', 'Seat Number:') !!}
    {!! Form::text('seat_number', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Ticket Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    {!! Form::number('ticket_price', null, ['class' => 'form-control']) !!}
</div>