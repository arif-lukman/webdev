//=================================================fungsi buat SOT============================================================
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

//========================================================fungsi buat procurement================================================

//validasi progress
function vldProg(){
	var element = document.getElementById("Last_Progress");
	console.log(element.value);
	if(element.value<0 || element.value>100){
		element.value = "";
		element.placeholder = "Nilai harus diantara 0-100!";
	}
}

//validasi nilai yang ga boleh minus
function noMinus(x){
	var element = document.getElementById(x);
	if(element.value<0){
		element.value = "";
		element.placeholder = "Nilai tidak boleh minus!";
	}
}

//ambil propinsi berdasarkan negaranya
function getProvince(parent_element, child_element, default, allowChecking, param){
	console.log(default);
	var xhttp = new XMLHttpRequest();

	//ambil value parent
	var parent = document.getElementById(parent_element);
	var name = parent.value;

	//ambil elemen child
	var child = document.getElementById(child_element);

	//build command sql dari semua parameter yang ada
	var sql = "SELECT " + column + "FROM " + table + " " + addition;

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			child.innerHTML = this.responseText;
		}
	};

	xhttp.open("POST", "../../cooperation/controller/combobox.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("command="+sql+"&default="+default+"&allowChecking="+allowChecking+"&param="+param);
}