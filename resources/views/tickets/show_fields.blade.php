<!-- Movieid Field -->
<div class="col-sm-12">
    {!! Form::label('MovieID', 'Movieid:') !!}
    <p>{{ $tickets->MovieID }}</p>
</div>

<!-- Customerid Field -->
<div class="col-sm-12">
    {!! Form::label('CustomerID', 'Customerid:') !!}
    <p>{{ $tickets->CustomerID }}</p>
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

