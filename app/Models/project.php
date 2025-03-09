<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_proyecto',
        'fuente_fondos',
        'monto_planificado',
        'monto_patrocinado',
        'monto_fondos_propios',
        'start_date',
        'end_date',
        'project_manager',
        'department',
        'status',
        'description'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'monto_planificado' => 'decimal:2',
        'monto_patrocinado' => 'decimal:2',
        'monto_fondos_propios' => 'decimal:2'
    ];
}