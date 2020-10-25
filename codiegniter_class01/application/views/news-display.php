<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php 

		foreach ($items as $item) 
		{
			?>


			<h1><?php echo $item['title'] ?></h1>

			<p><?php echo $item['text'] ?></p>
	<?php	}

	 ?>

</body>
</html>