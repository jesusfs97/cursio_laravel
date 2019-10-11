<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   
    protected $table = 'project';
    protected $fillable = ['titulo', 'descripcion', 'url' ];
    public function getRouteKeyName(){
        return 'url';
    }
}
