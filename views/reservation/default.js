function doSeat(id)
{
	var seat = $("#"+id).val();
	var color = $("#"+id).css('backgroundColor');
	if(color == "rgb(0, 128, 0)"){
	document.getElementById(id).style.background='rgb(250, 195, 30)';
	document.getElementById(id).innerHTML = "<input type='hidden' id='T"+id+"' name='"+id+"' value='"+seat+"'/>";
	return false;
	}
	if(color == "rgb(250, 195, 30)"){
		document.getElementById(id).style.background='rgb(0, 128, 0)';
		document.getElementById(id).innerHTML = "<input type='hidden' id='T"+id+"'/>";
		return false;
	}
}
function check(){
	var x1 = document.forms["reservation"]["type"][0].checked;
	var x2 = document.forms["reservation"]["type"][1].checked;
	var x3 = document.forms["reservation"]["type"][2].checked;
	if(x1 == false && x2 == false && x3 == false){
		alert("Musisz wybrać czy chcesz zakupić czy zarezerwować bilet.");
		return false;
	}
}