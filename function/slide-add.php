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
  $s_title = 	$_POST['inputName'];
  $s_detail = 	$_POST['inputDetail'];
  $s_hot = 1;
  //PART 3: Defining variables
  if (isset($_FILES['inputFile']['name']))// do this, otherwise you'll have a notice message
  {
    $image_path = "../images/slide/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputFile']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_file_name = 's_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

    $allowedExts = array("jpg", "jpeg", "gif", "png");
    $ImageName   = str_replace(' ','-',strtolower($_FILES['inputFile']['name']));
    $ImageType = $_FILES['inputFile']['type']; //"image/png", image/jpeg etc.
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);

  if(!in_array($ImageExt, $allowedExts))
  {
    // include_once'../script/update_fail.php';
  }

  //upload image


  $image_upload_path = $image_path.$new_file_name;
  $success = move_uploaded_file($_FILES['inputFile']['tmp_name'],$image_upload_path);
  if($success == false){
    // echo "ไม่สามารถ upload ไฟล์ได้";
    exit();
  }

  //Insert Data
  $strSQL = "INSERT INTO t_slide";
  $strSQL .= "(slide_id, slide_title, slide_detail, slide_img, slide_hot, date_create, mem_id)";
  $strSQL .= "VALUES ";
  $strSQL.= "('','$s_title','$s_detail','$new_file_name','$s_hot','".date('Y-m-d H:i:s')."','1')";

  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
?>
<script language="javascript">
  window.location.href = "../manage/slide.php"
</script>
<?php
    // include_once'../script/success_save.php';
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

}
  mysqli_close($conn);
?>
<script language="javascript">
function goBack() {
    // window.location.href = "../manage/slide.php"
}
</script>
