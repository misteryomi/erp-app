    <form action="" method="get">        
            <div class="form-group row">
                <input type="hidden" name="filter" value="true" />
                <div class="col">
                    <select name="by" id="" class="form-control">
                        <option>All Users</option>
                        <option {{ request()->by == 'A-Z' ? 'selected' : '' }}>A-Z</option>
                        <option {{ request()->by == 'Z-A' ? 'selected' : '' }}>Z-A</option>
                        <option {{ request()->by == 'Newest' ? 'selected' : '' }}>Newest</option>
                        <option {{ request()->by == 'Oldest' ? 'selected' : '' }}>Oldest</option>
                        <option {{ request()->by == 'Highest Assigned Tickets' ? 'selected' : '' }}>Highest Assigned Tickets</option>
                        <option {{ request()->by == 'Lowest Assigned Tickets' ? 'selected' : '' }}>Lowest Assigned Tickets</option>
                    </select>
                </div>
                @if(isset($departments))    
                <div class="col">
                    <select name="department" id="" class="form-control">
                        <option value="">All Departments</option>
                        @foreach($departments as $department)
                        <option {{ request()->department == $department->name ? 'selected' : '' }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Search by name" value="{{ request()->name }}" />
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-sm">Filter Users</button>
                </div>
            </div>
        </form>
