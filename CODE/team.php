<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/layouts/header.php"); ?>

<?php echo find_selected_team_by_year(); ?>
<?php $location = "images/team/"; ?>

<section class = "team">
<div class = "container-fluid">
	<div class = "row">
		<h2 title="Office Bearers">Execom</h2>
		<div>
			<div class = "container">
				<div class = "row">
					<div class = "container">
						<ul id="teamyear">
							<?php $teammenu = find_all_team(); ?>
							<?php $start_year = 0 ?>
							<?php while($subjectteam = mysqli_fetch_assoc($teammenu)) {?>
							<?php  if($start_year!= $subjectteam["start_year"]) { ?>
							<a href="team.php?subject=<?php echo urlencode($subjectteam["start_year"]); ?>#loadteam" id="scrolldown" class="bt btn-primary">
							<?php echo '<li>'.$subjectteam["start_year"].'-'.($subjectteam["end_year"].'</li>');
							$start_year = $subjectteam["start_year"]; }?></a><?php } ?>
						</ul>
					</div>
				<div class="teamcenter">
				<div class = "col-xs-12">
					<?php $flag = 0; ?>
					<?php if($sel_team!=null) {?>
					<?php while($team_sel = mysqli_fetch_assoc($sel_team)) {?>
					<?php  if($flag == 0) {?>
					<h2 id="loadteam"><?php echo $team_sel["start_year"].'-'.$team_sel["end_year"].'<hr>'; $flag = 1;}?></h2>
					<div class = "col-xs-3 col-sm-3 col-md-3 img-thumbnail">
					<img src="<?php echo $location.$team_sel["image_location"]?>" alt = "<?php echo $team_sel["poss"]?>">&nbsp;
					<h4 class = "text-primary text-capitalize"><?php echo $team_sel["name"]?></h4>
					<p class = "text-success text-capitalize"><?php echo $team_sel["poss"]?></p>
					</div>
					<?php } }?>
				</div>	
				</div>		
				</div>
			</div>
		</div>
		<div>
	</div>
	</div>
</div>
<hr>
</section>
<?php mysqli_free_result($teammenu); ?>
<?php mysqli_free_result($sel_team); ?>
<?php include("includes/layouts/footerpublic.php"); ?> 		