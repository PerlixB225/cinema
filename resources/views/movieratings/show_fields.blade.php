<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $movierating->rating }}</p>
</div>

<!-- Comment Field -->
<div class="col-sm-12">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $movierating->comment }}</p>
</div>

<!-- Movieid Field -->
<div class="col-sm-12">
    {!! Form::label('movieid', 'Movieid:') !!}
    <p>{{ $movierating->movieid }}</p>
</div>

