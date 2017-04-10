<?php
if(isset($_GET["btn"]))
{
$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b95d54c5cb9786','ec40e327');

$usn=$_GET["usn"];


$sql="Delete from studentinfo where usn='".$usn."'";

mysql_select_db('ad_003c7f5c562c423');

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