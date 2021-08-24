<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];
if($aa==""||$bb==""||$cc==""||$dd=="")
{
	echo"Please fill all the blanks";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("day2");
	$query="SELECT * FROM student WHERE name='$aa'AND email='$bb'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO student VALUES('$aa','$bb','$cc','$dd')";
		mysql_query($query1);
		echo"database updated";
	}
	else
	{
		echo"User already exists";
	}
}
?>