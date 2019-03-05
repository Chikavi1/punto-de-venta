<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['codigoBarra','imagen','cantidad','categoria','nombre','descripcion','costo','precio'];
    protected $table = "products";
    
    public function scopegetTotalCosto(){
    	return $this->sum("costo");
    }
    public function scopegetTotalPrecio(){
    	return $this->sum("precio");
    }
    public function venta(){
    	return $this->belongsTo('App\Venta');
    }
    public function scopegetTotalCantidad(){
        return $this->sum('cantidad');
    }

   

}

