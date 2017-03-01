(function() {
	"use strict";
	console.log("Foundation - it works");

 $(document).foundation();
 $(document).foundation({
  dropdown: {
    // specify the class used for active dropdowns
    active_class: 'open'
  }
});

 $(document).ready(function(){
	$('#menu').slicknav();
});


 })();