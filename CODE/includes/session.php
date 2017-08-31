<?php

	session_start();
	
	function message() {
		if (isset($_SESSION["message"])) {
			$output = "<div class=\"alert alert-danger\" role=\"alert\">";
			$output .= "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>";
			$output .= "<span class=\"sr-only\">Error:</span>";
			$output .= ' '.htmlentities($_SESSION["message"]);
			$output .= "</div>";
			
			// clear message after use
			$_SESSION["message"] = null;
			
			return $output;
		}
	}

	function messageinfo() {
		if (isset($_SESSION["message"])) {
			$output = "<div class=\"alert alert-info\" role=\"alert\">";
			$output .= "<span class=\"glyphicon\" aria-hidden=\"true\"></span>";
			$output .= "<span class=\"sr-only\"></span>";
			$output .= ' '.htmlentities($_SESSION["message"]);
			$output .= "</div>";
			
			// clear message after use
			$_SESSION["message"] = null;
			
			return $output;
		}
	}

	function errors() {
		if (isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];
			
			// clear message after use
			$_SESSION["errors"] = null;
			
			return $errors;
		}
	}
	
?>