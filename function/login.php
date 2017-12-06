<?php
session_start();
require_once '../libs/conn.php';
  $user = $_POST['username'];
	$pass = hash('sha256', $_POST['password']);

  if($user == ''){
    echo "Check Username";
  }elseif ($pass == '') {
    echo "Check Password";
  }else{
    $query = "SELECT * FROM t_member
              WHERE mem_user = '$user'
              AND mem_pass = '$pass'";
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($res);
    if(!$row){
			include_once'../script/error_login.php';
    }else{
			//*** Session
			$_SESSION['mmem_id'] = $row['mem_id'];
			$_SESSION['mem_user'] = $row['mem_user'];
			session_write_close();
?>
        <script language="javascript">
            window.location.href = "../manage/index.html"
        </script>
<?php
		}
  }

}
	mysqli_close($conn);
?>
