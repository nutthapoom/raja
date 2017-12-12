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
  $sql_select = "SELECT act_img FROM t_activ WHERE act_id = '$n_id'";
  $res_select = mysqli_query($conn, $sql_select);
  $act_img = mysqli_fetch_row($res_select);
  $filename = $act_img[0];
  unlink('../images/activ/'.$filename);
// ลบรูปประกอบข่าว
  $sql_img = "SELECT * FROM t_activ_img WHERE act_id = '$n_id'";
  $res_img = mysqli_query($conn, $sql_img);
  while($row = mysqli_fetch_assoc($res_img))
  {
  unlink('../images/activ/img/'.$row["aimg_img"]);
  }

  // Delete Data
  $str = "DELETE FROM t_activ_img WHERE act_id = '$n_id'";
  $obj = mysqli_query($conn,$str);

  $strSQL = "DELETE FROM t_active WHERE act_id = '$n_id'";
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
