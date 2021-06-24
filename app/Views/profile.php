<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/profile_style.css">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-image" id="banner">
    <h2 class="mx-auto my-auto text-white">Know more about me!</h2>
</div>


<div class="container-fluid intro-section">
    <div class="row h-100 pt-5 align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <button class="btn btn-large text-white rounded-lg custom-button">Hello, I'm</button><br>
                <h1>Salim Bin Usman</h2>
                    <h3>Life Programmer</h3><br>
                    <p><i class="fa fa-birthday-cake"></i> Surabaya, 6<sup>th</sup> March 2001</p>
                    <p><i class="fa fa-university"></i> Computer Science, ITS</p>
                    <p><i class="fa fa-envelope"></i> salimbinusman1@gmail.com</p>
                    <p>-Natural learner est. 2018</p>
                    <br>
                    <p class="social-link"><a href="https://instagram.com/slm_006"><i class="fa fa-instagram fa-2x"
                                aria-hidden="true"></i></a>&nbsp;
                        <a href="https://twitter.com/_salim2018_"><i class="fa fa-twitter fa-2x"
                                aria-hidden="true"></i></a>&nbsp;
                        <a href="https://www.linkedin.com/in/salimbinusman/"><i class="fa fa-linkedin fa-2x"
                                aria-hidden="true"></i></a>&nbsp;
                        <a href="https://github.com/minons1"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
                    </p>
            </div>
        </div>
        <div class="col-4 mx-auto text-center">
            <img src="/img/profil.webp" class="img-circle">
        </div>
        <div class="col-2"></div>
    </div>
</div>

<div class="container-fluid about-me">
    <div class="row pb-5 align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 mx-auto text-left">
            <img src="/img/aboutme.webp">
        </div>
        <div class="col-5 text-center mx-auto">
            <div class="container px-5 text-left text-white">
                <h2>About Me</h2>
                <h5>I'm very passionate about tech, especially in data related filed. Able to do good work both
                    individual and team. Fast learner and great desire in learning.</h5>
                <div style="line-height: 30pt;">
                    <button class="btn rounded-lg text-white button-skill">python</button>
                    <button class="btn rounded-lg text-white button-skill">C/C++</button>
                    <button class="btn rounded-lg text-white button-skill">Java</button>
                    <button class="btn rounded-lg text-white button-skill">HTML</button>
                    <button class="btn rounded-lg text-white button-skill">CSS</button>
                    <button class="btn rounded-lg text-white button-skill">JavaScript</button>
                    <button class="btn rounded-lg text-white button-skill">SQL</button>
                </div><br>
                <p>ps : this is my first website project <i class="fa fa-smile-o" aria-hidden="true"></i></p>

            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<div class="container-fluid intro-section">
    <div class="row pb-5 align-items-center ">
        <div class="col-2"></div>
        <div class="col-4 text-center mx-auto">
            <div class="container text-left text-white">
                <h2>What I've learned</h2>
                <h5>Twends</h5>
                <p class="text-description"> Card game where two players have to collect the biggest sum from a set of
                    cards in the
                    deck. Where the card that can be picked is only from one of the sides (left or right). Also
                    Implementing Artificial
                    Intelligence for vs. comp mode <a href="https://github.com/minons1/GreedIsNotGood"><i
                            class="fa fa-github-alt" aria-hidden="true"></i></a></p>
                <button class="btn btn-sm rounded-lg text-white button-skill ">Python</button>
                <button class="btn btn-sm rounded-lg text-white button-skill">Minmax Algorithm</button><br><br>
                <h5>Sal Gallery</h5>
                <p class="text-description"> Personal static website, with brief information about my self, my hometown,
                    local food and local tourism.
                    Implementing responsive view and give little touch to increase user experience. <a
                        href="https://github.com/minons1/minons1.github.io">
                        <i class="fa fa-github-alt" aria-hidden="true"></i></a></p>
                <button class="btn btn-sm rounded-lg text-white button-skill ">HTML</button>
                <button class="btn btn-sm rounded-lg text-white button-skill">CSS</button>
                <button class="btn btn-sm rounded-lg text-white button-skill">JavaScript</button>
                <button class="btn btn-sm rounded-lg text-white button-skill">Bootstrap 4</button>
                <button class="btn btn-sm rounded-lg text-white button-skill">jQuery</button>
            </div>
        </div>
        <div class="col-4 mx-auto text-right">
            <img src="/img/project.webp" width="500" height="500">
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?= $this->endSection() ?>