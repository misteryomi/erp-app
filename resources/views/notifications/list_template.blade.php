<div class="list-group list-group-flush">
    @foreach($notifications as $notification)
    <a href="{{ route('notification.show', ['notification' => $notification->id]) }}" class="list-group-item list-group-item-action">
      <div class="row align-items-center">
        <div class="col mr-2 ml--2">
          <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="text-sm mb-0">{{ $notification->message }}</p>
              @if($notification->read_at == NULL)
              <span class="badge badge-danger">Unread</span>
              @endif
            </div>
            <div class="text-right text-muted">
              <small>{{ $notification->created_at->diffForHumans() }}</small>
            </div>
          </div>
        </div>
      </div>
    </a>
    @endforeach
  </div>
