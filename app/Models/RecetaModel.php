<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaModel extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='recetas';
    protected $fillable = [
        'titulo',
        'descripcion',
        'instrucciones',
        'tipoAlimentoId',

    ];

    public function categoriaModel(){
        return $this->belongsTo(CategoriaModel::class, 'tipoAlimentoId');

    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'edo',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tipoAlimentoId' => 'int',
            'edo' => 'active',
        ];
    }
}
