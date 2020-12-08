p<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

---
# Changes in Laravel 8

You should read the upgrade documentation before moving from Laravel 7 to Laravel 8: [Click here](https://laravel.com/docs/8.x/upgrade).
### Routing

#### Web vs Api

You will likely notice in more recent versions of Laravel you have two routing files. In older versions of Laravel we only had <code>routes.php</code> to worry about whilst now if you look in the routes folder we have <code>api.php</code> and <code>web.php</code>.

Either file can be used for routing, the difference lies within the purpose. All routes defined in api.php will be prefixed with <code>'/api'</code>, this will use the auth and api middleware checking for an access token, creating some additional security by throttlinf API requests. 

Both files function the same, other than this prefix and middleware being applied. Use api.php when youu wish to send a statless request, or as the name suggests for the api. The web.php is for people accessing your application from the browser, whilst the api.php are the routes for those who just need the data from the app as key value pairs (or Json etc...).

##### Route/Controller Syntax

As of Laravel 8 the default namespacing for routes has been removed.
the previous method relies on this default namespacing to resolve the path
from routes in web.php,
 
Up until Laravel 7 the RouteServiceProvider created this namespace as such:
<code>
<pre>
               protected $namespace = 'App\Http\Controllers';
   
               Route::middleware('web')
                     ->namespace($this->namespace)
                     ->group(base_path('routes/web.php));
</pre>
</code>
What this did was to load all of the routes in routes/web.php using the web middleware within the App\Http\Controllers namespace. This, in turn, meant whenever you declared a route using the string-syntax, Laravel would look for that controller in the App\Http\Controllers folder:
 
 In Laravel 8 the $namespace variable was removed and the route declaration changed to:

<code>
<pre>      
              Route::middleware('web')
                   ->group(base_path('routes/web.php'));
</pre>
</code>

 While Laravel is still looking for routes in web.php and using the middleware it is no longer
 having the anmespace applied. This means that when you delcare routes in laravel 8 the 
 string-syntax, Laravel isn't going to look for the controller in the correct folder (App\Http\Controllers).


##### Laravel Components

Components

Components are what some refer to as includes.
These are view files which are split into specific reusable pieces. In Laravel 8
We can create these through: <code>php artisan make:component ComponentName</code>

This will create a components directory in your resources folder and a blade template
of the entered name, witha  second file being generated in App\View\Components as ComponentName.php

If we were to make a header component along with a footer component we would use this command to generate
the two necessary files. The generated PHP file in the view\components folder handles the rendering
of the components, to use these components we can simply refer to them with a prefix 'x-' in our
current views: x-header (self-closing tag) (see branch: practice/laravel-component).

---
## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## Repository

This repository is designed for usage as a practice repo. It contains examples of common Laravel tasks you may wish to perform, from simple routing to websockets. This library will grow over time, to see a specific example, simple check out the branch of interest, each branch will contain only relevant changes to the feature implemented in the branch title. Some branches contain basic projects for getting started in certain Laravel aspects.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
