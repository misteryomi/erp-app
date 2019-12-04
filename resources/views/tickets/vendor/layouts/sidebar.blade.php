@php
$routes = [
    [ "route" => route('tickets.vendor.dashboard'), "name" => "Dashboard", "icon" => 'fa-home'],
    [ "route" => route('tickets.vendor.list'), "name" => "My tickets", "icon" => 'fa-list'],
    [ "route" => route('tickets.vendor.list', ['department']), "name" => "Department tickets", "icon" => 'fa-eye'],
    [ "route" => route('tickets.vendor.new'), "name" => "Create Ticket for Staff", "icon" => 'fa-edit'],
    [ "route" => route('tickets.vendor.password.reset'), "name" => "Reset Password", "icon" => 'fa-key'],
  ]
@endphp
@foreach($routes as $route)
<li class="nav-item">
    <a class="nav-link {{ (request()->fullUrl() === $route['route']) ? 'active' : '' }}" href="{{ $route['route'] }}">
        <i class="fa {{ $route['icon'] }} text-light"></i>
        <span class="nav-link-text">{{ $route['name'] }}</span>
    </a>
</li>

@endforeach
