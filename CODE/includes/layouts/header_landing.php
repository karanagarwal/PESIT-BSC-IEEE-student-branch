<?php require_once("includes/session.php"); ?>
<?php 
    date_default_timezone_set('Asia/Kolkata');
 ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/gif" href="images/website/title_logo.gif" />
    <link href="style/main.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="style/style.css" rel="stylesheet" />

    <title>PESIT IEEE STUDENT BRANCH</title>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"  class="sk-cube-grid">
    <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
    <div id = "top">
            <div class="container-fluid">
                <ul id = "header1meun">
                    <li><a href="http://www.ieee.org/?WT.mc_id=mn_ieee" target="_blank" title = "IEEE.org">IEEE.org</a></li>&nbsp;|&nbsp;
                    <li><a href="http://ieeexplore.ieee.org/" target="_blank" title = "Explore Digital Library">IEEE Explore Digital Library</a></li>&nbsp;|&nbsp;
                    <li><a href="http://standards.ieee.org/" target="_blank" title = "IEEE Standards">IEEE Standards</a></li>&nbsp;|&nbsp;
                    <li><a href="http://spectrum.ieee.org/" target="_blank" title = "IEEE Spectrum">IEEE Spectrum</a></li>&nbsp;|&nbsp;
                    <li><a href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap" target="_blank" title = "More Sites">More Sites</a></li>&nbsp;
                    <li id="loginmenu">
                        <a href="#">
                            <span  data-toggle="modal" data-target="#myModal" hidden = "col-sm"></span>
                            <!-- Trigger the modal with a button -->
                            <a data-toggle="modal" data-target="#myModal" title = "LOGIN">Administrator Login</a>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Administrator Login</h3>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo message(); ?>
                                            <form action="login.php" method="POST">
                                                <h5 title = "Username">Username : </h5><input type="text" name="username" placeholder="Username" required /><br><br>
                                                <h5 title = "Password">Password : </h5><input type="password" name="password" placeholder="Password" required /><br><br>
                                                <input type="submit" value="Sign In" title = "Sign In"/>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" title = "Close">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
    </div>

    <div class="header2">
        <nav class="navbar navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" type="button" href="index.php"><img src="images/peslogo.png" alt="PESLOGO" id = "pesitlogo" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" id = "headcenter">
                        <li><a href="index.php" title = "HOME">Home</a></li>
                        <li><a href="#events" id="scrolldown" title = "EVENTS">Events</a></li>
                        <li><a href="achieve.php" title = "ACHIEVEMENTS">Achievements</a></li>
                        <li><a href="gallery.php" title = "GALLERY">Gallery</a></li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Execom<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php $teammenu = find_all_team(); ?>
                                <?php $start_year = 0 ?>
                                <?php while($subjectteam = mysqli_fetch_assoc($teammenu)) {?>
                                <?php  if($start_year!= $subjectteam["start_year"]) { ?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="team.php?subject=<?php echo urlencode($subjectteam["start_year"]); ?> #loadteam">
                                <?php echo $subjectteam["start_year"].'-'.($subjectteam["end_year"]);
                                    $start_year = $subjectteam["start_year"]; }?></a></li><?php } ?>  
                            </ul>
                        </li>
                        <li><a href="contact.php" title = "CONTACT US">Contact Us</a></li>
                        <li><a href="https://goo.gl/p0mb7P" class="btn btn-default" id="joinbtn" target="_blank" title = "JOIN IEEE">JOIN IEEE</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="http://www.ieee.org/?WT.mc_id=mn_ieee" target="_blank" id = "ieee_logo" title = "IEEE.org"><img src = "images/website/ieee_logo.png" alt="IEEE.org">
                            </a>
                        </li>
                     </ul>
                </div>
            </div>
        </nav>
    </div>
