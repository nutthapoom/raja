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
  $s_id = $_GET['id'];

  $sql_select = "SELECT slide_img FROM t_slide WHERE slide_id = '$s_id'";
  $res_select = mysqli_query($conn, $sql_select);
  $slide_img = mysqli_fetch_row($res_select);
  $filename = $slide_img[0];
  unlink('../images/slide/'.$filename);

  // Delete Data
  $str = "DELETE FROM t_slide WHERE slide_id = '$s_id'";
  $obj = mysqli_query($conn,$str);

  if($obj){
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
