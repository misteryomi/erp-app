
    <div class="table-responsive">
      <table class="table table-hover table-sm">
            <thead>
                <tr class="solid-header">
                    <th>#</th>
                    <th>Exception ID</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Assigned To</th>
                    <!--<th>Department</th>-->
                    <th>Created at</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($exceptions->count() < 1)
                    <tr><td colspan="8" class="text-center">No record found.</td></tr>
                @else
                @php $count = method_exists($exceptions, 'links') ? 1 : 0; @endphp
                @foreach($exceptions as $exception)
                    @php $count = method_exists($exceptions, 'links') ? ($exceptions ->currentpage()-1) * $exceptions ->perpage() + $loop->index + 1 : $count + 1; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td><a href="{{ route('exceptions.show', ['exception' => $exception->exception_id, request()->has('supervisor') ? 'supervisor' : '' ]) }}">{{ $exception->exception_id }}</a></td>
                        <td><a href="{{ route('exceptions.show', ['exception' => $exception->exception_id, request()->has('supervisor') ? 'supervisor' : '' ]) }}"><strong>{{ $exception->title }}</strong></a></td>
                        <td>{{ $exception->user->name }}</td>
                        <td>{{ $exception->assignedTo ? $exception->assignedTo->name : '-'}}</td>
                        <!--<td>{{ $exception->user->department }}</td>-->
                        <td>{{ $exception->created_at->diffForHumans() }}</td>
                        <td>
                            {!! $exception->statusBadge() !!}
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    

    @if(method_exists($exceptions, 'links'))
    <div class="irs_pagination">
    {{ $exceptions->links() }}
    </div>
    @else
    <a class="border-top px-3 py-2 d-block text-gray" href="{{ $viewMoreRoute }}">
        <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All</small>
    </a>    
    @endif
