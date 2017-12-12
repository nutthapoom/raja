<?php
require_once '../libs/conn.php';

$news_id = $_GET['id'];

$query  = "SELECT * FROM t_cause WHERE cause_id='$news_id'";
$res = mysqli_query($conn,$query);
$row  = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css?v=1001">
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
                      <a href="#">ศูนการแพทย์ราชวิถี</a>
                  </li>

                  <li>
                    การรับบริจาค
                  </li>
              </ul>
          </div>
      </div>
  </div>


<section class="style-2">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="cause-area urgent-cause2 single-cause cause-list-bg sec-padd">
                    <articel class="item clearfix">
                      <figure class="img-holder">
                          <img src="../images/causes/<?php echo $row["cause_img"]; ?>" alt="News">
                          <!-- <div class="inner-box">

                          </div> -->
                      </figure>

                    </articel><br><br>

                    <div class="section-title">
                        <h2><span class="thm-color"><?php echo $row["cause_topic"]; ?></span></h2>
                    </div>
                    <div class="text">
                        <p>&emsp;<b><?php echo $row["cause_detail"]; ?>
                        </p>
                    </div><br><br>



                    <div class="share clearfix">
                        <div class="social-box float_left">
                            <span>Share <i class="fa fa-share-alt"></i></span>
                            <ul class="list-inline social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="float_right">
                            <a href="medical-donate.php" class="thm-btn style-2 donate-box-btn">บริจาค</a>
                        </div>
                    </div>




                </div>


            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar sec-padd">


                    <div class="popular_news">
                        <div class="section-title style-2">
                            <h4>การรับบริจาคอื่นๆ</h4>
                        </div>

                        <div class="popular-post">
                          <?php
                            $query_othr  = "SELECT * FROM t_cause WHERE cause_id != '$news_id' ORDER BY cause_id DESC LIMIT 7 ";
                            $res_othr = mysqli_query($conn,$query_othr);
                            if(mysqli_num_rows($res_othr) > 0){
                              while($row_othr = mysqli_fetch_assoc($res_othr))
                                {
                              ?>
                            <div class="item">
                                <div class="post-thumb"><a href="cause-details.php?id=<?php echo $row_othr['cause_id']; ?>"><img src="../images/causes/<?php echo $row_othr["cause_img"]; ?>" alt=""></a></div>
                                <a href="blog-details.html"><h4><?php echo $row_othr["cause_topic"]; ?></h4></a>
                                <div class="post-info"><i class="fa fa-calendar"></i><?php echo $row_othr["date_change"]; ?></div>
                            </div>
                            <?php
                                }
                              }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<<?php
	include "./temp/footer.html";
?>

    <!-- Scroll Top  -->
    <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
    <!-- preloader  -->
    <div class="preloader"></div>
    <div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner">


    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h4>How much would you like to donate:</h4>

            <form  action="single-cause.html#" class="donate-form default-form">
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="radio" id="donate-amount-1" name="donate-amount" />
                        <label for="donate-amount-1" data-amount="1000" >$1000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                        <label for="donate-amount-2" data-amount="2000">$2000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-3" name="donate-amount" />
                        <label for="donate-amount-3" data-amount="3000">$3000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-4" name="donate-amount" />
                        <label for="donate-amount-4" data-amount="4000">$4000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="5000">$5000</label>
                    </li>
                    <li class="other-amount">

                        <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                            <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"  />
                        </div>
                    </li>
                </ul>

                <h3>Donor Information</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <input type="text" name="fname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Additional Note">
                            </div>
                        </div>

                    </div>
                </div>

                <ul class="payment-option">
                    <li>
                        <h4>Choose your payment method:</h4>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Paypal</span>
                            </label>
                        </div>
                    </li>
                    <li>
                       <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Offline Donation</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Credit Card</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Debit Card</span>
                            </label>
                        </div>
                    </li>
                </ul>

                <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>


            </form>
        </div>
    </div>



    </div>
</div>

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
