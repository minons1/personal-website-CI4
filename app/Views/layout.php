<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Using Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- CSS -->
    <?= $this->renderSection('css') ?>

    <!-- JS -->
    <?= $this->renderSection('js') ?>

    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/aec7d4e4dc.js"></script>

    <!-- Roboto font (Roboto Mono) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <title>
        <?= $this->renderSection('title') ?>
    </title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top flex-column">
        <div class="d-flex">
            <a class="navbar-brand mx-ms-auto" href="/">
                <img src="/img/icon.webp" width="30" height="40" class="d-inline-block align-top">
                Sal Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hometown">Hometown</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/food">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tourist">Tourist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <?= $this->renderSection('content') ?>
    
    <!-- Footer -->
    <div class="container-fluid contact-me">
        <div class="row py-5 align-items-center text-white text-center mx-auto">
            <div class="col-3">
                <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y')?> salim bin usman</p>
            </div>
            <div class="col-6">
                <h1><i class="fa fa-heart" aria-hidden="true"></i></h1>
            </div>
            <div class="col-3">
                <a href="https://instagram.com/slm_006"><i class="fa fa-instagram fa-2x"
                        aria-hidden="true"></i></a>&nbsp;
                <a href="https://twitter.com/_salim2018_"><i class="fa fa-twitter fa-2x"
                        aria-hidden="true"></i></a>&nbsp;
                <a href="https://www.linkedin.com/in/salimbinusman/"><i class="fa fa-linkedin fa-2x"
                        aria-hidden="true"></i></a>&nbsp;
                <a href="https://github.com/minons1"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

</body>


</html>