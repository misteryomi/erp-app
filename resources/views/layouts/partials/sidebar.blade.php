
   <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark bg-default">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse">
          <!-- Nav items -->
          <ul class="navbar-nav">

            @if(Auth::guard('vendor')->check())
                @include('tickets.vendor.layouts.sidebar')
            @else
            @php $routes = \App\Menu::where('is_parent', 1)->orderBy('parent_order')->get(); @endphp
            @foreach ($routes as $route)
              @if($route->canViewRoute())
                <li class="nav-item">
                    <a class="nav-link {{ $route->isActivePage() ? 'active' : '' }}" @if($route->hasChildren()) href="#navbar-submenu-{{ $route->id }}" data-toggle="collapse" role="button" aria-expanded="{{ $route->isActivePage() ? 'true' : 'false' }}" aria-controls="#navbar-submenu-{{ $route->id }}" @else href="{{ $route->route ? route($route->route) : $route->url }}" @endif @if($route->is_external) target="_blank" @endif>
                        <i class="{{ $route->icon ? $route->icon : 'fa fa-home' }} {{ $route->isActivePage() ? 'text-default' : 'text-light' }}"></i>
                        <span class="nav-link-text">{{ $route->title }}</span>
                    </a>
                </li>
                @if($route->hasChildren())
                    <div class="collapse {{ $route->isActivePage() ? 'show' : '' }}" id="navbar-submenu-{{ $route->id }}">
                        <ul class="nav nav-sm flex-column">
                            @foreach($route->children() as $sub_route)
                                @if($sub_route->canViewRoute())
                                <li class="nav-item">
                                    <a href="{{ $sub_route->route ? route($sub_route->route) : $sub_route->url }}" class="nav-link">{{ $sub_route->title }}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif
              @endif
            @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
