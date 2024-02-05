@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Evoluções</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="main-content">
    <h1>Lista de Evoluções</h1>
    <table>
        <thead>
            <tr>
                <th>ID Evolução</th>
                <th>Descrição</th>
                <th>ID Atendimento</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evolucoes as $evolucao)
                <tr>
                    <td>{{ $evolucao['id_evolucao'] }}</td>
                    <td>{{ $evolucao['descricao'] }}</td>
                    <td>{{ $evolucao['id_atendimento'] }}</td>
                    <td>{{ $evolucao['data'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
