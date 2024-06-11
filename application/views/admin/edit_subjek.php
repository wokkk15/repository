<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT SUBJEK</h3>
    <?php foreach($subjek as $sbk) : ?>

        <form method="post" action="<?php echo base_url().'admin/subjek_admin/update' ?>">
            <div class="for-group">
                <label">Nama Subjek</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $sbk->id ?>">
                <input type="text" name="nama_subjek" class="form-control" value="<?php echo $sbk->nama_subjek ?>"> 
            </div>
            <button type="sumbit" class="btn btn-primary  mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>