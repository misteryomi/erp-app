      <div class="row">
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <a class="text-dark" href="{{ route('exceptions.list') }}">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['all'] }}</strong></p>
              </div>
              <p class="text-black">All</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <a class="text-dark" href="{{ route('exceptions.list', 'pending') }}">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['pending'] }}</strong></p>
              </div>
              <p class="text-black">Pending</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <a class="text-dark" href="{{ route('exceptions.list', 'closed') }}">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['closed'] }}</strong></p>
              </div>
              <p class="text-black">Closed</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 equel-grid">
          <div class="card">
            <div class="card-body text-gray">
              <a class="text-dark" href="{{ route('exceptions.list', 'supervisor') }}">
              <div class="d-flex justify-content-between">
                <p><strong>{{ $stats['supervisor'] }}</strong></p>
              </div>
              <p class="text-black">Supervisor Exceptions</p>
              </a>
            </div>
          </div>
        </div>
      </div>
