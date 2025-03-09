<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class ProjectController extends Controller
{
    public function generatePDF()
    {
        $projects = Project::all();
        $pdf = PDF::loadView('projects.pdf', compact('projects'));
        return $pdf->download('reporte-proyectos.pdf');
    }
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre_proyecto' => 'required|string|max:255',
            'fuente_fondos' => 'required|string|max:255',
            'monto_planificado' => 'required|numeric|min:0',
            'monto_patrocinado' => 'required|numeric|min:0',
            'monto_fondos_propios' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'project_manager' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'status' => 'required|string|in:Planificado,En Progreso,Completado,Cancelado',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Por favor, corrija los errores en el formulario.');
        }

        Project::create($request->all());
        return redirect()->route('projects.index')
            ->with('success', 'El proyecto ha sido creado exitosamente.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'nombre_proyecto' => 'required|string|max:255',
            'fuente_fondos' => 'required|string|max:255',
            'monto_planificado' => 'required|numeric|min:0',
            'monto_patrocinado' => 'required|numeric|min:0',
            'monto_fondos_propios' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'project_manager' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'status' => 'required|string|in:Planificado,En Progreso,Completado,Cancelado',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Por favor, corrija los errores en el formulario.');
        }

        $project->update($request->all());
        return redirect()->route('projects.index')
            ->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success', 'Proyecto eliminado exitosamente.');
    }
}