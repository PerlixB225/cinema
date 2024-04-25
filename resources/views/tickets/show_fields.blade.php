<!-- Movieid Field -->
<div class="col-sm-12">
    {!! Form::label('MovieID', 'Movieid:') !!}
    <p>{{ $tickets->MovieID }}</p>
</div>

<!-- Memberid Field -->
<div class="col-sm-12">
    {!! Form::label('MemberID', 'Memberid:') !!}
    <p>{{ $tickets->MemberID }}</p>
</div>

<!-- Screeningid Field -->
<div class="col-sm-12">
    {!! Form::label('ScreeningID', 'Screeningid:') !!}
    <p>{{ $tickets->ScreeningID }}</p>
</div>

<!-- Seatnumber Field -->
<div class="col-sm-12">
    {!! Form::label('SeatNumber', 'Seatnumber:') !!}
    <p>{{ $tickets->SeatNumber }}</p>
</div>

<!-- Purchasedate Field -->
<div class="col-sm-12">
    {!! Form::label('PurchaseDate', 'Purchasedate:') !!}
    <p>{{ $tickets->PurchaseDate }}</p>
</div>

