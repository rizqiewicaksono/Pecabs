<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Laporan;
use App\Category;

class Laporan extends Model
{
	public function getStatusLabelAttribute()
{
  //ADAPUN VALUENYA AKAN MENCETAK HTML BERDASARKAN VALUE DARI FIELD STATUS
  if ($this->status == 0) {
      return '<span class="label label-danger">Belum Terverifikasi</span>';
  }
  return '<span class="label label-success">Terverifikasi</span>';
}

public function category()
{
  return $this->belongsTo(Category::class);
}

public function user()
{
  return $this->belongsTo(User::class);
}

protected $guarded = [];

//SEDANGKAN INI ADALAH MUTATORS, PENJELASANNYA SAMA DENGAN ARTIKEL SEBELUMNYA
public function setSlugAttribute($value)
{
    $this->attributes['slug'] = Str::slug($value);
}
}
