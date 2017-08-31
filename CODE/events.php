<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>

<?php echo find_event_selected_page(); ?>
<?php $location = "images/events/"; ?>
<section class = "events">
	<div class = "container-fluid">
	<div class = "row">
	<h2 title="Events">Events</h2>
	<div class = "container">
	<div class = "row">
	<?php
	$events_set = find_all_events_by_date(); 
	while($events = mysqli_fetch_assoc($events_set)) {
	$date = strtotime($events["date"]);
	$newDate = date("d-F-Y", $date);
	?><div class="card col-xs-12 col-sm-4" id = "eventblock">
	<div class="card-block"> 
	<h4 class="card-title" id = "eventtitle">
	<a href="events.php?subject=<?php echo $events["event_id"]; ?> #loadevent" id="scrolldown"><?php echo $events["event_name"]; ?></a></h4>
	<p class="card-text glyphicon glyphicon-time"><?php echo ' '.$newDate; ?></p>
	<p><a href="events.php?subject=<?php echo $events["event_id"]; ?> #loadevent"  id="scrolldown" class="btn btn-info eventbtn">Know More</a></p>   
	</div>
	</div>
	<?php } ?>
	</div>
	</div>
	<div class = "container">
	<div class = "row" id = "eventdis">
	<hr>
	<?php if ($current_subject!=null){ ?>
	<div class="card col-xs-12">
	<h2 class="card-title" id = "loadevent"><?php echo $current_subject["event_name"]; ?></h2>
	<h4 class="card-text"><small class="text-muted">
	<?php $date_diaplay = strtotime($current_subject["date"]); ?>
	<?php $Date_display = date("d-F-Y", $date_diaplay); ?>
	<?php echo $Date_display; ?></small></h4>
	<div class="card col-xs-12 col-sm-7">
	<img id="eventdisimg"class="card-img-top" src="<?php echo $location.$current_subject["image_location"]; ?>" alt="<?php echo $current_subject["event_name"]; ?>">
	</div>
	<div class="card-block">
	<div class="card col-xs-12 col-sm-5">
	<h4 id = "eventdistext"><?php echo $current_subject["description"]; ?></h4>
	<?php if($current_subject["link"]!="NULL"){?>
	<a target = "_blank" class="btn btn-primary" href="<?php	echo $current_subject["link"];?> " id = "eventreglink">Registration Link</a>
	<?php } ?>
	</div>
	</div>
	</div>
	</div>
	<?php } ?>
	</div>
	</div>
	</div>
	<hr>
</section>
<?php mysqli_free_result($events_set); ?>
<?php include("includes/layouts/footerpublic.php"); ?> 		