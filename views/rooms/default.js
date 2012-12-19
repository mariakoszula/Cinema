function doSeatRoom(id)
{
		$("#"+id).attr('disabled', true);
		$("#"+id).removeClass("seats_is").addClass("seats_disabled");
		document.getElementById('R'+id).innerHTML = "<input type='hidden' name='"+id+"' value='false'/>";
}
