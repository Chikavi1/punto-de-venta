<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['codigoBarra','imagen','cantidad','categoria','nombre','descripcion','costo','precio'];

    public function scopegetTotalCosto(){
    	return $this->sum("costo");
    }
    public function scopegetTotalPrecio(){
    	return $this->sum("precio");
    }
}
