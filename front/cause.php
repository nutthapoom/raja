<?php
require_once '../libs/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajavithihospitalfoundation</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../images/fvicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/fvicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/fvicons/favicon-16x16.png" sizes="16x16">



</head>
<body>

<div class="boxed_wrapper">
  <?php
  	include "./temp/navbar.html";
  ?>
<div class="inner-banner has-base-color-overlay text-center" style="background: url(../images/background/5.jpg);">
    <div class="container">
        <div class="box">
            <h1>เคสทั้งหมด</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="./index.php">หน้าหลัก</a>
                </li>
                <li>
                    <a href="#">ศูนย์การแพทย์ราชวิถี</a>
                </li>

                <li>
                  เคสทั้งหมด
                </li>
            </ul>
        </div>
    </div>
</div>
<section class="urgent-cause2 with-bg sec-padd3">
    <div class="container">
      <div class="section-title center">
          <h2>เรื่องราวของชีวิต<span class="thm-color"> ที่ได้ไปต่อ</span></h2>
      </div>
      <?php
      $query_news  = "SELECT * FROM t_cause WHERE ctype_id = '2' ORDER BY cause_id DESC";
      $res_news = mysqli_query($conn,$query_news);
      if(mysqli_num_rows($res_news) > 0){
      ?>
        <div class="row col-md-12">
      <?php
        while($row_news = mysqli_fetch_assoc($res_news))
        {
      ?>
      <article class="item col-md-4 col-sm-6 col-xs-12">
          <figure class="img-box">
              <img src="../images/causes/<?php echo $row_news['cause_img']; ?>" alt="">
              <div class="overlay"><div class="inner-box"><div class="content-box"><a href="medical-donate.php" class="thm-btn style-2 donate-box-btn">บริจาค</a></div></div></div>
          </figure>

          <div class="content">
              <div class="text center">
                  <a href="cause-detail.php?id=<?php echo $row_news['cause_id']; ?>"><h4 class="title"><?php echo $row_news['cause_topic']; ?></h4></a>
                  <p></p>
              </div>
          </div>

      </article>
      <?php
        }
      ?>
      </div>
      <?php
      }
      ?>
    </div>
</section>

<section class="urgent-cause2 with-bg sec-form20">
    <div class="container">
      <div class="section-title center">
          <h2>ผู้ร่วมสร้างกุศล<span class="thm-color"> อันเป็นนิรันดร์</span></h2>
      </div>
      <?php
      $query_img  = "SELECT * FROM t_cause WHERE ctype_id = '1' ORDER BY cause_id DESC";
      $res_img = mysqli_query($conn,$query_img);
      if(mysqli_num_rows($res_img) > 0){
      ?>
        <div class="row col-md-12">
      <?php
        while($row_img = mysqli_fetch_assoc($res_img))
        {
      ?>
      <article class="item col-md-4 col-sm-6 col-xs-12">
          <figure class="img-box">
              <img src="../images/causes/<?php echo $row_img['cause_img']; ?>" alt="">
              <div class="overlay"><div class="inner-box"><div class="content-box"><a href="medical-donate.php" class="thm-btn style-2 donate-box-btn">บริจาค</a></div></div></div>
          </figure>

          <div class="content">
              <div class="text center">
                  <a href="cause-detail.php?id=<?php echo $row_img['cause_id']; ?>"><h4 class="title"><?php echo $row_img['cause_topic']; ?></h4></a>
                  <p></p>
              </div>
          </div>

      </article>
      <?php
        }
      ?>
      </div>
      <?php
      }
      ?>
    </div>
</section>

<!--Footer Bottom-->
<?php
	include "./temp/footer.html";
?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/imagezoom.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.polyglot.language.switcher.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/nouislider.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap-select.min.js"></script>


    <!-- revolution slider js -->
    <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>


    <script src="js/custom.js"></script>

</div>

</body>
</html>
