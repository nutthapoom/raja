<?php
require_once '../function/session.php';
$de_titile = "คุณต้องการลบกิจกรรมหรือไม่ ?";
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
          <i class="fa fa-picture-o"></i> Activity Manage<span class="float-right"><a href="./activity-add.php" class="btn btn-outline-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มกิจกรรม</a></span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">Activity Topic</th>
                  <th class="text-center">Activity Type</th>
                  <th class="text-center">Activity Image</th>
                  <th class="text-center">Status</th>
                  <th class="text-center" width="80px">Date Create</th>
                  <th class="text-center" width="220px">Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query  = "SELECT a.*, a.date_create as act_date, b.* FROM t_activ AS a LEFT JOIN t_activ_type AS b ON a.atype_id = b.atype_id";
                $res = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tr>
                  <td><?php echo $row["act_topic"]; ?></td>
                  <td class="text-center"><?php echo $row["atype_name"]; ?></td>
                  <td class="text-center"><img src="../images/activ/<?php echo $row['act_img']; ?>" width="auto" height="50px"></td>
                  <td class="text-center"><?php if ($row['act_hot'] == "1"){?>
                    <a href="../function/change-act-status-0.php?id=<?= $row["act_id"]; ?>" class="btn btn-success btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> แสดงในหน้าแรก</a>
                  <?php }else { ?>
                    <a href="../function/change-act-status-1.php?id=<?= $row["act_id"]; ?>" class="btn btn-danger btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> ไม่แสดง</a>
                  <?php } ?></td>
                  <td class="text-center"><?php echo $row["act_date"]; ?></td>
                  <td class="text-center">
                    <a href="activity-detail.php?id=<?= $row["act_id"]; ?>" class="btn btn-outline-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-search" aria-hidden="true"></i> ภาพประกอบ</a>
                    <a href="activity-edit.php?id=<?= $row["act_id"]; ?>" class="btn btn-outline-warning btn-sm" role="button" aria-pressed="true"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-href="../function/act-delete.php?id=<?= $row["act_id"]; ?>"><i class="fa fa-trash-o fa-lg"></i>
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

  <script>
    $('#deleteModal').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    </script>
</body>
</html>
