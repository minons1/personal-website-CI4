<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/food_style.css">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Food
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-image" id="banner">
            <h2 class="mx-auto my-auto text-white">Starving?</h2>
        </div>

        <div class="container-fluid">
            <div class="row py-5 text-white align-items-center">
                <div class="col-2"></div>
                <div class="col-4">
                    <h2>Now let's talk about food</h2>
                    <p>There is a lot kind of typical food in Surabaya. I will devide it into 4 type </p>
                </div>
                <div class="col-4">
                    <img src="/img/food.webp" class="img-food">
                </div>
                <div class="col-2"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row py-5 text-center text-danger">
                <div class="col-2"></div>
                <div class="col-8 border-bottom">
                    <h1><strong>Soup</strong></h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="container menu-section">
                    <div class="row py-5 align-items-center ">
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/rawon-1.webp">
                          <div class="card-body">
                            <h5 class="card-title">Rawon</h5>
                            <p class="card-text">Its distinctive black sauce with soft meat is a mainstay menu that is usually eaten by Surabaya residents and tourists who come to Surabaya.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/tahu_campur-1.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Tahu Campur</h5>
                            <p class="card-text">Made from beef, fried tofu, bean sprouts, watercress and yellow noodles. All these ingredients are cut into pieces and then poured with a soup</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/lontong_balap.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Lontong Balap</h5>
                            <p class="card-text">First local food. This famous food from the City of Heroes consists of rice cake, bean sprouts, fried tofu, lentho, fried onions, soy sauce and chili sauce.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row py-5 text-center text-warning">
                <div class="col-2"></div>
                <div class="col-8 border-bottom">
                    <h1><strong>Sauce Food</strong></h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="container menu-section">
                    <div class="row py-5 align-items-center ">
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Pecel-Semanggi.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Semanggi</h5>
                            <p class="card-text">Made from clover leaves and spourts, its uniqueness is the spoon is made from crackers</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/rujak_cingur.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Rujak Cingur</h5>
                            <p class="card-text">There is two tipe of rujak. One with all cooked ingredients and another one with fruit but one sauce</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Tahu-Tek.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Tahu Tek</h5>
                            <p class="card-text">Named 'tek' because the seller usually get around and make sound 'tek tek tek' with their equipment</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row py-5 text-center text-success">
                <div class="col-2"></div>
                <div class="col-8 border-bottom">
                    <h1><strong>Satay</strong></h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="container menu-section">
                    <div class="row py-5 align-items-center justify-content-center">
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/sate_klopo.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Sate Kelopo</h5>
                            <p class="card-text">This satay is like ordinary satay but with grated coconut</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Sate-Karak.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Sate Karak</h5>
                            <p class="card-text">Made from beef offal with seasoning with black sticky rice</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row py-5 text-center text-primary">
                <div class="col-2"></div>
                <div class="col-8 border-bottom">
                    <h1><strong>Dessert</strong></h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="container menu-section">
                    <div class="row py-5 align-items-center ">
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Ice-Cream-Zangrandi.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Zangrandi Ice Cream</h5>
                            <p class="card-text">One of the oldest ice cream from surabaya. First owned by Robert Zangrandi and developed by an Indonesian</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Lapis-Surabaya.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Lapis Surabaya</h5>
                            <p class="card-text">Modified lapis legit, but softer and only has two layers</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card custom-card">
                          <img class="card-img-top card-food" src="/img/Almond-Crispy.webp" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Almond Crispy</h5>
                            <p class="card-text">Many people love this dessert because its chrunchy texture and thin size</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>