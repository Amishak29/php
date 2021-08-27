<?php

session_start();
$m=$_POST['a'];
$o=$_POST['b'];

$_SESSION['name']=$m;
$_SESSION['pswd']=$o;

mysql_connect("localhost","root","");
mysql_select_db("net");

$query="SELECT * FROM student WHERE name='$m' AND password ='$o'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$query1="SELECT * FROM admin WHERE name='$m' AND password ='$o'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);


if(name ==""|| pswd ==""){
	echo "Please fill all the details..";
	echo "<a href='login.php'>Try Again</a>";
	
}
else if($row1!=0){
	$query2="SELECT * FROM student";
	$result2=mysql_query($query2);
	
	echo "<table border='6' width='75%'>";
	echo "<tr height='5px'>";
	echo "<td width='20%'>Name</td>";
	echo "<td width='20%'>Email</td>";
	echo "<td width='20%'>Password</td>";
	echo "<td width='20%'>Phone</td>";
	echo "<td width='20%'>Confirmation</td>";
	echo "</tr>";
	echo "</table>";
	
	while($row2=mysql_fetch_array($result2)){
	echo "<table border='6' width='75%'>";
	echo "<tr height='5px'>";
	echo "<td width='20%'>".$row2[0]."</td>";
	echo "<td width='20%'>".$row2[1]."</td>";
	echo "<td width='20%'>".$row2[2]."</td>";
	echo "<td width='20%'>".$row2[3]."</td>";
	echo "<td width='20%'>".$row2[4]."<a href='update.php?new=$row2[0]'>UPDATE</a></td>";
	echo "</tr>";
	echo "</table>";
	}
	echo "<a href='logout.php'>LOGOUT</a>";
}

else{
	if($row==0){
		echo "First Register From <a href='form.php'><br>This link</a>";
	}
	else{
		$result3=mysql_query("SELECT confirmation FROM student WHERE name='$m' AND password='$o'");
		$row3=mysql_fetch_array($result3);
		if($row3[0]==1){
			echo "Successfully Logged In";
			echo" (Confirmed !!!!!)";
		}
		else{
			echo" ( you are not Confirmed !!!!!)";
		}
		echo "<center><a href='logout.php'>LOGOUT</a></center>";
	}
}
?>