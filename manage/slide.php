<?php
require_once '../function/session.php';
$de_titile = "คุณต้องการลบรูปภาพหรือไม่ ?";
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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-picture-o"></i> Slide Manage<span class="float-right"><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addslideModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มรูปภาพสไลด์</button></span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Image</th>
                  <th class="text-center" width="140px">Status</th>
                  <th class="text-center" width="140px">Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query  = "SELECT * FROM t_slide";
                $res = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tr>
                  <td><?php echo $row["slide_title"]; ?></td>
                  <td class="text-center"><img src="../images/slider/<?php echo $row['slide_img']; ?>" width="auto" height="50px"></td>
                  <td class="text-center">
                    <?php if ($row['slide_hot'] == "1"){?>
                      <a href="../function/change-status0.php?id=<?= $row["slide_id"]; ?>" class="btn btn-success btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> แสดง</a>
                    <?php }else { ?>
                      <a href="../function/change-status1.php?id=<?= $row["slide_id"]; ?>" class="btn btn-danger btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ไม่แสดง</a>
                    <?php } ?>
                  </td>
                  <td class="text-center">
                    <a href="slide-edit.php?id=<?= $row["slide_id"]; ?>" class="btn btn-outline-warning btn-sm" role="button" aria-pressed="true"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-href="../function/slide-delete.php?id=<?= $row["slide_id"]; ?>"><i class="fa fa-trash-o fa-lg"></i>
                      ลบ
                    </button>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
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
      include "./temp/delete.php";
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="addslideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header detailtitle titpopup">
          <h5 class="modal-title" id="exampleModalLabel">เพิ่มภาพสไลด์</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../function/slide-add.php" method="post"  id="slide_add" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group row">
              <label for="inputName" class="col-sm-2 col-form-label">ชื่อภาพ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Input Name">
              </div>
            </div>
            <!-- <div class="form-group row">
              <label for="inputDetails" class="col-sm-2 col-form-label">รายละเอียด</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="inputDetails" name="inputDetail" rows="2"></textarea>
              </div>
            </div> -->
            <div class="form-group row">
              <div class="col-sm-2">ไฟล์รูปภาพ</div>
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="file" class="form-control-file" id="inputFile" name="inputFile">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    $('#deleteModal').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    </script>
</body>
</html>
