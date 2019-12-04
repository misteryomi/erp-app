<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {


        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(function() {
                require base_path('routes/web.php'); //Laravel default

                $this->subRoutes(); //all modules' routes
             });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    /**
     * Load all routes in the /routes/subroutes path
     */
    protected function subRoutes() {
        $path = 'routes/subroutes';
        $sub_routes_dir = base_path($path);
        $sub_routes = scandir($sub_routes_dir);

        array_map(function ($route) use ($path) {
            if(!in_array($route, ['.', '..'])) {
               require base_path($path.'/'.$route);
            }
        }, $sub_routes);
    }
}
