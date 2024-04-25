<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::textarea('Title', null, ['class' => 'form-control']) !!}
</div>

<!-- Genre Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Genre', 'Genre:') !!}
    {!! Form::textarea('Genre', null, ['class' => 'form-control']) !!}
</div>

<!-- Releasedate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ReleaseDate', 'Releasedate:') !!}
    {!! Form::text('ReleaseDate', null, ['class' => 'form-control','id'=>'ReleaseDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#ReleaseDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Duration Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Duration', 'Duration:') !!}
    {!! Form::textarea('Duration', null, ['class' => 'form-control']) !!}
</div>