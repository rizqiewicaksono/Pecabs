<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Cagaralam;
use App\Category;

class Cagaralam extends Model
{
  protected $dates = ['created_at'];

  public function getStatusLabelAttribute()
{
  //ADAPUN VALUENYA AKAN MENCETAK HTML BERDASARKAN VALUE DARI FIELD STATUS
  if ($this->status == 0) {
      return '<span class="badge badge-secondary">Draft</span>';
  }
  return '<span class="badge badge-success">Aktif</span>';
}

//FUNGSI YANG MENG-HANDLE RELASI KE TABLE CATEGORY
public function category()
{
  return $this->belongsTo(Category::class);
}

protected $guarded = [];


public function setSlugAttribute($value)
{
    $this->attributes['slug'] = Str::slug($value);
}

public function user()
{
	return $this->belongsTo(User::class);
}

public function image()
{
	return !$this->image ? asset('no-image.png') : $this->image;
}
}
