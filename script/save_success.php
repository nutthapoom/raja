<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- Bootstrap Core CSS -->
    <link href="../front/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <!-- Modal -->
    <div id="chang" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">สำเร็จ ! </h4>
          </div>
          <div class="modal-body">
                <div class="text-center">
                    <p>
                      บันทึกข้อมูลสำเร็จ
                    </p>
                </div>
          </div>
          <div class="modal-footer">
            <!-- <div class="text-center"> -->
              <button type="button" class="btn btn-danger" onclick="goBack()">ตกลง</button>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../front/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../front/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $('#chang').modal('show');
    </script>
  </body>
</html>
