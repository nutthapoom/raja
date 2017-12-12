<?php
session_start();
require_once '../libs/conn.php';
  $user = $_POST['userInput'];
	$pass = hash('sha256', $_POST['passInput']);

  if($user == ''){
    echo "Check Username";
  }elseif ($pass == '') {
    echo "Check Password";
  }else{
    $query = "SELECT * FROM t_member WHERE mem_user = '$user' AND mem_pass = '$pass'";
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($res);
    if(!$row){
			include_once'../script/error_login.php';
    }else{
			//*** Session
			$_SESSION['mem_id'] = $row['mem_id'];
			session_write_close();
?>
        <script language="javascript">
            window.location.href = "../manage/slide.php"
        </script>
<?php
		}
  }
	mysqli_close($conn);
?>
