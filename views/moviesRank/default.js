 $(document).ready(function(){    
                	  
		var day=$('input#data_choice').val();
		var mid=$('input#mid').val();
		
		$.get("../hours",{ day: day, mid: mid }, function(data){
			$("#hours").html(data);
			});
		
		$('input#data_choice').change(function(){	
			day = $(this).val();    
			$.get("../hours",{ day: day, mid: mid }, function(data){
				$("#hours").html(data);
				});
		});
		
		
});
