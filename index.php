
<?php
require_once ('pages/connect.php');


?>
<!DOCTYPE html>
<html lang="fa">
  <head>
    <title>گروه کامپیوتر</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="وب سایت گروه کامپیوتر و انجمن علمی" />
    <meta
      name="keywords"
      content="انجمن علمی، گروه کامپیوتر، دانشگاه فنی و حرفه ای"
    />
    <!-- Load CSS Files -->
    <link rel="stylesheet" href="demo/css/style.css" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/mainstyle.css" />
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/sliderstyle.css" />
  </head>

  <body>
    <!-- Particle JS Container -->
    <div id="particles-js">
      <!-- Main Container -->
      <div id="wrapper">
        <!-- Text Top Header -->
        <header id="txtTitle">
          <h1>
            وب سایت <span> گروه کامپیوتر </span> و <span> انجمن علمی </span>
          </h1>
          <h2>
            دانشکده فنی و حرفه ای
            <span style="color:rgb(242, 38, 19)"> سیدالشهدا </span>
          </h2>
        </header>
        <!-- Main web site Navigation -->
        <nav id="mainNavigation">
          <ul>
            <li>
              <a href="./index.php">
                <i
                  class="fas fa-home"
                  style="font-size:34px; padding-top:10px;"
                ></i>
              </a>
            </li>
            <li>
              <div class="dropdown">
                <button class="dropbtn">
                  گروه کامپیوتر <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdownContent">
                  <a href="#">برنامه درسی</a> <a href="#">جزوه های درسی</a>
                  <a href="#">امکانات</a>
                </div>
              </div>
            </li>
            <li><a href="#anjoman.html">انجمن علمی</a></li>
            <li><a href="#aboutme.html">درباره ما</a></li>
          </ul>
        </nav>
        <!-- Top Header -->
        <header id="imageHeader">
          <!--
            <img
              id="picheader"
              src="images/topheader.png"
              alt="هدر اصلی وب سایت"
            />
          -->

          <div class="myslider">
            <!-- #region Jssor Slider Begin -->
            <div
              id="jssor_1"
              style="position:relative;margin:0 auto;top:0px;left:0px;width:1000px;height:480px;overflow:hidden;visibility:hidden;"
            >
              <!-- Loading Screen -->
              <div
                data-u="loading"
                class="jssorl-009-spin"
                style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);"
              >
                <img
                  style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                  src="img/spin.svg"
                />
              </div>
              <div
                data-u="slides"
                style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:480px;overflow:hidden;"
              >
                <div><img data-u="image" class="imgs1" src="images/slider/bg-1.jpg" /></div>
                <div><img data-u="image" class="imgs1" src="images/slider/bg-2.jpg" /></div>
                <div><img data-u="image" class="imgs1" src="images/slider/bg-3.jpg" /></div>
                <div><img data-u="image" class="imgs1" src="images/slider/bg-4.jpg" /></div>
              </div>
              <!-- Thumbnail Navigator -->

              <!-- Arrow Navigator -->
              <div
                data-u="arrowleft"
                class="jssora106"
                style="width:55px;height:55px;top:162px;left:30px;"
                data-scale="0.75"
              >
                <svg
                  viewbox="0 0 16000 16000"
                  style="position:absolute;top:0;left:0;width:100%;height:100%;"
                >
                  <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                  <polyline
                    class="a"
                    points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "
                  ></polyline>
                  <line
                    class="a"
                    x1="10573.9"
                    y1="8000"
                    x2="5426.1"
                    y2="8000"
                  ></line>
                </svg>
              </div>
              <div
                data-u="arrowright"
                class="jssora106"
                style="width:55px;height:55px;top:162px;right:30px;"
                data-scale="0.75"
              >
                <svg
                  viewbox="0 0 16000 16000"
                  style="position:absolute;top:0;left:0;width:100%;height:100%;"
                >
                  <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                  <polyline
                    class="a"
                    points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "
                  ></polyline>
                  <line
                    class="a"
                    x1="5426.1"
                    y1="8000"
                    x2="10573.9"
                    y2="8000"
                  ></line>
                </svg>
              </div>
            </div>
            <!-- #endregion Jssor Slider End -->
          </div>
        </header>
        <!-- Right Panlel -->
        <div id="rightPanel"></div>
        <!-- Main Page Content Div -->
        <div id="mainBody">
        <?php
        $sql="SELECT * FROM tbl_news  ORDER BY newsID DESC LIMIT 10";
        $st=$strConn->prepare($sql);
        $st->execute();
        foreach($st as $row){
          ?>
          <article class="postNews">
          <h3><?php   echo($row['newsTitle'])   ?></h3>
          <p><?php   echo($row['newsContent'])   ?></p>
          </article>
          <hr>

          <?php
          }?>
        
        </div>
        <!-- Footer -->
        <footer id="footer">
          <section>
            <div class="rightDiv">
              <br />
              <p><a href="./pages/login.php">ورود اعضا</a></p>
              <p><a href="#">ارتباط با ما</a></p>
              <p><a href="./pages/register.php">عضویت در انجمن علمی</a></p>
              <p><a href="./pages/register2.html">عضویت در انجمن علمی</a></p>
              <p><a href="#"> سیستم مدیریت کارآموزی</a></p>
              <p><a href="#"> سیستم مدیریت پروژه پایانی</a></p>
            </div>
            <div class="leftDiv">
              <br />
              <p>مکان ما در گوگل:</p>
              <div class="googlemap">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.349422563343!2d49.487204214907955!3d36.90590906944247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ff50db4f0ee02d3%3A0x1addafc4dfced6b4!2z2K_Yp9mG2LTaqdiv2Ycg2YHZhtuMINmIINit2LHZgdmHINin24wg2LPbjNiv2KfZhNi02YfYr9inINix2LPYqtmFINii2KjYp9iv!5e0!3m2!1sen!2s!4v1540838838040"
                  width="300"
                  height="200"
                  frameborder="0"
                  style="border:0"
                  allowfullscreen
                ></iframe>
              </div>
              <p>ما را در شبکه های اجتماعی دنبال کنید:</p>
              <div
                id="socialIcon"
                style="font-size:4em; color:rgb(255, 255, 255)"
              >
                <a href="#" target="_blank">
                  <i class="fab fa-telegram"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="fab fa-twitter-square"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </div>
            </div>
          </section>
          <section id="colorLine">
            <hr class="line" style="background-color:rgb(242, 38, 19)" />
            <hr class="line" style="background-color:rgb(240, 255, 0)" />
            <hr class="line" style="background-color:rgb(0, 230, 64)" />
            <hr class="line" style="background-color:rgb(34, 167, 240)" />
          </section>

          <section class="copyrightSection">
            <p class="copyright">&copy تمامی حقوق محفوظ است. پاییز 1397</p>
          </section>
        </footer>
      </div>
      <!-- Go to Top Button -->
      <img src="images/up.png" alt="To Top" id="totop" />
    </div>
    <!-- Load JavaScipt Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/myjscode.js"></script>
    <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <script src="js/sliderscript.js" type="text/javascript"></script>
    <script src="particlesjs/particles.min.js"></script>
    <script src="demo/js/app.js"></script>
  </body>
</html>
