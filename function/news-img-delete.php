<?php
require_once './session.php';
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
   $sql_select = "SELECT nimg_img FROM t_news_img WHERE nimg_id = '".$id."'";
   $res_select = mysqli_query($conn, $sql_select);
   $news_img = mysqli_fetch_row($res_select);
   $filename = $news_img[0];
   unlink('../images/news/img/'.$filename);

   // Delete Data
   $str = "DELETE FROM t_news_img WHERE nimg_id = '".$id."'";
   $obj = mysqli_query($conn,$str);
 }
}
  mysqli_close($conn);
?>
