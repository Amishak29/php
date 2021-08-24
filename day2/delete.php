<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
if($aa==""||$bb=="")
{
	echo"plz fill all the data";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("day2");
	$query="SELECT * FROM student WHERE name='$aa' AND password='$bb'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if(count==0)
	{
		echo"credential mismatched";
	}
	else
	{
		$query1="DELETE FROM student WHERE name='$aa'AND password='$bb'";
		mysql_query($query1);
		echo"entity deleted";
	}
	
}