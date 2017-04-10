<?php
	$usn=$_GET["usn"];
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b43af4d0f2a0ca','663354b5');
	
	$sql="Select * from studentinfo where usn='".$usn."'";

	mysql_select_db('ad_7d98415a975319d');

	$result=mysql_query($sql,$con);
	$val=mysql_affected_rows($con);

	$row=mysql_fetch_array($result,MYSQL_BOTH);
	if($val)
		print $row['USN']." and ".$row['Name'];	
	else
		print "Record NOT found";

	mysql_close($con);
?>
