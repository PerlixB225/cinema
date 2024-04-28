<div class="table-responsive">
    <table class="table" id="movieratings-table">
        <thead>
        <tr>
            <th>Rating</th>
        <th>Comment</th>
        <th>Movieid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movieratings as $movierating)
            <tr>
                <td>{{ $movierating->rating }}</td>
            <td>{{ $movierating->comment }}</td>
            <td>{{ $movierating->movieid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['movieratings.destroy', $movierating->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('movieratings.show', [$movierating->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('movieratings.edit', [$movierating->id]) }}"
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
