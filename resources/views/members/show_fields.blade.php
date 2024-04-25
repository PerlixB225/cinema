<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('Firstname', 'Firstname:') !!}
    <p>{{ $members->Firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('Surname', 'Surname:') !!}
    <p>{{ $members->Surname }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('Phone', 'Phone:') !!}
    <p>{{ $members->Phone }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('Age', 'Age:') !!}
    <p>{{ $members->Age }}</p>
</div>

