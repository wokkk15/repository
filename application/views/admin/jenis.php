<div class="container-fluid">
    <div class="box-header" style="margin: 10px;">
        <h3 class="box-title">Repository</h3>
        <div class="pull-right">
            <button class="btn btn-primary m-3"><i class="fas fa-plus fa-sm"></i>
                Tambah
            </button>
        </div>
    </div>
    <main class="content px-3 py-2">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jenis Dokumen</th>
                    <th colspan="3">Aksi</th>
                </tr>
            </thead>
            <?php 
            $no=1;
            foreach($tabel as $tbl) ;?>
            <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tbl->jenis ?></td>
                    <td><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</div></td>
                    <td><div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</div></td>
                </tr>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>
</div>