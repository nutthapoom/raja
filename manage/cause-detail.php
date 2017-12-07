<?php
require_once '../libs/conn.php';
$n_id = $_GET['id'];
$de_titile = "คุณต้องการลบรูปภาพประกอบหรือไม่ ?";
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
      <?php
        $query  = "SELECT * FROM t_cause WHERE cause_id = '$n_id'";
        $res = mysqli_query($conn,$query);
        $row  = mysqli_fetch_assoc($res);
      ?>
      <div class="row">
        <div class="col-12">
          <div class="container">
            <h2>รายละเอียด</h2>
            <form method="post" enctype="multipart/form-data">
              <!-- Text input-->
              <div class="form-group hidden">
                <div class="col-sm-8">
                  <input type="hidden" name="n_id" value="<?php echo $row['cause_id']; ?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputTopic" class="col-sm-2 col-form-label">Topic</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputTopic" name="inputTopic" value="<?php echo $row['cause_topic']; ?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDetails" class="col-sm-2 col-form-label">รายละเอียด</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputDetails" name="inputDetail" rows="3" disabled><?php echo $row['cause_detail']; ?></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10">
                  <a href="./cause.php" class="btn btn-secondary">ย้อนกลับ</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <hr/>
    </hr/>
    <br/>
  </br/>
      <!-- Example DataTables Card-->
      <div class="container">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-picture-o"></i> ภาพประกอบ<span class="float-right"><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addimgModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มรูปภาพประกอบ</button></span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">Date Create</th>
                    <th class="text-center" width="140px"><button class="btn btn-outline-danger btn-sm" name="btn_delete" id="btn_delete"><i class="fa fa-trash-o fa-lg"></i> ลบที่เลือก</button></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query_img  = "SELECT * FROM t_cause_img WHERE cause_id = '$n_id'";
                  $res_img = mysqli_query($conn,$query_img);
                  if(mysqli_num_rows($res_img) > 0){
                    while($row_img = mysqli_fetch_assoc($res_img))
                    {
                  ?>
                  <tr id="<?php echo $row_img["cimg_id"]; ?>">
                    <td class="text-center"><img src="../images/causes/img/<?php echo $row_img['cimg_img']; ?>" width="auto" height="50px"></td>
                    <td class="text-center"><?php echo $row_img["date_create"]; ?></td>
                    <td class="text-center">
                      <input type="checkbox" name="customer_id[]" class="delete_customer" value="<?php echo $row_img["cimg_id"]; ?>" /></td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
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
    <script src="./ckeditor/ckeditor.js" type="text/javascript"></script>

  </div>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="addimgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header detailtitle titpopup">
          <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../function/cause-img-add.php" method="post"  id="slide_add" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group hidden">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <input type="hidden" name="n_id" value="<?php echo $row['cause_id']; ?>" class="form-control">
            </div>
          </div>
            <div class="form-group row">
              <div class="col-sm-2">Image File</div>
              <div class="col-sm-10">
                <div class="form-check">
                  <input type="file" class="form-control-file" id="imageInput" multiple name="imageInput[]">
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
<script>
$(document).ready(function(){

 $('#btn_delete').click(function(){

  if(confirm("คุณต้องการลบภาพประกอบหรือไม่ ?"))
  {
   var id = [];

   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });

   if(id.length === 0) //tell you if the array is empty
   {
    alert("กรุณาเลือกรูปภาพที่ต้องการลบ");
   }
   else
   {
    $.ajax({
     url:'../function/cause-img-delete.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }

    });
   }

  }
  else
  {
   return false;
  }
 });

});
</script>
</body>
</html>
