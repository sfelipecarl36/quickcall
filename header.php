<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta lang="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página Inicial</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
        <link rel="icon" type="image/png" href="img/icon.png">
        <script src="javascript.js"></script>
        <script src="Chart.min.js"></script>
        <script src="https://kit.fontawesome.com/6d4a42b5ee.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="darkbackground" onclick="fecharSideBar()"></div> <!--FUNDO ESCURO-->
        <input type="checkbox" id="checkdark"> <!--input checkbox darkmode-->
        <button id="topo">^</button> <!--Botão Voltar ao Topo-->


        <header id="header">
            <div class="caixabars flexcolumn" onclick="openSideBar()">
                <i class="fa-solid fa-bars bars"></i>
                <input type="checkbox" id="sidebarcheck">
            </div>
            <img src="img/logo.png" id="logo">
            <div class="headertitle flexrow">
            <!-- <i class="fa-solid fa-house-user fa"></i> -->
            <h1>Gerenciador de Chamados</h1>
            </div>
            <div class="headerside">
            <h6>Felipe Carlos</h6>
            <img src="img/perfil.png" id="fotoperfil">
            <a href="login.html"><i class="fa-solid fa-arrow-right-from-bracket bars" id="i-exit"></i></a>
            </div>
        </header>