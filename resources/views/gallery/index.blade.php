@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">Gallery</h1>
                @role('super-admin')
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-form">Create a new Folder</button>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

    <div id="irs_gallery_folders"></div>


<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-header">
                    <h4>Create a New Folder</h4>
                </div>
                <div class="card-body px-lg-3">
                    <form role="form" action="{{ route('gallery.folder.post.new') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <input class="form-control" name="name" required placeholder="Folder Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-block">Create Folder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
