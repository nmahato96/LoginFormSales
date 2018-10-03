<!DOCTYPE html>
<html>
<head>
	<style>
	label{display:inline-block;width:100px;margin-bottom:10px;margin-right:25px;}
	body{  

		margin-top: 50px;  
		margin-bottom: 100px;  
		margin-right: 150px;  
		margin-left: 80px;  
		background-color: PowderBlue ;  
		color: palevioletred;  
		font-family: cambria;  
		font-size: 110%  

	} 

	select {
		width :100px;
	}
	.input_off {
		pointer-events: none;
	}
</style>


<title>Sales Sheet</title>
</head>
<body>

	<?php 
		
	 ?>
	<center><h1>SALES SHEET</h1></center>
	<form method="post" action="store.php">

		<label>Date</label>
		<input type="date" name="date" required="required"/>
		<br />

		<label>First Name</label>
		<input type="text" name="firstname" required="required"/>

		<label>Last Name</label>
		<input type="text" name="lastname" required="required"/>

		<label>Shift</label>
		<select name="shift">
			<option>select shift</option>
			<option value="one">1</option>
			<option value="two">2</option>
			<option value="three">3</option>
		</select>
		<br />

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

			<tr> 

				<td><input type="text" name="Nozzle1HSD0" value="Nozzle1(HSD)" class="input_off" placeholder="Nozzle1(HSD)" required></td>

				<td><input type="integer" name="Nozzle1HSD1" id="Nozzle1HSD1" onkeyup="one('Nozzle1HSD3', 'Nozzle1HSD1', 'Nozzle1HSD2');" required="required"/></td>

				<td><input type="integer" name="Nozzle1HSD2" id="Nozzle1HSD2" onkeyup="one('Nozzle1HSD3', 'Nozzle1HSD2', 'Nozzle1HSD1');" required="required"/></td>

				<td><input type="integer" name="Nozzle1HSD3" id="Nozzle1HSD3" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle1HSD4" id="Nozzle1HSD4" onkeyup="two('Nozzle1HSD5', 'Nozzle1HSD6', 'Nozzle1HSD3', 'Nozzle1HSD4', 58);" required="required"/></td>

				<td><input type="integer" name="Nozzle1HSD5" id="Nozzle1HSD5" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle1HSD6" id="Nozzle1HSD6" class="input_off" required="required"/></td>

			</tr>



			<tr>

				<td><input type="text" name="Nozzle2ULP0" value="Nozzle2(ULP)" placeholder="Nozzle2(ULP)" required class="input_off"></td>

				<td><input type="integer" name="Nozzle2ULP1" id="Nozzle2ULP1" onkeyup="one('Nozzle2ULP3', 'Nozzle2ULP1', 'Nozzle2ULP2');" required="required"/></td>

				<td><input type="integer" name="Nozzle2ULP2" id="Nozzle2ULP2" onkeyup="one('Nozzle2ULP3', 'Nozzle2ULP2', 'Nozzle2ULP1');" required="required"/></td>

				<td><input type="integer" name="Nozzle2ULP3" id="Nozzle2ULP3" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle2ULP4" id="Nozzle2ULP4"  onkeyup="two('Nozzle2ULP5', 'Nozzle2ULP6', 'Nozzle2ULP3', 'Nozzle2ULP4', 70);" required="required"/></td>

				<td><input type="integer" name="Nozzle2ULP5" id="Nozzle2ULP5" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle2ULP6" id="Nozzle2ULP6" class="input_off" required="required"/></td>

			</tr>



			<tr>

				<td><input type="text" name="Nozzle3ULP0" value="Nozzle3(ULP)" placeholder="Nozzle3(ULP)" required class="input_off"></td>

				<td><input type="integer" name="Nozzle3ULP1" id="Nozzle3ULP1" onkeyup="one('Nozzle3ULP3', 'Nozzle3ULP1', 'Nozzle3ULP2');" required="required"/></td>

				<td><input type="integer" name="Nozzle3ULP2" id="Nozzle3ULP2" onkeyup="one('Nozzle3ULP3', 'Nozzle3ULP2', 'Nozzle3ULP1');" required="required"/></td>

				<td><input type="integer" name="Nozzle3ULP3" id="Nozzle3ULP3" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle3ULP4" id="Nozzle3ULP4" onkeyup="two('Nozzle3ULP5', 'Nozzle3ULP6', 'Nozzle3ULP3', 'Nozzle3ULP4', 70);" required="required"/></td>

				<td><input type="integer" name="Nozzle3ULP5" id="Nozzle3ULP5" class="input_off" required="required"/></td>

				<td><input type="integer" name="Nozzle3ULP6" id="Nozzle3ULP6" class="input_off" required="required"/></td>

			</tr>



			<tr>
				<td><input type="text" name="Nozzle4HSD0" value="Nozzle4(HSD)" placeholder="Nozzle4(HSD)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle4HSD1" id="Nozzle4HSD1" onkeyup="one('Nozzle4HSD3', 'Nozzle4HSD1', 'Nozzle4HSD2');" required="required"/></td>
				<td><input type="integer" name="Nozzle4HSD2" id="Nozzle4HSD2" onkeyup="one('Nozzle4HSD3', 'Nozzle4HSD2', 'Nozzle4HSD1');" required="required"/></td>
				<td><input type="integer" name="Nozzle4HSD3" id="Nozzle4HSD3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle4HSD4" id="Nozzle4HSD4" onkeyup="two('Nozzle4HSD5', 'Nozzle4HSD6', 'Nozzle4HSD3', 'Nozzle4HSD4', 58);" required="required"/></td>
				<td><input type="integer" name="Nozzle4HSD5" id="Nozzle4HSD5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle4HSD6" id="Nozzle4HSD6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle5HSD0" value="Nozzle5(HSD)" placeholder="Nozzle5(HSD)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle5HSD1" id="Nozzle5HSD1" onkeyup="one('Nozzle5HSD3', 'Nozzle5HSD1', 'Nozzle5HSD2');" required="required"/></td>
				<td><input type="integer" name="Nozzle5HSD2" id="Nozzle5HSD2" onkeyup="one('Nozzle5HSD3', 'Nozzle5HSD2', 'Nozzle5HSD1');" required="required"/></td>
				<td><input type="integer" name="Nozzle5HSD3" id="Nozzle5HSD3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle5HSD4" id="Nozzle5HSD4" onkeyup="two('Nozzle5HSD5', 'Nozzle5HSD6', 'Nozzle5HSD3', 'Nozzle5HSD4', 58);" required="required"/></td>
				<td><input type="integer" name="Nozzle5HSD5" id="Nozzle5HSD5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle5HSD6" id="Nozzle5HSD6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle6ULP20" value="Nozzle6(ULP2)" placeholder="Nozzle6(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle6ULP21" id="Nozzle6ULP21" onkeyup="one('Nozzle6ULP23', 'Nozzle6ULP21', 'Nozzle6ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle6ULP22" id="Nozzle6ULP22" onkeyup="one('Nozzle6ULP23', 'Nozzle6ULP22', 'Nozzle6ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle6ULP23" id="Nozzle6ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle6ULP24" id="Nozzle6ULP24" onkeyup="two('Nozzle6ULP25', 'Nozzle6ULP26', 'Nozzle6ULP23', 'Nozzle6ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle6ULP25" id="Nozzle6ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle6ULP26" id="Nozzle6ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle7ULP0" value="Nozzle7(ULP)" placeholder="Nozzle7(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle7ULP1" id="Nozzle7ULP1" onkeyup="one('Nozzle7ULP3', 'Nozzle7ULP1', 'Nozzle7ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP2" id="Nozzle7ULP2" onkeyup="one('Nozzle7ULP3', 'Nozzle7ULP2', 'Nozzle7ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP3" id="Nozzle7ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP4" id="Nozzle7ULP4" onkeyup="two('Nozzle7ULP5', 'Nozzle7ULP6', 'Nozzle7ULP3', 'Nozzle7ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP5" id="Nozzle7ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP6" id="Nozzle7ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle8HSD0" value="Nozzle8(HSD)" placeholder="Nozzle8(HSD)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle8HSD1" id="Nozzle8HSD1" onkeyup="one('Nozzle8HSD3', 'Nozzle8HSD1', 'Nozzle8HSD2');" required="required"/></td>
				<td><input type="integer" name="Nozzle8HSD2" id="Nozzle8HSD2" onkeyup="one('Nozzle8HSD3', 'Nozzle8HSD2', 'Nozzle8HSD1');" required="required"/></td>
				<td><input type="integer" name="Nozzle8HSD3" id="Nozzle8HSD3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle8HSD4" id="Nozzle8HSD4" onkeyup="two('Nozzle8HSD5', 'Nozzle8HSD6', 'Nozzle8HSD3', 'Nozzle8HSD4', 58);" required="required"/></td>
				<td><input type="integer" name="Nozzle8HSD5" id="Nozzle8HSD5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle8HSD6" id="Nozzle8HSD6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle7ULP20" value="Nozzle7(ULP2)" placeholder="Nozzle7(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle7ULP21" id="Nozzle7ULP21" onkeyup="one('Nozzle7ULP23', 'Nozzle7ULP21', 'Nozzle7ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP22" id="Nozzle7ULP22" onkeyup="one('Nozzle7ULP23', 'Nozzle7ULP22', 'Nozzle7ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP23" id="Nozzle7ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP24" id="Nozzle7ULP24" onkeyup="two('Nozzle7ULP25', 'Nozzle7ULP26', 'Nozzle7ULP23', 'Nozzle7ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP25" id="Nozzle7ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle7ULP26" id="Nozzle7ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle10ULP0" value="Nozzle10(ULP)" placeholder="Nozzle10(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle10ULP1" id="Nozzle10ULP1" onkeyup="one('Nozzle10ULP3', 'Nozzle10ULP1', 'Nozzle10ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle10ULP2" id="Nozzle10ULP2" onkeyup="one('Nozzle10ULP3', 'Nozzle10ULP2', 'Nozzle10ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle10ULP3" id="Nozzle10ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle10ULP4" id="Nozzle10ULP4" onkeyup="two('Nozzle10ULP5', 'Nozzle10ULP6', 'Nozzle10ULP3', 'Nozzle10ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle10ULP5" id="Nozzle10ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle10ULP6" id="Nozzle10ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle11ULP20" value="Nozzle11(ULP2)" placeholder="Nozzle11(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle11ULP21" id="Nozzle11ULP21" onkeyup="one('Nozzle11ULP23', 'Nozzle11ULP21', 'Nozzle11ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle11ULP22" id="Nozzle11ULP22" onkeyup="one('Nozzle11ULP23', 'Nozzle11ULP22', 'Nozzle11ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle11ULP23" id="Nozzle11ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle11ULP24" id="Nozzle11ULP24" onkeyup="two('Nozzle11ULP25', 'Nozzle11ULP26', 'Nozzle11ULP23', 'Nozzle11ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle11ULP25" id="Nozzle11ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle11ULP26" id="Nozzle11ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle12ULP0" value="Nozzle12(ULP)" placeholder="Nozzle12(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle12ULP1" id="Nozzle12ULP1" onkeyup="one('Nozzle12ULP3', 'Nozzle12ULP1', 'Nozzle12ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle12ULP2" id="Nozzle12ULP2" onkeyup="one('Nozzle12ULP3', 'Nozzle12ULP2', 'Nozzle12ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle12ULP3" id="Nozzle12ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle12ULP4" id="Nozzle12ULP4" onkeyup="two('Nozzle12ULP5', 'Nozzle12ULP6', 'Nozzle12ULP3', 'Nozzle12ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle12ULP5" id="Nozzle12ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle12ULP6" id="Nozzle12ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle13ULP0" value="Nozzle13(ULP)" placeholder="Nozzle13(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle13ULP1" id="Nozzle13ULP1" onkeyup="one('Nozzle13ULP3', 'Nozzle13ULP1', 'Nozzle13ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle13ULP2" id="Nozzle13ULP2" onkeyup="one('Nozzle13ULP3', 'Nozzle13ULP2', 'Nozzle13ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle13ULP3" id="Nozzle13ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle13ULP4" id="Nozzle13ULP4" onkeyup="two('Nozzle13ULP5', 'Nozzle13ULP6', 'Nozzle13ULP3', 'Nozzle13ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle13ULP5" id="Nozzle13ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle13ULP6" id="Nozzle13ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle14ULP20" value="Nozzle14(ULP2)" placeholder="Nozzle14(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle14ULP21" id="Nozzle14ULP21" onkeyup="one('Nozzle14ULP23', 'Nozzle14ULP21', 'Nozzle14ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle14ULP22" id="Nozzle14ULP22" onkeyup="one('Nozzle14ULP23', 'Nozzle14ULP22', 'Nozzle14ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle14ULP23" id="Nozzle14ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle14ULP24" id="Nozzle14ULP24" onkeyup="two('Nozzle14ULP25', 'Nozzle14ULP26', 'Nozzle14ULP23', 'Nozzle14ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle14ULP25" id="Nozzle14ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle14ULP26" id="Nozzle14ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle15ULP0" value="Nozzle15(ULP)" placeholder="Nozzle15(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle15ULP1" id="Nozzle15ULP1" onkeyup="one('Nozzle15ULP3', 'Nozzle15ULP1', 'Nozzle15ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle15ULP2" id="Nozzle15ULP2" onkeyup="one('Nozzle15ULP3', 'Nozzle15ULP2', 'Nozzle15ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle15ULP3" id="Nozzle15ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle15ULP4" id="Nozzle15ULP4" onkeyup="two('Nozzle15ULP5', 'Nozzle15ULP6', 'Nozzle15ULP3', 'Nozzle15ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle15ULP5" id="Nozzle15ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle15ULP6" id="Nozzle15ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle16ULP20" value="Nozzle16(ULP2)" placeholder="Nozzle16(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle16ULP21" id="Nozzle16ULP21" onkeyup="one('Nozzle16ULP23', 'Nozzle16ULP21', 'Nozzle16ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle16ULP22" id="Nozzle16ULP22" onkeyup="one('Nozzle16ULP23', 'Nozzle16ULP22', 'Nozzle16ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle16ULP23" id="Nozzle16ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle16ULP24" id="Nozzle16ULP24" onkeyup="two('Nozzle16ULP25', 'Nozzle16ULP26', 'Nozzle16ULP23', 'Nozzle16ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle16ULP25" id="Nozzle16ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle16ULP26" id="Nozzle16ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle17ULP0" value="Nozzle17(ULP)" placeholder="Nozzle17(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle17ULP1" id="Nozzle17ULP1" onkeyup="one('Nozzle17ULP3', 'Nozzle17ULP1', 'Nozzle17ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle17ULP2" id="Nozzle17ULP2" onkeyup="one('Nozzle17ULP3', 'Nozzle17ULP2', 'Nozzle17ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle17ULP3" id="Nozzle17ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle17ULP4" id="Nozzle17ULP4" onkeyup="two('Nozzle17ULP5', 'Nozzle17ULP6', 'Nozzle17ULP3', 'Nozzle17ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle17ULP5" id="Nozzle17ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle17ULP6" id="Nozzle17ULP6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle18ULP20" value="Nozzle18(ULP2)" placeholder="Nozzle18(ULP2)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle18ULP21" id="Nozzle18ULP21" onkeyup="one('Nozzle18ULP23', 'Nozzle18ULP21', 'Nozzle18ULP22');" required="required"/></td>
				<td><input type="integer" name="Nozzle18ULP22" id="Nozzle18ULP22" onkeyup="one('Nozzle18ULP23', 'Nozzle18ULP22', 'Nozzle18ULP21');" required="required"/></td>
				<td><input type="integer" name="Nozzle18ULP23" id="Nozzle18ULP23" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle18ULP24" id="Nozzle18ULP24" onkeyup="two('Nozzle18ULP25', 'Nozzle18ULP26', 'Nozzle18ULP23', 'Nozzle18ULP24', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle18ULP25" id="Nozzle18ULP25" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle18ULP26" id="Nozzle18ULP26" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle19HSD0" value="Nozzle19(HSD)" placeholder="Nozzle19(HSD)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle19HSD1" id="Nozzle19HSD1" onkeyup="one('Nozzle19HSD3', 'Nozzle19HSD1', 'Nozzle19HSD2');" required="required"/></td>
				<td><input type="integer" name="Nozzle19HSD2" id="Nozzle19HSD2" onkeyup="one('Nozzle19HSD3', 'Nozzle19HSD2', 'Nozzle19HSD1');" required="required"/></td>
				<td><input type="integer" name="Nozzle19HSD3" id="Nozzle19HSD3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle19HSD4" id="Nozzle19HSD4" onkeyup="two('Nozzle19HSD5', 'Nozzle19HSD6', 'Nozzle19HSD3', 'Nozzle19HSD4', 58);" required="required"/></td>
				<td><input type="integer" name="Nozzle19HSD5" id="Nozzle19HSD5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle19HSD6" id="Nozzle19HSD6" class="input_off" required="required"/></td>
			</tr>

			<tr>
				<td><input type="text" name="Nozzle20ULP0" value="Nozzle20(ULP)" placeholder="Nozzle20(ULP)" required class="input_off"></td>
				<td><input type="integer" name="Nozzle20ULP1" id="Nozzle20ULP1" onkeyup="one('Nozzle20ULP3', 'Nozzle20ULP1', 'Nozzle20ULP2');" required="required"/></td>
				<td><input type="integer" name="Nozzle20ULP2" id="Nozzle20ULP2" onkeyup="one('Nozzle20ULP3', 'Nozzle20ULP2', 'Nozzle20ULP1');" required="required"/></td>
				<td><input type="integer" name="Nozzle20ULP3" id="Nozzle20ULP3" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle20ULP4" id="Nozzle20ULP4" onkeyup="two('Nozzle20ULP5', 'Nozzle20ULP6', 'Nozzle20ULP3', 'Nozzle20ULP4', 70);" required="required"/></td>
				<td><input type="integer" name="Nozzle20ULP5" id="Nozzle20ULP5" class="input_off" required="required"/></td>
				<td><input type="integer" name="Nozzle20ULP6" id="Nozzle20ULP6" class="input_off" required="required"/></td>
			</tr>

		</table>
		<input type="submit" value="Submit">
	</form>


	<script type="text/javascript">

		function one(target,first,second){
			document.getElementById(target).value = document.getElementById(first).value - document.getElementById(second).value;
		}

		function two(target2, target3, first, second,val){
			document.getElementById(target2).value =  document.getElementById(first).value - document.getElementById(second).value;
			document.getElementById(target3).value = document.getElementById(target2).value * val;
		}
	</script>
</body>



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