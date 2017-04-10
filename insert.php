<?php
if(isset($_GET['btn'])){

$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b43af4d0f2a0ca','663354b5');

$usn=$_GET['usn'];
$name=$_GET['name'];

mysql_select_db('ad_7d98415a975319d');
 
$sql="Insert into studentinfo values('".$usn."','".$name."')";

$ret_val=mysql_query($sql,$con) or die("Error" + mysql_error());

if($ret_val)
 print "Record Inserted";
else
 print "Record NOT Inserted";

mysql_close($con);
}
?>

<html>
<body>

<form action="insert.php" method="GET">

Enter USN <input type="text" name="usn">
Enter Name <input type="text" name="name">
<input type="Submit" value="insert" name="btn">
<a href="index.php">Home Page</a>
</form>
</body>
</html>
