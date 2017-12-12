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

	<link rel="stylesheet" href="css/style.css?v=1007">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="apple-touch-icon" sizes="180x180" href="../images/fvicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="../images/fvicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../images/fvicons/favicon-16x16.png" sizes="16x16">



</head>
<body>
<div class="boxed_wrapper">
<?php
	include "./temp/navbar.html";
?>


<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/slider/slide-1.jpg" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
          <div class="slide-content-box">
              <div class="button">
                  <a class="thm-btn donate-box-btn" href="medical-donate.php">บริจาค</a>
              </div>
          </div>
				</div>
      </div>
      <div class="item">
        <img src="../images/slider/slide-2.jpg" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
          <div class="slide-content-box">
              <div class="button">
                  <a class="thm-btn donate-box-btn" href="medical-donate.php">บริจาค</a>
              </div>
          </div>
				</div>
      </div>
      <div class="item">
        <img src="../images/slider/slide-3.jpg" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
          <div class="slide-content-box">
              <div class="button">
                  <a class="thm-btn donate-box-btn" href="medical-donate.php">บริจาค</a>
              </div>
          </div>
				</div>
      </div>
      <div class="item">
        <img src="../images/slider/slide-4.jpg" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
          <div class="slide-content-box">
              <div class="button">
                  <a class="thm-btn donate-box-btn" href="medical-donate.php">บริจาค</a>
              </div>
          </div>
				</div>
      </div>
    </div>



    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
<!--End rev slider wrapper-->
<section class="urgent-cause2 sec-padd3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="section-title">
                    <h2>ศูนย์การแพทย์ <span class="thm-color">ราชวิถี</span></h2>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12"><div class="link float_right"><a href="./cause.php" class="thm-btn style-2">เคสทั้งหมด</a></div></div>
        </div>
				<?php
				$query_img  = "SELECT * FROM t_cause WHERE cause_hot = '1' ORDER BY cause_id DESC LIMIT 3";
				$res_img = mysqli_query($conn,$query_img);
				if(mysqli_num_rows($res_img) > 0){
					?>
					<div class="row">
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
<section class="gallery with-bg sec-padd2">
    <div class="container">
        <div class="section-title center">
            <h2>ร่วมสมทบทุน <span class="thm-color">ซื้อเครื่องมือแพทย์</span></h2>
        </div>
        <div class="gallery-carousel">
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s1.jpg" alt="">
                </div>
            </article>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s2.jpg" alt="">
                </div>
            </article>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s3.jpg" alt="">
                </div>

            </article>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s4.jpg" alt="">
                </div>

            </article>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s5.jpg" alt="">
                </div>

            </article>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/slider/s6.jpg" alt="">
                </div>
            </article>
        </div>
    </div>

</section>
<section class="about sec-form40">
    <div class="container">
        <div class="section-title2 center">
            <h2>วัตถุประสงค์ของ <span class="thm-color">มูลนิธิโรงพยาบาลราชวิถี</span></h2>
        </div>
        <div class="row">
            <article class="col-md-6 col-sm-12 left-column">
                <div class="img-box2"><img src="../images/content/logo.png" alt=""></div><br><br>
            </article>
            <article class="col-md-6 col-sm-6 col-xs-12">
                <div class="content">
                    <div class="text">
											<p>&emsp;</p>
											<p>&emsp;</p>
											<p><h4>- เพื่อช่วยเหลือผู้ป่วยที่ขาดแคลนทุนทรัพย์</h4></p><br>
												<p><h4>- เพื่อช่วยเหลือในด้านการศึกษา ฝึกอบรม วิจัย สวัสดิการของเจ้าหน้าที่โรงพยาบาลราชวิถี</h4></p><br>
												<p><h4>- เพื่อช่วยเหลือในกิจการของโรงพยาบาล</h4></p><br>
												<p><h4>- ไม่ดำเนินการเกี่ยวกับการเมืองแต่ประการใด</h4></p><br>
												<p><h4>- เพื่อร่วมมือกับองค์กรการกุศลอื่นๆ เพื่อสาธารณะประโยชน์</h4></p><br>
                    </div><br>
                    <!-- <div class="link"><a href="index.html#" class="thm-btn style-1">Read More</a></div> -->
                </div>
            </article>
        </div>

    </div>
</section>
<section class="gallery with-bg sec-padd">
    <div class="container">
        <div class="section-title center">
            <h2>ข่าวกิจกรรม <span class="thm-color">มูลนิธิโรงพยาบาลราชวิถี</span></h2>
        </div>
        <div class="gallery-carousel">
					<?php
					$query_act  = "SELECT * FROM t_activ WHERE act_hot = '1' ORDER BY act_id DESC LIMIT 3";
					$res_act = mysqli_query($conn,$query_act);
					if(mysqli_num_rows($res_act) > 0){
						while($row_act = mysqli_fetch_assoc($res_act))
						{
						?>
            <article class="item">
                <div class="inner-box">
                    <img src="../images/activ/<?php echo $row_act['act_img']; ?>" alt="">
                    <div class="overlay">
                        <div class="top">
                            <div class="box">
                                <div class="content">
                                    <a data-group="1" href="../images/activ/<?php echo $row_act['act_img']; ?>" class="img-popup thm-btn">ดูกิจกรรม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
						<?php
							}
						}
						?>
        </div>
    </div>
</section>
<section class="blog-section sec-padd2">
    <div class="container">
			<div class="section-title center">
					<h2>ข่าวประชาสัมพันธ์ <span class="thm-color">มูลนิธิโรงพยาบาลราชวิถี</span></h2>
			</div>
			<?php
			$query_news  = "SELECT * FROM t_news WHERE news_hot = '1' ORDER BY news_id DESC LIMIT 3";
			$res_news = mysqli_query($conn,$query_news);
			if(mysqli_num_rows($res_news) > 0){
				?>
				<div class="row">
				<?php
				while($row_news = mysqli_fetch_assoc($res_news))
				{
				?>
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="news-details.php?id=<?php echo $row_news['news_id']; ?>"><img src="../images/news/<?php echo $row_news['news_img']; ?>" alt="News"></a>
                        <div class="inner-box">

                        </div>

                    </figure>
                    <div class="lower-content">
                        <div class="category"><?php echo $row_news['date_change']; ?></div>
                        <div class="content">
                            <a href="news-details.php?id=<?php echo $row_news['news_id']; ?>"><h4><?php echo $row_news['news_topic']; ?></h4></a>
                            <div class="text"><p></p></div>
                        </div>
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
