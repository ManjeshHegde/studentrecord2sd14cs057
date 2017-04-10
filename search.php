<?php
	$usn=$_GET["usn"];
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','b95d54c5cb9786','ec40e327');
	
	$sql="Select * from studentinfo where usn='".$usn."'";

	mysql_select_db('ad_003c7f5c562c423');

	$result=mysql_query($sql,$con);
	$val=mysql_affected_rows($con);

	$row=mysql_fetch_array($result,MYSQL_BOTH);
	if($val)
		print $row['USN']." and ".$row['Name'];	
	else
		print "Record NOT found";

	mysql_close($con);
?>