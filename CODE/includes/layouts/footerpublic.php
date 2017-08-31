	<section id="mainFooter">
		<footer id="footerWrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="footerWidget">
						<br />
                        <p><a href="index.php" title="HOME">HOME</a></p>
                        <p><a href="index.php#about" title="ABOUT US">ABOUT US</a></p>
                        <p><a href="events.php" target="_blank" title="EVENTS">EVENTS</a></p>
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
							<p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<!--<a href="mailto:" title=""></a>--></p>
							<h6 title="Karan Agarwal">Karan Agarwal</h6>
							<p>Webmaster, PESIT SOUTH CAMPUS IEEE</p>
							<p><i class="glyphicon glyphicon-envelope"></i>&nbsp;<!--<a href="mailto:" title=""></a>--></p>
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
<?php 
if (isset($connection)) {
	mysqli_close($connection);
}
?>
</body>
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/script.js"></script>
</html>