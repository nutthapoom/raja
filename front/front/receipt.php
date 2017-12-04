<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajavithihospitalfoundation</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css?v=1001">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/favicons/favicon-16x16.png" sizes="16x16"> -->



</head>
<body>

<div class="boxed_wrapper">
  <?php
  	include "./temp/navbar.html";
  ?>
  <div class="inner-banner has-base-color-overlay text-center" style="background: url(../images/background/4.jpg);">
      <div class="container">
          <div class="box">
              <h1>ขอใบเสร็จรับบริจาค</h1>
          </div>
      </div>
  </div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.html">หน้าหลัก</a>
                </li>
                <li>
                  ขอใบเสร็จรับบริจาค
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="team-style-1 sec-form">
  <div class="container">
    <div class="section-title center">
      <h2>แบบฟอร์ม <span class="thm-color">แจ้งการโอนเงิน</span></h2>
    </div>
  </div>
</section>


<section class="all-blog blog-section sec-form2">
    <div class="container">
      <div class="row">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">ข้อมูลผู้บริจาค ( กรุณากรอกรายละเอียดให้ครบถ้วนในส่วนที่มีเครื่องหมาย * )</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">ชื่อและนามสกุล/หน่วยงาน/องค์กรณ์/บริษัท</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">โทรศัพท์</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">อีเมล</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">จำนวนเงิน</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div><div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">วิธีการบริจาค</label>
                <div class="col-sm-7">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      เคาน์เตอร์เซอร์วิส
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      เช็ค สั่งจ่าย "มูลนิธิโรงพยาบาลราชวิถี"
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      ธนาณัติ สั่งจ่าย "มูลนิธิโรงพยาบาลราชวิถี "
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                       เคาน์เตอร์ ธนาคาร
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      โอนเงินผ่าน ATM
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">โอนเงินผ่านธนาคาร</label>
                <div class="col-sm-7">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">วัน เวลา ที่โอน</label>
                <div class="col-sm-7">
                  <input type="datetime" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">ชื่อ นามสกุล และที่อยู่ที่ท่านต้องการให้ปรากฏในใบเสร็จ</label>
                <div class="col-sm-7">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">ชื่อ นามสกุล และที่อยู่ที่ท่านต้องการให้จัดส่งใบเสร็จ ( กรุณากรอกให้ถูกต้อง )</label>
                <div class="col-sm-7">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">การจัดส่งใบเสร็จ</label>
                <div class="col-sm-7">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      ทางอีเมล
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      ทางไปรษณีย์
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 col-md-offset-1 control-label">แนบภาพสลิปโอนเงิน ( gif jpg png)</label>
                <div class="col-sm-7">
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-7">
                  <button type="submit" class="btn btn-default">ยืนยัน</button>
                </div>
              </div>
            </form>
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
