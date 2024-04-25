<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('Title', 'Title:') !!}
    <p>{{ $movies->Title }}</p>
</div>

<!-- Genre Field -->
<div class="col-sm-12">
    {!! Form::label('Genre', 'Genre:') !!}
    <p>{{ $movies->Genre }}</p>
</div>

<!-- Releasedate Field -->
<div class="col-sm-12">
    {!! Form::label('ReleaseDate', 'Releasedate:') !!}
    <p>{{ $movies->ReleaseDate }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('Duration', 'Duration:') !!}
    <p>{{ $movies->Duration }}</p>
</div>

