<?php 
error_reporting(0);
require 'database.php';
$shift_val = isset($_GET['shift'])? $_GET['shift'] : '';
$date_val = isset($_GET['date'])? $_GET['date'] : '';

?>

<!DOCTYPE html>
<html>
<head>
	<style>
	label {
		display: inline-block;
		margin-bottom: 10px;
		color: black;
		font-family: sans-serif;
		text-shadow: 2px 2px 2px #236d4b82;
	}
	body {
		background-color: #4fc08d;
	}
	h1 {
		color: white;
		font-family: sans-serif;
		text-shadow: 2px 2px 6px #00000042;
	}
	select {
		width :100px;
	}
	.input_off {
		pointer-events: none;
	}
	.input_header {
		width: 154px;
		margin-right: 2%;
		line-height: 1.5rem;
		border: 2px solid #2c7b57;
		border-radius: 50px;
		text-indent: 5px;
		color: white;
		background: #4cbd8a;
		outline: none;
	}
	th {
		font-family: sans-serif;
		color: white;
		text-shadow: 2px 2px 5px #00000080;
	}
	table {
		margin-top: 2%;
		margin-left: 30px;
		}label#margin_fix {
			margin-left: 200px;
		}
		input.table_header {
			border: 3px solid #228c5c;
			line-height: 24px;
			text-indent: 10px;
			color: #064e2d;
			border-radius: 20px;
			background: #4fc08d;
			font-weight: 800;
			outline: none;
			font-family: sans-serif;
		}
		select#shift {
			height: 1.9rem;
		}
		.table_body {
			background: #42af7e;
			border: 2px solid #2a9061;
			border-radius: 50px;
			line-height: 24px;
			outline: none;
			color: white;
			text-indent: 8px;
		}
		input[type="submit"] {
			margin-left: 46%;
			margin-top: 2%;
			margin-bottom: 5%;
			width: 137px;
			height: 39px;
			border-radius: 5px;
			border: 2px solid #12519e;
			outline: none;
			color: white;
			background: #0974d2;
			cursor: pointer;
			box-shadow: 0px 4px 5px #00000063;
		}
		a.result {
    margin-left: 1200px;
}
	</style>


	<title>Sales Sheet</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="body">

	<?php 
	$nozzle = array('Nozzle1HSD', 'Nozzle2ULP', 'Nozzle3ULP', 'Nozzle4HSD', 'Nozzle5HSD', 'Nozzle6ULP2', 'Nozzle7ULP', 'Nozzle8HSD', 'Nozzle7ULP2', 'Nozzle10ULP', 'Nozzle11ULP2', 'Nozzle12ULP', 'Nozzle13ULP', 'Nozzle14ULP2', 'Nozzle15ULP', 'Nozzle16ULP2', 'Nozzle17ULP', 'Nozzle18ULP2', 'Nozzle19HSD', 'Nozzle20ULP');
	// $value = array(58, 70, 70, 58, 58, 70, 70, 58, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 58, 70);
	$value = array('x', 'y', 'y', 'x', 'x', 'y', 'y', 'x', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'x', 'y');
	?>
	<a href="results.php" class="result">Results</a>
	<center><h1>SALES SHEET</h1></center>
	<form method="post" action="store.php">

		<label id="margin_fix">Date</label>
		<input type="date" name="date" value="<?php echo $date_val;?>" onchange="date_box(this.value);" required="required" id="date_val"  class="input_header" />
		


		<label>Shift</label>
		<select name="shift" id="shift" onchange="select_box(this.value,document.getElementById('date_val').value);"class="input_header">
			<option value="">select shift</option>
			<option value="one" <?php if($shift_val == 'one')echo "selected='selected'"; ?> >1</option>
			<option value="two" <?php if($shift_val == 'two')echo "selected='selected'"; ?> >2</option>
			<option value="three" <?php if($shift_val == 'three')echo "selected='selected'"; ?> >3</option>
		</select>


		<label>First Name</label>
		<input type="text" name="firstname" required="required" class="input_header"/>

		<label>Last Name</label>
		<input type="text" name="lastname" required="required" class="input_header"/>
		<br />
		<input type="text" name="pr1" id="x" required="required" class="input_header"/>
		<input type="text" name="pr2" id="y" required="required" class="input_header"/>
		<input type="text" name="pr3" id="z" required="required" class="input_header"/>
		<table> 
			<tr> 
				<th>Nozzle Name</th>
				<th>Meter Closing</th> 
				<th>Meter Opening</th>
				<th>Sales</th>
				<th>Testing</th>
				<th>Total Sale</th>
				<th>Total Sale(Rs)</th>
			</tr>

			<?php 

			
			$new_result = array();
			$old_result = array();
			$res = array();
			if ($shift_val == 'one' || $shift_val == '') {
				
				$sql = "SELECT meterOpening FROM sales WHERE shift='one' AND currentDate='".$date_val."'";
				$result = mysqli_query($conn, $sql);
				
				while($res = mysqli_fetch_assoc($result)){
					
					$old_result[] = $res['meterOpening'];
				}
				if(count($old_result)!=0){
					echo "<script>alert('Shift ONE is filled!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
				}
			}
			elseif ($shift_val == 'two') {
				$sql = "SELECT meterOpening FROM sales WHERE shift='two' AND currentDate='".$date_val."'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					while($res = mysqli_fetch_assoc($result)){
						$new_result[] = $res['meterOpening'];

					}
				}
				if (count($new_result)>0) {
					echo "<script>alert('Shift TWO already filled!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
				}else{
					$sql = "SELECT meterClosing FROM sales WHERE shift='one' AND currentDate='".$date_val."'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						while($res = mysqli_fetch_assoc($result)){
							$new_result[] = $res['meterClosing'];
							$old_result[] = $res['meterOpening'];
						}
					}
					else{
						echo "<script>alert('Please fill shift ONE first!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
					}
				}
			}elseif ($shift_val == 'three') {
				$sql = "SELECT meterOpening FROM sales WHERE shift='three' AND currentDate='".$date_val."'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					while($res = mysqli_fetch_assoc($result)){
						$new_result[] = $res['meterOpening'];

					}
				}
				if (count($new_result)>0) {
					echo "<script>alert('Shift THREE already filled!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
				}else{
					$sql = "SELECT meterClosing FROM sales WHERE shift='two' AND currentDate='".$date_val."'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($res = mysqli_fetch_assoc($result)){
						$new_result[] = $res['meterClosing'];
					}
				}
				else{
					echo "<script>alert('Please fill shift TWO first!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
				}
				}
			}

			for ($i=0; $i < count($nozzle); $i++) { 

				echo "<tr class='rows'>";

				for ($j=0; $j < 7; $j++) { 
					if ($j == 0) {
						echo "<td><input type='text' class='table_header input_off' name='".$nozzle[$i].$j."' value='".$nozzle[$i]."'  placeholder='".$nozzle[$i]."' required></td>";
					}elseif ($j == 1) {
						echo "<td><input type='integer' class='table_body' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."' onkeyup=\"one('".$nozzle[$i].($j+2)."', '".$nozzle[$i].$j."', '".$nozzle[$i].($j+1)."');\" required/></td>";
					}elseif ($j == 2) {
						echo "<td><input type='integer' class='table_body' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."' onkeyup=\"one('".$nozzle[$i].($j+1)."', '".$nozzle[$i].$j."', '".$nozzle[$i].($j-1)."');\" value='".$new_result[$i]."' required/></td>";
					}elseif ($j == 3) {
						echo "<td><input type='integer' class='table_body input_off' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."'  required/></td>";
					}elseif ($j == 4) {
						echo "<td><input type='integer' class='table_body' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."' onkeyup=\"two('".$nozzle[$i].($j+1)."', '".$nozzle[$i].($j+2)."', '".$nozzle[$i].($j-1)."', '".$nozzle[$i].$j."', document.getElementById('".$value[$i]."').value);\" required/></td>";
					}elseif ($j == 5) {
						echo "<td><input type='integer' class='table_body input_off' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."'  required/></td>";
					}else{
						echo "<td><input type='integer' class='table_body input_off' name='".$nozzle[$i].$j."' id='".$nozzle[$i].$j."'  required/></td>";
					}
				}

				echo "</tr>";
			}

			?>
			
		</table>
		<input type="submit" value="Submit">
	</form>


	<script type="text/javascript">

		function one(target,first,second){
			document.getElementById(target).value =  document.getElementById(second).value - document.getElementById(first).value;
		}

		function two(target2, target3, first, second,val){
			document.getElementById(target2).value =  document.getElementById(first).value - document.getElementById(second).value;
			document.getElementById(target3).value = document.getElementById(target2).value * val;
		}

		function select_box(obj,date){
			let x = document.getElementById('date_val').value;
			if (x == '') {
				alert('Please fill date!');
			}else{
				window.location.href = "http://localhost/LoginFormSales/SalesSheetTab.php?shift="+obj+"&date="+date; 
			}
		}

		function date_box(obj_date){
			$("#shift").val("");
		}

	</script>
</body>



</html>

