    <form action="" method="get">
            <div class="form-group row">
                <input type="hidden" name="sort" value="true" />
                <div class="col-md-2">
                    <select name="status" id="" class="form-control">
                        <option>All</option>
                        @foreach($statuses as $status)
                        <option {{ request()->status == $status->name ? 'selected' : '' }}>{{ $status->name }}</option>
                        @endforeach
                        <option {{ request()->status == 'Unapproved' ? 'selected' : '' }}>Unapproved</option>
                        <option {{ request()->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="by" id="" class="form-control" value="{{ request()->by }}">
                        <option {{ request()->status == 'Newest' ? 'selected' : '' }}>Newest</option>
                        <option {{ request()->status == 'Oldest' ? 'selected' : '' }}>Oldest</option>
                    </select>
                </div>
                <div class="col">
                    <div id="reportrange" class="form-control">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                    <input type="hidden" id="date_from" name="from" />
                    <input type="hidden" id="date_to" name="to" />
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary btn-sm">Filter Tickets</button>
                </div>
            </div>
        </form>
