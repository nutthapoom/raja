<?php
require_once '../function/session.php';
$n_id = $_GET['id'];

$query  = "SELECT a.*, b.* FROM t_activ AS a LEFT JOIN t_activ_type AS b ON a.atype_id = b.atype_id WHERE act_id='$n_id'";
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
            <h1>Edit News And Activity</h1>
            <form action="../function/activ-update.php" method="post" enctype="multipart/form-data">
              <!-- Text input-->
              <div class="form-group hidden">
                <div class="col-sm-8">
                  <input type="hidden" name="n_id" value="<?php echo $row['act_id']; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputTopic" class="col-sm-2 col-form-label">หัวข้อข่าว</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputTopic" name="inputTopic" value="<?php echo $row['act_topic']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">ประเภทข่าว</div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputType" name="inputType" value="<?php echo $row['atype_name']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Image</div>
                <div class="col-sm-10">
                  <div class="form-group">
                    <span><?php if ($row['act_img'] != ""){?><img src="../images/activ/<?php echo $row['act_img']; ?>" width="auto" height="200"><?php }else {
                   ?><div class="alert alert-danger"><strong>ไม่มีรูปภาพ !</strong></div><?php } ?>
                    </span>
                    <br /><br />
                    <input type="file" class="form-control-file" id="inputImg" name="inputImg">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">สถานะ</div>
                <div class="col-sm-10">
                      <?php if ($row['act_hot'] == "1"){?>
                        <div class="alert alert-success" role="alert">
                          แสดงกิจกรรมในหน้าแรก
                        </div>
                      <?php }else { ?>
                        <div class="alert alert-danger" role="alert">
                          ไม่แสดงกิจกรรมในหน้าแรก
                        </div>
                      <?php } ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDetails" class="col-sm-2 col-form-label">รายละเอียด</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputDetails" name="inputDetail" rows="3"><?php echo $row['act_detail']; ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                  <a href="./activity.php" class="btn btn-secondary">ยกเลิก</a>
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
    <script src="./ckeditor/ckeditor.js" type="text/javascript"></script>
  </div>
</body>

</html>
