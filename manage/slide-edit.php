<?php
require_once '../function/session.php';
$s_id = $_GET['id'];
$query  = "SELECT * FROM t_slide WHERE slide_id='$s_id'";
$res = mysqli_query($conn,$query);
$row  = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ADMIN - Rajavithihospitalfoundation</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
    include "./temp/sidebar.php";
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="row">
        <div class="col-12">
          <div class="container">
            <h1>Add Image Slide</h1>
            <form action="../function/slide-update.php" method="post"  id="slide_add" enctype="multipart/form-data">
              <!-- Text input-->
            <div class="form-group hidden">
              <div class="col-sm-8">
                <input type="hidden" name="s_id" value="<?php echo $row['slide_id']; ?>" class="form-control">
              </div>
            </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Image Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" name="inputName" value="<?php echo $row['slide_title']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Image</div>
                <div class="col-sm-10">
                  <div class="form-group">
                    <span><?php if ($row['slide_img'] != ""){?><img src="../images/slider/<?php echo $row['slide_img']; ?>" width="auto" height="200"><?php }else {
                   ?><div class="alert alert-danger"><strong>ไม่มีรูปภาพ !</strong></div><?php } ?>
                    </span>
                    <br /><br />
                    <input type="file" class="form-control-file" id="inputImg" name="inputImg">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                  <a href="./slide.php" class="btn btn-secondary">ยกเลิก</a>
                  <button type="submit" class="btn btn-primary">ยืนยัน</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Rajavithihospitalfoundation 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php
      include "./temp/logout.php";
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>

  <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
  </script>
</body>

</html>
