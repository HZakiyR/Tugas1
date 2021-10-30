<div class="container">

    <h1>Detail Mahasiswa</h1><br>

    <table>
        <tr>
            <td>ID Matakuliah</td>
            <td>:</td>
            <td><?= $mahasiswa['id_matakuliah'] ?></td>
        </tr>
        <tr>
            <td>Kode Matakuliah</td>
            <td>:</td>
            <td><?= $mahasiswa['kd_matakuliah'] ?></td>
        </tr>
        <tr>
            <td>Nama Matakuliah</td>
            <td>:</td>
            <td><?= $mahasiswa['nm_matakuliah']; ?></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>:</td>
            <td><?= $mahasiswa['sks']; ?></td>
        </tr>
    </table>

    <br>
    <a href="<?= site_url('mahasiswa') ?>">Kembali</a>

</div>