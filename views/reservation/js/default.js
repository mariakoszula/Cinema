function doSeat(id, value)
{
	//@TODO jak kliknie drugi raz to się odkliknie itp.
		$("#"+id).attr('disabled', true);
		document.getElementById(id).style.background='green';
		document.getElementById(id).innerHTML = "<input type='hidden' name='"+id+"' value='"+value+"'/>";
}
function check(){
	var x1 = document.forms["reservation"]["type"][0].checked;
	var x2 = document.forms["reservation"]["type"][1].checked;
	if(x1 == false && x2 == false){
		alert("Musisz wybrać czy chcesz zakupić czy zarezerwować bilet.");
		return false;
	}
}