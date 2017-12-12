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
  $s_id = $_GET['id'];

  //Update Data
  $strSQL = "UPDATE t_slide SET slide_hot = '0'";
  $strSQL .= "WHERE slide_id = '$s_id'";
  $objQuery = mysqli_query($conn,$strSQL);
  if($objQuery){
?>
  <script language="javascript">
    window.location.href = "../manage/slide.php"
  </script>
<?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>
