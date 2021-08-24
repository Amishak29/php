<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];

if($aa==""||$bb==""||$cc==""||$dd=="")
{
	echo "Please fill all the blanks";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("day2");
	$query="SELECT * FROM student WHERE name='$aa' AND password='$bb'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		echo"mismatch";
	}
	else
	{
		$query1="UPDATE student SET email='$cc' WHERE name='$aa' AND password='$bb'";
		mysql_query($query1);
		echo"email updated";
	}
}
?>