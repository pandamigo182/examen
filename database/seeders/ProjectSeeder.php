<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'nombre_proyecto' => 'Sistema de Gestión de Inventario',
                'fuente_fondos' => 'Inversión Interna',
                'monto_planificado' => 75000.00,
                'monto_patrocinado' => 50000.00,
                'monto_fondos_propios' => 25000.00,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonths(6),
                'project_manager' => 'Ana Martínez',
                'department' => 'Tecnología',
                'status' => 'En Progreso',
                'description' => 'Implementación de un sistema automatizado para control de inventario'
            ],
            [
                'nombre_proyecto' => 'Expansión de Sucursales',
                'fuente_fondos' => 'Financiamiento Bancario',
                'monto_planificado' => 150000.00,
                'monto_patrocinado' => 100000.00,
                'monto_fondos_propios' => 50000.00,
                'start_date' => Carbon::now()->addMonth(),
                'end_date' => Carbon::now()->addYear(),
                'project_manager' => 'Carlos Ruiz',
                'department' => 'Operaciones',
                'status' => 'Planificado',
                'description' => 'Apertura de tres nuevas sucursales en ciudades estratégicas'
            ],
            [
                'nombre_proyecto' => 'Programa de Capacitación Digital',
                'fuente_fondos' => 'Fondos Gubernamentales',
                'monto_planificado' => 45000.00,
                'monto_patrocinado' => 35000.00,
                'monto_fondos_propios' => 10000.00,
                'start_date' => Carbon::now()->subMonths(2),
                'end_date' => Carbon::now()->addMonths(4),
                'project_manager' => 'Laura Sánchez',
                'department' => 'Recursos Humanos',
                'status' => 'En Progreso',
                'description' => 'Programa de capacitación en herramientas digitales para empleados'
            ],
            [
                'nombre_proyecto' => 'Modernización de Infraestructura TI',
                'fuente_fondos' => 'Inversión Mixta',
                'monto_planificado' => 200000.00,
                'monto_patrocinado' => 150000.00,
                'monto_fondos_propios' => 50000.00,
                'start_date' => Carbon::now()->subMonths(6),
                'end_date' => Carbon::now()->subMonth(),
                'project_manager' => 'Miguel Torres',
                'department' => 'TI',
                'status' => 'Completado',
                'description' => 'Actualización de servidores y equipos de red'
            ],
            [
                'nombre_proyecto' => 'Campaña de Marketing Digital',
                'fuente_fondos' => 'Fondos Propios',
                'monto_planificado' => 60000.00,
                'monto_patrocinado' => 0.00,
                'monto_fondos_propios' => 60000.00,
                'start_date' => Carbon::now()->addMonths(1),
                'end_date' => Carbon::now()->addMonths(4),
                'project_manager' => 'Patricia López',
                'department' => 'Marketing',
                'status' => 'Planificado',
                'description' => 'Implementación de estrategia de marketing en redes sociales'
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}