<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * La clave primaria de la tabla.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indica si la clave primaria es autoincremental.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indica si las marcas de tiempo están habilitadas (created_at, updated_at).
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
    ];

    /**
     * Atributos que deben ser ocultos para arrays y JSON.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
