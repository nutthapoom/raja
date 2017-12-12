<?php include "../libs/conn.php"; ?>
<!DOCTYPE html>
<html>
 <head>
  <title>How to Make Dynamic Bootstrap Carousel with PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
    <div class="row">
      <div id="mycarousel" class="carousel slide" dataride="carousel">
        <ol class="carousel-indicators">
          <?php
          $a = 0;
          $query = "SELECT * FROM t_slide";
          $sql = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($sql))
          {
            ?>
            <li data-target="#mycarousel" data-slide-to="<?php echo
            $a++; ?>"></li>
          <?php } ?>
        </ol>

        <div class="carousel-inner" role="listbox">
          <?php
          $queryy = "SELECT * FROM t_slide";
          $sqll = mysqli_query($conn,$queryy);
          while($img = mysqli_fetch_array($sqll))
          {
            ?>
            <div class="item">
              <img src="images/slider/<?php echo $img['slide_img']; ?>" class="imgresponsive" alt="<?php echo $img['slide_img']; ?>"/>
            </div>
          <?php } ?>

        </div><!--/carousel-inner-->

        <a href="#mycarousel" class="left carousel-control" dataslide="prev" role="button">
          <i class="fa fa-angle-left prevSlide"></i>
        </a>
        <a href="#mycarousel" class="right carousel-control" dataslide="next" role="button">
          <i class="fa fa-angle-right nextSlide"></i>
        </a>
      </div><!--carousel slide-->
    </div><!-- /row-->
  </div>
 </body>
</html>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript"
src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
 $('.carousel-indicators li:nth-child(1)').addClass('active');
 $('.item:nth-child(1)').addClass('active');

});
</script>
