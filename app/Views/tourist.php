<?= $this->extend('layout') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="css/tourist_style.css">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Tourist
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card card-image" id="banner">
  <h2 class="mx-auto my-auto text-white">Hey, wanna walk?</h2>
</div>

<div class="container-fluid">
  <div class="row pb-4 align-items-center">
    <div class="col mx-auto text-center">
      <img src="img/Travel.webp" style="width: 500px;">
    </div>
  </div>
  <div class="row pb-2 my-auto align-items-center ">
    <div class="col mx-auto text-center text-white">
      <h1>Surabaya Tourist Places</h1>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row  pt-5 align-items-center ">
    <div class="col-2"></div>
    <div class="col-4 text-center mx-auto">
      <div class="container text-left text-white">
        <h2>Submarine Monument</h2>
        <p>The Pasopati, a Russian submarine was commissioned into the Indonesian naval in 1962 for the Aru sea battle,
          to liberate the locals from the Dutch occupation. Now, known as Monumen Kapal Selam, it houses a museum which
          takes you deeper into the history of the Dutch rule in Indonesia and the struggles of locals through movie
          screenings & the striking interiors.</p>
      </div>
    </div>
    <div class="col-4 mx-auto text-center">
      <img src="img/Monkasel.webp" class="img-default">
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container-fluid">
  <div class="row  pt-5 align-items-center ">
    <div class="col-2"></div>

    <div class="col-4 mx-auto text-center">
      <img src="img/Bungkul.webp" class="img-default">
    </div>
    <div class="col-4 text-center mx-auto">
      <div class="container text-left text-white">
        <h2>Bungkul Park</h2>
        <p>After a tiring day of travel, if you want to just relax and unwind, then the Bungkul Park in Surabaya is the
          destination. From food stalls, beautiful fountains, skateboarding ramps to kids playground, this park provides
          an opportunity to relax and cool down from the city heat, crowded streets, and traffic.</p>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container-fluid">
  <div class="row  pt-5 align-items-center ">
    <div class="col-2"></div>
    <div class="col-4 text-center mx-auto">
      <div class="container text-left text-white">
        <h2>House of Sampoerna</h2>
        <p>A symbol of early 20th century Surabaya, the House of Sampoerna currently houses a fascinating museum about
          tobacco and a cigarette factory. Initially used as an orphanage by the Dutch, it was refurbished into a
          factory by Sampoerna to make its ubiquitous kretek, or clove, cigarettes. Now a museum, the Dutch
          colonial-style building is now also a preserved heritage site and the main complex is open to the public.</p>
      </div>
    </div>
    <div class="col-4 mx-auto text-center">
      <img src="img/Sampoerna.webp" class="img-default">
    </div>
    <div class="col-2"></div>
  </div>
</div><br>

<div class="container-fluid">
  <div class="row pb-4 align-items-center">
    <div class="col mx-auto text-center">
      <img src="img/Ilustrationicon.webp" style="width: 75%;">
    </div>
  </div>
</div>
<?= $this->endSection() ?>