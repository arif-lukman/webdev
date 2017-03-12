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
function getProvince(parent_element, child_element, default_text, allowChecking, param, sect1, sect2, target){
	//console.log(default);
	var xhttp = new XMLHttpRequest();

	//ambil value parent
	var parent = document.getElementById(parent_element);
	var name = parent.value;

	//ambil elemen child
	var child = document.getElementById(child_element);

	//build command sql dari semua parameter yang ada
	//var sql = "SELECT _province._id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara "+
	//"and _country._nama = '" + name + "' ORDER BY _province._order ASC";
	var sql = sect1 + "\'" + name + "\'" + sect2;
	console.log(sql);

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			child.innerHTML = this.responseText;
		}
	};

	xhttp.open("POST", target, true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("command="+sql+"&default_text="+default_text+"&allowChecking="+allowChecking+"&param="+param);
}

//ambil propinsi berdasarkan negaranya
function getClassification(parent_element, child_element, default_text, allowChecking, param, sect1, sect2, target){
	//console.log(default);
	var xhttp = new XMLHttpRequest();

	//ambil value parent
	var parent = document.getElementById(parent_element);
	var val = parent.value;
	//var pos = val.indexOf(" ");
	//var name = val.slice(0, pos);

	//ambil elemen child
	var child = document.getElementById(child_element);

	//build command sql dari semua parameter yang ada
	//var sql = "SELECT _province._id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara "+
	//"and _country._nama = '" + name + "' ORDER BY _province._order ASC";
	var sql = sect1 + "\'" + val + "\'" + sect2;
	console.log(sql);

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			child.innerHTML = this.responseText;
		}
	};

	xhttp.open("POST", target, true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("command="+sql+"&default_text="+default_text+"&allowChecking="+allowChecking+"&param="+param);
}

//ambil propinsi berdasarkan negaranya
function getSubClassification(parent_element, child_element, default_text, allowChecking, param, sect1, sect2, target){
	//console.log(default);
	var xhttp = new XMLHttpRequest();

	//ambil value parent
	var parent = document.getElementById(parent_element);
	var val = parent.value;
	var pos = val.indexOf(" ");
	var name = val.slice(0, pos);

	//ambil elemen child
	var child = document.getElementById(child_element);

	//build command sql dari semua parameter yang ada
	//var sql = "SELECT _province._id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara "+
	//"and _country._nama = '" + name + "' ORDER BY _province._order ASC";
	var sql = sect1 + "\'\%" + name + "\%\'" + sect2;
	console.log(sql);

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200){
			console.log(this.responseText);
			child.innerHTML = this.responseText;
		}
	};

	xhttp.open("POST", target, true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("command="+sql+"&default_text="+default_text+"&allowChecking="+allowChecking+"&param="+param);
}