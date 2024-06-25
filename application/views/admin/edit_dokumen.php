<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DOKUMEN</h3>
    <?php foreach($jenis_dokumen as $jns) : ?>

        <form method="post" action="<?php echo base_url().'admin/jenis_dokumen_admin/update' ?>">
            <div class="for-group">
                <label">Nama Dokumen</label>
                <input type="hidden" name="id_dokumen" class="form-control" value="<?php echo $jns->id_dokumen ?>">
                <input type="text" name="nama_dokumen" class="form-control" value="<?php echo $jns->nama_dokumen ?>"> 
            </div>
            <button type="sumbit" class="btn btn-primary  mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>