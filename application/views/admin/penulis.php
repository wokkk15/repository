<div class="container-fluid">
    <div class="box-header" style="margin: 10px;">
        <h3 class="box-title">Penulis</h3>
        <div class="pull-right">
            <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-plus fa-sm"></i>
                Tambah
            </button>
        </div>
    </div>
    <main class="content px-3 py-2">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Penulis</th>
                    <th>Judul</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php 
            $no=1;
            foreach($tabel as $tbl) : ?>
            <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tbl->penulis ?></td>
                    <td><?php echo $tbl->judul ?></td>
                    <td><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</div></td>
                    <td><div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</div></td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </main>

    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">FORM INPUT PENULIS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/prodi_admin/tambah_aksi';?>" method="post">
                    <div class="form-group">
                        <label>Nama Penulis</label>
                        <input type="text" name="nama_prodi" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>