<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: SIGNIN.html");
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
                                <a href="verbal.php"><font face="Comic sans MS" size="3">VERBAL</font></a>
                            </li>
                            <li>
                                <a href="logical.php"><font face="Comic sans MS" size="3">LOGICAL</font></a>
                            </li>
							<li>
                                <a href="analysis.php"><font face="Comic sans MS" size="3">DATA ANALYSIS</font></a>
                            </li>
</ul>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">INTERVIEW </font><b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">
                            <li>
                                <a href="technical.php"><font face="Comic sans MS" size="3">TECHNICAL</font></a>
                            </li>
                            <li>
                                <a href="hr.php"><font face="Comic sans MS" size="3">HR</font></a>
                            </li>
<li>
                                <a href="gd.php"><font face="Comic sans MS" size="3">GROUP DISCUSSION</font></a>
                            </li>

</ul>
 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">STUDY SOURCES</font> <b class="caret"></b></a>
<ul class="dropdown-menu"style="background-color:orange;color:black">
 <li class="dropdown"><a href="#" class="dropdown-toggle" data toggle="dropdown"><font face="Comic sans MS" size="3">IT/COMPUTERS </font><b class=""></b></a>
<ul class="dropdown dropdown-submenu">

									<li><a href="java.php"><font face="Comic sans MS" size="3">JAVA</font></a></li>
									<li><a href="dbms.php"><font face="Comic sans MS" size="3">DBMS</font></a></li>
									<li><a href="dsa.php"><font face="Comic sans MS" size="3">DSA</font></a></li>
									<li><a href="cn.php"><font face="Comic sans MS" size="3">CN</font></a></li>
<li><a href="os.php"><font face="Comic sans MS" size="3">OS</font></a></li>

</ul>
							</li>
<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">ELECTRONICS </font><b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="vlsi.php"><font face="Comic sans MS" size="3">VLSI DESIGN</font></a></li>
									<li><a href="dsp.php"><font face="Comic sans MS" size="3">DSP</font></a></li>
									<li><a href="power.php"><font face="Comic sans MS" size="3">POWER ELECTRONICS</font></a></li>
									<li><a href="ss.php"><font face="Comic sans MS" size="3">SIGNALS & SYSTEMS</font></a></li>
								</ul>
							</li>                              
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data toggle="dropdown dropdown-submenu"><font face="Comic sans MS" size="3">PRODUCTION</font> <b class=""></b></a>
								<ul class="dropdown dropdown-submenu">
									<li><a href="som.php"><font face="Comic sans MS" size="3">SOM</font></a></li>
									<li><a href="tom.php"><font face="Comic sans MS" size="3">TOM</font></a></li>
									<li><a href="thermo.php"><font face="Comic sans MS" size="3">THERMODYNAMICS&nbsp</font></a></li>
									<li><a href="fm.php"><font face="Comic sans MS" size="3">FLUID MECHANICS&nbsp</font></a></li>
								</ul>
							</li> 
</ul>  
</li>                
 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">TEST YOURSELF</font> <b class="caret"></b></a>
                        <ul class="dropdown-menu"style="background-color:orange;color:black">


                            <li>
                                <a href="qtest.php"><font face="Comic sans MS" size="3">APTITUDE</font></a>
                            </li>
                            <li>
                                <a href="ftest.php"><font face="Comic sans MS" size="3">FUNCTIONAL EXPERTISE</font></a>
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
                                <a href="rounds.php"><font face="Comic sans MS" size="3">COMPANY ROUNDS</font></a>
                            </li>
                            <li>
                                <a href="papers.php"><font face="Comic sans MS" size="3">COMPANY PAPERS</font></a>
                            </li>

                            <li>
                                <a href="rs.html"><font face="Comic sans MS" size="3">R.S.AGGARwAL</font></a>
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
                                <a href="progress.php"><font face="Comic sans MS" size="3">MY PROGRESS</font></a>
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
                <h1 class="page-header">TECHNICAL
                                    </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li class="active">Computer Networks</li>
                </ol>
            </div>
        </div>

        <!-- /.row -->

<ul class="pagination pagination-sm">
  <li class="active"><a href="technical.php">DATA STRUCTURE</a></li>
  <li><a href="technical2.php">CN</a></li>
  <li><a href="technical3.php">OS</a></li>
  <li><a href="technical4.php">DBMS</a></li>
<li><a href="technical5.php">JAVA</a></li>
</ul>                    

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Define Network
</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                A network is a set of devices connected by physical media links. A network is recursively is a connection of two or more nodes by a physical link or two or more networks connected by one or more nodes.                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

What is a Link?</a>                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                At the lowest level, a network can consist of two or more computers directly connected by some physical medium such as coaxial cable or optical fiber. Such a physical medium is called as Link.                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What are the advantages of Distributed Processing?</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                a. Security/Encapsulation<br>
b. Distributed database<br>
c. Faster Problem solving<br>
d. Security through redundancy<br>
e. Collaborative Processing
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Name the factors that affect the performance of the network?

</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                a. Number of Users<br>
b. Type of transmission medium<br>
c. Hardware<br>
d. Software
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">What is Protocol?</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                A protocol is a set of rules that govern all aspects of information communication.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Define Bandwidth and Latency</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                Network performance is measured in Bandwidth (throughput) and Latency (Delay). Bandwidth of a network is given by the number of bits that can be transmitted over the network in a certain period of time. Latency corresponds to how long it t5akes a message to travel from one end off a network to the other. It is strictly measured in terms of time.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">When a switch is said to be congested?</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                It is possible that a switch receives packets faster than the shared link can accommodate and stores in its memory, for an extended period of time, then the switch will eventually run out of buffer space, and some packets will have to be dropped and in this state is said to congested state.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What is semantic gap?</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">Defining a useful channel involves both understanding the applications requirements and recognizing the limitations of the underlying technology. The gap between what applications expects and what the underlying technology can provide is called semantic gap.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Define the terms Unicasting, Multiccasting and Broadcasting</a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                               If the message is sent from a source to a single destination node, it is called Unicasting.<br>
If the message is sent to some subset of other nodes, it is called Multicasting.<br>
If the message is sent to all the m nodes in the network it is called Broadcasting.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What is Multiplexing?</a>
                            </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">Multiplexing is the set of techniques that allows the simultaneous transmission of multiple signals across a single data link.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"> Name the categories of Multiplexing</a>
                            </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse">
                            <div class="panel-body">a. Frequency Division Multiplexing (FDM)<br>
b. Time Division Multiplexing (TDM)<br>
   i. Synchronous TDM<br>
   ii. ASynchronous TDM Or Statistical TDM<br>
c. Wave Division Multiplexing (WDM)
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">What is FDM?</a>
                            </h4>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse">
                            <div class="panel-body">FDM is an analog technique that can be applied when the bandwidth of a link is greater than the combined bandwidths of the signals to be transmitted.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">List the layers of OSI</a>
                            </h4>
                        </div>
                        <div id="collapseThirteen" class="panel-collapse collapse">
                            <div class="panel-body">a. Physical Layer<br>
b. Data Link Layer<br>
c. Network Layer<br>
d. Transport Layer<br>
e. Session Layer<br>
f. Presentation Layer<br>
g. Application Layer
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">Which layers are network support layers?</a>
                            </h4>
                        </div>
                        <div id="collapseFourteen" class="panel-collapse collapse">
                            <div class="panel-body">a. Physical Layer<br>
b. Data link Layer <br> 
c. Network Layers
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">What are the types of errors?</a>
                            </h4>
                        </div>
                        <div id="collapseFifteen" class="panel-collapse collapse">
                            <div class="panel-body">a. Single-Bit error<br>
  In a single-bit error, only one bit in the data unit has changed.<br>
b. Burst Error<br>
  A Burst error means that two or more bits in the data have changed.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen"> What is Redundancy?</a>
                            </h4>
                        </div>
                        <div id="collapseSixteen" class="panel-collapse collapse">
                            <div class="panel-body">The concept of including extra information in the transmission solely for the purpose of comparison. This technique is called redundancy.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">What is VRC?</a>
                            </h4>
                        </div>
                        <div id="collapseSeventeen" class="panel-collapse collapse">
                            <div class="panel-body">It is the most common and least expensive mechanism for Error Detection. In VRC, a parity bit is added to every data unit so that the total number of 1s becomes even for even parity. It can detect all single-bit errors. It can detect burst errors only if the total number of errors in each data unit is odd.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen">What are the Data link protocols?</a>
                            </h4>
                        </div>
                        <div id="collapseEighteen" class="panel-collapse collapse">
                            <div class="panel-body">Data link protocols are sets of specifications used to implement the data link layer. The categories of Data Link protocols are:<br> 1. Asynchronous Protocols<br>
2. Synchronous Protocols<br>
  a. Character Oriented Protocols<br>
  b. Bit Oriented protocols
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen">What are Cyclic Codes?</a>
                            </h4>
                        </div>
                        <div id="collapseNineteen" class="panel-collapse collapse">
                            <div class="panel-body">Cyclic codes are special linear block codes with one extra property. In a cyclic code, if a codeword is cyclically shifted (rotated), the result is another codeword.
                            </div>
                        </div>
                    </div>
<!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">Define Character Stuffing</a>
                            </h4>
                        </div>
                        <div id="collapseTwenty" class="panel-collapse collapse">
                            <div class="panel-body">In byte stuffing (or character stuffing), a special byte is added to the data section of the frame when there is a character with the same pattern as the flag. The data section is stuffed with an extra byte. This byte is usually called the escape character (ESC), which has a predefined bit pattern. Whenever the receiver encounters the ESC character, it removes it from the data section and treats the next character as data, not a delimiting flag.
                            </div>
                        </div>
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
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


