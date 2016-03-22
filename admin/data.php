<?php ob_start(); ?>

<html>

 <head>

 	<title>Registration Data</title>

 	<style type="text/css">

 		table {

    	  font-size: 1em;

  		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

 		  border-collapse: collapse;

	      border-spacing: 0;

  		  width: 100%;

  		  table-layout:auto;

		}

		table, th,td {

    		border: 1px solid black;

		}

		table,th,td{

			padding:1%;

		}

		.note{

			font-size: 0.8em;

			width:600%;

		}

		th{

			font-weight: bolder;

			font-size: 1.2em;

			background-color: #4CAF50;

			color:white;

		}

		.form-box {

			font-family: sans-serif;

			box-shadow: 10px 15px 7px #aaaaaa;

			background-color: #85FF83;

			padding:2%;

			width: 30%;

			margin : auto;

			border-radius: 12px;

		}

		.form-box h1{

			border-bottom: 2px solid black;

			text-align: center;

		}

		.error-register{

			color:red;

			text-align: center;

		}

		input[type="text"]{

			border-radius: 5px;

			padding:2%;

			padding-left: 3%;

			font-family: sans-serif;

			width:90%;

			font-weight: bolder;

			font-size: 1.3em;

			/*border-bottom-color: #fafafa;*/

		}

		input[type="password"]{

			border-radius: 5px;

			padding:2%;

			padding-left: 3%;

			font-family: sans-serif;

			width:90%;

			font-weight: bolder;

			font-size: 1.3em;

			/*border-bottom-color: #fafafa;*/

		}

		input[type="submit"]{

			border-radius: 5px;

			padding:2%;

			padding-left: 3%;

			font-family: sans-serif;

			width:90%;

			font-weight: bolder;

			font-size: 1.3em;

			/*border-bottom-color: #fafafa;*/

		}

 	</style>

 <body>

<?php 	

		require_once("..".DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR."initialize.php");

		//require_once("includes".DIRECTORY_SEPARATOR."initialize.php");

		$i = 1;

?>

<?php

		$flag = false;

		if(isset($_POST["submit"])){

			if(isset($_POST["username"]) && isset($_POST["password"]))

			if($_POST["username"] == "tedxdtu" && $_POST['password'] == "tedxdtu2016@123@"){

				$flag = true;

			}

		}

		

		if($flag) { 

?>

<table style="padding:2px;">

	<tbody>

		<tr>

			<th>S.No.</th>

			<th>Signup Date</th>

			<th>Name</th>

			<th>Email</th>

			<th>Phone</th>

			<th>Designation</th>

			<th>Facebook</th>

			<th>LinkedIn</th>

			<th>SnapChat</th>

			<th>Comp/Univ</th>

			<th>Interests</th>

			<th>Food</th>

			<th>Know Us?</th>

			<th>TEDx</th>

			<th>Why Me?</th>

		</tr>

		<?php $result = $database->query("SELECT * FROM user");

			  while($data = $database->fetch_array($result)){   ?>

			<tr>

				<td><?php echo $i++ ?></td>

				<td><?php echo $data["created_on"] ?></td>

				<td><?php echo $data["first_name"]." ".$data["middle_name"]." ".$data["last_name"] ?></td>

				<td><?php echo $data["username"] ?></td>

				<td><?php echo $data["phone"] ?></td>

				<td><?php echo $data["profession"] ?></td>

				<td><?php echo $data["social1"] ?></td>

				<td><?php echo $data["social2"] ?></td>

				<td><?php echo $data["insta"] ?></td>

				<td><?php echo $data["university"] ?></td>

				<td><?php echo "<li>".$data["interests1"]."</li>"."<li>".$data["interests2"].

								"</li>"."<li>".$data["interests3"]."</li>" ?>

				</td>

				<td><?php echo $data["food"] ?></td>

				<td><?php echo $data["knowus"] ?></td>

				<td><?php echo $data["ques"] ?></td>

				<td class="note"><?php echo $data["note"] ?></td>

			</tr>

<?php          } ?>

<?php	}else{ ?>

		<div class="form-box">

			<form action="data.php" method="post">

				<p>

					Username:<br />

					<input type="text" name="username" />

				</p>

				<p>

					Password:<br />

					<input type="password" name="password" />

				</p>

				<input type="submit" name="submit" value="LOGIN">

			</form>

		</div>

<?php } ?>

	</tbody>

</table>

</body>

</html>