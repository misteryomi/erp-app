
    <div class="table-responsive">
      <table class="table table-hover table-sm">
            <thead>
                <tr class="solid-header">
                    <th>#</th>
                    <th>Ticket ID</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Assigned To</th>
                    <th>Unit</th>
                    <th>Created at</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($tickets->count() < 1)
                    <tr><td colspan="8" class="text-center">No record found.</td></tr>
                @else
                @php $count = method_exists($tickets, 'links') ? 1 : 0; @endphp
                @foreach($tickets as $ticket)
                    @php $count = method_exists($tickets, 'links') ? ($tickets ->currentpage()-1) * $tickets ->perpage() + $loop->index + 1 : $count + 1; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td><a href="{{ route('tickets.show', ['ticket' => $ticket->ticket_id]) }}">{{ $ticket->ticket_id }}</a></td>
                    <td><a href="{{ route('tickets.show', ['ticket' => $ticket->ticket_id]) }}"><strong>{{ $ticket->title }}</strong></a>
                            @if(!$ticket->is_approved)
                                <span><span class="status-indicator rounded-indicator small bg-danger"></span><small>Pending approval</small></span>                    
                            @endif
                        </td>
                        <td>{{ $ticket->user->name }}</td>
                        <td>{{ $ticket->assignedTo ? $ticket->assignedTo->name : '-'}}</td>
                        <td>{{ $ticket->unit->name }}</td>
                        <td>{{ $ticket->created_at->diffForHumans() }}</td>
                        <td>
                            {!! $ticket->statusBadge() !!}
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    @if(method_exists($tickets, 'links'))
    <div class="irs_pagination">
    {{ $tickets->links() }}
    </div>
    @else
    <a class="border-top px-3 py-2 d-block text-gray" href="{{ $viewMoreRoute }}">
        <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All</small>
    </a>    
    @endif
