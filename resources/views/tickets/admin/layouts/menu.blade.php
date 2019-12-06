<ul>
    @php
    $routes = [
        [ "route" => route('tickets.admin.dashboard'), "name" => "Dashboard", "icon" => 'mdi-gauge'],
        [ "route" => route('tickets.admin.tickets.list'), "name" => "Manage tickets", "icon" => 'mdi-view-list'],
        [ "route" => route('tickets.admin.categories.list'), "name" => "Manage Categories", "icon" => 'mdi-arrange-send-backward'],
        [ "route" => route('tickets.admin.users.list'), "name" => "Manage Vendors", "icon" => 'mdi-account-multiple-outline'],
        // [ "route" => route('admin.units.list'), "name" => "Manage Units", "icon" => 'mdi-arrange-bring-to-front'],
        // [ "route" => route('admin.departments.list'), "name" => "Manage Departments", "icon" => 'mdi-altimeter'],
    ]
    @endphp
    @foreach($routes as $route)
    <li {{ (request()->fullUrl() === $route['route']) ? 'class=active' : ''}}>
    <a href="{{ $route['route'] }}">
    <span class="link-title">{{ $route['name'] }}</span>
    <i class="mdi {{ $route['icon'] }} link-icon"></i>
    </a>
    </li>
    @endforeach
</ul>
