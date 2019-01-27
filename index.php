<html>
<head>
	<style>
		.error{
			color: white;
			font-size: 19px;
			background: red;
		}
		.success{
			color: white;
			background: green;
			font-size: 20px;
			margin-top: 50px;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		$data = [
			"first_name" => "",
			"last_name" => "",
			"address" => ""
		];
		$error = [];
		foreach($_POST as $key => $value){
			if (empty($value)) {
				$error["$key"] = true;
			}else{
				$data["$key"] = $value;
			}
		}
	?>
	<h1>Final Project</h1>
	<hr>
	<form method="POST">
		<label for="first_name">Name:</label>
			<input type="text" name="first_name" value =<?php echo $data["first_name"] ;?>>
		<br/>
		<?php 
			if(isset($error["first_name"])){
				echo "<div class = 'error'> Missing argument : first_name</div>";
			}
		?>
		<label for="last_name">Last name:</label>
			<input type="text" name="last_name" value =<?php echo $data["last_name"] ;?>>
		<br/>
		<?php 
			if(isset($error["last_name"])){
				echo "<div class = 'error'> Missing argument : last_name</div>";
			}
		?>
		<label for="address">Address:</label>
			<input type="text" name="address" value =<?php echo $data["address"] ;?>>
		<br/>
		<?php 
			if(isset($error["address"])){
				echo "<div class = 'error'> Missing argument : address</div>";
			}
		?>

		<?php
			if(!empty($error)){
				echo "<br/><div class= 'error'>";
				foreach($error as $campo => $valor){
					echo "Missing argument : $campo<br/>";
				}
				echo "</div>";
			}
		?>
		<input type="submit" value="Enviar">
		<input type="reset" value="Reset">
	</form>

	<?php
		if (empty($error)) {
			echo "<div class = 'success'>";
			echo "Form send successfully<br/><br/>";
			foreach($data as $key => $value){
				echo "$key => $value<br/>";
			}
			echo "</div>";
		}
	?>

</body>
</html>