<?php

//Página de exibição dos vídeos

require_once '../../db_connect.php';

$sql = "SELECT * FROM videos ORDER BY added_at DESC"; //Selecionando todos vídeos em ordem decrescente
$result = $con->query($sql);
$videos = $result->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../global-style/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <title>ADRB</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light px-5">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../assets/images/Logo.png" width="130" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Ínicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../our-faith/index.html">Nossa fé</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Departamentos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../departamentos/maranata/index.html">Maranata</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/louvores-ao-rei/index.html">Louvores ao
                                Rei</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/canticos-pela-fe/index.html">Cânticos pela
                                fé</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/cordeirinhos-de-cristo/index.html">Cordeirinhos de Cristo</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/coral-unidos-por-cristo/index.html">Coral unidos por
                                Cristo</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/escola-biblica-dominical/index.html">Escola
                                bíblica dominical</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../departamentos/missoes/index.html">Missões</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../albums/index.php">Fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../videos/index.html">Vídeos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="container">

        <h1>Vídeos</h1>

        <main class="videos">
            <?php
            foreach ($videos as $video) :
            ?>

                <div class="container-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="<?= $video['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            <?php
            endforeach;
            ?>
            
        </main>

    </section>

    <footer>
        <div class="container pb-5">
            <div class="row-footer-1">
                <div class="col-footer">
                    <div>
                        <h4>Redes sociais</h4>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/adrboficial/" target="_blank">Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/adrboficial/" target="_blank">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCpWLuhPDpIWKq3o-BMF2oOw" target="_blank">YouTube</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Telefone</h4>
                        <ul>
                            <li>
                                <span>(21) 2734 1030</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-footer">
                    <h4>Onde estamos</h4>
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7360.841961887423!2d-42.63993367816838!3d-22.71258898974301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99da25f15a9fa5%3A0x88453a10f7bbc692!2sAssembleia%20De%20Deus!5e0!3m2!1spt-BR!2sbr!4v1582245516224!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="row-footer-2">
                <span>Copyright © 2020 Assembleia de Deus em Rio Bonito - Todos os direitos reservados</span>
                <small><a href="/adm">Administrativo</a></small>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>