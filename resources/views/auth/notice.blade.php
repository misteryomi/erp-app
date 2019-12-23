@extends('layouts.auth')

@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
              <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">

                    {{ $message }}

                </div>
              </div>
            </div>
          </div>
      </div>
@endsection
