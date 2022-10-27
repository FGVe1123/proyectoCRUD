<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $fillable = ['existencia', 'nombre', 'modelo', 'precio']; 
        //$filable: elementos que el usuario puede manipular

    //protected $guarded = ['id'];
        //$guarded elementos que no puede manipular el usuario
    public $timestamps = false;

//Los modelos asumen que se van a guardar los timestamps por defecto
//Si en nuestro modelo no los necesitamos, se tiene que colocar en el modelo que no serán necesarios


}
