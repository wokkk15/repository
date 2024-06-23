

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penulis</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/styles.css"> 


</head>
<body>
    <div class="fcontainer">
        <nav class="warping">
            <div class="brand">
                <img src="<?php echo base_url()?>assets/logo.jpeg" alt="my-logo">
                <div class="logoname">Repository ITH</div>
            </div>

            <ul class="navigation">
                <li><a href="<?php echo base_url('login')?>" class="active">Logout</a></li>
            </ul>
        </nav>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom: 10px; margin-top: 30px;">
                <i class="fa-solid fa-pen-to-square"></i> Tambah Publikasi
                </button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Penulis</th>
                                    <th>Judul Terbitan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <th >Zayn J Malik, Giantara A.</th>
                                    <td>My Universe</td>
                                    <td><a href="#" class="btn btn-success">Published</a></td>
                                </tr>
    
                                <tr>
                                    <th>Zayn J Malik</th>
                                    <td>Mind of Mind</td>
                                    <td><a href="#" class="btn btn-success">Published</a></td>
                                </tr>

                                <tr>
                                    <th>Zayn J Malik, Abelly</th>
                                    <td>Internet of Things</td>
                                    <td><a href="#" class="btn btn-warning">Review</a></td>
                                </tr>
    
                                <tr>
                                    <th>Zayn J Malik, Ijoscripts</th>
                                    <td>Hilmy & Milan</td>
                                    <td><a href="#" class="btn btn-danger">Rejected</a></td>
                                </tr>
    
                                <tr>
                                    <th>Zayn J Malik, Evyra Rizki Safitri</th>
                                    <td>Sistem Penentuan Indeks Massa Tubuh Menggunakan Pengolahan Citra Digital</td>
                                    <td><a href="#" class="btn btn-success">Published</a></td>
                                </tr>
    
                                <tr>
                                    <th>Zayn J Malik,Ahmad Rusadi Arrahimi, Veri Julianto, Oky Rahmanto</th>
                                    <td>MACHINE LEARNING TO DETECT PALM OIL DISEASES BASED ON LEAF EXTRACTION FEATURES AND PRINCIPAL COMPONENT ANALYSIS (PCA)</td>
                                    <td><a href="#" class="btn btn-success">Published</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="form">
                <form action="<?php echo base_url(). 'publikasi/create';?>" method="post">
                    <div class="mb-3">
                        <label for="inputType" class="form-label">Reference Type</label>
                        <select type="select" name="id_dokumen" class="form-control" id="inputType">
                        <?php foreach ($jenis_dokumen as $jns): ?>
                            <option value="<?php echo $jns->id_dokumen ?>"><?php echo $jns->nama_dokumen ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputJudul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="inputJudul" placeholder="Masukkan author name as 'last name, first name' (e.g. 'Mark, Lee')">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Abstrak</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputPenulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="inputPenulis" placeholder="Masukkan Penulis">
                    </div>
                    <div class="mb-3">
                        <label for="inputprodi" class="form-label">prodi</label>
                        <input type="text" class="form-control" id="inputprodi" placeholder="Masukkan prodi">
                    </div>
                    <div class="mb-3">
                        <label for="inputTahun" class="form-label">Tahun</label>
                        <input type="date" class="form-control" id="inputTahun" placeholder="Masukkan Tahun Terbit">
                    </div>
                    <div id="form">

                    </div>
                    <div id="form-content">

                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">File</label>
                        <input type="file" class="form-control" id="inputFile">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">simpan</button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
      
<script>
    $(document).ready(function() {
        $('#inputType').change(function(e) {
            const type = $('#inputType').val();
            console.log({ type });
            $('#form-content').empty();
            if (type == '1') {
                // $('#form').load('<?php echo base_url() ?>form-input-skripsi.html');
                $('#form-content').append(
                    `<div class="mb-3">
                        <label for="inputNim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="inputNim" placeholder="Masukkan NIM">
                    </div>
                    <div class="mb-3">
                        <label for="inputKota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="inputKota" placeholder="Masukkan Kota">
                    </div>
                    <div class="mb-3">
                        <label for="inputInstitusi" class="form-label">Institusi</label>
                        <input type="text" class="form-control" id="inputInstitusi" placeholder="Masukkan Institusi">
                    </div>
                    <div class="mb-3">
                        <label for="inputFakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="inputFakultas" placeholder="Masukkan Fakultas">
                    </div>
                    <div class="mb-3">
                        <label for="inputTipe" class="form-label">Tipe</label>
                        <input type="text" class="form-control" id="inputTipe" placeholder="Masukkan Tipe">
                    </div>
                    <div class="mb-3">
                        <label for="inputPembimbing" class="form-label">Pembimbing</label>
                        <input type="text" class="form-control" id="inputPembimbing" placeholder="Masukkan Pembimbing">
                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">File</label>
                        <input type="file" class="form-control" id="inputFile">
                    </div>`
                );
            } else if (type == '2') {
                $('#form-content').append(
                    `
                    <div class="mb-3">
                        <label for="inputKota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="inputKota" placeholder="Masukkan Kota">
                    </div>
                    <div class="mb-3">
                        <label for="inputInstitusi" class="form-label">Institusi</label>
                        <input type="text" class="form-control" id="inputInstitusi" placeholder="Masukkan Institusi">
                    </div>
                    <div class="mb-3">
                        <label for="inputDepertemen" class="form-label">Depertemen</label>
                        <input type="text" class="form-control" id="inputDepertemen" placeholder="Masukkan Depertemen">
                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">File</label>
                        <input type="file" class="form-control" id="inputFile">
                    </div>`
                );
            } else if (type == '5') {
                $('#form-content').append(
                    `<div class="mb-3">
                        <label for="inputissue" class="form-label">issue</label>
                        <input type="text" class="form-control" id="inputissue">
                    </div>
                    <div class="mb-3">
                        <label for="inputvolume" class="form-label">volume</label>
                        <input type="text" class="form-control" id="inputvolume">
                    </div>`
                );
            } else if (type == '6') {
                $('#form-content').append(
                    `<div class="mb-3">
                        <label for="inputpenerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="inputpenerbit">
                    </div>
                    <div class="mb-3">
                        <label for="inputkota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="inputkota">
                    </div>
                    <div class="mb-3">
                        <label for="inputafiliasi" class="form-label">Afiliasi</label>
                        <input type="text" class="form-control" id="inputafiliasi">
                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">File</label>
                        <input type="file" class="form-control" id="inputFile">
                    </div>`
                );
            } else {
                
            }
        });
    });
</script>

</body>
</html>

