<html>
<head>
<script>
function showHint(str){
	if(str.length == 0) {
		document.getElementById("txtHint").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200 ) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		} ;
		xmlhttp.open("GET","gethint.php?q=" + str, true);
		xmlhttp.send();
	}
}
</script>
</head>
<body>
<div style="background-color : salmon">
	<fieldset><legend><b>Form Pencarian BigBoss EDM </legend>
	<h3>Cari Nama Barang : </h3>
	<table>
	<form>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" onkeyup="showHint(this.value)" style="width:80 px"></td>
		</tr>
	</form>
	<tr>
		<td>ID Barang</td>
		<td>:</td>
		<td><span id="txtHint"></span></td>
	</tr>
	</table>
	</fieldset>
</div>
</body>
