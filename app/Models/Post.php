<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getRouteKeyName(){
        return 'slug';
    }

    //REALACION UNO A MUCHOS INVERSA
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    //REALACION MUCHOS A MUCHOS
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //RELACION UNO A UNO POLIMORFICA
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
