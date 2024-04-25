<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Firstname', 'Firstname:') !!}
    {!! Form::text('Firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Surname', 'Surname:') !!}
    {!! Form::text('Surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('Phone', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Age', 'Age:') !!}
    {!! Form::number('Age', null, ['class' => 'form-control']) !!}
</div>