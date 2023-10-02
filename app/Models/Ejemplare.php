<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplare extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'ejemplares';

    protected $fillable = ['codigo','localizacion'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sacas()
    {
        return $this->hasMany('App\Models\Saca', 'ejemplar_id', 'id');
    }
    
}
