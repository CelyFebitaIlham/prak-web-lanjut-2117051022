<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
     <div class ="mhs">
        <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" 
        method="POST" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

        <h1>Edit Kelas</h1>
        <hr>
         <p>Prodi Ilmu Komputer</p>
            
           

            <label for="">Nama Kelas</label>
            <input type = "text" name="nama_kelas"  placeholder="Masukkan nama kelas" id="input" value="<?= $kelas['nama_kelas']  ?>">
        
        
            
            <button>Submit</button>
            
        </form>
    </div>

    <div class="right">
    <img src="<?=base_url("assets/image/komputer.jpg")?>" alt="" />
    </div>
</div>

<?= $this->endSection() ?>