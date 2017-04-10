<?php
if(isset($_GET['btn'])){

$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b95d54c5cb9786','ec40e327');

$usn=$_GET['usn'];
$name=$_GET['name'];

mysql_select_db('ad_003c7f5c562c423');
 
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