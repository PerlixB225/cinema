<div class="table-responsive">
    <table class="table" id="movies-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Release Date</th>
                <th>Duration Minutes</th>
                <th colspan="4">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->duration_minutes }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('movies.show', [$movie->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('movies.edit', [$movie->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('movieratings.ratemovie', [$movie->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-check-circle"></i> 
                        </a>
                        {!! Form::open(['route' => ['movies.destroy', $movie->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
