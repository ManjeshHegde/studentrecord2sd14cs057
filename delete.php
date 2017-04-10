<?php
if(isset($_GET["btn"]))
{
$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b43af4d0f2a0ca','663354b5');

$usn=$_GET["usn"];


$sql="Delete from studentinfo where usn='".$usn."'";

mysql_select_db('ad_7d98415a975319d');

mysql_query($sql,$con);

$val=mysql_affected_rows($con);
print($val);
if($val)
	print " Record(s) deleted";
else
	print "Record NOT deleted";
	
mysql_close($con);
}
?>

<html>
<body>
<form action="delete.php" method="get">
Enter USN to delete <input type="text" name="usn"> 
<input type="submit" value="Delete" name="btn">
<a href="index.php">Home Page</a>
</form>
</body>
</html>
