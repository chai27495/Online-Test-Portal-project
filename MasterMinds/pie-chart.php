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
                <h1 class="page-header"style="background-color:orange;color:black"><font face="Comic sans MS" size="6">&nbsp Data Analysis</font>
                  
                </h1>
               <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                     <li><a href="analysis.php">Data Analysis</a>
                    </li>

                    <li class="active">Pie Charts</li>
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
                          <a href="table-chart.php" class="list-group-item"><font face="Comic sans MS" size="4">Table Charts</font></a>
                    <a href="bar-chart.php" class="list-group-item"><font face="Comic sans MS" size="4">Bar Charts</font></a>
                    <a href="pie-chart.php" class="list-group-item"><font face="Comic sans MS" size="4">Pie Charts</font></a>
                    <a href="line-chart.php" class="list-group-item"><font face="Comic sans MS" size="4">Line Charts</font></a>
                 
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

<td id="ib-main-bar" valign="top">
    <table cellspacing="0" cellpadding="0" style="width:570" border="0">
    <tr><td class="bix-td-direction" valign="top">
                <div class="bix-div-direction" id="divDirection">
                <div class="title-bar"><a id="lnkDirectionShowHide" href="javascript: void 0;" onclick="$('#divDirectionText').slideToggle('slow');"><span class="ib-green">Directions to Solve</span></a></div> 
                <div class="div-spacer" id="divDirectionText">
                    <p><p>The following pie-chart shows the percentage distribution of the expenditure incurred in publishing a book. Study the pie-chart and the answer the questions based on it.</p>
    <p align="center" class="di-heading">Various Expenditures (in percentage) Incurred in Publishing a Book</p>
    <p align="center"><img src="p1.png"></p></p>
                </div></div></td></tr>
    <tr>
        <td style="padding-left:5px" valign="top">
            
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">1.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>If for a certain quantity of books, the publisher has to pay Rs. 30,600 as printing cost, then what will be amount of royalty to be paid for these books?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_203" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_203"><a id="lnkOptionLink_A_203" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_203">Rs. 19,450</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_203"><a id="lnkOptionLink_B_203" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_203">Rs. 21,200</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_203"><a id="lnkOptionLink_C_203" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_203">Rs. 22,950</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_203"><a id="lnkOptionLink_D_203" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_203">Rs. 26,150</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_203" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_203">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_203').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option C<b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>
<tabl         <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Let the amount of Royalty to be paid for these books be Rs. <i class="di-var">r</i>.</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">Then, 20 : 15 = 30600 : <i class="di-var">r</i> &nbsp; &nbsp; <img src="/_files/images/data-interpretation/common/15-sym-imp.gif" alt="=&gt;"> &nbsp; &nbsp; <i class="di-var">r</i> = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">30600 x 15</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line-lrpad" rowspan="2">= Rs. 22,950.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">20</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_203">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_203').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_203">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_203').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 

                            <input id="btnReport_203" onclick="SendBixReport('1', '203')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_203">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_203').slideToggle('slow')"    >View Answer</a>

</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
           
            <div style="margin-left:30px; padding-top:15px; padding-bottom:15px">
            <script type="text/javascript">
google_ad_client = "pub-0191447310372013";
/* BIX Bottom 336x280 */
google_ad_slot = "6754773581";
google_ad_width = 336;
google_ad_height = 280;
                </script>
            </div>
        </div>
        <!-- /.row -->

       

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>




