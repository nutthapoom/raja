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
  $n_id = $_GET['id'];
// ลบรูปข่าว
  $sql_select = "SELECT news_img FROM t_news WHERE news_id = '$n_id'";
  $res_select = mysqli_query($conn, $sql_select);
  $news_img = mysqli_fetch_row($res_select);
  $filename = $news_img[0];
  unlink('../images/news/'.$filename);
// ลบรูปประกอบข่าว
  $sql_img = "SELECT * FROM t_news_img WHERE news_id = '$n_id'";
  $res_img = mysqli_query($conn, $sql_img);
  while($row = mysqli_fetch_assoc($res_img))
  {
  unlink('../images/news-img/'.$row["nimg_img"]);
  }

  // Delete Data
  $str = "DELETE FROM t_news_img WHERE news_id = '$n_id'";
  $obj = mysqli_query($conn,$str);

  $strSQL = "DELETE FROM t_news WHERE news_id = '$n_id'";
  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
    ?>
      <script language="javascript">
          window.location.href = "../manage/news.php"
      </script>
    <?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>
