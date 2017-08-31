<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>

<style>
  #map {
    width: 250px;
    height: 230px;
  }
</style>
<section class = "contact">
<div class = "container-fluid">
	<div class = "row">
		<h2 title="Contact Us">Contact Us</h2>
				<?php
					if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
					$name = trim($_POST['name']);
					$email = trim($_POST['email']);
					$message = trim($_POST['message']);

					if(!empty($name) && !empty($email) && !empty($message)){

						$to = "ieeepesitbsc@gmail.com";
						$subject = "IEEE Website".$name;

						$message = '<h2>'.$name.'</h2><br>'.$message;
						
						$header = "From:".$email."\r\n";
						$header .= "Cc:karanagarwal.projects@gmail.com \r\n";
						$header .= "MIME-Version: 1.0\r\n";
						$header .= "Content-type: text/html\r\n";

						if(mail ($to,$subject,$message,$header)) {
							echo msg("Message sent successfully.");
						}else {
							echo msgerror("Message could not be sent");
						}
					} else {
							echo msgerror("Please fill in all the fields.");
						}
					}	
				?>
		<div>
			<div class = "container">
				<div class = "row">
					<div class = "col-xs-12 col-sm-5">
						<h4>Contact Form</h4>
						<form action = "contact.php" method = "POST">
							<p>Name<br /><input type = "text" name = "name" placeholder = " Name" required ></p>
							<p>E-Mail<br /><input type = "email" name = "email" placeholder = " E-Mail ID" required></p>
							<p>Message<br /><textarea placeholder = " Message" name = "message" rows="4" required></textarea></p>
							<input type = "submit" value = "Submit">
						</form>
					</div>
					<div class = "col-xs-12 col-sm-4">
						<h3 title="Chairman">Chairman</h3>
						<h4 title="Tyson Pais.">Tyson Pais</h4>
						<p>Chairman, PESIT SOUTH CAMPUS IEEE STUDENT BRANCH</p>
						<p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<a href="mailto:paistyson@gmail.com" title="paistyson@gmail.com">paistyson@gmail.com</a></p>
						<h3 title="Webmaster">Webmaster</h3>
						<h4 title="Karan Agarwal">Karan Agarwal</h4>
						<p>Webmaster, PESIT SOUTH CAMPUS IEEE STUDENT BRANCH</p>
						<p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<a href="mailto:karanagarwal.projects@gmail.com" title="karanagarwal.projects@gmail.com">karanagarwal.projects@gmail.com</a></p>
					</div>
					<div class = "col-xs-12 col-sm-3">
						<h3 title="Address">Address</h3>
						<p title="PESIT BANGALORE SOUTH CAMPUS, Hosur Road, Electronic City Bangalore-560100">&nbsp;PESIT BANGALORE SOUTH CAMPUS<br>&nbsp;Hosur Road, Electronic City <br>&nbsp;Bangalore - 560100</p>
						<p><i class="glyphicon glyphicon glyphicon-link"></i>&nbsp;<a href="http://pesitsouth.pes.edu/" target = "_blank" title="www.pesitsouth.pes.edu">www.pesitsouth.pes.edu</a></p>
						<div id="map"></div>
					</div>
					<div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<script>
function initMap() {
var mapDiv = document.getElementById('map');
var map = new google.maps.Map(mapDiv, {
  center: {lat: 12.861604, lng: 77.664783},
  zoom: 15
});
}
</script>	
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
						    async defer></script>
<?php include("includes/layouts/footerpublic.php"); ?> 	