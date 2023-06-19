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
		max-width: 800px;
		border: 5px solid gold;
		margin: auto;
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
	table{
		padding 10px;
		border: 2px gold;
		border-collapse:collapse;
	}
	th{
		color:gold;
		font-family:Verdana;
		text-shadow: 4px 2px 5px black;
		padding: 15px;
	}
	td{
		color:gold;
		font-family:Verdana;
		text-shadow: 4px 2px 5px black;
		padding: 15px;
	}
	</style>
</head>
<body>
<div class="container" border="1">
	<?php
		$x = 1;
		$y = 5;
		$z = 14.95;
		$str1 = "PHP";
		$str2 = "Python";
		
	?>
		<h1>PHP</h1>
		
		<hr color="gold">
		<br>
		<h3>$x = 1</h3>
		<h3>$y = 5</h3>
		<h3>$z = 14.95</h3>
		<h3>$str1 = "PHP"</h3>
		<h3>$str2 = "Python"</h3>
		<br>
		<table border="1">
			<tr>
				<th>Arithmetic Operators</th>
				<td>echo $x + $y</td>
				<td>output: <?php echo $x + $y;?></td>
			</tr>
			<tr>
				<th>Assignment Operators</th>
				<td>echo $z = 15</td>
				<td>output: <?php echo $z = 15;?></td>
			</tr>
			<tr>
				<th>Ternary Operators</th>
				<td>echo $new = ($z>=10)? "pass":"fail"</td>
				<td>output: <?php echo $new = ($z>=10)? "pass":"fail";?></td>
			</tr>
			<tr>
				<th>Comparison Operators</th>
				<td>echo $z > $y</td>
				<td>output: <?php echo $z > $y;?></td>
			</tr>
			<tr>
				<th>Increment and Decrement Operators</th>
				<td>echo --$y</td>
				<td>output: <?php echo --$y;?></td>
			</tr>
			<tr>
				<th>Logical Operators</th>
				<td>echo $x and $y</td>
				<td>output: <?php echo $x and $y;?></td>
			</tr>
			<tr>
				<th>String Operators</th>
				<td>echo $str1 . $str2</td>
				<td>output: <?php echo $str1 . $str2;?></td>
			</tr>
			
		</table>
		<br><br>

		
	</div>
<?php
?>
</body>
</html>