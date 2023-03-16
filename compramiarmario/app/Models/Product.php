<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const BORRADOR = 1;
    CONST PUBLICADO = 2;
    protected $guarded = ['id', 'created_at', 'updated_ad'];

    //uno a muchos
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //uno a muchos inversa

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relacion mucho a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //relacion uno a muchos polimçorfica
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
