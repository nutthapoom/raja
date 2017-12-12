<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  </body>
</html>
<?php
  require_once './session.php';
  date_default_timezone_set("Asia/Bangkok");
  $m_fname = 	$_POST['inputName'];
  $m_lname = $_POST['inputLastName'];
  $m_mail = $_POST['inputEmail'];
  $m_tel = $_POST['inputPhone'];
  $m_user = $_POST['inputUser'];
  $m_pass = hash('sha256', $_POST['inputPassword']);

  $query = "SELECT mem_user FROM t_member WHERE mem_user = '$m_user' ";
  $res = mysqli_query($conn,$query);
  $row  = mysqli_num_rows($res);
  $mtype = 1;
  $i = 0;

  if ($row > $i) {
    include_once'../script/username.php';
  }else {

  //Insert Data
  $strSQL = "INSERT INTO t_member";
  $strSQL .= "(mem_id, mem_fname, mem_lname, mem_mail, mem_phone, mem_user, mem_pass, date_create,mtype_id)";
  $strSQL .= "VALUES ";
  $strSQL.= "('','$m_fname','$m_lname','$m_mail','$m_tel','$m_user','$m_pass','".date('Y-m-d H:i:s')."','$mtype')";

  $objQuery = mysqli_query($conn,$strSQL);

  if($objQuery){
  ?>
    <script language="javascript">
        window.location.href = "../manage/login.php"
    </script>
  <?php
  }else {
    echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
  }

}

  mysqli_close($conn);
?>
