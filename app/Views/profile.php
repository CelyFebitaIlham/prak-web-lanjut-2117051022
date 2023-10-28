<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <!--navbar-->
<div>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="profile.php">My Profile</a>
    </div>
  </nav>
</div>


<selection class="jumbotron text-center">
        <center>

        <br><img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="" width="30%" height="30%" >

        <h1 class="display-4"><?= $user['nama'] ?><h1>

        <p class="lead"><?=$user ['npm'] ?> | <?=$user['nama_kelas']?> </p>
        </center>
</selection>
    <!-- ending -->
    <!--footer-->
 
    <footer class="bg-dark text-white text-center pb-3">
    <p>&copy; 2023 create by <a href="https://www.instagram.com/cellyfebita/" class="text-white fw-bold">cellyfebita</p>
</footer>
</div>
    <!--end footer-->

    <?= $this->endSection() ?>