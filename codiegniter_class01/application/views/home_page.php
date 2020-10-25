<?php 
	
	defined('BASEPATH') or exit('No direct script access allowed');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<h1> this is <?php echo $title ?> </h1>
	<h1> this is <?php echo $tag ?> </h1>

	<h1>Welcome to home page</h1>
	<p>This page is coming via home controller.</p>

	<p>

		<ul>
			<?php 

				foreach ($district as $dist) 
				{
				?>
				<li>
					
					<?php echo $dist ?>

				</li>
			<?php 	}

			?>

		</ul>

		<?php foreach ($district as $key => $dist) 
		{ ?>
			<table border="1" style="width:300px, border: 1px solid red">
				<tr>
					<td><?php echo $key ?></td>  
					<td> <?php echo $dist ?></td>
				</tr>
			
			</table>
	<?php 	}
      ?>
	</p>

</body>
</html>

















