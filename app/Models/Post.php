<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*
    ESTO ES NECESARIO SI QUEREMOS QUE NOS DEJE ACTUALIZAR DATOS DE LA BASE DE DATOS
    le indicamos que campos permitimos que se cambien

    */
    protected $fillable = ['title', 'body', 'image'];

    public function comments(){

        return $this->hasMany(Comment::class);
    }


}
