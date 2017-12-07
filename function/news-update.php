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
  $n_id = 	$_POST['n_id'];
  $n_topic = 	$_POST['inputTopic'];
  $n_detail = 	$_POST['inputDetail'];

  if (is_uploaded_file($_FILES['inputImg']['tmp_name'])){
    //Delete old Image
    $sql_select = "SELECT news_img FROM t_news WHERE news_id = '$n_id'";
    $result_img = mysqli_query($conn, $sql_select);
    $row_img = mysqli_fetch_assoc($result_img);
    $img_old = $row_img['news_img'];
    unlink("../images/news/".$img_old);

    //upload image
    $image_path = "../images/news/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputImg']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_image_name = 'n_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

    $allowedExts = array("jpg", "jpeg", "gif", "png");
    $ImageName   = str_replace(' ','-',strtolower($_FILES['inputImg']['name']));
    $ImageType = $_FILES['inputImg']['type']; //"image/png", image/jpeg etc.
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);

  if(!in_array($ImageExt, $allowedExts))
  {
      // include_once'../script/upload_fail.php';
  }

  //upload image
  $image_upload_path = $image_path.$new_image_name;
  $success = move_uploaded_file($_FILES['inputImg']['tmp_name'],$image_upload_path);
  $sql_image = "UPDATE t_news SET news_img = '$new_image_name' WHERE news_id = '$n_id'";
  mysqli_query($conn,$sql_image);
  if($success == false){
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
    }
  }

  //Update Data
  $strSQL = "UPDATE t_news SET news_topic = '$n_topic', news_detail = '$n_detail', date_change = '".date('Y-m-d H:i:s')."' ";
  $strSQL .= "WHERE news_id = '$n_id'";

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
<script language="javascript">
function goBack() {
    window.location.href = "../manage/album.php"
}
</script>
