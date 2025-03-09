@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Lista de Proyectos</h2>
                    <div>
                        <a href="{{ route('projects.pdf') }}" class="btn btn-secondary me-2">Imprimir PDF</a>
                        <a href="{{ route('projects.create') }}" class="btn btn-primary">Nuevo Proyecto</a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre del Proyecto</th>
                                    <th>Fuente de Fondos</th>
                                    <th>Monto Planificado</th>
                                    <th>Monto Patrocinado</th>
                                    <th>Fondos Propios</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha de Fin</th>
                                    <th>Gerente de Proyecto</th>
                                    <th>Departamento</th>
                                    <th>Estado</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $project->nombre_proyecto }}</td>
                                        <td>{{ $project->fuente_fondos }}</td>
                                        <td>${{ number_format($project->monto_planificado, 2) }}</td>
                                        <td>${{ number_format($project->monto_patrocinado, 2) }}</td>
                                        <td>${{ number_format($project->monto_fondos_propios, 2) }}</td>
                                        <td>{{ $project->start_date->format('d/m/Y') }}</td>
                                        <td>{{ $project->end_date->format('d/m/Y') }}</td>
                                        <td>{{ $project->project_manager }}</td>
                                        <td>{{ $project->department }}</td>
                                        <td>
                                            <span class="badge bg-{{ $project->status === 'Completado' ? 'success' : ($project->status === 'En Progreso' ? 'primary' : ($project->status === 'Cancelado' ? 'danger' : 'warning')) }}">
                                                {{ $project->status }}
                                            </span>
                                        </td>
                                        <td>{{ Str::limit($project->description, 50) }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-primary">Editar</a>
                                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro que desea eliminar este proyecto?')">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection