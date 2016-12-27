<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in
    //redirect to homepage
    header("Location: SIGNIN.html.php");
	
}
?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MasterMinds</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
        background-image: url("images/1902671.jpg");color:black;
} 
 
</style>

</head>
<body>
<?php
include("database.php");
?>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">


                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="adminhome.php" style="background-color:orange;color:black"> <font face="Comic sans MS" size="6"><b>HOME</b></font>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MY ACCOUNT</font><b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color:orange;color:black">

                                    <li>
                                        <a href="register.php"><font face="Comic sans MS" size="3">CHANGE PASSWORD</font></a>
                                    </li>

                                    <li>
                                        <a href="logout.php"><font face="Comic sans MS" size="3">LOG OUT</font></a>
                                    </li>



                                </ul>

                            </li>
                        </ul>
                    </div>

                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
<?php	
	echo"<br><br>Choose a branch to delete Student list";
echo"<form method=post>";
echo "Select Branch :";
echo"<select name=SelectBranch>";
echo"<option selected disabled hidden>Choose here</option>";
echo "<option name=ans value=IT> IT </option>";
echo "<option name=ans value=COMPUTERS> COMPUTERS </option>";
echo "<option name=ans value=ELECTRONICS> ELECTRONICS </option>";
echo "<option name=ans value=PRODUCTION> PRODUCTION </option>";
echo "</select>";
//echo"<input type=submit name=Branch value='Confirm'>";
//echo"</form>"; 	

echo"&nbsp&nbsp&nbsp&nbsp";
	echo"Choose the Year of Passing";
	echo"<form method=post>";
echo "Select Year :";
  $rs=mysql_query("select year_of_pass from student_master GROUP BY year_of_pass ORDER BY year_of_pass ");

echo"<select name=Selectyear>";
while($row=mysql_fetch_row($rs))
{
	echo "<option name=ans1 value=$row[0]> $row[0] </option>";	
}

echo "</select>";
echo"<input type=submit name=cat value='Confirm'>";
echo"</form>";

if(!isset($_POST['SelectBranch'])) 
{
	echo "<script type='text/javascript'>alert('Choose a branch');</script>";
	die();
}
  $ans = $_POST['SelectBranch'];
  //echo "This is what I get ans: ".$ans;// will echo This is what I get:


if(isset($_POST['cat'])) 
{
	if(!isset($_POST['Selectyear'])) 
{
	echo "<script type='text/javascript'>alert('Choose a year');</script>";
	die();
}
  $ans1 = $_POST['Selectyear'];
  //echo "This is what I get: ".$ans1;// will echo This is what I get:
}
if(isset($ans) && isset($ans1))
{
	  $rs1=mysql_query("DELETE from student_master where Stream='$ans' AND year_of_pass='$ans1'");
		echo"Deleted!!!!";
}
else
{echo"error";}
?>	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	</body>
	</html> 	