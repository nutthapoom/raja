<?php
require_once './session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

  </body>
</html>
<?php
  date_default_timezone_set("Asia/Bangkok");
  $n_id = $_GET['id'];

  //Update Data
  $strSQL = "UPDATE t_receipt SET rec_state = '1'";
  $strSQL .= "WHERE rec_id = '$n_id'";
  $objQuery = mysqli_query($conn,$strSQL);
  if($objQuery){
?>
  <script language="javascript">
    window.location.href = "../manage/transfer.php"
  </script>
<?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>