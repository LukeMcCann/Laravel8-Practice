<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/users');
});

// Old Laravel 7 Syntax
// Route::get('/users', 'Users@index');

/**
 *   Laravel 8 Syntax
 * 
 *   As of Laravel 8 the default namespacing for routes has been removed.
 *   the previous method relies on this default namespacing to resolve the path
 *   from routes in web.php,
 * 
 *   Up until Laravel 7 the RouteServiceProvider created this namespace as such:
 * 
 *              protected $namespace = 'App\Http\Controllers';
 *  
 *              Route::middleware('web')
 *                      ->namespace($this->namespace)
 *                      ->group(base_path('routes/web.php));
 * 
 *   What this did was to load all of the routes in routes/web.php using the web middleware 
 *   within the App\Http\Controllers namespace. This, in turn, meant whenever you declared 
 *   a route using the string-syntax, Laravel would look for that controller in the 
 *   App\Http\Controllers folder:
 * 
 *   In Laravel 8 the $namespace variable was removed and the route declaration changed to:
 *              
 *             Route::middleware('web')
 *                  ->group(base_path('routes/web.php'));
 * 
 *   While Laravel is still looking for routes in web.php and using the middleware it is no longer
 *   having the anmespace applied. This means that when you delcare routes in laravel 8 the 
 *   string-syntax, Laravel isn't going to look for the controller in the correct folder (App\Http\Controllers)
 */


/**
 *  Resolution 1: 
 * 
 *  Manually add the namespace back
 *  Enter your RouteServiceProvider.php add add the namespace as such:
 * 
  
    protected $namespace = 'App\Http\Controllers'; // Add this line

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace) // Add this line
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace) // Add this line
                ->group(base_path('routes/web.php'));
        });
    }

 */

 /**
  *  Resolution 2: 
  *
  *  Use the full namespace in your route files when using string-syntax.
  *  This is as simple as using your full route path when entering your controller
  *  in the route definition: 
  *  
  *         Route::get('/posts', 'App\Http\Controllers\Posts');
  */

  /**
   *   Resolution 3: 
   * 
   *   The recomended resolution is to specify the class and method as an array.
   * 
   *   Note: Remember to import your class at the top: use path\to\controller
   */
Route::get('/users', [Users::class, 'index']);