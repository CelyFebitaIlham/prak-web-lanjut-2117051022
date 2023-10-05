<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <!--navbar-->

  <div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="profile.php">My Profile</a>
    </div>
  </nav>
</div>


<selection class="jumbotron text-center">
        <center>
        <img src="<?=base_url("assets/image/gambar.png")?>" alt="" width="200" height=210 class="rounded-circle"/>

        <h1 class="display-4"><?=$nama ?><h1>

        <p class="lead"><?=$npm ?> | <?=$id_kelas ?> </p>
        </center>
</selection>
    <!-- ending -->
    <!--footer-->
    <footer class="bg-dark text-white text-center pb-3">
    <p>&copy; 2023 create by <a href="https://www.instagram.com/cellyfebita/" class="text-white fw-bold">cellyfebita</p>
</footer>
    <!--end footer-->

    <?= $this->endSection() ?>