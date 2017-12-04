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

  $n_topic = 	$_POST['inputTopic'];
  $t_id = $_POST['inputType'];
  $n_link = $_POST['inputLink'];
  $n_hot = isset($_POST['inputCheck'])? 1 : 0;
  $n_detail = $_POST['inputDetail'];

  if (isset($_FILES['inputImg']['name']))// do this, otherwise you'll have a notice message
  {
    $image_path = "../images/news/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputImg']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_file_name = 'n_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

    $allowedExts = array("jpg", "jpeg", "gif", "png");
    $ImageName   = str_replace(' ','-',strtolower($_FILES['inputImg']['name']));
    $ImageType = $_FILES['inputImg']['type']; //"image/png", image/jpeg etc.
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);

  if(!in_array($ImageExt, $allowedExts))
  {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
    // include_once'../script/update_fail.php';
  }

  //upload image
  $image_upload_path = $image_path.$new_file_name;
  $success = move_uploaded_file($_FILES['inputImg']['tmp_name'],$image_upload_path);
  if($success == false){
    // echo "ไม่สามารถ upload ไฟล์ได้";
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
    exit();
  }

  //Insert Data
  $strSQL = "INSERT INTO t_news";
  $strSQL .= "(news_id, news_topic, news_detail, news_img, news_link, news_hot, date_create, ntype_id, mem_id)";
  $strSQL .= "VALUES ";
  $strSQL .= "('','$n_topic','$n_detail','$new_file_name','$n_link','$n_hot','".date('Y-m-d H:i:s')."','$t_id','1')";

  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
?>
<script language="javascript">
  window.location.href = "../manage/news.php"
</script>
<?php
    // include_once'../script/success_save.php';
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

}
  mysqli_close($conn);
?>
