<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: sign-in.html");
    die();

}
?>
<!DOCTYPE html>
<html lang="en">

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
									<li><a href="digital-signal-processing.php">POWER ELECTRONICS</a></li>
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
                                <a href="register.html">Change Password</a>
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"style="background-color:orange;color:black">Logical Reasoning
                  
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Logical Reasoning</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Home</a>
                          <a href="number-series.html" class="list-group-item">Number Series</a>
                    <a href="essential-part.html" class="list-group-item">Essential part</a>
                    <a href="matching-definitions.html" class="list-group-item">Matching Definitions</a>
                    <a href="logical-problems.html" class="list-group-item">Logical Problems</a>
                    <a href="statement-and-assumptions.html" class="list-group-item">Statement and Assumptions</a>
                    <a href="theme-detection.html" class="list-group-item">Theme Detection</a>
                    <a href="logical-deduction.html" class="list-group-item">Logical Deduction</a>
                    <a href="letter-and-symbol-series.html" class="list-group-item">Letter and Symbol series</a>
                    <a href="analogies.html" class="list-group-item">Analogies</a>
                    <a href="making-judgements.html" class="list-group-item">Making Judgements</a>
                    <a href="logical-games.html" class="list-group-item">Logical Games</a>
                    <a href="course-of-action.html" class="list-group-item">Course of Action</a>
                    <a href="cause-and-effect.html" class="list-group-item item">Cause and Effect</a>
                    <a href="verbal-classification.html" class="list-group-item">Verbal Classification</a>
                    <a href="artificial-language.html" class="list-group-item">Artificial Language</a>
                    <a href="verbal-reasoning.html" class="list-group-item">Verbal reasoning</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>Logical Reasoning</h2>
                <p>Logical reasoning is the process of using a rational, systematic series of steps based on sound mathematical procedures and given statements to arrive at a conclusion.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

