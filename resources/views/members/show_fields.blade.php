<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $member->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $member->surname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $member->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $member->phone }}</p>
</div>

