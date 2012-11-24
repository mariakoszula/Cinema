 $(document).ready(
                   function(){    
                	 
			$(".wybor").change(function(){
				  
				var wybrana_data=$(this).attr("value");
				if (wybrana_data!='0'){
					
				$.get("views/choosingShow/movie.php",{ date: wybrana_data }, function(data){
					$("div.movie").html(data); 
				});
			}
	});                                
});