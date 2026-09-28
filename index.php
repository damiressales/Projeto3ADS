<?php
require "config.php";

$base = "http://" . $_SERVER["SERVER_NAME"] . ":8080". $_SERVER["SCRIPT_NAME"];
//$base = "https://britoesteticaautomotiva.unaux.com/";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>Brito Estética Automotiva</title>

    <base href="<?= $base ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-custom-dark shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            BRITO <span class="brand-gold">ESTÉTICA</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicos">SERVIÇOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato">CONTATO</a>
                </li>
            </ul>

            <div class="d-flex">
                <a href="agendamento" class="btn-agendamento">
                    AGENDAMENTO
                </a>
            </div>
        </div>
    </div>
</nav>

    <main>
        <?php
        if (isset($_GET["param"])) {
            $p = explode("/", $_GET["param"]);
        }

        $page = $p[0] ?? "home";
        $pagina = "paginas/{$page}.php"; 

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer class="rodape-site">
            <div class="container-fluid">
                <div class="linha-rodape">

                    <div class="bloco-esquerdo">
                        <div class="logo-rodape">
                            <span class="logo-brancura">BRITO</span>
                            <span class="logo-azul">ESTÉTICA AUTOMOTIVA</span>
                        </div>
                        <p class="texto">
                            © 2026 — ESTÉTICA AUTOMOTIVA
                        </p>
                    </div>

                    <div class="bloco-direito">
                        <a href="mailto:contato@britoestetica.com.br" class="item-contato">contato@britoestetica.com.br</a>
                        <a href="tel:19981339017" class="item-contato">(19) 98133-9017</a>
                        <!--<a href="admin/" class="botao-admin">ADMIN</a>-->
                    </div>

                </div>
            </div>
        </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fslightbox.js"></script>
</body>
</html>