<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/hometown_style.css">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Hometown
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-image" id="banner">
    <h2 class="mx-auto my-auto text-white">Home sweet home</h2>
</div>

<div class="container-fluid intro-section">
    <div class="row  pt-5 align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <p class="text-size: smaller;">Welcome to...</p>
                <h1><span class="text-danger">Suro</span>Boyo</h1>
                <p>"The City of<span class="text-danger"> Heroes</span>"</p>
                <p><span class="text-danger">Suro</span>boyo is the capital of the Indonesian Province of East Java and
                    the third-largest city in the country.</p>
                <p><span class="text-danger">Suro</span>boyo is well known as The City of<span class="text-danger">
                        Heroes</span> "kota pahlawan", there is a lot of stories tell about how brave the people of
                    surabayan "<span class="text-danger">Arek-arek Suroboyo</span>" fights againts Colonialism.</p>
            </div>
        </div>
        <div class="col-4 mx-auto text-center">
            <img src="img/surabaya.webp" class="img-default">
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid intro-section">
    <div class="row  pt-5 align-items-center ">
        <div class="col-2"></div>

        <div class="col-4 mx-auto text-center">
            <img src="img/bamburuncing.webp" class="img-default-2">
        </div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <h2>Best City in The World</h2>
                <p>Surabaya is one of the best city in the world. In 2019 surabaya get 16 local and international award
                    under leadership mayor Tri Risma Harini</p>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid city-hall">
    <div class="row pb-2 my-auto align-items-center ">
        <div class="col mx-auto text-center text-white">
            <h1>City Hall</h1>
        </div>
    </div>
    <div class="row pb-4 align-items-center">
        <div class="col mx-auto text-center">
            <a href="https://en.wikipedia.org/wiki/Surabaya"><img src="img/cityhall.webp" style="width: 75%;"></a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>