<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
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
    <h1>Lista de Pessoas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>CEP</th>
                <th>Mãe</th>
                <th>Pai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa['id_pessoa'] }}</td>
                    <td>{{ $pessoa['nome'] }}</td>
                    <td>{{ $pessoa['cpf'] }}</td>
                    <td>{{ $pessoa['rg'] }}</td>
                    <td>{{ $pessoa['cep'] }}</td>
                    <td>{{ $pessoa['mae'] }}</td>
                    <td>{{ $pessoa['pai'] }}</td>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
