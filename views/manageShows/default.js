function checkDate(){
	
	var today = new Date();
	var date = new Date();
	var start_date = document.forms["show_form1"]["start_date"].value;
	var hour = document.forms["show_form1"]["hour"].value;
	var n = start_date.split("-");
	var h = hour.split(":");
	date.setFullYear(n[0], n[1]-1, n[2]);
	date.setHours(h[0], h[1]);
	if( date == null || date <= today){
		alert("Wybrana data jest z przeszłości.");
		return false;
	}else{
		return true;
		
	}
}

$(document).ready(
        function(){    
        	
		$.get("views/manageShows/category.php", function(data){
			$(".cat").html(data); 
		});   
		/*$.get("save_show.php", function(data){
			$("#msg").html(data); 
		});    */
});
