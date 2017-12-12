<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  </body>
</html>
<?php
require_once '../libs/conn.php';
  date_default_timezone_set("Asia/Bangkok");

  $r_com = $_POST['companyInput'];
  $r_tel = $_POST['telInput'];
  $r_mail = $_POST['mailInput'];
  $r_money = $_POST['moneyInput'];
  $r_tranCheck = implode(',', $_POST['tranCheck']);
  $r_bank = $_POST['bankInput'];
  $r_date = $_POST['dateInput'];
  $r_send = $_POST['nsendInput'];
  $r_address = $_POST['addressInput'];
  $r_sendCheck = implode(',', $_POST['sendCheck']);
  $r_status = 0;

  if (isset($_FILES['inputImg']['name']))// do this, otherwise you'll have a notice message
  {
    $image_path = "../images/slips/"; //the folder that stores your image
    $image_ext = pathinfo(basename($_FILES['inputImg']['name']), PATHINFO_EXTENSION);//นามสกุลไฟล์
    $new_file_name = 's_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

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
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
    exit();
  }

  //Insert Data
  $strSQL = "INSERT INTO t_receipt";
  $strSQL .= "(rec_id, rec_name, rec_phone, rec_mail, rec_money, rec_tranCk, bank_id, date_tran, name_show, name_send, rec_sendCk, rec_img, date_create, rec_state)";
  $strSQL .= "VALUES ";
  $strSQL .= "('','$r_com','$r_tel','$r_mail','$r_money','".$r_tranCheck."','$r_bank','$r_date','$r_send','$r_address','".$r_sendCheck."','$new_file_name','".date('Y-m-d H:i:s')."','$r_status')";
  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
    include_once'../script/save_success.php';
  }else {
        echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

}
mysqli_close($conn);
?>
<script language="javascript">
function goBack() {
    window.location.href = "../manage/transfer.php"
}
</script>
