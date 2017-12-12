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
  $n_id = $_GET['id'];
// ลบรูปข่าว
  $sql_select = "SELECT cause_img FROM t_cause WHERE cause_id = '$n_id'";
  $res_select = mysqli_query($conn, $sql_select);
  $cause_img = mysqli_fetch_row($res_select);
  $filename = $cause_img[0];
  unlink('../images/causes/'.$filename);
// ลบรูปประกอบข่าว
  $sql_img = "SELECT * FROM t_cause_img WHERE cause_id = '$n_id'";
  $res_img = mysqli_query($conn, $sql_img);
  while($row = mysqli_fetch_assoc($res_img))
  {
  unlink('../images/causes/img/'.$row["cimg_img"]);
  }

  // Delete Data
  $str = "DELETE FROM t_cause_img WHERE cause_id = '$n_id'";
  $obj = mysqli_query($conn,$str);

  $strSQL = "DELETE FROM t_cause WHERE cause_id = '$n_id'";
  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
    ?>
      <script language="javascript">
          window.location.href = "../manage/cause.php"
      </script>
    <?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>
