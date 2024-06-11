
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet"href="<?php echo base_url() ?>assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

          <ul class="navigation">
              <li><a href="login.html" class="active">Login</a></li>
          </ul>
      </nav>
  </div>

    
  <div class="form-login">
    <div class="form-field">
      <?php echo $this->session->flashdata('pesan') ?>
      <form method="POST" action="<?php echo base_url('auth/login') ?>" > 
        <label for="">username</label>
        <input 
        type="text"
        name="username"
        placeholder="Type Username">
        <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>') ?>
        <label for="">password</label>
        <input 
        type="password" 
        name="password"
        placeholder="Type Password">
        <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>') ?>
        <input style="margin-top: 20px; background: #FDE400;"
        type="submit" 
        value="Login"
        class="btn btn-success">
      </form>
    </div>
  </div>
    
  <script src="<?php echo base_url() ?>assets/scripts.js"></script>
</body>
</html>