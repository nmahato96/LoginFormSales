<?php 

require 'database.php';
$shift_val = isset($_GET['shift'])? $_GET['shift'] : '';
$date_val = isset($_GET['date_val'])? $_GET['date_val'] : '';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
		table.table.table-hover {
    width: 80%;
    margin: 20px auto;
}
	</style>
</head>
<body>
	<label id="margin_fix">Date</label>
		<input type="date" name="date" value="<?php echo $date_val;?>" onchange="date_box(this.value);" required="required" id="date_val"  class="input_header" />
		<label>Shift</label>
		<select name="shift" id="shift" onchange="select_box(this.value,document.getElementById('date_val').value);"class="input_header">
			<option value="">select shift</option>
			<option value="one" <?php if($shift_val == 'one')echo "selected='selected'"; ?> >1</option>
			<option value="two" <?php if($shift_val == 'two')echo "selected='selected'"; ?> >2</option>
			<option value="three" <?php if($shift_val == 'three')echo "selected='selected'"; ?> >3</option>
		</select>
	<table class="table table-hover">
		<thead>
			<tr> 
				<th>Nozzle Name</th>
				<th>Meter Closing</th> 
				<th>Meter Opening</th>
				<th>Sales</th>
				<th>Testing</th>
				<th>Total Sale</th>
				<th>Total Sale(Rs)</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			

			if ($shift_val == "" || $date_val == "") {
				
			}else{
				$sql = "SELECT * FROM sales WHERE shift='".$shift_val."' AND currentDate='".$date_val."'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['nozzle']. "</td>". "<td>".$row['meterClosing']."</td>". "<td>".$row['meterOpening']."</td>". "<td>".$row['sales']."</td>". "<td>".$row['testing']."</td>". "<td>".$row['totalSale']."</td>". "<td>".$row['totalSaleRs']."</td>". "<td>".$row['name']."</td>" ;
					echo "</tr>";
				}
				
			} else {
				echo "<script>alert('Records NOT FOUND!');</script>";
			}
			}
			?>
		</tbody>
	</table>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Total</th>
				<th>Sales</th>
				<th>Sales(Rs)</th>
			</tr>
		</thead>
	</table>

	<script type="text/javascript">
		function date_box(obj_date){
			$("#shift").val("");
		}
		function select_box(obj,date){
			let x = document.getElementById('date_val').value;
			if (x == '') {
				alert('Please fill date!');
			}else{
				window.location.href = "http://localhost/LoginFormSales/results.php?shift="+obj+"&date_val="+date; 
			}
		}
	</script>
</body>
</html>