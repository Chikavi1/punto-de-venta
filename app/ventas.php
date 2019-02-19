<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $fillable = ['folio','cantidad','vendedor','nombre','precio','products_id'];
    public function scopeSearch($query,$title){
    	return $query->where('folio','LIKE',"%$title%")
    				->orwhere('vendedor','LIKE',"%$title%")->get();
    }

    public function scopeSearchFolio($query,$title){
    	return $query->where("folio","LIKE","%$title%")->get();
    }

    public function scopeTotalVentas(){
    	return $this->sum('precio');
    }

}
