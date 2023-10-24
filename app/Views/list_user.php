<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>

<table class = "table table-success table-striped-coloumn table-hover">
    <thead class ="table-dark">
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
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

    


<?= $this->endSection() ?>