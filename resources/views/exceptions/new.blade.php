@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
        <h1>Raise a new Exception</h1>
        <br/>
        @include('layouts.partials.alert')

            <div class="card">
                <div class="card-body">
                <div class="item-wrapper">
                    <form id="create-ticket" action="{{ route('exceptions.post.new') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="unit">Select Processor</label>
                            <select class="form-control select2" name="assigned_to" id="assigned_to">
                                    <option value="">Select Option</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="priority">Select Team Lead (optional)</label>
                            <select class="form-control select2" name="team_lead_id" id="team_lead_id">
                                    <option value="">Select Option</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="priority">Select Supervisor</label>
                        <select class="form-control select2" name="hod_id" id="hod_id">
                                <option value="">Select Option</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <p class="invalid-feedback" id="hod_id"></p>
                    </div>
                    <div class="form-group">
                        <label for="title">Subject</label>
                        <input type="text" class="form-control" placeholder="Title"name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Log Exception</label>
                        <textarea rows="10" placeholder="Enter your message" name="message" name="message" class="form-control" id="message"></textarea>
                        <p class="invalid-feedback" id="message"></p>
                    </div>

                    <div class="form-group">
                        <input type="file" name="attachment" id="attachment">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                            Submit Exception</button>
                </form>

                </div>
                </div>
            </div>

    </div>
@endsection
@section('scripts')
<script>
    $('.select2').select2();
</script>
@endsection
