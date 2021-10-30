<div class="container">
    <h1><?= $title; ?></h1><br>

    <a href="<?= site_url('dosen/formAdd'); ?>" class="btn btn-primary p-2 mb-2">Tambah Data Dosen</a>
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
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Dosen Jabatan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($dosen as $dsn) : ?>
            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $dsn['nidn'] ?></td>
                <td><?= $dsn['nama'] ?></td>
                <td><?= $dsn['jabatan'] ?></td>
                <td><a href="<?= site_url('dosen/detail/') . $dsn['id'] ?>">DETAIL</a> | EDIT | <a href="<?= site_url('dosen/delete/') . $dsn['id'] ?>">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>