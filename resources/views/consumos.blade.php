@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Itens Mais Consumidos</title>
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
    <h1>Lista de Itens Mais Consumidos</h1>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consumos as $consumo)
                <tr>
                    <td>{{ $consumo['descricao'] }}</td>
                    <td>{{ $consumo['quantidade'] }}</td>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
