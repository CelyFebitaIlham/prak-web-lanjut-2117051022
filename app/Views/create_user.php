<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Mahasiswa Ilmu Komputer</title>
</head>
<body>
    <div class="container">
     <div class ="mhs">
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <h1>Data Diri</h1>
            <hr>
            <p>Prodi Ilmu Komputer</p>

            <label for="">Nama</label>
            <input name="nama" type="text" placeholder="Masukkan nama" class="form-control 
            <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
                </div>

            <br><select name="kelas" id="kelas">
                
                
                <?php
                foreach ($kelas as $item){
                    ?> 
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                </option>
                

                <?php
                }

                ?>
                </select>
            
            <label>NPM</label> 
            <input name="npm" type="text" placeholder="Masukkan NPM" class="form-control 
            <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" id="npm" autofocus>
            <div class="invalid-feedback">
            <?= $validation->getError('npm') ?>
            </div>  
            
            <button>Submit</button>
            
        </form>
    </div>

    <div class="right">
    <img src="<?=base_url("assets/image/komputer.jpg")?>" alt="" />
    </div>
</div>
        
</body>
</html>