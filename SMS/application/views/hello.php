<html>
<head>
	<title> <?php echo $title; ?></title>
<body>
	<h1> My first view in code igniter </h1>
	<?php 
		foreach ($fruits as $e)
		{
			echo "<br /> $e";
		}
	?>
</body>
</head>
</html>
