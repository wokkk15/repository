<div class="container-fluid">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form Repository</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="inputAuthors" class="form-label">Authors</label>
                    <input type="text" class="form-control" id="inputAuthors" placeholder="Please enter author name as 'last name, first name' (e.g. 'Mark, Lee')">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>
</div>