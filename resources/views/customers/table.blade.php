<div class="table-responsive">
    <table class="table" id="customers-table">
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
        @foreach($customers as $customers)
            <tr>
                <td>{{ $customers->Firstname }}</td>
            <td>{{ $customers->Surname }}</td>
            <td>{{ $customers->Phone }}</td>
            <td>{{ $customers->Age }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customers->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customers.edit', [$customers->id]) }}"
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
