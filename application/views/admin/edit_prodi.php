<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT PRODI</h3>
    <?php foreach($prodi as $pro) : ?>

        <form method="post" action="<?php echo base_url().'admin/prodi_admin/update' ?>">
            <div class="for-group">
                <label">Nama Prodi</label>
                <input type="hidden" name="id_prodi" class="form-control" value="<?php echo $pro->id_prodi ?>">
                <input type="text" name="nama_prodi" class="form-control" value="<?php echo $pro->nama_prodi ?>"> 
            </div>
            <button type="sumbit" class="btn btn-primary  mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>