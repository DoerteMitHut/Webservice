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
sql="SELECT * FROM `rittmeistercode826`"
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
                <td>row["Name]</td>
                <td>row["mail"]</td>
                <td>row["code"]</td>
				<td>row["fach"]</td>
                <td>row["start"]</td>
				<td>row["end"]</td>
            </tr> 
	
	
	';
}
?>       
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
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