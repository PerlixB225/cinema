<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
        <tr>
            <th>Movieid</th>
        <th>Customerid</th>
        <th>Screeningid</th>
        <th>Seatnumber</th>
        <th>Purchasedate</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $tickets)
            <tr>
                <td>{{ $tickets->MovieID }}</td>
            <td>{{ $tickets->CustomerID }}</td>
            <td>{{ $tickets->ScreeningID }}</td>
            <td>{{ $tickets->SeatNumber }}</td>
            <td>{{ $tickets->PurchaseDate }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tickets.destroy', $tickets->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tickets.show', [$tickets->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tickets.edit', [$tickets->id]) }}"
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
