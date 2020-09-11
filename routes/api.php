<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| 


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//http://localhost:7070/laravelApiAuth/public/api/auth


//Bloquear el acceso a la API solamente para usuarios registrados
/*
Al acceder a /rutasencilla ejecutará el middleware auth para comprobar si
 el usuario está logueado.

Route::get('/rutasencilla', 'FabricanteController@index')->middleware('auth');

# Si se trata de una ruta de tipo resource, debido a que una ruta resource 
no devuelve nada, sino que simplemente
# registra un montón de rutas, tendremos que hacerlo de la siguiente forma:

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::resource('fabricantes','FabricanteController');
});
 */
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        
        Route::get('/productos/{id}', 'ProductoController@show');



        /*comprobar si el usuario que hace la petición está identificado y tiene permisos
        *se pueden utilizar para, por ejemplo, inyectar cabeceras a las respuestas, hacer log de peticiones, protección para ataques, et
    
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
        
        */
    });
});
   
     //   Route::get('/productos/{id}', 'ProductoController@show');