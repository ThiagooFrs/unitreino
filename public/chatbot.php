<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>UniTreino - Plataforma de treinamento</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-success"><i class="fa fa-book me-3"></i>UniTreino</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">Sobre</a>
                <a href="courses.php" class="nav-item nav-link">Treinamentos</a>
            </div>
            <div>
        <?php
        if(isset($_SESSION['nome_usuario'])) {
            echo "Olá ".$_SESSION['nome_usuario']." <a href='../private/logout.php' class='nav-item btn btn-success'>SAIR</a>";
        } else {
            echo "<a href='login.php' class='btn btn-success py-4 px-lg-5 d-lg-block'>Entrar/Registrar<i class='fa fa-arrow-right ms-3'></i></a>";
        }
        ?>
    </div>   
    </nav>
    <!-- Navbar End -->

    <!-- Chatbot -->
    <div>
        <h1>Oi pipiu</h1>
        <p>Bota o chatbota</p>
    </div>
    <!-- Chatbot -->

    <!-- Rodapé começo -->
<div class="container-fluid bg-success text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Links Rápidos</h4>
                <a class="btn btn-link" href="">Sobre Nós</a>
                <a class="btn btn-link" href="">Contate-Nos</a>
                <a class="btn btn-link" href="">Política de Privacidade</a>
                <a class="btn btn-link" href="">Termos e Condições</a>
                <a class="btn btn-link" href="">Perguntas Frequentes e Ajuda</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contato</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Uberaba, Brasil</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 34 9 9999-9999</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>ajuda@unitreino.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Notícias</h4>
                <p>Fique por dentro das últimas notícias. </p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Seu email">
                    <button type="button" class="btn btn-success py-2 position-absolute top-0 end-0 mt-2 me-2">Inscrever-se</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rodapé Fim -->
</body>
</html>