<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Extrato das Viagens</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 6px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Relatório de Extrato das Viagens</h2>
    <p><strong>Período:</strong> {{ $periodo }}</p>
    <table>
        <thead>
            <tr>
                <th>Viagem</th>
                <th>Motorista</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>KM</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td>{{ $item['viagem'] }}</td>
                <td>{{ $item['motorista'] }}</td>
                <td>{{ $item['origem'] }}</td>
                <td>{{ $item['destino'] }}</td>
                <td>{{ $item['km'] }}</td>
                <td>{{ $item['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 