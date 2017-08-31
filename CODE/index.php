<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header_landing.php"); ?>

<section id = "jumboimg">
    <div style="min-height: 50px;">
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                  <div style="position: absolute; display: block; background: url(images/home/loading.gif) no-repeat center center;
                  top: 0px; left: 0px;width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px;width: 1300px; height: 500px; overflow: hidden;">
                <div>
                    <img u="image" src2="images/home/1.jpg" />
                    <div class="carousel-caption">
                      <h3>IEEE Student Branch</h3>
                    </div>
                </div>
                <div>
                    <img u="image" src2="images/home/2.jpg" />
                    <div class="carousel-caption">
                        <h3>Industrial Visit ISRO</h3>
                      </div>
                </div>
                  <div>
                    <img u="image" src2="images/home/3.jpg" />
                    <div class="carousel-caption">
                      <h3>Industrial Visit HAL</h3>
                    </div>
                </div>
                   <div>
                    <img u="image" src2="images/home/4.jpg" />
                    <div class="carousel-caption">
                      <h3>Briefing with Dr. Annapurna D.</h3>
                    </div>
                </div>
            </div>
<style>
    .jssorb21 {
      position: absolute;
    }
    .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
      position: absolute;
      /* size of bullet elment */
      width: 19px;
      height: 19px;
      text-align: center;
      line-height: 19px;
      color: white;
      font-size: 12px;
      background: url(images/home/b05.png) no-repeat;
      overflow: hidden;
      cursor: pointer;
    }
    .jssorb21 div { background-position: -5px -5px; }
    .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
    .jssorb21 .av { background-position: -65px -5px; }
    .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
</style>

            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
<style>
    .jssora21l, .jssora21r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url(images/home/a21.png) center center no-repeat;
        overflow: hidden;
    }
    .jssora21l { background-position: -3px -33px; }
    .jssora21r { background-position: -63px -33px; }
    .jssora21l:hover { background-position: -123px -33px; }
    .jssora21r:hover { background-position: -183px -33px; }
    .jssora21l.jssora21ldn { background-position: -243px -33px; }
    .jssora21r.jssora21rdn { background-position: -303px -33px; }
</style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        </div>
</section>

<section id="about" title="About Us">
    <div class="container">
      <div>
        <div class = "col-xs-12 col-sm-6">
          <h3>IEEE Student Branch</h3>
          <p><?php echo nl2br(aboutread()); ?></p>
        </div>
        <div class = "col-xs-12 col-sm-6">
            <h3>PESIT-BSC</h3>
            <p>PESIT was started in 1988 as the first engineering college under the PES group of institutions. Its vision has been to make its students professionally superior and ethically strong global manpower. Every activity at PES is focused in addressing student needs. It offers and facilitates academic excellence, leadership qualities, nurturing environment, and cutting edge infrastructure – everything students need to succeed. A unique educational system at PES will ensure that students gain not just depth and breath in their chosen area of specialization, but a holistic set of skills that will equip them to face the real world. Opportunities abound for them to expand the boundaries of their performance and accomplishment. A team of dedicated and experienced faculty with research bent of mind has been driving the institution towards excellence in R&D activities. PESIT alumni have occupied high positions in premier organizations in India and abroad. </p>
        </div>
      </div>
    </div>
</section>

<section id="events" title="Events">
    <div class="container">
        <div class="row">
        <p id="heading">Events</p>
        <div class="col-xs-12 col-sm-6">
            <h4 title="Upcoming Events">Upcoming Events</h4>
            <table class="table table-striped">
                <thead>
                <tbody>
                    <?php
                    $time = time();
                    $events_set = find_all_events_by_date(); 
                    $f1 = 0;
                    while($events = mysqli_fetch_assoc($events_set)) {
                        $date = strtotime($events["date"]);
                        $newDate = date("d-F-Y", $date);
                        if (($date+84000) >= $time) {
                    ?>
                        <tr><th><a target ="_blank" href="events.php?subject=<?php echo $events["event_id"];
                            $f1 = 1; ?>#loadevent" id="scrolldown">
                        <?php
                            echo $newDate.'</th></a>';
                        ?>
                        <th class = "text-capitalize"><a target ="_blank" href="events.php?subject=<?php echo $events["event_id"]; ?>#loadevent" id="scrolldown">
                        <?php
                            echo $events["event_name"].'</a></th></tr>';
                        }
                    }
                if ($f1 == 0) {
                   echo "We will soon be back with new events.";
                }    
                    ?>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 title="Past Events">Past Events</h4>
                <table class="table table-striped">
                <thead>
                <tbody>
                    <?php
                        $time = time();
                        $events_set = find_all_events_by_date(); 
                        while($events = mysqli_fetch_assoc($events_set)) {
                            $date = strtotime($events["date"]);
                            $newDate = date("d-F-Y", $date);
                            if ($date+84000 < $time) {
                    ?>
                        <tr><th><a target ="_blank" href="events.php?subject=<?php echo $events["event_id"]; ?>#loadevent" id="scrolldown">
                            <?php
                                echo $newDate.'</th></a>';
                            ?>
                            <th class = "text-capitalize"><a target ="_blank" href="events.php?subject=<?php echo $events["event_id"]; ?>#loadevent" id="scrolldown">
                            <?php
                                echo $events["event_name"].'</a></th></tr>';
                            }
                        }    
                    ?>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>

<section class="campusoffber">
<div class = "container">
    <div class = "row">
        <p title="Office Bearers" id="heading" >Office Bearers</p>
            <div class = "container">
                <div class = "row">
                    <div class="card col-sm-4">
                      <img class="card-img-top" src="images/profanand.jpg" alt="Prof. M.S. Anand" style="width:128px;height:130px;">
                      <div class="card-block">
                        <br>
                        <h4 class="card-title">Prof. M.S. Anand</h4>
                       <p class="card-text">Chairperson</p>
                      </div>
                  </div>
                  <div class="card col-sm-4">
                      <img class="card-img-top" src="images/annapurna.jpg" alt="Dr. Annapurna D." style="width:128px;height:128px;">
                      <div class="card-block">
                        <br>
                        <h4 class="card-title">Dr. Annapurna D.</h4>
                        <p class="card-text">Branch Counselor</p>
                      </div>
                  </div>
                  <div class="card col-sm-4">
                      <img class="card-img-top" src="images/animesh.jpg" alt="Mr. Animesh Giri" style="width:128px;height:128px;">
                      <div class="card-block">
                        <br>
                        <h4 class="card-title">Mr. Animesh Giri</h4>
                       <p class="card-text">IoT Chair</p>
                      </div>
                  </div>       
                </div>
            </div>
    </div>
</div>
</section>
<hr />
  <section id="mainFooter">
    <footer id="footerWrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="footerWidget">
            <br />
              <p><a href="index.php" title="HOME">HOME</a></p>
              <p><a href="#about" title="ABOUT US">ABOUT US</a></p>
              <p><a href="#events" title="EVENTS">EVENTS</a></p>
              <p><a href="achieve.php" target="_blank" title="ACHIEVEMENTS">ACHIEVEMENTS</a></p>
              <p><a href="gallery.php" target="_blank" title="GALLERY">GALLERY</a></p>
              <p><a href="team.php" target="_blank" title="OFFICE BEARERS">EXECOM</a></p>
              <p><a href="contact.php" target="_blank" title="CONTACT US">CONTACT US</a></p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="footerWidget">
            <h3 title="Address">Contact Us</h3>
              <h6 title="Tyson Pais.">Tyson Pais</h6>
              <p>Chairman, PESIT SOUTH CAMPUS IEEE</p>
              <p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<a href="mailto:paistyson@gmail.com" title="paistyson@gmail.com">paistyson@gmail.com</a></p>
              <h6 title="Karan Agarwal">Karan Agarwal</h6>
              <p>Webmaster, PESIT SOUTH CAMPUS IEEE</p>
              <p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<a href="mailto:karanagarwal.projects@gmail.com" title="karanagarwal.projects@gmail.com">karanagarwal.projects@gmail.com</a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="Widget">
              <h3 title="Address">Address</h3>
            <address>
              <p title="PESIT BANGALORE SOUTH CAMPUS, Hosur Road, Electronic City Bangalore-560100">&nbsp;PESIT BANGALORE SOUTH CAMPUS<br>&nbsp;Hosur Road, Electronic City <br>&nbsp;Bangalore - 560100</p>
              <p><i class="glyphicon glyphicon glyphicon-link"></i>&nbsp;<a href="http://pesitsouth.pes.edu/" target = "_blank" title="www.pesitsouth.pes.edu">www.pesitsouth.pes.edu</a></p>
            </address>
              <h3>Follow us, we are social</h3>
              <a href="https://www.facebook.com/ieeepesitbsc/" target="_blank">
                <img src="images/website/images.png" title="Facebook" alt="Facebook" style="display:block !important;width:60px;height:61px;">
              </a> 
            </div>
          </div>
        </div>  
      </div>
    </section>
    <section id="footercenter">
      <div class="container">
        <hr />
        <div class="row">
          <div class="col-md-12">
            <p title="Copyright © 2016 PES South Campus">Copyright © 2016 <a href="index.php" target="blank">PESIT South Campus IEEE Student Branch</a> / All rights reserved.
              <span><a href="#top" id="scrolldown"><img src="images/website/up.png" alt="Top"style="width:48px;height:42px;float:right"></a></span>
            </p>
          </div>
        </div>
      </div>
  </footer>
</section>
</div>
<?php mysqli_free_result($events_set); ?>
<?php 
if (isset($connection)) {
  mysqli_close($connection);
}
?>
</body>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
  <script src="scripts/jquery-1.9.1.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>  
  <script src="scripts/docs.min.js"></script>
    <script src="scripte/ie10-viewport-bug-workaround.js"></script>
      <script type="text/javascript" src="scripts/jssor.slider.mini.js"></script>
      <script>
jQuery(document).ready(function ($) {

    var options = {
        $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $Idle: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
        $SlideDuration: 1000,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
        //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
        //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
        $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
      
        $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
            $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
            $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
            $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
            $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
            $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            $Scale: false                                   //Scales bullets navigator or not while slider scale
        },

        $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
            $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        if (bodyWidth)
            jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1900));
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end
});
</script> 
<script src="scripts/script.js"></script>
</html>