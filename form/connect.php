<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];
if($aa==""||$bb==""||$cc==""||$dd=="")
{
	echo"Please fill all the blanks";
	echo"<a href='form.php'> click here to go back</a>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("netcamp");
	$query="SELECT * FROM student WHERE name='$aa'AND password='$cc'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO student VALUES('$aa','$bb','$cc','$dd')";
		mysql_query($query1);
		echo"database updated";
		echo"<a href='form.php'> Click here to go back</a>";
	}
	else
	{
		echo"User already exists";
		echo"<a href='form.php'>click here to go back</a>";
	}
}
?>