<?php
session_start();
error_reporting(0);
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
include "config/library.php";
include "config/class_paging.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Sistem Penerimaan Siswa Baru</title>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/css/style.css" rel="stylesheet">
  <link href="asset/css/blue.css" rel="stylesheet">
  <link href="asset/css/datepicker.css" rel="stylesheet">
  <script src="asset/js/jquery.js"></script>
  <script type="text/javascript">
    $(document).on("click", ".open-AddBookDialog", function() {
      var myBookId = $(this).data('id');
      var myBookId1 = $(this).data('id1');
      var myBookId2 = $(this).data('id2');
      var myBookId3 = $(this).data('id3');
      var myBookId4 = $(this).data('id4');
      var myBookId5 = $(this).data('id5');
      var myBookId6 = $(this).data('id6');
      $(".modal-body #bookId").val(myBookId);
      $(".modal-body #bookId1").val(myBookId1);
      $(".modal-body #bookId2").val(myBookId2);
      $(".modal-body #bookId3").val(myBookId3);
      $(".modal-body #bookId4").val(myBookId4);
      $(".modal-body #bookId5").val(myBookId5);
      $(".modal-body #bookId6").val(myBookId6);
    });
  </script>

  <style type="text/css">
    .nav li:hover {
      border-bottom: 5px solid lightblue;
      margin-bottom: -5px;
      background-color: #e3e3e3
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    $base_url  = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] .
  str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']);
    $s = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM rb_header_banner WHERE jenis='psb_header' "));
    // var_dump($s[gambar]);
    // echo "<img style='width:100%;' src='asset/logo/$s[gambar]' />";
    ?>
    <img width='100%' src='<?php echo str_replace('psb/', '', $base_url)."asset/logo/" . $s[gambar] ?>'>

    <nav class="navbar navbar-default" style='margin-bottom: 0px; border-bottom:3px solid #cecece'>
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <?php
          include "menu.php";
          ?>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>

    <div class="post text" style='padding-top: 20px;'>

      <?php
      if ($_GET['view'] == 'pendaftaran' or $_GET['view'] == 'pendaftaran_ulang') {
        echo "<div class='col-md-12'>";
        include "content.php";
        echo "</div>";
      } else {
        echo "<div class='col-md-8'>";
        include "content.php";
        echo "</div>";

        echo "<div class='col-md-4'>";
        include "sidebar.php";
        echo "</div>";
      }
      ?>

      <?php include "modal.php"; ?>
      <div style="clear:both"></div>
      <footer style="background:#f4f4f4; border-top:5px solid #e3e3e3; padding:20px">
        <div class="container">
          <div class="row">
            <p class="footer" style="text-align:center; color:#8a8a8a;">
              Copyright © <?php echo date('Y'); ?> Sistem Penerimaan Siswa Baru<br>
              SMK Limakode.
            </p>
          </div>
        </div>
      </footer>
    </div>

  </div> <!-- /container -->



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="asset/js/prettify.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.validate.js"></script>
  <script>
    $(document).ready(function() {
      $("#formku").validate();
    });
  </script>
  <script src="asset/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript">
    // When the document is ready
    $(document).ready(function() {
      $('#datepicker1').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker2').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker3').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker4').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker5').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker6').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker7').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker8').datepicker({
        format: "dd-mm-yyyy"
      });
    });

    $(document).ready(function() {
      $('#datepicker2').datepicker({
        viewMode: 'years',
        format: "mm-yyyy"
      });
    });
  </script>
  <script type="text/javascript">
    function nospaces(t) {
      if (t.value.match(/\s/g)) {
        alert('Maaf, Tidak Boleh Menggunakan Spasi,..');
        t.value = t.value.replace(/\s/g, '');
      }
    }
  </script>
</body>

</html>