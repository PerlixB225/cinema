<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $movie->title }}</p>
</div>

<!-- Director Field -->
<div class="col-sm-12">
    {!! Form::label('director', 'Director:') !!}
    <p>{{ $movie->director }}</p>
</div>

<!-- Release Date Field -->
<div class="col-sm-12">
    {!! Form::label('release_date', 'Release Date:') !!}
    <p>{{ $movie->release_date }}</p>
</div>

<!-- Duration Minutes Field -->
<div class="col-sm-12">
    {!! Form::label('duration_minutes', 'Duration Minutes:') !!}
    <p>{{ $movie->duration_minutes }}</p>
</div>

