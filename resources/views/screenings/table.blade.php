<div class="table-responsive">
    <table class="table" id="screenings-table">
        <thead>
        <tr>
            <th>Screennumber</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($screenings as $screenings)
            <tr>
                <td>{{ $screenings->ScreenNumber }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['screenings.destroy', $screenings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('screenings.show', [$screenings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('screenings.edit', [$screenings->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
