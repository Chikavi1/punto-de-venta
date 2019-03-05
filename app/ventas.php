<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $fillable = ['folio','cantidad','vendedor','nombre','mesa','status','precio','products_id'];
    protected $table = 'ventas';
    
    public function products(){
        return $this->hasMany('App\Products');
    }



    public function scopeSearch($query,$title){
    	return $query->where('folio','LIKE',"%$title%")
    				->orwhere('vendedor','LIKE',"%$title%")->get();
    }

    public function scopeSearchFolio($query,$title){
    	return $query->where("folio","like","%$title%")->get();
    }

    public function scopeTotalVentas(){
    	return $this->sum('precio');
    }

    public function scopeBuscarCategoria($query,$category){
        return $query->where('nombre','LIKE',"%$category%")->get();
    }
     public function scopeBuscarMesa($query,$mesa){
        return $query->where('mesa','LIKE',"%$mesa%")->get();
    }

     public function scopeDeleteAll($query,$folio){
        return $query->where('folio','LIKE',"%$folio%")->delete();
    }
}
