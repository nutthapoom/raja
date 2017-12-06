<?php
require_once '../libs/conn.php';
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
  $strSQL = "UPDATE t_activ SET act_hot = '1'";
  $strSQL .= "WHERE act_id = '$n_id'";
  $objQuery = mysqli_query($conn,$strSQL);
  if($objQuery){
?>
  <script language="javascript">
    window.location.href = "../manage/activity.php"
  </script>
<?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>
