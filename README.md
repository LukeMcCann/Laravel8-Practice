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

 ##### Middleware

 ##### Global Middleware

Global middleware is applied to every route in the application. You can test this by
creating some middleware: <code> php artisan make:middleware MiddlewareName </code>
then echoing out a hello statement in the handle method of the middleware.

##### Route Middleware

Route middleware is applied to a single route at a time, this can be contorller via
permissions.
##### Group Middleware

Group middleware is applied to a defined Group (or otherwise known as a collection of routes).
This allows for fine control over collections of Routes and can also be addressed with permissions.
##### Http Client

Http Client is exactly what it says, Laravel's Http Client. 
Laravel uses Guzzle Http to make requests, the Http object can be used to make calls to external APIs, this may be useful for calling APIs from other projects, or possibly separating FE/BE functionality into an APP and API.

###### Http Request Methods

###### GET

The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.

###### HEAD

The HEAD method asks for a response identical to that of a GET request, but without the response body.

###### POST

The POST method is used to submit an entity to the specified resource, often causing a change in state or side effects on the server. Always creates a new resource.

###### PATCH

The PATCH method is used to apply partial modifications to a resource.

###### PUT

The PUT method replaces all current representations of the target resource with the request payload. Should be used to update resources.

###### DELETE

The DELETE method deletes the specified resource.

###### CONNECT

The CONNECT method establishes a tunnel to the server identified by the target resource.

###### OPTIONS

The OPTIONS method is used to describe the communication options for the target resource.

###### TRACE

The TRACE method performs a message loop-back test along the path to the target resource.

##### Laravel HTTP Spoofing

Psing PUT and DELTE requires the method_field to be specified in blade forms.
This will generate a hidden input field containing a spoofed value of 
the forms HTTP verb.

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
