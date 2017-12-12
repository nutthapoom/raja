<?php
require_once './session.php';
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
   $sql_select = "SELECT cimg_img FROM t_cause_img WHERE cimg_id = '".$id."'";
   $res_select = mysqli_query($conn, $sql_select);
   $news_img = mysqli_fetch_row($res_select);
   $filename = $news_img[0];
   unlink('../images/causes/img/'.$filename);

   // Delete Data
   $str = "DELETE FROM t_cause_img WHERE cimg_id = '".$id."'";
   $obj = mysqli_query($conn,$str);
 }
}
  mysqli_close($conn);
?>
