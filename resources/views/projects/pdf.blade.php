<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reporte de Proyectos</title>
    <style>
        @page { margin: 60px 20px; size: landscape; }
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; page-break-inside: auto; }
        tr { page-break-inside: avoid; page-break-after: auto; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #f4f4f4; }
        h1 { color: #333; text-align: center; }
        .status { padding: 3px 8px; border-radius: 3px; }
        .Planificado { background-color: #ffc107; }
        .En_Progreso { background-color: #0d6efd; }
        .Completado { background-color: #d4edda; }
        .Cancelado { background-color: #dc3545; }
        .footer { position: fixed; bottom: -120px; left: 0; right: 0; text-align: center; padding: 10px; background: white; }
        .footer img { height: 100px; width: auto; margin: 10px auto; display: block; }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1 style="margin: 0;">Reporte de Proyectos</h1>
        <div style="text-align: right; font-size: 14px;">
            Fecha: {{ \Carbon\Carbon::now()->timezone('America/El_Salvador')->locale('es')->isoFormat('dddd D [de] MMMM [de] YYYY') }}<br>
            Hora: {{ \Carbon\Carbon::now()->timezone('America/El_Salvador')->format('h:i A') }}
        </div>
    </div>
    
    <table>
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
                    <td><span class="status {{ $project->status }}">{{ $project->status }}</span></td>
                    <td>{{ $project->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <img src="{{ public_path('img/logogob.svg') }}" alt="Logo Gobierno de El Salvador">
        <p>&copy; {{ date('Y') }} Gestor de Proyectos</p>
    </div>
</body>
</html>