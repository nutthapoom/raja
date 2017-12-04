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

if(isset($_FILES['imageInput']['tmp_name']))
{
	$num_files = count($_FILES['imageInput']['tmp_name']);//count file upload

	for($i=0; $i<$num_files; $i++)
	{
		if(!is_uploaded_file($_FILES['imageInput']['tmp_name'][$i]))
		{
			echo "no file upload!!";
		}else{
			$image_path = "../images/news-img/"; //the folder that stores your image
			$image_ext = pathinfo(basename($_FILES['imageInput']['name'][$i]), PATHINFO_EXTENSION);//นามสกุลไฟล์
			$new_image_name = 'img_'.uniqid().".".$image_ext;//uniqid() ค่าสุ่ม

      $allowedExts = array("jpg", "jpeg", "gif", "png");
      $ImageName   = str_replace(' ','-',strtolower($_FILES['imageInput']['name'][$i]));
      $ImageType = $_FILES['imageInput']['type'][$i]; //"image/png", image/jpeg etc.
      $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
      $ImageExt = str_replace('.','',$ImageExt);

    if(!in_array($ImageExt, $allowedExts))
    {
        // include_once'../script/upload_fail.php';
    }

			$image_upload_path = $image_path.$new_image_name;

			if(move_uploaded_file($_FILES['imageInput']['tmp_name'][$i], $image_upload_path))
			{
        $sql = "INSERT INTO t_news_img";
        $sql .= "(nimg_id, nimg_img, news_id, date_create)";
        $sql .= "VALUES ";
        $sql .= "('','$new_image_name','$n_id','".date('Y-m-d H:i:s')."')";
				mysqli_query($conn,$sql);

        if($sql == true){
      ?>
      <script language="javascript">
        window.location.href = "../manage/news.php";
      </script>
      <?php
          // include_once'../script/success_save.php';
        }else {
          echo "เกิดข้อผิดพลาด ".mysqli_error($conn);
        }
      }
		}
	}
}
?>
