<?php
require_once '../libs/conn.php';

$news_id = $_GET['id'];

$query  = "SELECT * FROM t_news WHERE news_id='$news_id'";
$res = mysqli_query($conn,$query);
$row  = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajavithihospitalfoundation</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css?v=1005">
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
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.php">หน้าหลัก</a>
                </li>
                <li>
                    รายละเอียดข่าว
                </li>
            </ul>
        </div>
    </div>
</div>


<section class="blog-single-post blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="post-area sec-form">
                    <article class="classic-blog-news">
                        <figure class="img-holder">
                            <img src="../images/news/<?php echo $row["news_img"]; ?>" alt="News">
                            <!-- <div class="inner-box">

                            </div> -->
                        </figure>
                        <div class="lower-content">
                            <div class="share-box clearfix">
                                <!-- <ul class="tag-box pull-left"> -->
                                    <div class="category">Mar 12, 2017</div>
                                <div class="social-box pull-right">
                                <span>Share <i class="fa fa-share-alt"></i></span>
                                <ul class="list-inline social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 content">
                              <div class="post-meta">By Admin</div>
                              <h4><?php echo $row["news_topic"]; ?></h4></a>
                              <div class="text">
                                <p>&emsp;&emsp;<?php echo $row["news_detail"]; ?></p>
                              </div>
                              <p>&emsp;</p>
                              <?php
                                $query_img  = "SELECT * FROM t_news_img WHERE news_id = '$news_id'";
                                $res_img = mysqli_query($conn,$query_img);
                                if(mysqli_num_rows($res_img) > 0){
                                ?>
                              <div class="section-title">
                                <h5>&emsp;&emsp;<span class="thm-color">รูปภาพประกอบ</span></h5>
                              </div>
                              <section class="gallery .no-padd style-2">
                                <?php
                                while($row_img = mysqli_fetch_assoc($res_img))
                                  {
                                ?>
                                <article class="col-md-4 col-sm-6 col-xs-12 filter-item Children">
                                  <div class="item">
                                    <img src="../images/news/img/<?php echo $row_img["nimg_img"]; ?>" alt="">
                                      </div>
                                </article>
                                <?php
                                  }
                                ?>
                              </section>
                          <?php
                            }
                            ?>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="blog-sidebar sec-form20">
                    <div class="popular_news">
                        <div class="section-title style-2">
                            <h4>ข่าวอื่นที่น่าสนใจ</h4>
                        </div>

                        <div class="popular-post">
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="../images/blog/thumb3.jpg" alt=""></a></div>
                                <a href="#"><h4>New Award To Support <br>Children Affected by Crises</h4></a>
                                <div class="post-info">October 21, 2016</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="../images/blog/thumb4.jpg" alt=""></a></div>
                                <a href="#"><h4>Help promote girl's Education <br>in the world</h4></a>
                                <div class="post-info">January 14, 2016</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="../images/blog/thumb5.jpg" alt=""></a></div>
                                <a href="#"><h4>Clean poor urban areas to <br>protect from pollution.</h4></a>
                                <div class="post-info">December 17, 2015</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
