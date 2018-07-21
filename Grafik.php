<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "linecharts_chintia");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}

$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama barang nya, tipe string
	array('label' => 'Nama Barang', 'type' => 'string'),
	//membuat label untuk jumlah barang, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'Jumlah Barang', 'type' => 'number')
);

//melakukan query ke database select
$sql = $conn->query("SELECT * FROM barang");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu nama barang
	$temp[] = array('v' => (string)$data['Nama Barang']);
	//memasukkan data kedua yaitu jumlah barang
	$temp[] = array('v' => (int)$data['Jumlah Barang']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}

//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);

$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama nya, tipe string
	array('label' => 'Jenis Product', 'type' => 'string'),
	//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
	array('label' => ' Harga Product', 'type' => 'number')
);

//melakukan query ke database select
$sql = $conn->query("SELECT * FROM product");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu nama kelasnya
	$temp[] = array('v' => (string)$data['Jenis Product']);
	//memasukkan data kedua yaitu jumlah siswanya
	$temp[] = array('v' => (int)$data['Harga Product']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}

//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable2 = json_encode($table);


//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable3 = json_encode($table);
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	

	function drawChart() {

		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

		// Set options, bisa anda rubah
		var options = {'title':'Data Barang',
					   'width':500,
					   'height':400};

		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}


		function drawChart2() {

		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable2; ?>);

		// Set options, bisa anda rubah
		var options = {'title':'Jenis Product',
					   'width':500,
					   'height':400};

		var chart = new google.visualization.LineChart(document.getElementById('chart2_div'));
		chart.draw(data, options);
	}

    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart-->
	<table>
		<tr>
    		<td><div id="chart_div"></div></td>
    		<td><div id="chart2_div"></div></td>
    		<td><div id="chart3_div"></div></td>
    	</tr>
    </table>
	
</body>
</html>