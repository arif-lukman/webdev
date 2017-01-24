//fungsi validasi angka
function validateNum(x,y){
	if(isNaN(x)||x==""||x==null){
		document.getElementById(y).innerHTML = "Input tidak valid";
		return false;
	}
	else{
		document.getElementById(y).innerHTML = "";
		return true;
	}
}

//fungsi konversi NaN menjadi angka 0
function noNan(){
	if(isNaN(document.getElementById("et").value)){
		document.getElementById("et").value = 0;
	}
}

//fungsi validasi isi form (penuh/tidak)
function validateForm(){
	var x = document.forms["form"];
	var i;
	var count=-1;
	for(i=1; i<x.length; i++){
		if(x.elements[i].value == "" || x.elements[i].value==null){
			count++;
		}
	}
	//console.log(count);
	if(count==0){
		document.getElementById("submit").disabled = false;
		return true;
	}
	else{
		document.getElementById("submit").disabled = true;
		return false;
	}
}

//fungsi-fungsi kalkulasi hidden input
function setEt(){
	var edt = parseFloat(document.getElementById("edt").value);
	var b = parseFloat(document.getElementById("b").value);
	if(isNaN(edt)){
		edt = 0;
	}
	if(isNaN(b)){
		b = 0;
	}
	document.getElementById("et").value = edt+b;
}

function setEdf(){
	var ofi = document.getElementById("ofi").value;
	document.getElementById("edf").value = ofi;
}

function setDlg(){
	var ap = document.getElementById("ap").value;
	var gp = document.getElementById("gp").value;
	document.getElementById("dlg").value = ap-gp;
}