<div class="container p-5">
    <?= validation_errors() ?>
    <?= form_open('mahasiswa/formAdd'); ?>
    <div class="form-group">
        <label>Kode Matakuliah</label>
        <input type="text" class="form-control" name="kd_matakuliah">
    </div>
    <div class="form-group">
        <label>Nama Matakuliah</label>
        <input type="text" class="form-control" name="nm_matakuliah">
    </div>
    <div class="form-group">
        <label>SKS</label>
        <input type="text" class="form-control" name="sks">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close(); ?>
</div>