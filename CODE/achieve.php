<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>

<?php $achieve = find_all_achivements(); ?>
<style type="text/css">
	.achieve > div > div > div:nth-child(2) > div > div:nth-child(2) > hr{
		color: black;
	}
</style>
<section class = "achieve">
<div class = "container-fluid">
	<div class = "row">
		<h2 title="Achievements">Achievements</h2>
		<div>
			<div class = "container" id="achievebox">
				<?php while($subject = mysqli_fetch_assoc($achieve)) {?>
					<div class="col-xs-3 achievedate">
						<p class="card-text"><?php echo $subject["year"]; ?></p>
					</div>
					<div class="col-xs-9 achievetext">
						<p class="card-text"><?php echo $subject["achive_description"].'<hr />'; ?></p>
					</div>
				<?php } ?>				
			</div>
		</div>
		<div>
	</div>
	</div>
</div>
</section>
<?php mysqli_free_result($achieve); ?>
<?php include("includes/layouts/footerpublic.php"); ?> 		