<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saca extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'sacas';

    protected $fillable = ['ejemplar_id','usuario_id','fecha_devolucion','fecha_prestamo'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ejemplare()
    {
        return $this->hasOne('App\Models\Ejemplare', 'id', 'ejemplar_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    
}
