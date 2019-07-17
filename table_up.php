<!DOCTYPE html>
<html>
<head>
	<?php
	include "connect2.php";
	if(isset($_REQUEST["up_name"]) || isset($_REQUEST["up_roll"]) || isset($_REQUEST["up_fee"]))
	{
		$str3="update student set name='".$_REQUEST["up_name"]."' where name='".$_REQUEST["hidden"]."'";
		mysqli_query($conn,$str3);
	}
	?>
	<title>Table update</title>
</head>
<body>
	<table border="2" cellspacing="10" cellpadding="20" bgcolor="AliceBlue">
		  <caption>Information</caption>
		  <th colspan="5" title="Database">Database</th>
		  <tr><td>Name<td>Roll number</td><td>Fee</td><td>Delete</td><td>Update</td></tr>
	<?php
	$count=1;
	$str= "select * from student";
	$get= mysqli_query($conn,$str);
	while($row=mysqli_fetch_array($get))
	{
		?>
		<tr><td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
			<td><a href="delete.php?id=<?php echo $row[0];?>">Delete</td>
			<td><a href="update.php?id2=<?php echo $row[0];?>">Update</td></tr>
	
	<?php $count++;
	} ?>
	</table>
</body>
</html>