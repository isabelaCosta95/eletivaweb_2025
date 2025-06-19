<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Movimentação de Paletes</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 6px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Relatório de Movimentação de Paletes</h2>
    <p><strong>Período:</strong> {{ $periodo }}</p>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Palete</th>
                <th>Tipo</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td>{{ $item['data'] }}</td>
                <td>{{ $item['palete'] }}</td>
                <td>{{ $item['tipo'] }}</td>
                <td>{{ $item['quantidade'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 