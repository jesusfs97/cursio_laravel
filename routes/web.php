<?php

/*
|--------------------------------------------------------------------------
| RUTAS WEB
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|  TODAS LAS RUTAS QUE RETORNAS DEBEN ESTAR EN LA CARPETA "VIEWS"

    Si queremos definir una ruta que responda cuando queramos acceder a la raiz del sitio web
                             
        Route::get( ' / ' , function(){  -> esto es una funcion anonima <CLOSURE>
    definimos la URL ^
            
            return view(retoramos una vista) ;
        })
        
        
        
        
        Route::get('/', function () {
            return view('welcome');
        });
        
        route::get('bienvenido', function(){
            return "hola bienvenido";
        });
        
        // Esto es una funcion con parametro obligatorio
        route::get('saludo/{nombre}', function($nombre){
            return 'saludos'. $nombre; #si se intenta meter a la ruta mandara un error
        });
        
        
        
        //esto es una ruta con parametros y son opcinales con el signo ? para que la ruta por si sola no muestre un error
        route::get('fotos/{numero?}', function($numero =" sin numero"){ // este igual va a ser remplazada por ?
            return "estas en la galeria de fotos: " . $numero;
        }) ->where('numero','[0-9]+');
        
        route::get('contactame',function(){
            return view('vista');
        })->name('vist');
        // esto es para darle nombre a la ruta y asi se mostrara en la url
        
        route::get('contactos',function(){
            return 'contacto';
        });
        
        Route::resource('usuario', 'UserController'); 
    */
    // Route::post('/añadir-carrito', 'carroController@add')->name('añadir');
    // Route::get('/Carrito_de_compras', 'carroController@cart')->name('carrito.compra');
    // Route::post('/Limpiar_carrito', 'carroController@clear')->name('carrito.vaciar');
    // Route::get('/marca/{url}', 'HomeController@brands')->name('marcas');
    // Route::get('/categorias/{url}', 'HomeController@categories')->name('categorias');
    
Route::view('/', 'home')->name('home');
Route::get('/', 'ProyectController@menu')->name('home');

route::view('/contacto', 'contacto')->name('contacto');
route::post('contacto', 'ContactoController@store');

route::get('/Administrar' , 'ProyectController@index' )->name('Admin.index');

route::get('/Administrar/crear', 'ProyectController@create')->name('Admin.crear');

route::get('/Administrar/{proyect}/editar', 'ProyectController@edit')->name('Admin.editar');
route::patch('/Administrar/{proyect}', 'ProyectController@update')->name('Admin.actualizar');

route::post('/Administrar/crear', 'ProyectController@store')->name('Admin.guardar');

route::get('/Administrar/{Proyect}', 'ProyectController@show')->name('Admin.ver');
Route::delete('/Administrar/{proyect}', 'ProyectController@destroy') ->name('Admin.destruir');


route::view('/nosotros','nosotros')->name('nosotros');





Auth::routes();


