<div class="table-responsive">
    <table class="table" id="members-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Phone</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($members as $member)
            <tr>
                <td>{{ $member->firstname }}</td>
            <td>{{ $member->surname }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->phone }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('members.show', [$member->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('members.edit', [$member->id]) }}"
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
