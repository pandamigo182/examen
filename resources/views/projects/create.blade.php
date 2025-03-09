@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Crear Nuevo Proyecto</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_proyecto" class="form-label">Nombre del Proyecto</label>
                                    <input type="text" class="form-control @error('nombre_proyecto') is-invalid @enderror" id="nombre_proyecto" name="nombre_proyecto" value="{{ old('nombre_proyecto') }}" required>
                                    @error('nombre_proyecto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fuente_fondos" class="form-label">Fuente de Fondos</label>
                                    <input type="text" class="form-control @error('fuente_fondos') is-invalid @enderror" id="fuente_fondos" name="fuente_fondos" value="{{ old('fuente_fondos') }}" required>
                                    @error('fuente_fondos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="monto_planificado" class="form-label">Monto Planificado</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control @error('monto_planificado') is-invalid @enderror" id="monto_planificado" name="monto_planificado" value="{{ old('monto_planificado') }}" required>
                                    </div>
                                    @error('monto_planificado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="monto_patrocinado" class="form-label">Monto Patrocinado</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control @error('monto_patrocinado') is-invalid @enderror" id="monto_patrocinado" name="monto_patrocinado" value="{{ old('monto_patrocinado') }}" required>
                                    </div>
                                    @error('monto_patrocinado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="monto_fondos_propios" class="form-label">Fondos Propios</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control @error('monto_fondos_propios') is-invalid @enderror" id="monto_fondos_propios" name="monto_fondos_propios" value="{{ old('monto_fondos_propios') }}" required>
                                    </div>
                                    @error('monto_fondos_propios')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Fecha de Inicio</label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="end_date" class="form-label">Fecha de Fin</label>
                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
                                    @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_manager" class="form-label">Gerente de Proyecto</label>
                                    <input type="text" class="form-control @error('project_manager') is-invalid @enderror" id="project_manager" name="project_manager" value="{{ old('project_manager') }}" required>
                                    @error('project_manager')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department" class="form-label">Departamento</label>
                                    <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department" value="{{ old('department') }}" required>
                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status" class="form-label">Estado</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Seleccione un estado</option>
                                        <option value="Planificado" {{ old('status') == 'Planificado' ? 'selected' : '' }}>Planificado</option>
                                        <option value="En Progreso" {{ old('status') == 'En Progreso' ? 'selected' : '' }}>En Progreso</option>
                                        <option value="Completado" {{ old('status') == 'Completado' ? 'selected' : '' }}>Completado</option>
                                        <option value="Cancelado" {{ old('status') == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary me-2">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Crear Proyecto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection