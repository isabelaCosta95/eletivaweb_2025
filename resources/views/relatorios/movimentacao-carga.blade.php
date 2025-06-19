<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Movimentação de Carga e Descarga</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 6px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Relatório de Movimentação de Carga e Descarga</h2>
    <p><strong>Período:</strong> {{ $periodo }}</p>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Carga</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td>{{ $item['data'] }}</td>
                <td>{{ $item['carga'] }}</td>
                <td>{{ $item['origem'] }}</td>
                <td>{{ $item['destino'] }}</td>
                <td>{{ $item['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 