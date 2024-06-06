
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet"href="<?php echo base_url() ?>assets/styles.css">
</head>
<body>
  <div class="fcontainer">
      <nav class="warping">
          <div class="brand">
              <img src="<?php echo base_url() ?>assets/logo.jpeg" alt="my-logo">
              <div class="logoname">Repository ITH</div>
          </div>

          <div class="search">
            <div class="search-bar">
              <div class="dropdown">
                <div id="drop-text" class="dropdown-text">
                  <span id="span">All</span>
                  <i id="icon" class="fa-solid fa-chevron-down"></i>
                </div>
                <ul id="list" class="dropdown-list">
                  <li class="dropdown-list-item">Judul</li>
                  <li class="dropdown-list-item">Penulis</li>
                  <li class="dropdown-list-item">Nim Penulis</li>
                  <li class="dropdown-list-item">Pembimbing</li>
                  <li class="dropdown-list-item">Penguji</li>
                </ul>
              </div>
      
              <div class="serach-box">
                <input type="text" id="search-input" placeholder="Search Anything...">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
          </div>
          <ul class="na navbar-nav navbar-right">

            <?php if ($this->session->userdata('username')) { ?>
              <li>Selamat Datang <?php echo $this->session->userdata('username') ?></li>
              <li class="active ml-2"><?php echo anchor('auth/logout', 'Logout'); ?></li>
            <?php } else { ?>
              <li class="active ml-2"><?php echo anchor('auth/login', 'Login'); ?></li>
            <?php } ?>
          </ul>
      </nav>
  </div>


    <div class="container d-flex">
      <div class="row1 col-lg-3">
        <span class="year">
          <label class="years" for="year"><h5>Sejak :</h5></label>
          <select name="year" id="year" style="padding: 10px; width: 100%; border-radius: 8px; margin-top: 20px;">Years</select>
        </span>
        <div class="form-group-type" style="margin-bottom: 20px;">
          <h5>Jenis</h5>
        </div>
        <div class="form-group">
          <input type="checkbox" id="tesis-type">
          <label for="tesis-type">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Tesis
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="jurnal-type">
          <label for="jurnal-type">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Jurnal
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="skripsi-type">
          <label for="skripsi-type">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Skripsi
          </label>
        </div>
        <div class="divider"></div>

        <div class="form-group-type" style="margin-bottom: 20px;">
          <h5>Subjek</h5>
        </div>
        <div class="form-group">
          <input type="checkbox" id="ai">
          <label for="ai">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            AI (Artificial Intelligence)
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="iot">
          <label for="iot">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            IOT (Internet of Things)
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="mechine-learning">
          <label for="mechine-learning">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Machine learning
          </label>
        </div>
        <div class="divider"></div>

        <div class="form-group-study" style="margin-bottom: 20px;">
          <h5>Program studi :</h5>
        </div>
        <div class="form-group">
          <input type="checkbox" id="ilkom">
          <label for="ilkom">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Jurusan TPI
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="Jurusan-Sains">
          <label for="Jurusan-Sains">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            Jurusan Sains
          </label>
        </div>
      </div>

      <div class="col-lg-9 mb-3">

          <?php foreach ($tabel as $tbl) : ?>
        
            <div class="row2 form-container">
              <div class="d-flex">
                  <div>
                  <div class="judul" onclick="checkFullText()"><?php echo $tbl->judul ?><br></div>
                  <div class="divider"></div>
                  <div class="write"><?php echo $tbl->penulis ?></div>
                  <div class="write"><?php echo $tbl->jurusan ?></div>
                  
                  </div>
                  <div class="tag tag-kuning"><?php echo $tbl->jenis ?></div>
              </div>
              <div class="abstrak">
                  <strong class="fw-normal"></strong>
                  <p class="mb-2"></p>
                  <strong class="fw-normal">Abstrak:</strong>
                  <p class="mb-2"></p>
                  <p><?php echo $tbl->abstrak ?></p>
                  
                  <p class="mb-2"></p>
                  <strong class="fw-normal">Keyword(s):</strong>
                  <p><i><?php echo $tbl->keyword ?></i></p>
              </div>
            </div>
    
        <?php endforeach; ?>
    </div>
      </div>

    </div> 
  <script src="<?php echo base_url() ?>assets/scripts.js"></script>
</body>
</html>