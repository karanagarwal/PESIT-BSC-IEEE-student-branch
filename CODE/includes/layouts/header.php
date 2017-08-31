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
    <div class="header1" id = "top">
            <div class="container-fluid">
                <ul id = "header1meun">
                    <li><a href="http://www.ieee.org/index.html" target="_blank" title = "IEEE.org">IEEE.org</a></li>&nbsp;|&nbsp;
                    <li><a href="http://ieeexplore.ieee.org/" target="_blank" title = "Explore Digital Library">IEEE Explore Digital Library</a></li>&nbsp;|&nbsp;
                    <li><a href="http://standards.ieee.org/" target="_blank" title = "IEEE Standards">IEEE Standards</a></li>&nbsp;|&nbsp;
                    <li><a href="http://spectrum.ieee.org/" target="_blank" title = "IEEE Spectrum">IEEE Spectrum</a></li>&nbsp;|&nbsp;
                    <li><a href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap" target="_blank" title = "More Sites">More Sites</a></li>&nbsp;
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
                        <li class="dropdown">
                                <a class="dropdown-toggle" id="menu1" data-toggle="dropdown">Events
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <?php $eventmenu = find_all_events_by_date(); ?>
                                <?php while($evtmenu = mysqli_fetch_assoc($eventmenu)) {?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="events.php?subject=<?php echo 
                                urlencode($evtmenu["event_id"]); ?> #loadevent" id="scrolldown">
                                <?php echo $evtmenu["event_name"]; ?>
                                <?php } ?></a></li>  
                                </ul>
                        </li>
                        <li><a href="achieve.php" title = "ACHIEVEMENTS">Achievements</a></li>
                        <li><a href="gallery.php" title = "GALLERY">Gallery</a></li>
                        <li class="dropdown">
                                <a class="dropdown-toggle" id="menu2" data-toggle="dropdown">Execom
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <?php $teammenu = find_all_team(); ?>
                                <?php $start_year = 0 ?>
                                <?php while($subjectteam = mysqli_fetch_assoc($teammenu)) {?>
                                <?php  if($start_year!= $subjectteam["start_year"]) { ?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="team.php?subject=<?php echo urlencode($subjectteam["start_year"]); ?> #loadteam">
                                <?php echo $subjectteam["start_year"].'-'.($subjectteam["end_year"]);
                                    $start_year = $subjectteam["start_year"]; }?><?php } ?></a></li>  
                                </ul>
                        </li>
                        <li><a href="contact.php" title = "CONTACT US">Contact Us</a></li>
                         <li><a href="https://goo.gl/p0mb7P" class="btn btn-default" id="joinbtn2" target="_blank" title = "JOIN IEEE">JOIN IEEE</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="http://www.ieee.org/index.html" target="_blank" id = "ieee_logo" title = "IEEE.org"><img src = "images/website/ieee_logo.png" alt="IEEE.org">
                            </a>
                        </li>
                     </ul>
                </div>
            </div>
        </nav>
    </div>