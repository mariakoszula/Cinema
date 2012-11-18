function doSeat(id, value)
{
	//@TODO jak kliknie drugi raz to się odkliknie itp.
		$("#"+id).attr('disabled', true);
		document.getElementById(id).style.background='green';
		document.getElementById(id).innerHTML = "<input type='hidden' name='"+id+"' value='"+value+"'/>";
}
function check(){
	alert("sprawdzenie czy kup zaznaczone");
}