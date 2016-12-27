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
                <a class="navbar-brand" href="index.php"style="background-color:orange;color:black"> <font face="Comic sans MS" size="6"><b>HOME</b></font>
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">APTITUDE</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="quantitative.php"><font face="Comic sans MS" size="3">QUANTITATIVE</font></a>
                            </li>
                            <li>
                                <a href="verbal-analysis.php"><font face="Comic sans MS" size="3">VERBAL</font></a>
                            </li>
                            <li>
                                <a href="logical-analysis.php"><font face="Comic sans MS" size="3">LOGICAL</font></a>
                            </li>
							<li>
                                <a href="data-analysis.php"><font face="Comic sans MS" size="3">DATA ANALYSIS</font></a>
                            </li>
</ul>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">INTERVIEW </font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="data-structures.php"><font face="Comic sans MS" size="3">TECHNICAL</font></a>
                            </li>
                            <li>
                                <a href="hr.php"><font face="Comic sans MS" size="3">HR</font></a>
                            </li>
<li>
                                <a href="group-discussions.php"><font face="Comic sans MS" size="3">GROUP DISCUSSION</font></a>
                            </li>

</ul>
 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">STUDY SOURCES</font> <b class="caret"></b></a>
<ul class="dropdown-menu"style="background-color:orange;color:black">
 <li class="dropdown"><a href="#" class="dropdown-toggle" data toggle="dropdown"><font face="Comic sans MS" size="3">IT/COMPUTERS </font><b class=""></b></a>
<ul class="dropdown dropdown-submenu">

									<li><a href="java.php"><font face="Comic sans MS" size="3">JAVA</font></a></li>
									<li><a href="database-systems.php"><font face="Comic sans MS" size="3">DBMS</font></a></li>
									<li><a href="data-structures-and-algorithms.php"><font face="Comic sans MS" size="3">DSA</font></a></li>
									<li><a href="computer-networks.php"><font face="Comic sans MS" size="3">CN</font></a></li>
<li><a href="operating-systems.php"><font face="Comic sans MS" size="3">OS</font></a></li>

</ul>
							</li>
<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">ELECTRONICS </font><b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="very-large-scale-integration.php"><font face="Comic sans MS" size="3">VLSI DESIGN</font></a></li>
									<li><a href="digital-signal-processing.php"><font face="Comic sans MS" size="3">DSP</font></a></li>
									<li><a href="power-electronics.php"><font face="Comic sans MS" size="3">POWER ELECTRONICS</font></a></li>
									<li><a href="signals-and-systems.php"><font face="Comic sans MS" size="3">SIGNALS & SYSTEMS</font></a></li>
								</ul>
							</li>                              
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">PRODUCTION</font> <b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="som.php"><font face="Comic sans MS" size="3">SOM</font></a></li>
									<li><a href="tom.php"><font face="Comic sans MS" size="3">TOM</font></a></li>
									<li><a href="thermodynamics.php"><font face="Comic sans MS" size="3">THERMODYNAMICS&nbsp</font></a></li>
									<li><a href="fluid-mechanics.php"><font face="Comic sans MS" size="3">FLUID MECHANICS&nbsp</font></a></li>
								</ul>
							</li> 
</ul>  
</li>                
 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">TEST YOURSELF</font> <b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">


                            <li>
                                <a href="aptitude.php"><font face="Comic sans MS" size="3">APTITUDE</font></a>
                            </li>
                            <li>
                                <a href="functional-expertise.php"><font face="Comic sans MS" size="3">FUNCTIONAL EXPERTISE</font></a>
                            </li>
                            <li>
                                <a href="testall.php"><font face="Comic sans MS" size="3">ALL IN ONE</font></a>
                            </li>

                            
                        </ul>
                    </li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MISCELLANEOUS</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="company-rounds.php"><font face="Comic sans MS" size="3">COMPANY ROUNDS</font></a>
                            </li>
                            <li>
                                <a href="company-papers.php"><font face="Comic sans MS" size="3">COMPANY PAPERS</font></a>
                            </li>

                            <li>
                                <a href="rs-aggarwal.html"><font face="Comic sans MS" size="3">R.S.AGGARwAL</font></a>
                            </li>

</ul>
</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MY ACCOUNT</font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            
                            <li>
                                <a href="register.php"><font face="Comic sans MS" size="3">CHANGE PASSWORD</font></a>
                            </li>  
							

                            <li>
                                <a href="my-progress.php"><font face="Comic sans MS" size="3">MY PROGRESS</font></a>
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"style="background-color:orange;color:black">Quantitative
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Quantitative</li>
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
                    <a href="age.html" class="list-group-item">Age</a>
                    <a href="area.html" class="list-group-item">Area</a>
                    <a href="average.html" class="list-group-item">Average</a>
                    <a href="bankers-discount.html" class="list-group-item">Banker's Discount</a>
                    <a href="probability.html" class="list-group-item">Probability</a>
                    <a href="profit-and-loss.html" class="list-group-item">Profit & Loss</a>
                    <a href="calender.html" class="list-group-item">Calendar</a>
                    <a href="hcf-lcm.html" class="list-group-item">HCF & LCM</a>
                    <a href="simple-interest.html" class="list-group-item">Simple Interest</a>
                    <a href="compound-interest.html" class="list-group-item">Compound Interest</a>
                    <a href="height-and-distance.html" class="list-group-item">Height & Distance</a>
                    <a href="boats-and-streams.html" class="list-group-item">Boats and Streams</a>
                    <a href="chain-rule.html" class="list-group-item ">Chain Rule</a>
                    <a href="decimal-fractions.html" class="list-group-item">Decimal Fractions</a>
                    <a href="logarithm.html" class="list-group-item">Logarithm</a>
                    <a href="mixture-and-alligation.html" class="list-group-item">Mixture and Alligation</a>



                  

                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">			   <div class="panel panel-default">

                <h2><b>Quantitative</b></h2>
<p> 


Quantitative Aptitude Tests evaluate numerical ability and problem solving skills of candidates. This test forms the major part of a number of important entrance exams for different fields. CAT, MAT, XAT, and GMAT and many other significant exams have Quantitative Aptitude as a major section. Many companies use it in their selection procedure. Topics that may be included in different exams are:
</p>




<h2 style="background-color:orange;color:black">
Basics:
</h2>

<p>
    Number Properties<br/>
    LCM, HCF<br/>
    Divisibility<br/>
    Remainder Theorem <br/>
</p>

<h2 style="background-color:orange;color:black">
Arithmetic:
</h2>
<P>
    Fractions & Decimals, Ratio & Proportion, Square Roots<br/>
    Simple & Compound Interest<br/>
    Time & Speed, Unitary Method, Time & Work<br/>
    Profit & Loss<br/>
    Percentage & Discount <br/>
</p>

<h2 style="background-color:orange;color:black">
Algebra:
</h2>

<P>
    Simple Equations<br/>
    Quadratic Equations<br/>
    Polynomials<br/>
    Exponents<br/>
    Functions <br/>
</p>


<h2 style="background-color:orange;color:black">
Sets, Relations & Mappings:
</h2>

<P>
    Sets<br/>
    Venn Diagrams<br/>
    Relations<br/>
    Functions <br/>
</p>


<h2 style="background-color:orange;color:black">
Mensuration:
</h2>

<P>
    Areas of Triangle, Quadrilateral, and Circle<br/>
    Volume of Cylinder, Cone, and Sphere <br/>
</p>

<h2 style="background-color:orange;color:black">
Geometry:
</h2>

<P>
    Triangles<br/>
    Properties of Circle<br/>
    Parallelogram <br/>
</p>


<h2 style="background-color:orange;color:black">
Statistics:
</h2>

<P>
    Mean<br/>
    Median<br/>
    Mode<br/>
    Quartiles <br/>
</p>

Permutations and Combinations

Probability

<p>
</p>
             
      <!-- /.row -->


  <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tips to prepare for Quantitative Aptitude Test !!</a>
                            </h4>          
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
<li> Start from the basics:<br>
There is no set syllabus that you can strictly follow, in general. But if a particular test appraises you of the topics included, then stick to that. Otherwise go back to the basics of Mathematics, however easy you may think it to be. Follow your academic syllabus so that you can cover all major topics. </li><br>

<li> Concentrate on fundamentals:<br>
The basic concepts of the topics involved should be absolutely clear. Take guidance from your teacher if you get stuck on a particular topic. Do not leave any topic, even if it seems relatively unimportant, as questions can be asked from anywhere. Revise the concepts as and when possible. </li><br>

<li> Practice:<br>
Various entrance exams conduct Quantitative Aptitude as one of the papers. Solve previous year's papers and also model papers of these exams. This will help acquaint with pattern and structure of questions set. The key mantra to success is extensive practice and speed. Calculations of some of the problems can be quite lengthy and time is a major factor during the exams. Practice a lot to acquire speed. Look in the silly mistakes committed earlier and try to improve them. </li><br>

<li> Take a systematic approach:<br>
First solve the practice questions topic wise and later attempt an entire paper. In the beginning you can solve the problems using conventional methods. Later, try out your own shortcut methods to increase speed. But be alert not to jump crucial steps which might confuse you later. </li><br>

<li> Memorise important formulas, theorems and tables:<br>
Quantitative Aptitude includes a lot of formulas, theorems, tables, etc. Write down the important ones that you need to memorise on a sheet of paper. Keep it handy so that you can glance at it any time. Practice a lot to get familiar with them. Practice common square root and cube root problems to quickly solve during exam. </li><br>

<li> Mark strong and weak sections:<br>
While solving different problems, try to find out the topics that you are strong in and also the ones you in which you aren't. Do not neglect the ones you are considerably weaker in, as these might constitute a major part of the paper. Take guidance from your teacher, mentor or senior. You can also take up a coaching class on Mathematics. </li><br>

<li> Part marking:<br>
Many tests on Quantitative Aptitude have part marking scheme. So even if you know that the final answer is wrong, do not cancel the whole problem as you can get part marking for the correct portion. </li><br>

<li>Glance before solving: <br>
Give a quick glance to the exam paper. First take up the questions you are more comfortable as this will give you the much needed confidence and positive energy to move on with the rest of the paper. Later solve the other questions that you feel are slightly tougher. </li><br>

<li> Time is essential:<br>
Do not waste time if you get stuck in solving a particular question. You might be giving away precious time. Move on to solve the other questions and later if time permits try the ones you have left earlier. </li><br>

<li> Negative marking:<br>
    Many tests follow negative marking, so it is advisable not to attempt too many questions on guesswork. In case if you have to then apply the process of elimination (POE) to eliminate the more probable incorrect choices to zero-in on the correct one. </li><br>
</div>
                        </div>
                    </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

