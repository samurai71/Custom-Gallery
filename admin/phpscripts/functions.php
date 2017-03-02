<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function confirmQuery($result) {
	    
	    global $link;

	    if(!$result ) {
	          
	          die("QUERY FAILED ." . mysqli_error($link));
	   
	          
	      }
	    

	}
	
?>