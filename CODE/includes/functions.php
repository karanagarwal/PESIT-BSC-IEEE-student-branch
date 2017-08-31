<?php 
	function confirm_query($result_set){
		if(!$result_set){
			die("Databases query failed.");
		}
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}

	function aboutread(){
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM aboutus where id=1";
		$result = mysqli_query($connection, $query);
		confirm_query($result);

		if($abt = mysqli_fetch_assoc($result)) {
			return $abt["about"];
		} else {
			return msg("ERROR IN RETRIVING ABOUT US.");
		}

	}
	function msg($sting){
		$output = "<div class=\"alert alert-info\" role=\"alert\">";
		$output .= "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>";
		$output .= "<span class=\"sr-only\"></span>";
		$output .= ' '.htmlentities($sting);
		$output .= "</div>";
		return $output;
	}
	
	function msgerror($sting){
		$output = "<div class=\"alert alert-danger\" role=\"alert\">";
		$output .= "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>";
		$output .= "<span class=\"sr-only\">Error: </span>";
		$output .= ' '.htmlentities($sting);
		$output .= "</div>";
		return $output;
	}

	function redirect_to($new_location) {
		header("Location: " . $new_location);
	 	exit;
	}

	function find_eventsubject($subject_id) {
		global $connection;
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM events ";
		$query .= "WHERE event_id = '{$safe_subject_id}' ";
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}

	function find_event_selected_page() {
		global $current_subject;
		
		if (isset($_GET["subject"])) {
			 $current_subject = find_eventsubject($_GET["subject"]);
		} else {
			 $current_subject = null;
		}
	}

	function find_achivements_subject($subject_id) {
		global $connection;
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM achivements ";
		$query .= "WHERE achive_id = '{$safe_subject_id}' ";
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}

	function find_team_subject($subject_id){
		global $connection;
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM team ";
		$query .= "WHERE id = '{$safe_subject_id}' ";
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}

	function find_achievements_selected_page() {
		global $current_subject;
		
		if (isset($_GET["subject"])) {
			 $current_subject = find_achivements_subject($_GET["subject"]);
		} else {
			 $current_subject = null;
		}
	}

	function find_team_selected_page() {
		global $current_subject;
		
		if (isset($_GET["subject"])) {
			 $current_subject = find_team_subject($_GET["subject"]);
		} else {
			 $current_subject = null;
		}
	}

	function find_gallery_subject($subject_id) {
		global $connection;
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM gallery ";
		$query .= "WHERE id = '{$safe_subject_id}' ";
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}

	function find_gallery_selected_page() {
		global $current_subject;
		
		if (isset($_GET["subject"])) {
			 $current_subject = find_gallery_subject($_GET["subject"]);
		} else {
			 $current_subject = null;
		}
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}

	function select_image_team($id){
		global $connection;

		$query = "SELECT * ";
		$query .= "FROM team ";
		$query .= "WHERE id = {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);
		confirm_query($result);
		$team = mysqli_fetch_assoc($result);
		$location = "images/team/";
		$image = $team["image_location"];
		$imagedes = $location.$image;

		return $imagedes;
	}

	function select_image_events($id){
		global $connection;

		$query = "SELECT * ";
		$query .= "FROM events ";
		$query .= "WHERE event_id = {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);
		confirm_query($result);
		$team = mysqli_fetch_assoc($result);
		$location = "images/events/";
		$image = $team["image_location"];
		$imagedes = $location.$image;

		return $imagedes;
	}


	function select_image_gallery($id){
		global $connection;

		$query = "SELECT * ";
		$query .= "FROM gallery ";
		$query .= "WHERE id = {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);
		confirm_query($result);
		$team = mysqli_fetch_assoc($result);
		$location = "images/gallery/";
		$image = $team["image_location"];
		$imagedes = $location.$image;

		return $imagedes;
	}

	function find_all_achivements() {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM achivements ORDER BY achive_id DESC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}

	function find_all_gallery() {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM gallery ORDER BY id DESC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}

	function find_all_team() {
		global $connection;

		$query  = "SELECT * ";
		$query .= "FROM team ORDER BY start_year DESC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}

	function find_all_teams_by_year($start_year) {
		global $connection;
		global $sel_team;
		$safe_year = mysqli_real_escape_string($connection, $start_year);
		$query  = "SELECT * ";
		$query .= "FROM team WHERE start_year = '{$safe_year}' ";
		$query .= "ORDER BY id DESC";
		$sel_year = mysqli_query($connection, $query);
		confirm_query($sel_year);
		return $sel_year;
	}

	function find_selected_team_by_year() {
		global $sel_team;
		
		if (isset($_GET["subject"])) {
			 $sel_team = find_all_teams_by_year($_GET["subject"]);
		} else {
			 $sel_team = null;
		}
	}

	function find_all_events_by_date(){
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM events ORDER BY date DESC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}	
?>