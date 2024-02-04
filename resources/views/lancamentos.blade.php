<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lançamentos</title>
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
    <h1>Lista de Lancamentos</h1>
    <table>
        <thead>
            <tr>
                <th>ID de Lançamento</th>
                <th>ID de Atendimento</th>
                <th>ID do Item</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lancamentos as $lancamento)
                <tr>
                    <td>{{ $lancamento['id_lancamento'] }}</td>
                    <td>{{ $lancamento['id_atendimento'] }}</td>
                    <td>{{ $lancamento['id_item'] }}</td>
                    <td>{{ $lancamento['quantidade'] }}</td>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
