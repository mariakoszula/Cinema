function doSeat(id)
{
	//@TODO jak kliknie drugi raz to się odkliknie itp.
		$("#"+id).attr('disabled', true);
		document.getElementById('R'+id).innerHTML = "<input type='hidden' name='"+id+"' value='false'/>";
}
//@TODO póki co nie idzała dobrze więc do poprawy albo omine
/*function confirmSave(){
	var x;
	var r=confirm("Czy na pewno chcesz zachować zmiany?");
	if(r==true){
		x="Zapisane zmiany";
	}
	if(r==false){
		x="Zmiany nie zapisane.";
		exit();
	}
	document.getElementById("info").innderHTML=x;
}*/