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
                                <a href="register.html"><font face="Comic sans MS" size="3">CHANGE PASSWORD</font></a>
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
                <h1 class="page-header"style="background-color:orange;color:black"><font face="Comic sans MS" size="6">&nbsp Data Analysis</font>
                  
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><font face="Comic sans MS" size="4">Home</font></a>
                    </li>
                    <li class="active"><font face="Comic sans MS" size="4">Data Analysis</font></li>
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
                          <a href="tc.php" class="list-group-item"><font face="Comic sans MS" size="4">Table Charts</font></a>
                    <a href="bar.php" class="list-group-item"><font face="Comic sans MS" size="4">Bar Charts</font></a>
                    <a href="pie.php" class="list-group-item"><font face="Comic sans MS" size="4">Pie Charts</font></a>
                    <a href="line.php" class="list-group-item"><font face="Comic sans MS" size="4">Line Charts</font></a>
                 
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
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_45" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_45"><a id="lnkOptionLink_A_45" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_45">Rs. 19,450</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_45"><a id="lnkOptionLink_B_45" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_45">Rs. 21,200</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_45"><a id="lnkOptionLink_C_45" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_45">Rs. 22,950</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_45"><a id="lnkOptionLink_D_45" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_45">Rs. 26,150</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_45" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_45">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_45').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
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
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_45">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_45').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_45">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_45').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_45';" name="" id="txtReport_45" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_45" onclick="SendBixReport('1', '45')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_45">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_45').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_45').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_45').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/pie-charts/discussion-45">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">2.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>What is the central angle of the sector corresponding to the expenditure incurred on Royalty?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_41" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_41"><a id="lnkOptionLink_A_41" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_41">15�</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_41"><a id="lnkOptionLink_B_41" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_41">24�</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_41"><a id="lnkOptionLink_C_41" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_41">54�</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_41"><a id="lnkOptionLink_D_41" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_41">48�</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_41" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_41">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_41').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tr>
  <td class="di-td-normal-rpad">Central angle corresponding to Royalty </td>
  <td class="di-td-normal-rpad">= (15% of 360)�</td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad">
    <table class="di-tbl-answer" cellpadding="0" cellspacing="0">
    <tr align="center">
      <td class="di-td-line-rpad" rowspan="2">=</td>
      <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="(" /></td>
      <td class="di-td-divident">15</td>
      <td class="di-td-line-lpad" rowspan="2">x 360</td>
      <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")" /></td>
      <td class="di-td-upline" rowspan="2">�</td>
    </tr>
    <tr align="center">
      <td class="di-td-divisor">100</td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad">= 54�.</td>
</tr>
</table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_41">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_41').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_41">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_41').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_41';" name="" id="txtReport_41" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_41" onclick="SendBixReport('2', '41')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_41">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_41').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_41').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_41').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/pie-charts/discussion-41">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">3.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>The price of the book is marked 20% above the C.P. If the marked price of the book is Rs. 180, then what is the cost of the paper used in a single copy of the book?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_46" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_46"><a id="lnkOptionLink_A_46" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_46">Rs. 36</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_46"><a id="lnkOptionLink_B_46" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_46">Rs. 37.50</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_46"><a id="lnkOptionLink_C_46" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_46">Rs. 42</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_46"><a id="lnkOptionLink_D_46" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_46">Rs. 44.25</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_46" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_46">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_46').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Clearly, marked price of the book = 120% of C.P.</p>
<p>Also, cost of paper = 25% of C.P</p>
<p>Let the cost of paper for a single book be Rs. <i class="di-var">n</i>.</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">Then, 120 : 25 = 180 : <i class="di-var">n</i> &nbsp; &nbsp; <img src="/_files/images/data-interpretation/common/15-sym-imp.gif" alt="=&gt;"> &nbsp; &nbsp; <i class="di-var">n</i> = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">25 x 180</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line-lrpad" rowspan="2">= Rs. 37.50 .</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">120</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_46">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_46').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_46">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_46').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_46';" name="" id="txtReport_46" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_46" onclick="SendBixReport('3', '46')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_46">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_46').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_46').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_46').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/pie-charts/discussion-46">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">4.&nnbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>If 5500 copies are published and the transportation cost on them amounts to Rs. 82500, then what should be the selling price of the book so that the publisher can earn a profit of 25%?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_48" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_48"><a id="lnkOptionLink_A_48" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_48">Rs. 187.50</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_48"><a id="lnkOptionLink_B_48" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_48">Rs. 191.50</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_48"><a id="lnkOptionLink_C_48" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_48">Rs. 175</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_48"><a id="lnkOptionLink_D_48" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_48">Rs. 180</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_48" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_48">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_48').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>For the publisher to earn a profit of 25%, S.P. = 125% of C.P.</p>
<p>Also Transportation Cost = 10% of C.P.</p>
<p>Let the S.P. of 5500 books be Rs. <i class="di-var">x</i>.</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">Then, 10 : 125 = 82500 : <i class="di-var">x</i> &nbsp; &nbsp; <img src="/_files/images/data-interpretation/common/15-sym-imp.gif" alt="=&gt;"> &nbsp; &nbsp; <i class="di-var">x</i> = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">125 x 82500</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line-lrpad" rowspan="2">= Rs. 1031250.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">10</td>
</tr>
</tbody></table>
</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-tfr.gif" alt="Therefore"> S.P. of one book = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">1031250</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line-lrpad" rowspan="2">= Rs. 187.50 .</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">5500</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_48">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_48').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_48">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_48').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_48';" name="" id="txtReport_48" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_48" onclick="SendBixReport('4', '48')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_48">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_48').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_48').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_48').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/pie-charts/discussion-48">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">5.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>Royalty on the book is less than the printing cost by:</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_49" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_49"><a id="lnkOptionLink_A_49" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_49">5%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_49"><a id="lnkOptionLink_B_49" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_49"><table class="di-tbl-answer" cellpadding="0" cellspacing="0">
    <tbody><tr align="center">
      <td class="di-td-line-rpad" rowspan="2">33</td>
      <td class="di-td-divident">1</td>
      <td class="di-td-line" rowspan="2">%</td>
    </tr>
    <tr align="center">
      <td class="di-td-divisor">5</td>
    </tr>
    </tbody></table></td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_49"><a id="lnkOptionLink_C_49" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_49">20%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_49"><a id="lnkOptionLink_D_49" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_49">25%</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_49" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_49">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_49').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Printing Cost of book = 20% of C.P.</p>
<p>Royalty on book = 15% of C.P.</p>
<p>Difference = (20% of C.P.) - (15% of C.P) = 5% of C.P.</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-tfr.gif" alt="Therefore"> Percentage difference</td>
  <td class="di-td-line-lrpad" rowspan="2">=</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">Difference</td>
  <td class="di-td-line-lpad" rowspan="2">x 100</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line" rowspan="2" align="left">%</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">Printing Cost</td>
</tr>
<tr><td colspan="10" class="di-td-dummy"><p>&nbsp;</p></td></tr>
<tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp;</td>
  <td class="di-td-line-lrpad" rowspan="2">=</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">5% of C.P.</td>
  <td class="di-td-line-lpad" rowspan="2">x 100</td>    
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line" rowspan="2" align="left">% = 25%.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">Printing Cost</td> 
</tr>
</tbody></table></p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_49">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_49').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_49">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_49').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_49';" name="" id="txtReport_49" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_49" onclick="SendBixReport('5', '49')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_49">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_49').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_49').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_49').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/pie-charts/discussion-49">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr /><div><p class="ib-pager"><span class="ib-pager-current">1</span><a href="/data-interpretation/pie-charts/010002"><span class="ib-pager-no">2</span></a><a href="/data-interpretation/pie-charts/010002">Next &raquo;</a></p></div><hr /><div style="margin-left:30px; padding-top:15px; padding-bottom:15px"><script type="text/javascript"><!--
google_ad_client = "pub-0191447310372013";
/* BIX Bottom 336x280 */
google_ad_slot = "6754773581";
google_ad_width = 336;
google_ad_height = 280;
//-->

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



