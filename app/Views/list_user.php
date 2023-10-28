<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>
<a href="<?= base_url('/user/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>

<table class = "table table-success table-striped-coloumn table-hover">

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
                    <button type="submit" class="btn btn-sm btn-danger" style="padding: 5px 10px; margin: 2px;">Delete</button>
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