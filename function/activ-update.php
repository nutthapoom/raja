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
    $sql_select = "SELECT act_img FROM t_activ WHERE act_id = '$n_id'";
    $result_img = mysqli_query($conn, $sql_select);
    $row_img = mysqli_fetch_assoc($result_img);
    $img_old = $row_img['act_img'];
    unlink("../images/activ/".$img_old);

    //upload image
    $image_path = "../images/activ/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputImg']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_image_name = 'a_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

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
  $sql_image = "UPDATE t_activ SET act_img = '$new_image_name' WHERE act_id = '$n_id'";
  mysqli_query($conn,$sql_image);
  if($success == false){
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
    }
  }

  //Update Data
  $strSQL = "UPDATE t_activ SET act_topic = '$n_topic', act_detail = '$n_detail', date_change = '".date('Y-m-d H:i:s')."' ";
  $strSQL .= "WHERE act_id = '$n_id'";

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
