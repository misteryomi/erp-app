@extends('layouts.app')


@section('content')
<div class="container mt-6">
    <h3>Notifications</h3>
    @include('notifications.list_template')

    <div class="irs_pagination">
        {{ $notifications->links() }}
    </div>
</div>
@endsection
