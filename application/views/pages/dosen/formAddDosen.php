<div class="container p-5">
    <?= validation_errors() ?>
    <?= form_open('dosen/formAdd'); ?>
    <div class="form-group">
        <label>NIDN</label>
        <input type="text" class="form-control" name="nidn">
    </div>
    <div class="form-group">
        <label>Nama Dosen</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Dosen Jabatan</label>
        <input type="text" class="form-control" name="jabatan">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close(); ?>
</div>