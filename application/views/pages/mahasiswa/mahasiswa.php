<div class="container">
    <h1><?= $title; ?></h1><br>

    <a href="<?= site_url('mahasiswa/formAdd'); ?>" class="btn btn-primary p-2 mb-2">Tambah Data Mahasiswa</a>
    <?php if ($this->session->flashdata('alerts')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('alerts') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <table border="1" width="85%" cellpadding="6" cellspacing="0" class="table table-bordered table-hover">
        <tr align"center">
            <th>No</th>
            <th>ID Matakuliah</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $mhs['id_matakuliah'] ?></td>
                <td><?= $mhs['kd_matakuliah'] ?></td>
                <td><?= $mhs['nm_matakuliah'] ?></td>
                <td><?= $mhs['sks'] ?></td>
                <td><a href="<?= site_url('mahasiswa/detail/') . $mhs['id_matakuliah'] ?>">DETAIL</a> | EDIT | <a href="<?= site_url('mahasiswa/delete/') . $mhs['id_matakuliah'] ?>">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>