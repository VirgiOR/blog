<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   use HasFactory;

    protected $fillable = ['title','slug','categoria','content'];

    
    //protected $table = 'posts';
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }
    

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value); //filtro adicional que controle cómo se guardan los datos

            }, get: function($value){
                return ucfirst($value); //filtro adicional que controle cómo se muestran los datos
            }
        );
    }

    /*public function getRouteKeyName()
    {
        return 'slug'; //para que laravel busque por slug en vez de id
    }*/
}
