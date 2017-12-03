<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donation || Responsive HTML 5 Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/favicons/favicon-16x16.png" sizes="16x16">



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
                    <a href="index.html">หน้าหลัก</a>
                </li>
                <li>
                    ข่าวประชาสัมพันธ์
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="team-style-1 sec-padd2">
  <div class="container">
    <div class="section-title center">
      <h2>ข่าว<span class="thm-color">ประชาสัมพันธ์</span></h2>
    </div>
  </div>
</section>


<section class="all-blog blog-section sec-padd2">
    <div class="container">

        <div class="row">
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="../images/blog/1.jpg" alt="News"></a>
                        <div class="inner-box">

                        </div>

                    </figure>
                    <div class="lower-content">
                        <div class="category">Jan 05, 2017</div>
                        <div class="content">
                            <div class="post-meta">By Fardinad  |  10 Comments </div>
                            <a href="blog-details.html"><h4>Education For All Campaign</h4></a>
                            <div class="text"><p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p></div>
                        </div>
                    </div>
                </div>

            </article>
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="../images/blog/2.jpg" alt="News"></a>
                        <div class="inner-box">

                        </div>

                    </figure>
                    <div class="lower-content">
                        <div class="category">Feb 08, 2017</div>
                        <div class="content">
                            <div class="post-meta">By jacob  |  10 Comments </div>
                            <a href="blog-details.html"><h4>Donation food for childrens</h4></a>
                            <div class="text"><p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
                        </div>
                    </div>
                </div>

            </article>
            <article class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="../images/blog/3.jpg" alt="News"></a>
                        <div class="inner-box">

                        </div>

                    </figure>
                    <div class="lower-content">
                        <div class="category">Mar 12, 2017</div>
                        <div class="content">
                            <div class="post-meta">By Alfred  |  10 Comments </div>
                            <a href="blog-details.html"><h4>Helping Kids Grow Up Stronger</h4></a>
                            <div class="text"><p>Soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.</p></div>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>
</section>

<!--Footer Bottom-->
 <section class="footer-bottom">
    <div class="container">
        <p class="center"><a href="blog-1.html#">Copyrights © 2017</a> All Rights Reserved. Powered by <a href="blog-1.html#">Donation</a></p>
    </div><!-- /.container -->
</section>

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

            <form  action="blog-1.html#" class="donate-form default-form">
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
