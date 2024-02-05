@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Itens</title>
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
    <h1>Lista de Itens</h1>

    <a href="/itensmaisconsumidos" class="btn">5 Itens mais Consumidos</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itens as $item)
                <tr>
                    <td>{{ $item['id_item'] }}</td>
                    <td>{{ $item['descricao'] }}</td>
                    <td>{{ $item['valor'] }}</td>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
