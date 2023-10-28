<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
     <div class ="mhs">
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            <h1>Data Diri</h1>
            <hr>
            <p>Prodi Ilmu Komputer Unila</p>

            <input type="file" name="foto">
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

<?= $this->endSection() ?>