<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/style.css">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Jumbotron -->
<div class="card card-image" id="banner">
    <h2 class="mx-auto my-auto text-white">Welcome aboard, friends</h2>
</div>


<div class="container-fluid">
    <div class="row py-5 my-auto align-items-center ">
        <div class="col mx-auto text-center text-white">
            <div class="container text-left">
                <h1>Hi, my name is Salim Bin Usman</h1>
                <h3>what do you want to know more about me?</h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row  align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <h1>Who am I</h1>
                <a href="/profile"><button
                        class="btn btn-large text-white rounded-lg red-button">profile</button></a>
            </div>
        </div>
        <div class="col-4 mx-auto text-right">
            <img src="img/aboutme.webp" class="img-menu">
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row  align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 mx-auto text-left">
            <img src="img/surabaya.webp" class="img-menu">
        </div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-right text-white">
                <h1>Where do I live</h1>
                <a href="/hometown"><button
                        class="btn btn-large text-white rounded-lg yellow-button">hometown</button></a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row  align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <h1>What food do I eat</h1>
                <a href="/food"><button
                        class="btn btn-large text-white rounded-lg green-button">food</button></a>
            </div>
        </div>
        <div class="col-4 mx-auto text-right">
            <img src="img/food.webp" class="img-menu">
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 mx-auto text-left">
            <img src="img/Travel.webp" class="img-menu">
        </div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-right text-white">
                <h1>Where place do I go</h1>
                <a href="/tourist"><button
                        class="btn btn-large text-white rounded-lg blue-button">tourist</button></a>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container social-proof">
    <div class="row py-5 align-items-center text-white">
        <i class="fa fa-quote-left fa-1x fa-pull-left fa-border" aria-hidden="true"></i>
        <h3 style="font-style: italic; font-weight:lighter;">don't fear failure, be afraid of not having the chance
            you have the chance</h1>
            <p style="font-size:smaller">-Cruz Ramirez</p>
    </div>
</div>
<?= $this->endSection() ?>