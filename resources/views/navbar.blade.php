<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MEDLYNX')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div id="nav-bar">
                <div id="nav-header"><a id="nav-title" target="_blank"><img src="{{ asset('icone_medlynx.png') }}" alt="Logo MEDLYNX" width="60" height="50">Medlynx</a><hr/></div>

                <div id="nav-content">
                    <div class="nav-button"><a href="/home"><i class="fas fa-home"></i><span>Início</span></a></div>
                    <div class="nav-button"><a href="/atendimentos"><i class="fas fa-notes-medical"></i><span>Atendimentos</span></a></div>
                    <div class="nav-button"><a href="/evolucao"><i class="fas fa-chart-line"></i><span>Evoluções</span></a></div>
                    <div class="nav-button"><a href="/itens"><i class="fas fa-shopping-cart"></i><span>Itens</span></a></div>
                    <div class="nav-button"><a href="/lancamentos"><i class="fas fa-file-invoice-dollar"></i><span>Lançamentos</span></a></div>
                    <div class="nav-button"><a href="/pessoas"><i class="fas fa-users"></i><span>Pessoas</span></a></div>

                    <div id="nav-content-highlight"></div>
                </div>
            </div>
</body>
</html>
