<?php

$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b43af4d0f2a0ca','663354b5');

$usn=$_GET["usn"];

mysql_select_db('ad_7d98415a975319d');

$sql="Select * from studentinfo";

$result=mysql_query($sql,$con);

$cnt=mysql_affected_rows($con);

if(!$cnt)
{
	print "No..Records found";
}
else
{
	while($row=mysql_fetch_array($result,MYSQL_NUM))
	{
		print $row[0]. " and " .$row[1]."</br>";
	}
mysql_close($con);
}

?>

<html>
<body>
<form action="fetch.php" method="get'>
<input type="Submit" value="Fetch" name="btn">
<a href="index.php">Home Page</a>
</form>
</body>
</html>
