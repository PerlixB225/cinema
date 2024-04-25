<div class="table-responsive">
    <table class="table" id="movies-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Genre</th>
        <th>Releasedate</th>
        <th>Duration</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movies)
            <tr>
                <td>{{ $movies->Title }}</td>
            <td>{{ $movies->Genre }}</td>
            <td>{{ $movies->ReleaseDate }}</td>
            <td>{{ $movies->Duration }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['movies.destroy', $movies->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('movies.show', [$movies->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('movies.edit', [$movies->id]) }}"
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
