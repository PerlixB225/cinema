<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('Firstname', 'Firstname:') !!}
    <p>{{ $customers->Firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('Surname', 'Surname:') !!}
    <p>{{ $customers->Surname }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('Phone', 'Phone:') !!}
    <p>{{ $customers->Phone }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('Age', 'Age:') !!}
    <p>{{ $customers->Age }}</p>
</div>

