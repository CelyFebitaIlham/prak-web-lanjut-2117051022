<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<nav class="navbar navbar-expand-lg bg-secondary-subtle" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/user">List User</a>
        <a class="nav-link" href="/kelas">List Kelas</a>
        
      </div>
    </div>
  </div>
</nav>

<table class = "table table-success table-striped-coloumn table-hover">
<a href="<?= base_url('/user/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>
<br><thead class ="table-dark">
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
         ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?> </td>
                <td><?= $user['npm'] ?> </td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                <a href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="<?= base_url('user/'. $user['id']) ?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <? csrf_field() ?>
                    <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
            </form>
            </td>
            </tr>
            
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>