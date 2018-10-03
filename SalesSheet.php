<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;margin-right:25px;}
body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: PowderBlue ;  
    color: palevioletred;  
    font-family: cambria;  
    font-size: 110%  
      
        } 
</style>


<title>Sales Sheet</title>
</head>
<body>
	<center><h1>SALES SHEET</h1></center>
<form method="post" action="">
<label>Date</label>
<input type="date" name="date" required="required"/>
<br />
<label>First Name</label>
<input type="text" name="firstname" required="required"/>

<label>Last Name</label>
<input type="text" name="lastname" required="required"/>

<label>Shift</label>
<input type="in_array" name="shift" required="required"/>
<br />

<label>Nozzle1(HSD)</label>
<input type="text" name="Nozzle1HSD" required="required"/>
<br />

<label>Nozzle2(ULP)</label>
<input type="text" name="Nozzle2ULP" required="required"/>
<br />

<label>Nozzle3(ULP)</label>
<input type="text" name="Nozzle3ULP" required="required"/>
<br />

<label>Nozzle4(HSD)</label>
<input type="text" name="Nozzle4HSD" required="required"/>
<br />

<label>Nozzle5(HSD)</label>
<input type="text" name="Nozzle5HSD" required="required"/>
<br />

<label>Nozzle6(ULP2)</label>
<input type="text" name="Nozzle6ULP2" required="required"/>
<br />

<label>Nozzle7(ULP)</label>
<input type="text" name="Nozzle7ULP" required="required"/>
<br />

<label>Nozzle8(HSD)</label>
<input type="text" name="Nozzle8HSD" required="required"/>
<br />

<label>Nozzle7(ULP2)</label>
<input type="text" name="Nozzle7ULP2" required="required"/>
<br />

<label>Nozzle10(ULP)</label>
<input type="text" name="Nozzle10ULP" required="required"/>
<br />

<label>Nozzle11(ULP2)</label>
<input type="text" name="Nozzle11ULP2" required="required"/>
<br />

<label>Nozzle12(ULP)</label>
<input type="text" name="Nozzle12ULP" required="required"/>
<br />

<label>Nozzle13(ULP)</label>
<input type="text" name="Nozzle13ULP" required="required"/>
<br />

<label>Nozzle14(ULP2)</label>
<input type="text" name="Nozzle14ULP2" required="required"/>
<br />

<label>Nozzle15(ULP)</label>
<input type="text" name="Nozzle15ULP" required="required"/>
<br />

<label>Nozzle16(ULP2)</label>
<input type="text" name="Nozzle16ULP2" required="required"/>
<br />

<label>Nozzle17(ULP)</label>
<input type="text" name="Nozzle17ULP" required="required"/>
<br />

<label>Nozzle18(ULP2)</label>
<input type="text" name="Nozzle18ULP2" required="required"/>
<br />

<label>Nozzle19(HSD)</label>
<input type="text" name="Nozzle19HSD" required="required"/>
<br />

<label>Nozzle20(ULP)</label>
<input type="text" name="Nozzle20ULP" required="required"/>
<br />

<input type="submit" value="Submit">
</form>

</body>

<table> 
	<tr> 
		<th>Name</th> 
		<th>Favorite Color</th> 
	</tr> 
	
	<tr> 
	<td>Bob</td> 
	<td><input type="text" name="Yellow" required="required"/></td> 
	</tr> 
	
	<tr> 
	<td>Michelle</td> 
	<td><input type="text" name="Purple" required="required"/></td> 
	</tr>
</table>


</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$date = $_POST['date'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$shift = $_POST['shift'];
	$Nozzle1HSD = $_POST['Nozzle1HSD'];
	$Nozzle2ULP = $_POST['Nozzle2ULP'];
	$Nozzle3ULP = $_POST['Nozzle3ULP'];
	$Nozzle4HSD = $_POST['Nozzle4HSD'];
	$Nozzle5HSD = $_POST['Nozzle5HSD'];
	$Nozzle6ULP2 = $_POST['Nozzle6ULP2'];
	$Nozzle7ULP = $_POST['Nozzle7ULP'];
	$Nozzle8HSD = $_POST['Nozzle8HSD'];
	
	$conn = mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
	mysqli_select_db($conn,"first_db") or die("Cannot connect to database"); //Connect to database
	//$query = mysqli_query($conn,"Select * from information"); //Query the information table
	$sql1 = mysqli_query($conn,"INSERT INTO information (date, firstname, lastname, shift) VALUES ('$date','$firstname','$lastname','$shift')"); //Inserts the value to table information
	//$sql2 = mysqli_query($conn,"INSERT INTO information (Nozzle1HSD, Nozzle2ULP, Nozzle3ULP, Nozzle4HSD, Nozzle5HSD, Nozzle6ULP2, Nozzle7ULP, Nozzle8HSD) VALUES ('$Nozzle1HSD','$Nozzle2ULP','$Nozzle3ULP','$Nozzle4HSD','$Nozzle5HSD','$Nozzle6ULP2','$Nozzle7ULP','$Nozzle8HSD')"); //Inserts the value to table information
	
	echo "<br/><br/><span>Data Inserted successfully...!!</span>";		
		//Print '<script>alert("Successfully Added!");</script>'; // Prompts the user
		//Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	$query = mysqli_query($conn,"Select * from information"); //Query the information table
	

}
?>