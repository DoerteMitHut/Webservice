<!DOCTYPE html>
<html lang="en">
<style>
div {
  width: 90%;
  margin: 5px auto;
}
</style>
<?php 
$pdo = new PDO('mysql:host=localhost;dbname=rittmeister', 'root', 'raspberry');
$sql = "SELECT * FROM `rittmeistercode826`";
?>
<head>
	<meta charset="UTF-8">
    <title>Rittmeister</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>
<body>

	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Code</th>
		<th>Fach</th>
		<th>Beginn</th>
		<th>Ende</th>
            </tr>
        </thead>
        <tbody>
<?php

	foreach ($pdo->query($sql) as $row) 
{
echo '
	<tr>
                <td>'.$row["name"].'</td>
                <td>'.$row["mail"].'</td>
                <td>'.$row["code"].'</td>
		<td>'.$row["fach"].'</td>
                <td>'.$row["start"].'</td>
		<td>'.$row["end"].'</td>
        </tr>  ';
}

   ?>
    </tbody>
    </table>
    <script src="script/jquery-3.3.1.js"></script>
    <script src="script/dataTables.min.js"></script>
    <script src="script/dataTables.bootstrap4.min.js"></script>
    <script src="script/dataTables.buttons.min.js"></script>
    <script src="script/buttons.bootstrap4.min.js"></script>
    <script src="script/jszip.min.js"></script>
    <script src="script/pdfmake.min.js"></script>
    <script src="script/vfs_fonts.js"></script>
    <script src="script/buttons.html5.min.js"></script>
    <script src="script/buttons.print.min.js"></script>
    <script src="script/buttons.colVis.min.js"></script>
    <script src="script/dataTables.responsive.min.js"></script>
    <script src="script/responsive.bootstrap4.min.js"></script>
    
    <script>
	$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        lengthChange: false,
	        buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>
</div>
</body>
</html>
