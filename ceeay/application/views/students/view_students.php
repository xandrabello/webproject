<html>
<head>
	<title> <?php echo $title; ?></title>
<body>
	<h1> Students- View Students </h1>
	<img src="assets/images/kuy.jpg" alt= my favorite animal" height="200 px"/>
<table border="1"> 
	<thead> 
		<tr>
			<th> ID no. </th>
			<th> Lastname </th>
			<th> Firstname </th>
			<th> Middlename </th>
			<th> Course </th>
			<th> Sex </th>
			<th> Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($students as $s){
				echo '<tr>
							<td>'.$s['idno'].'</td> 
							<td>'.$s['lastname'].'</td> 
							<td>'.$s['firstname'].'</td> 
							<td>'.$s['middlename'].'</td> 
							<td>'.$s['course'].'</td> 
							<td>'.$s['sex'].'</td> 
						<td> 
							<a href=""> View </a> |
							<a href=""> Edit </a> |
							<a href=""> Delete </a>
						</td>
					</tr>
					';
			}
		?>
	</tbody>
</table>
</body>
</head>
</html>
