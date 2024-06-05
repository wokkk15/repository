<div class="container-fluid">
    <button class="btn btn-primary m-3"><i class="fas fa-plus fa-sm"></i>
        Tambah
    </button>

    <main class="content px-3 py-2">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>nomor</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Jurusan</th>
                    <th>Jenis Dokumen</th>
                    <th>Status</th>
                    <th>Dokumen</th> <!-- Kolom baru untuk dokumen -->
                </tr>
            </thead>
            <?php 
            $no=1;
            foreach($tabel as $tbl) ;?>
            <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tbl->penulis ?></td>
                    <td><?php echo $tbl->judul ?></td>
                    <td><?php echo $tbl->jurusan ?></td>
                    <td><?php echo $tbl->jenis ?></td>
                    <!-- <td><?php echo $tbl->status ?></td> -->
                    <!-- <td><?php echo $tbl->dokumen ?></td> -->
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