<?php
session_start();
if(isset($_SESSION['mem_type_id'])){
  require_once '../libs/conn.php';
  $session_login = $_SESSION['mem_id'];
  $qry_user = "SELECT * FROM t_member WHERE mem_id = '$session_login'";
  $result_user = mysqli_query($conn,$qry_user);

  if($result_user){
    $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
    $s_login_id = $row_user['mem_id'];
    mysqli_free_result($result_user);
  }
  // $sql = "UPDATE tbl_member SET  last_login = '".date('Y-m-d H:i:s')."' WHERE mem_id = '$session_login' ";
  // $result = mysqli_query($conn,$sql);

  $inactive = 1800; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
      ?>
        <script language="javascript">
            window.location.href = "../function/logout.php"
        </script>
      <?php
    }
}
$_SESSION['timeout'] = time();
}else{
  ?>
    <script language="javascript">
        window.location.href = "../manage/login.php"
    </script>
  <?php
}
?>
