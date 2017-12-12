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
  $s_id = 	$_POST['s_id'];
  $s_title = $_POST['inputName'];
  // $s_detail = $_POST['inputDetail'];

  if (is_uploaded_file($_FILES['inputImg']['tmp_name'])){
    //Delete old Image
    $sql_select = "SELECT slide_img FROM t_slide WHERE slide_id = '$s_id'";
    $result_img = mysqli_query($conn, $sql_select);
    $row_img = mysqli_fetch_assoc($result_img);
    $img_old = $row_img['slide_img'];
    unlink("../images/slider/".$img_old);

    //upload image
    $image_path = "../images/slider/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputImg']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_image_name = 's_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

    $allowedExts = array("jpg", "jpeg", "gif", "png");
    $ImageName   = str_replace(' ','-',strtolower($_FILES['inputImg']['name']));
    $ImageType = $_FILES['inputImg']['type']; //"image/png", image/jpeg etc.
    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);

  if(!in_array($ImageExt, $allowedExts))
  {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

  //upload image
  $image_upload_path = $image_path.$new_image_name;
  $success = move_uploaded_file($_FILES['inputImg']['tmp_name'],$image_upload_path);
  $sql_image = "UPDATE t_slide SET slide_img='$new_image_name' WHERE slide_id = '$s_id'";
  mysqli_query($conn,$sql_image);
  if($success == false){
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
    }
  }

  //Update Data
  $strSQL = "UPDATE t_slide SET slide_title = '$s_title'";
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
