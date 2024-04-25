<!-- Movieid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MovieID', 'Movieid:') !!}
    {!! Form::number('MovieID', null, ['class' => 'form-control']) !!}
</div>

<!-- Customerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CustomerID', 'Customerid:') !!}
    {!! Form::number('CustomerID', null, ['class' => 'form-control']) !!}
</div>

<!-- Screeningid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ScreeningID', 'Screeningid:') !!}
    {!! Form::number('ScreeningID', null, ['class' => 'form-control']) !!}
</div>

<!-- Seatnumber Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('SeatNumber', 'Seatnumber:') !!}
    {!! Form::textarea('SeatNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchasedate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PurchaseDate', 'Purchasedate:') !!}
    {!! Form::text('PurchaseDate', null, ['class' => 'form-control','id'=>'PurchaseDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#PurchaseDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush