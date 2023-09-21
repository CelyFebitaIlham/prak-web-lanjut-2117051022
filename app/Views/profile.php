<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile | Cely</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
  </head>
  <body>
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

        <p class="lead"><?=$npm ?> | <?=$kelas ?> </p>
        </center>
</selection>
    <!-- ending -->
    <!--footer-->
    <footer class="bg-dark text-white text-center pb-3">
    <p>&copy; 2023 create by <a href="https://www.instagram.com/cellyfebita/" class="text-white fw-bold">cellyfebita</p>
</footer>
    <!--end footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>