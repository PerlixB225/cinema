<div class="table-responsive">
    <table class="table" id="members-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>Age</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($members as $members)
            <tr>
                <td>{{ $members->Firstname }}</td>
            <td>{{ $members->Surname }}</td>
            <td>{{ $members->Phone }}</td>
            <td>{{ $members->Age }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['members.destroy', $members->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('members.show', [$members->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('members.edit', [$members->id]) }}"
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
