<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
     <div class ="mhs">
        <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">
            <h1>Data Kelas</h1>
            <hr>
            <p>Prodi Ilmu Komputer</p>

            <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" name="nama_kelas" id="floatingInput" placeholder="Masukan Nama Kelas">
            
            <button type="submit">Submit</button>
            
        </form>
    </div>

    <div class="right">
    <img src="<?=base_url("assets/image/komputer.jpg")?>" alt="" />
    </div>
</div>

<?= $this->endSection() ?>