<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
     <div class ="mhs">
        <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

        <h1>Data Diri</h1>
        <hr>
         <p>Prodi Ilmu Komputer</p>
            
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="25%" height="25%">
            <input type="file" name="foto" id="foto" >

            <label for="">Nama</label>
            <input type = "text" name="nama"  placeholder="Masukkan nama" id="input" value="<?= $user['nama']  ?>">
           
            <br><select name="kelas" id="kelas">
                
                <?php
                foreach ($kelas as $item){
                    ?> 
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : "" ?> >
                            <?= $item['nama_kelas'] ?>
                </option>
                

                <?php
                }
                ?>
                </select>
            
            <label>NPM</label> 
            <input type="text" name="npm"  placeholder="Masukkan NPM" id="input"  value="<?= $user['npm']  ?>">
            
            <button>Submit</button>
            
        </form>
    </div>

    <div class="right">
    <img src="<?=base_url("assets/image/komputer.jpg")?>" alt="" />
    </div>
</div>

<?= $this->endSection() ?>