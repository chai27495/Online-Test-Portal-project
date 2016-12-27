<?php
include("database.php");
session_start();
// Taking values from form

$user = $_POST["user"];
$pass = $_POST["pass"];
echo $user;
echo $pass;

//Checking in DB

$sql = "SELECT * FROM student_master WHERE Sid='$user' and Password='$pass'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
//$row=mysql_fetch_array($result);
//$flag=$row['flag'];
//$admin = $row['admin'];
//echo $count;

if ($count == 0)
	{
		$sql1 = "SELECT * FROM admin WHERE username='$user' and password='$pass'";
$result1 = mysql_query($sql1);
$count1 = mysql_num_rows($result1);

if($count1==0)
{
		print '<script type="text/javascript">';
		print 'alert("Invalid Username or Password");';
		print 'history.back();';
		print '</script>';
		//echo "Invalid Username or Password";
	}
else 
	{
		$_SESSION['username'] = $user;
        $_SESSION['admin']=$user;
		print '<script type="text/javascript">';
		print 'alert("Login Successful");';
		print '</script>';
		header("location: adminhome.php");
	}
	}
//echo $flag;
else 
	{
		$_SESSION['username'] = $user;
		//header("location: session.php");
		print '<script type="text/javascript">';
		print 'alert("Login Successful");';
		print '</script>';
		header("location: index.php");
	}
?> 