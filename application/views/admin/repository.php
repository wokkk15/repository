<div class="container-fluid">
<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="inputReference" class="form-label">Reference Type</label>
                    <input type="email" class="form-control" id="inputReference" placeholder="Journal Article">
                </div>
                <div class="mb-3">
                    <label for="inputType" class="form-label">Type</label>
                    <select type="select" class="form-control" id="inputType" placeholder="type">
                        <option value="Article">Artikel</option>
                        <option value="Jurnal">Jurnal</option>
                        <option value="Skripsi">Skripsi</option>
                        <option value="Tesis">Tesis</option>
                    </select>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>
</div>