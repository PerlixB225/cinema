<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('director', 'Director:') !!}
    {!! Form::text('director', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Release Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('release_date', 'Release Date:') !!}
    {!! Form::text('release_date', null, ['class' => 'form-control','id'=>'release_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#release_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Duration Minutes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration_minutes', 'Duration Minutes:') !!}
    {!! Form::number('duration_minutes', null, ['class' => 'form-control']) !!}
</div>