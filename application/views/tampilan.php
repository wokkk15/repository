<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles.css">
  <style>
    .abstrak {
      max-height: 100px;
      overflow: hidden;
      position: relative;
    }

    .abstrak.expanded {
      max-height: none;
    }

    .read-more {
      text-decoration: none;
      display: block;
      text-align: right;
      cursor: pointer;
      color: #000;
      margin-top: 5px;
    }
  </style>
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
            <div><?php echo form_open('tampilan/search') ?></div>
            <input type="text" name="keyword" id="search-input" placeholder="Search Anything...">
            <button type="submit" style="border: none; background:none; " class="fa-solid fa-magnifying-glass"></button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
      <ul class="navigation">
        <li><a href="<?php echo base_url('login') ?>" class="active">Login</a></li>
      </ul>
    </nav>
  </div>


  <div class="container d-flex">
    <div class="row1 col-lg-3">
      <span class="year">
        <label class="years" for="year">
          <h5>Sejak :</h5>
        </label>
        <select name="year" id="year" style="padding: 10px; width: 100%; border-radius: 8px; margin-top: 20px;">Years</select>
      </span>
      <div class="form-group-type" style="margin-bottom: 20px;">
        <h5>Jenis</h5>
      </div>
      <?php foreach ($jenis_dokumen as $jns) : ?>
        <div class="form-group">
          <input type="checkbox" id="id-<?= $jns->id_dokumen ?>" name="jenis_dokumen" class="filter-checkbox" value="<?= $jns->id_dokumen ?>" />
          <label for="id-<?= $jns->id_dokumen ?>">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            <?php echo $jns->nama_dokumen ?>
          </label>
        </div>
      <?php endforeach; ?>


      <div class="divider"></div>

      <div class="form-group-type" style="margin-bottom: 20px;">
        <h5>Subjek</h5>
      </div>
      <?php foreach ($subjek as $sbk) : ?>
        <div class="form-group">
          <input type="checkbox" id="id-<?= $sbk->id_subjek ?>" name="subjek" class="filter-checkbox" value="<?= $sbk->id_subjek ?>" />
          <label for="id-<?= $sbk->id_subjek ?>">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            <?php echo $sbk->nama_subjek ?>
          </label>
        </div>
      <?php endforeach; ?>

      <div class="divider"></div>

      <div class="form-group-study" style="margin-bottom: 20px;">
        <h5>Program studi :</h5>
      </div>
      <?php foreach ($prodi as $pro) : ?>
        <div class="form-group">
          <input type="checkbox" id="id-<?= $pro->id_prodi ?>" name="prodi" class="filter-checkbox" value="<?= $pro->id_prodi ?>" />
          <label for="id-<?= $pro->id_prodi ?>">
            <span class="checkbox">
              <span class="check"></span>
            </span>
            <?php echo $pro->nama_prodi ?>
          </label>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="col-lg-9 mb-3" id="result-container">
      <?php foreach ($tabel as $tbl) : ?>
        <div class="row2 form-container">
          <div class="d-flex justify-content-between">
            <div>
              <div class="judul">
                <div><a style="text-decoration:none" href="<?php echo base_url('detail/tabelid/' . $tbl->id) ?>" class="judul"><?php echo $tbl->judul; ?></a><br></div>
              </div>
              <div class=" divider"></div>
              <div class="write"><?php echo $tbl->penulis; ?></div>
              <div class="write"><?php echo $tbl->jurusan; ?></div>
            </div>

            <div class="tag tag-kuning"><?php echo $tbl->nama_dokumen; ?></div>

          </div>
          <div class="abstrak" id="abstrak-<?php echo $tbl->id; ?>">
            <strong class="fw-normal"></strong>
            <p class="mb-2"></p>
            <strong class="fw-normal">Abstrak:</strong>
            <p class="mb-2"></p>
            <p><?php echo $tbl->abstrak; ?></p>
            <p class="mb-2"></p>
            <strong class="fw-normal">Keyword(s):</strong>
            <p><i><?php echo $tbl->keyword; ?></i></p>
          </div>
          <a class="read-more" data-id="<?php echo $tbl->id; ?>" onclick="toggleReadMore(<?php echo $tbl->id; ?>)">Read More</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>
  <script>
    function toggleReadMore(id) {
      var abstrak = document.getElementById('abstrak-' + id);
      var readMoreLink = abstrak.nextElementSibling;

      if (abstrak.classList.contains('expanded')) {
        abstrak.classList.remove('expanded');
        readMoreLink.innerHTML = 'Read More';
      } else {
        abstrak.classList.add('expanded');
        readMoreLink.innerHTML = 'Read Less';
      }
    }

    $(document).ready(function() {
      $('.filter-checkbox').on('change', function() {
        var jenis_dokumen = [];
        var subjek = [];
        var prodi = [];

        $('input[name="jenis_dokumen"]:checked').each(function() {
          jenis_dokumen.push($(this).val());
        });

        $('input[name="subjek"]:checked').each(function() {
          subjek.push($(this).val());
        });

        $('input[name="prodi"]:checked').each(function() {
          prodi.push($(this).val());
        });

        $.ajax({
          url: '<?php echo base_url('tampilan/filter'); ?>',
          type: 'POST',
          data: {
            jenis_dokumen: jenis_dokumen,
            subjek: subjek,
            prodi: prodi
          },
          success: function(data) {
            var result = JSON.parse(data);
            $('#result-container').empty();
            $.each(result, function(index, item) {
              var resultHtml = '<div class="row2 form-container">' +
                '<div class="d-flex justify-content-between">' +
                '<div>' +
                '<div class="judul">' +
                '<div><a style="text-decoration:none" href="<?php echo base_url('detail/tabelid/'); ?>' + item.id + '" class="judul">' + item.judul + '</a><br></div>' +
                '</div>' +
                '<div class=" divider"></div>' +
                '<div class="write">' + item.penulis + '</div>' +
                '<div class="write">' + item.jurusan + '</div>' +
                '</div>' +
                '<div class="tag tag-kuning">' + item.jenis + '</div>' +
                '</div>' +
                '<div class="abstrak" id="abstrak-' + item.id + '">' +
                '<strong class="fw-normal"></strong>' +
                '<p class="mb-2"></p>' +
                '<strong class="fw-normal">Abstrak:</strong>' +
                '<p class="mb-2"></p>' +
                '<p>' + item.abstrak + '</p>' +
                '<p class="mb-2"></p>' +
                '<strong class="fw-normal">Keyword(s):</strong>' +
                '<p><i>' + item.keyword + '</i></p>' +
                '</div>' +
                '<a class="read-more" data-id="' + item.id + '" onclick="toggleReadMore(' + item.id + ')">Read More</a>' +
                '</div>';
              $('#result-container').append(resultHtml);
            });
          }
        });
      });
    });
  </script>
  <script src="<?php echo base_url() ?>assets/scripts.js"></script>
</body>

</html>