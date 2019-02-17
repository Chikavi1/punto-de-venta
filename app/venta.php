<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public function scopeSearch($query,$fechaInicio,$fechaFinal){
    	//return $query->whereBetween('created_at', [$fechaInicio, $fechaFinal])->get();
    	return $query->whereBetween('created_at',array(strtotime($fechaInicio),strtotime($fechaFinal)))->get();
    }
}
