<?php

include_once('db_connect.php');
include 'login.php';
$query="SELECT * from login";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>


<table>
	<br>
	<tr>
		
		<th>username</th>

		<th>email</th>

		<th>password</th>

		<th>confirm password</th>

		<th>nationality</th>
	</tr>

	<?php

	while ($rows=mysql_fetch_assoc($result)) {
    ?>

    <tr>
    	<td><?php echo $rows['username']; ?></td>
    	<td><?php echo $rows['email']; ?></td>
    	<td><?php echo $rows['password']; ?></td>
    	<td><?php echo $rows['confirm password']; ?></td>
    	<td><?php echo $rows['nationality']; ?></td>
    </tr>

    <?php
	}

	?>
</table>
</body>
</html>