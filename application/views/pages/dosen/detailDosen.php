<div class="container">

    <h1>Detail Dosen</h1><br>

    <table>
        <tr>
            <td>NIDN</td>
            <td>:</td>
            <td><?= $dosen['nidn'] ?></td>
        </tr>
        <tr>
            <td>Nama Dosen</td>
            <td>:</td>
            <td><?= $dosen['nama'] ?></td>
        </tr>
        <tr>
            <td>Dosen Jabatan</td>
            <td>:</td>
            <td><?= $dosen['jabatan']; ?></td>
        </tr>
    </table>

    <br>
    <a href="<?= site_url('dosen') ?>">Kembali</a>

</div>