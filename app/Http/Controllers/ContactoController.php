<?php

namespace App\Http\Controllers;

class ContactoController extends Controller
{
    public function store(){

        // esto es para hacer la validacion de los cmpos en el formulario 
        request()->validate([  //"VALIDATE " como primer parametro recibe el nombre del campo y las reglas de validacion 
            'Nombre' => 'required',
            'Correo' => 'required|email',
            'Asunto' => 'required',
            'contenido'=> 'min:10'
        ],

        [   
            //como segundo parametro puede recibir alguna edicion de la regla
            'Nombre.required' =>'Ingresa un nombre',
            //estamos editando la regla required en el campo NOMBRE y mostrara el mensaje =>
        ]);

        return "Los datos se enviaron";
    }
}
