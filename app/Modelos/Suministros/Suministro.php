<?php
 
namespace App\Modelos\Suministros;

use Illuminate\Database\Eloquent\Model;
 
class Suministro extends Model
{
    protected $table = "suministro";
    protected $primaryKey = "numerosuministro";
    public $timestamps = false; 

    public function cliente(){
    	return $this->belongsTo('App\Modelos\Clientes\Cliente','documentoidentidad');
    }

    public function calle(){
    	return $this->belongsTo('App\Modelos\Sectores\Calle','idcalle');
    }

    public function producto(){
    	return $this->belongsTo('App\Modelos\Suministros\Producto','idproducto');
    }

    public function tarifa(){
    	return $this->belongsTo('App\Modelos\Tarifas\Tarifa','idtarifa');
    }

    public function lectura(){
    	return $this->hasMany('App\Modelos\Lecturas\Lectura','numerosuministro');
    }

    public function cobroagua(){
    	return $this->hasMany('App\Modelos\Cuentas\CobroAgua','numerosuministro');
    }

}
