<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: sign-in.html.php");
    die();
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

</head>
<body>
<?php
include("database.php");
?>
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
                <a class="navbar-brand" href="index.php">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">APTITUDE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="quantitative.php">QUANTITATIVE</a>
                            </li>
                            <li>
                                <a href="verbal-analysis.php">VERBAL</a>
                            </li>
                            <li>
                                <a href="logical-analysis.php">LOGICAL</a>
                            </li>
							<li>
                                <a href="analysis.php">DATA ANALYSIS</a>
                            </li>
</ul>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">INTERVIEW <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="data-structures.php">TECHNICAL</a>
                            </li>
                            <li>
                                <a href="hr.php">HR</a>
                            </li>
<li>
                                <a href="group-discussions.php">GROUP DISCUSSION</a>
                            </li>

</ul>
 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDY SOURCES <b class="caret"></b></a>
<ul class="dropdown-menu">
 <li class="dropdown"><a href="#" class="dropdown-toggle" data toggle="dropdown">IT/COMPUTERS <b class=""></b></a>
<ul class="dropdown dropdown-submenu">

									<li><a href="java.php">JAVA</a></li>
									<li><a href="database-systems.php">DBMS</a></li>
									<li><a href="data-structures-and-algorithms.php">DSA</a></li>
									<li><a href="computer-networks.php">CN</a></li>
<li><a href="operating-systems.php">OS</a></li>

</ul>
							</li>
<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu">ELECTRONICS <b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="very-large-scale-integration.php">VLSI DESIGN</a></li>
									<li><a href="digital-signal-processing.php">DSP</a></li>
									<li><a href="power-electronics.php">POWER ELECTRONICS</a></li>
									<li><a href="signals-and-systems.php">SIGNALS & SYSTEMS</a></li>
								</ul>
							</li>                              
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu">PRODUCTION <b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="som.php">SOM</a></li>
									<li><a href="tom.php">TOM</a></li>
									<li><a href="thermodynamics.php">THERMODYNAMICS</a></li>
									<li><a href="fluid-mechanics.php">FLUID MECHANICS</a></li>
								</ul>
							</li> 
</ul>  
</li>                
 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TEST YOURSELF <b class="caret"></b></a>
                        <ul class="dropdown-menu">


                            <li>
                                <a href="aptitude.php">APTITUDE</a>
                            </li>
                            <li>
                                <a href="functional-expertise.php">FUNCTIONAL EXPERTISE</a>
                            </li>
                            
                        </ul>
                    </li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MISCELLANEOUS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="company-rounds.php">COMPANY ROUNDS</a>
                            </li>
                            <li>
                                <a href="company-papers.php">COMPANY PAPERS</a>
                            </li>
</ul>
</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li>
                                <a href="register.php">Change Password</a>
                            </li>  
							
                            <li>
                                <a href="logout.php">LOG OUT</a>
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
echo "<a href='student-details.php'> Student Details </a><br>";
echo"<a href='upload-data.php'>Add Data</a><br>";
echo"<a href= 'add-students.php'> Add students </a>";
?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>
</html>