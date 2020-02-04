@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">Manage Announcements</h1>
                @can('manage-announcements')
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-form">Create new announcement</button>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

<div class="container">

<div class="row">
    <div class="col-md-12">
    @include('layouts.partials.alert')
        <div class="card">
            <div class="card-body">
                <table class="table table-stripped table-inverse">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Announcement</th>
                            <th>Exipiry</th>
                            <th>Published status</th>
                            <th>Action(s)</th>
                        </tr>
                    </thead>
                    <thead>
                        @foreach($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->id }}</td>
                            <td>{{ $announcement->announcement }}</td>
                            <td>{{ $announcement->expiry }}</th>
                            <td>{{ $announcement->active ? 'Published' : 'In Drafts'}}</td>
                            <td>@if($announcement->active) <a href='?unpublish&id={{ $announcement->id }}' class="btn btn-warning btn-sm">Unpublish</a> @else <a href='?publish&id={{ $announcement->id }}' class="btn btn-danger btn-sm">Publish</a>  @endif
                                <a href='?delete&id={{ $announcement->id }}' class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
            <div class="irs-pagination">
            {{ $announcements->links() }}
            </div>
        </div>
    </div>
</div>

</div>


<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-header">
                    <h4>Create a New Folder</h4>
                </div>
                <div class="card-body px-lg-3">
                    <form role="form" action="{{ route('announcement.post.new') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" name="announcement" placeholder="Enter announcement"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <input class="form-control datepicker" autocomplete="off" name="expiry" required placeholder="Expiry Date" type="text">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-block">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
