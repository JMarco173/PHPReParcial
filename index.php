<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
	$hostname = "us-cdbr-iron-east-01.cleardb.net";
	$username = "b74ba3320e82ec";
	$password = "2d194843";
	$dbname = "ad_bb6ddb2f34daf52";
	$con = new msqli($hostname,$username,$password,$dbname);
	
	if($con->connect_error)
	{
		die("Conection failed : " .$con->connect_error);
	}
		$sql = "SELECT * from servicios";
	$result = $con->query($sql); 
	num_rows > 0) {
      // output data of each row
      	while($row = $result->fetch_assoc()) {?>
      	<tr>
      	<td><?php echo $row['codigo_servicio']?></td>
      	<td><?php echo $row['nombre_servicio']?></td>
      	<td><?php echo $row['descripcion_servicio']?></td>
	<td><?php echo $row['imagen_servicio']?></td>
     	 </tr>
     	<?php }
  	} else {
     	 echo "0 results";
  	}
 	 $conn->close();
	?>
</body>
</html>
