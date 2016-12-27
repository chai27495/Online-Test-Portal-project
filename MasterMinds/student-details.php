<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: sign-in.html");
    die();
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
        background-image: url("images/1902671.jpg");color:white;
} 
 
</style>

</head>
<body>
 <!-- Navigation -->
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

	 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        
        <!-- /.row -->
</div>
    <!-- /.container -->

	
	
	<?php
include("database.php");

echo"<br><br><br><br>Choose Branch to view each Student's progress<br><br> ";

echo"<form method=post>";
echo "Select Branch :";
echo"<select name=SelectBranch>";
echo"<option selected disabled hidden>Choose here</option>";
echo "<option name=ans value=IT> IT </option>";
echo "<option name=ans value=COMPUTERS> COMPUTERS </option>";
echo "<option name=ans value=ELECTRONICS> ELECTRONICS </option>";
echo "<option name=ans value=PRODUCTION> PRODUCTION </option>";
echo "</select>";
echo"<input type=submit name=Branch value='Confirm'>";
echo"</form>"; 	

if(isset($_POST['Branch'])) 
{
	
if(!isset($_POST['SelectBranch'])) 
{
	echo "<script type='text/javascript'>alert('Choose a branch');</script>";
	die();
}
  $ans = $_POST['SelectBranch'];
  //echo "This is what I get: ".$ans;// will echo This is what I get:
}

if(isset($ans))
{
$rs=mysql_query("select Sid , Full_name , Stream from student_master WHERE Stream='$ans'");

echo "<table align=center>";
echo"<th><u><b>Student Roll No.</b></u></th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>Name</b></u></th>";

if(!$rs)
{
	echo "doesnt work" . mysql_error();
	exit;
}

while($row=mysql_fetch_row($rs))
{
	//if( $row['Stream'] == $ans)
	echo "<tr><td>$row[0]</td><td align=center ><a href=progresignals-and-systems.php?studid=$row[0]><font size=4>$row[1]</font></a></td></tr>";
}

}

echo "</table>";



?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html> 	