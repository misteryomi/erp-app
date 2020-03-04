@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light"><a href="{{ route('gallery.list') }}"><i class="fa fa-camera"></i> Gallery</a> / {{ $folder->name }}</h1>
                @role('super-admin')
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-form">Add New Picture(s)</button>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

    <div id="irs_gallery_files" data-folderid="{{ $folder->id }}"></div>





<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-header">
                    <h4>Add New Picture(s)</h4>
                </div>
                <div class="card-body px-lg-3">
                    <form role="form" action="{{ route('gallery.pictures.post.new', ['folder' => $folder->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <input class="form-control" multiple type="file" name="pictures[]" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" name="caption" placeholder="Caption"></textarea>
                            </div>
                            <input type="hidden" name="folder_id" value="{{ $folder->id }}" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default btn-block">Upload picture(s)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

