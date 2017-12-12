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
  $sql_select = "SELECT rec_img FROM t_receipt WHERE rec_id = '$n_id'";
  $res_select = mysqli_query($conn, $sql_select);
  $act_img = mysqli_fetch_row($res_select);
  $filename = $act_img[0];
  unlink('../images/slips/'.$filename);

  // Delete Data

  $strSQL = "DELETE FROM t_receipt WHERE rec_id = '$n_id'";
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
