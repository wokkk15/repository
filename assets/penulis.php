

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
    <link rel="stylesheet" href="styles.css"> 


</head>
<body>

    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location: login.php?pesan=gagal");
	}
 
	?>

    <div class="fcontainer">
        <nav class="warping">
            <div class="brand">
                <img src="logo.jpeg" alt="my-logo">
                <div class="logoname">Repository ITH</div>
            </div>

            <ul class="navigation">
                <li><a href="login.html" class="active">Logout</a></li>
            </ul>
        </nav>
    </div>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='form.html'" style="margin-bottom: 10px; margin-top: 40px;">
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
     
<script src="scripts.js"></script>

</body>
</html>

