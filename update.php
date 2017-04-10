<?php
if(isset($_GET['btn']))
{
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b43af4d0f2a0ca','663354b5');

	$usn=$_GET["usn"];
	$name=$_GET["name"];

	mysql_select_db('ad_7d98415a975319d');

	$sql="Update studentinfo set name='".$name."' where usn='".$usn."'";

	mysql_query($sql,$con);

	$cnt = mysql_affected_rows($con);

	if($cnt)
		print "Record updated";
	else
		print "Updation failed";
	
	mysql_close($con);
}
?>

<html>
<body>
<form action="update.php" method="GET">
Enter USN <input type="text" name="usn">
Enter Name <input type="text" name="name">
<input type="submit" value="update" name="btn">
<a href="index.php">Home page</a>
</form>
</body>
</html>
