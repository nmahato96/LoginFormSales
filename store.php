<?php 
error_reporting(0);
	require 'database.php';
	$name = $_POST['firstname']." ".$_POST['lastname'];
	$shift = $_POST['shift'];
	$currDate = $_POST['date'];
	
	$sql = "INSERT INTO sales (nozzle, meterClosing, meterOpening, sales, testing, totalSale, totalSaleRs, shift, currentDate, name)VALUES 
	    ('".$_POST['Nozzle1HSD0']."', '".$_POST['Nozzle1HSD1']."','".$_POST['Nozzle1HSD2']."', '".$_POST['Nozzle1HSD3']."', '".$_POST['Nozzle1HSD4']."', '".$_POST['Nozzle1HSD5']."', '".$_POST['Nozzle1HSD6']."', '".$shift."', '".$currDate."', '".$name."'),

	    ('".$_POST['Nozzle2ULP0']."', '".$_POST['Nozzle2ULP1']."','".$_POST['Nozzle2ULP2']."', '".$_POST['Nozzle2ULP3']."', '".$_POST['Nozzle2ULP4']."', '".$_POST['Nozzle2ULP5']."', '".$_POST['Nozzle2ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	    ('".$_POST['Nozzle3ULP0']."', '".$_POST['Nozzle3ULP1']."','".$_POST['Nozzle3ULP2']."', '".$_POST['Nozzle3ULP3']."', '".$_POST['Nozzle3ULP4']."', '".$_POST['Nozzle3ULP5']."', '".$_POST['Nozzle3ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle4HSD0']."', '".$_POST['Nozzle4HSD1']."','".$_POST['Nozzle4HSD2']."', '".$_POST['Nozzle4HSD3']."', '".$_POST['Nozzle4HSD4']."', '".$_POST['Nozzle4HSD5']."', '".$_POST['Nozzle4HSD6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle5HSD0']."', '".$_POST['Nozzle5HSD1']."','".$_POST['Nozzle5HSD2']."', '".$_POST['Nozzle5HSD3']."', '".$_POST['Nozzle5HSD4']."', '".$_POST['Nozzle5HSD5']."', '".$_POST['Nozzle5HSD6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle6ULP20']."', '".$_POST['Nozzle6ULP21']."','".$_POST['Nozzle6ULP22']."', '".$_POST['Nozzle6ULP23']."', '".$_POST['Nozzle6ULP24']."', '".$_POST['Nozzle6ULP25']."', '".$_POST['Nozzle6ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle7ULP0']."', '".$_POST['Nozzle7ULP1']."','".$_POST['Nozzle7ULP2']."', '".$_POST['Nozzle7ULP3']."', '".$_POST['Nozzle7ULP4']."', '".$_POST['Nozzle7ULP5']."', '".$_POST['Nozzle7ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle8HSD0']."', '".$_POST['Nozzle8HSD1']."','".$_POST['Nozzle8HSD2']."', '".$_POST['Nozzle8HSD3']."', '".$_POST['Nozzle8HSD4']."', '".$_POST['Nozzle8HSD5']."', '".$_POST['Nozzle8HSD6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle7ULP20']."', '".$_POST['Nozzle7ULP21']."','".$_POST['Nozzle7ULP22']."', '".$_POST['Nozzle7ULP23']."', '".$_POST['Nozzle7ULP24']."', '".$_POST['Nozzle7ULP25']."', '".$_POST['Nozzle7ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle10ULP0']."', '".$_POST['Nozzle10ULP1']."','".$_POST['Nozzle10ULP2']."', '".$_POST['Nozzle10ULP3']."', '".$_POST['Nozzle10ULP4']."', '".$_POST['Nozzle10ULP5']."', '".$_POST['Nozzle10ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle11ULP20']."', '".$_POST['Nozzle11ULP21']."','".$_POST['Nozzle11ULP22']."', '".$_POST['Nozzle11ULP23']."', '".$_POST['Nozzle11ULP24']."', '".$_POST['Nozzle11ULP25']."', '".$_POST['Nozzle11ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle12ULP0']."', '".$_POST['Nozzle12ULP1']."','".$_POST['Nozzle12ULP2']."', '".$_POST['Nozzle12ULP3']."', '".$_POST['Nozzle12ULP4']."', '".$_POST['Nozzle12ULP5']."', '".$_POST['Nozzle12ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle13ULP0']."', '".$_POST['Nozzle13ULP1']."','".$_POST['Nozzle13ULP2']."', '".$_POST['Nozzle13ULP3']."', '".$_POST['Nozzle13ULP4']."', '".$_POST['Nozzle13ULP5']."', '".$_POST['Nozzle13ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle14ULP20']."', '".$_POST['Nozzle14ULP21']."','".$_POST['Nozzle14ULP22']."', '".$_POST['Nozzle14ULP23']."', '".$_POST['Nozzle14ULP24']."', '".$_POST['Nozzle14ULP25']."', '".$_POST['Nozzle14ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle15ULP0']."', '".$_POST['Nozzle15ULP1']."','".$_POST['Nozzle15ULP2']."', '".$_POST['Nozzle15ULP3']."', '".$_POST['Nozzle15ULP4']."', '".$_POST['Nozzle15ULP5']."', '".$_POST['Nozzle15ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle16ULP20']."', '".$_POST['Nozzle16ULP21']."','".$_POST['Nozzle16ULP22']."', '".$_POST['Nozzle16ULP23']."', '".$_POST['Nozzle16ULP24']."', '".$_POST['Nozzle16ULP25']."', '".$_POST['Nozzle16ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle17ULP0']."', '".$_POST['Nozzle17ULP1']."','".$_POST['Nozzle17ULP2']."', '".$_POST['Nozzle17ULP3']."', '".$_POST['Nozzle17ULP4']."', '".$_POST['Nozzle17ULP5']."', '".$_POST['Nozzle17ULP6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle18ULP20']."', '".$_POST['Nozzle18ULP21']."','".$_POST['Nozzle18ULP22']."', '".$_POST['Nozzle18ULP23']."', '".$_POST['Nozzle18ULP24']."', '".$_POST['Nozzle18ULP25']."', '".$_POST['Nozzle18ULP26']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle19HSD0']."', '".$_POST['Nozzle19HSD1']."','".$_POST['Nozzle19HSD2']."', '".$_POST['Nozzle19HSD3']."', '".$_POST['Nozzle19HSD4']."', '".$_POST['Nozzle19HSD5']."', '".$_POST['Nozzle19HSD6']."', '".$shift."', '".$currDate."', '".$name."'),

	   ('".$_POST['Nozzle20ULP0']."', '".$_POST['Nozzle20ULP1']."','".$_POST['Nozzle20ULP2']."', '".$_POST['Nozzle20ULP3']."', '".$_POST['Nozzle20ULP4']."', '".$_POST['Nozzle20ULP5']."', '".$_POST['Nozzle20ULP6']."', '".$shift."', '".$currDate."', '".$name."')
	    ";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Records Submitted Successfully!');window.location.href='http://localhost/LoginFormSales/SalesSheetTab.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>