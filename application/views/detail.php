<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles.css">
</head>

<body>
  <div class="fcontainer">
    <nav class="warping">
      <div class="brand">
        <img src="<?php echo base_url() ?>assets/logo.jpeg" alt="my-logo">
        <a href="<?php echo base_url('tampilan') ?>" class="logoname" style="text-decoration:none; color:#000;">Repository ITH</a>
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

      <ul class="navigation">
        <li><a href="<?php echo base_url('login') ?>" class="active">Login</a></li>
      </ul>
    </nav>
  </div>
  <div class="container d-flex ">
    <?php foreach ($tabel as $tbl) : ?>
      <div class="detail">
        <h1 class="content-title"><?php echo $tbl->judul; ?><br></h1>
        <h3 class="content-subtitle mt-3 mb-0"><?php echo $tbl->penulis; ?> | <?php echo $tbl->jurusan; ?></h3>
        <div class="divider"></div>
        <div class="content-article">
          <strong>Abstrak</strong>
          <p class="mb-2"></p>
          <p><?php echo $tbl->abstrak; ?></p>
          <p class="mb-2"></p>
          <strong class="fw-normal">Keyword(s):</strong>
          <p><i><?php echo $tbl->keyword; ?></p>
          <p><a href="<?php echo base_url('detail/download/'.$tbl->file); ?>" class="btn-download">Download PDF</a></p>
        </div>
      <?php endforeach; ?>
      </div>
      <script src="<?php echo base_url() ?>assets/scripts.js"></script>
</body>

</html>