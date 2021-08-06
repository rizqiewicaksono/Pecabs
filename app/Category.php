<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Cagaralam;
use App\Category;

class Category extends Model
{
protected $fillable = ['name','slug'];
public function setSlugAttribute($value)
{
    $this->attributes['slug'] = Str::slug($value);
}
public function getNameAttribute($value)
{
    return ucfirst($value);
}
public function cagaralam()
{
    //JENIS RELASINYA ADALAH ONE TO MANY, YANG BERARTI KATEGORI INI BISA DIGUNAKAN OLEH BANYAK PRODUK
    return $this->hasMany(Cagaralam::class);
}
}
