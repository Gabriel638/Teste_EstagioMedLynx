<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <!-- Adicione os estilos ou scripts necessários aqui -->
</head>
<body>
    <h1>Relatório</h1>

    <!-- Exiba os dados do relatório conforme necessário -->
    @foreach ($relatorioData as $item)
        <p>{{ $item['campo1'] }}: {{ $item['campo2'] }}</p>
        <!-- Adicione outros campos conforme necessário -->
    @endforeach
</body>
</html>
