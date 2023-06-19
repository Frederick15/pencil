<!DocTYPE>
<html>
<head>
	<title>PHP TEMPLATE</title>
	<meta charset="utf-8" />
	<style>
	body{
		background-color:#333333;
	}
	.container{
		background-color:#333333;
		padding: 20px;
		max-width: 600px;
		margin:auto;
		border: 5px solid gold;
		
		box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
	}
	p{
		color:gold;
		font-family:Verdana;
		margin-left:40px;
		text-shadow: 4px 2px 5px black;
	}
	h3{
		color:gold;
		font-family:Verdana;
		margin-left:20px;
		text-shadow: 4px 2px 5px black;
	}
	h1{
		color:gold;
		font-family:Verdana;
		text-align:center;
		text-shadow: 4px 2px 5px black;
	}
	</style>
</head>
<body>
	<div class="container" border="1">
		<?php
			$null = null;
			$integer = 1;
			$float = 1.25;
			
		?>
		<h1>PHP</h1>
			
		<hr color="gold">
		<br>
		<h3>$null = null</h3>
		<h3>$integer = 1</h3>
		<h3>$float = 1.25</h3>
		<br>
		<h3>isset</h3>
		<p>
		the value is set? <?php echo isset($null);?>
		<br>
		the value is set? <?php echo isset($integer);?>
		<br>
		the value is set? <?php echo isset($float);?>
		</p>
		<br><br>	
		
		<h3>empty</h3>
		<p>
		the value empty? <?php echo empty($null);?>
		<br>
		the value empty? <?php echo empty($integer);?>
		<br>
		the value empty? <?php echo empty($float);?>
		</p>
		<br><br>

		<h3>is_null</h3>
		<p>
		the value is null? <?php echo is_null($null);?>
		<br>
		the value is null? <?php echo is_null($integer);?>
		<br>
		the value is null? <?php echo is_null($float);?>
		</p>
		<br><br>
			
		<h3>is_numeric</h3>
		<p>
		the value is numeric? <?php echo is_numeric($null);?>
		<br>
		the value is numeric? <?php echo is_numeric($integer);?>
		<br>
		the value is numeric? <?php echo is_numeric($float);?>
		</p>
		<br><br>
			
		<h3>math</h3>
		<p>
		the floor value of $float is? <?php echo floor($float);?>
		<br>
		the ceil value of $float is? <?php echo ceil($float);?>
		<br>
		the round value of $float is? <?php echo round($float);?>
		</p>
		<br><br>

			
	</div>
<?php
?>
</body>
</html>