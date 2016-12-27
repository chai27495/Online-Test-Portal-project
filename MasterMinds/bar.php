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
                    <p><p>The bar graph given below shows the sales of books (in thousand number) from six branches of a publishing company during two consecutive years 2000 and 2001.</p>
    <p align="center" class="di-heading">Sales of Books (in thousand numbers) from Six Branches - B1, B2, B3, B4, B5 and B6 of a publishing Company in 2000 and 2001.</p>
    <p align="center"><img src="b1.png"></p></p>
                </div></div></td></tr>
    <tr>
        <td style="padding-left:5px" valign="top">
            
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">1.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>What is the ratio of the total sales of branch B2 for both years to the total sales of branch B4 for both years?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_203" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_203"><a id="lnkOptionLink_A_203" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_203">2:3</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_203"><a id="lnkOptionLink_B_203" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_203">3:5</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_203"><a id="lnkOptionLink_C_203" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_203">4:5</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_203"><a id="lnkOptionLink_D_203" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_203">7:9</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_203" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_203">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_203').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">Required ratio =</td>
  <td class="di-td-divident">(75 + 65)</td>
  <td class="di-td-line-lrpad" rowspan="2">=</td>
  <td class="di-td-divident">140</td> 
  <td class="di-td-line-lrpad" rowspan="2">=</td>
  <td class="di-td-divident">7</td> 
  <td class="di-td-line" rowspan="2">.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">(85 + 95)</td>
  <td class="di-td-divisor">180</td>
  <td class="di-td-divisor">9</td>
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
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_203';" name="" id="txtReport_203" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_203" onclick="SendBixReport('1', '203')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_203">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_203').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_203').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_203').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/bar-charts/discussion-203">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">2.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>Total sales of branch B6 for both the years is what percent of the total sales of branches B3 for both the years?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_201" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_201"><a id="lnkOptionLink_A_201" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_201">68.54%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_201"><a id="lnkOptionLink_B_201" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_201">71.11%</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_201"><a id="lnkOptionLink_C_201" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_201">73.17%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_201"><a id="lnkOptionLink_D_201" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_201">75.55%</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_201" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_201">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_201').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr>
  <td class="di-td-normal-rpad">Required percentage</td>
  <td class="di-td-normal-rpad">
  <table class="di-tbl-answer" cellpadding="0" cellspacing="0">
  <tbody><tr align="center">
    <td class="di-td-line-rpad" rowspan="2">=</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
    <td class="di-td-divident">(70 + 80)</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">(95 + 110)</td>
  </tr>
  </tbody></table>
  </td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad">
  <table class="di-tbl-answer" cellpadding="0" cellspacing="0">
  <tbody><tr align="center">
    <td class="di-td-line-rpad" rowspan="2">=</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
    <td class="di-td-divident">150</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">205</td>
  </tr>
  </tbody></table>
  </td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad">= 73.17%.</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_201">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_201').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_201">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_201').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_201';" name="" id="txtReport_201" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_201" onclick="SendBixReport('2', '201')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_201">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_201').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_201').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_201').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/bar-charts/discussion-201">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">3.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>What percent of the average sales of branches B1, B2 and B3 in 2001 is the average sales of branches B1, B3 and B6 in 2000?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_204" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_204"><a id="lnkOptionLink_A_204" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_204">75%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_204"><a id="lnkOptionLink_B_204" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_204">77.5%</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_204"><a id="lnkOptionLink_C_204" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_204">82.5%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_204"><a id="lnkOptionLink_D_204" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_204">87.5%</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_204" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_204">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_204').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Average sales (in thousand number) of branches B1, B3 and B6 in 2000</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; =</td>
  <td class="di-td-divident">1</td>
<td class="di-td-line-lpad" rowspan="2">x (80 + 95 + 70)</td>
<td class="di-td-line-lrpad" rowspan="2">=</td>
<td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
<td class="di-td-divident">245</td> 
<td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
<td class="di-td-line" rowspan="2">.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">3</td>
  <td class="di-td-divisor">3</td>
</tr>
</tbody></table>
</p>
<p>Average sales (in thousand number) of branches B1, B2 and B3 in 2001</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; =</td>
  <td class="di-td-divident">1</td>
  <td class="di-td-line-lpad" rowspan="2">x (105 + 65 + 110)</td>
  <td class="di-td-line-lrpad" rowspan="2">=</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">280</td> 
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line" rowspan="2">.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">3</td>
  <td class="di-td-divisor">3</td>
</tr>
</tbody></table>
</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-tfr.gif" alt="Therefore"> Required percentage =</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
  <td class="di-td-divident">245/3</td>
  <td class="di-td-line-lpad" rowspan="2">x 100</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
  <td class="di-td-line-rpad" rowspan="2">% =</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-oparen-h1.gif" alt="("></td>
  <td class="di-td-divident">245</td> 
  <td class="di-td-line-lpad" rowspan="2">x 100</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cparen-h1.gif" alt=")"></td>
  <td class="di-td-line-rpad" rowspan="2">% = 87.5%.</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">280/3</td>
  <td class="di-td-divisor">280</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_204">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_204').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_204">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_204').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_204';" name="" id="txtReport_204" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_204" onclick="SendBixReport('3', '204')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_204">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_204').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_204').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_204').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/bar-charts/discussion-204">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">4.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>What is the average sales of all the branches (in thousand numbers) for the year 2000?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_202" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_202"><a id="lnkOptionLink_A_202" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_202">73</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_202"><a id="lnkOptionLink_B_202" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_202">80</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_202"><a id="lnkOptionLink_C_202" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_202">83</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_202"><a id="lnkOptionLink_D_202" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_202">88</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_202" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_202">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_202').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Average sales of all the six branches (in thousand numbers) for the year 2000</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; =</td>
  <td class="di-td-divident">1</td>
  <td class="di-td-line-lpad" rowspan="2">x [80 + 75 + 95 + 85 + 75 + 70]</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">6</td>
</tr>
</tbody></table>
</p>
<p>&nbsp; &nbsp; = 80.</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_202">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_202').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_202">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_202').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_202';" name="" id="txtReport_202" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_202" onclick="SendBixReport('4', '202')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_202">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_202').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_202').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_202').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/bar-charts/discussion-202">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">5.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>Total sales of branches B1, B3 and B5 together for both the years (in thousand numbers) is?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_200" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_200"><a id="lnkOptionLink_A_200" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_200">250</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_200"><a id="lnkOptionLink_B_200" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_200">310</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_200"><a id="lnkOptionLink_C_200" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_200">435</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_200"><a id="lnkOptionLink_D_200" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_200">560</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_200" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_200">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_200').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Total sales of branches B1, B3 and B5 for both the years (in thousand numbers)</p>
<p>&nbsp; &nbsp; = (80 + 105) + (95 + 110) + (75 + 95)</p>
<p>&nbsp; &nbsp; = 560.</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_200">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_200').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_200">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_200').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_200';" name="" id="txtReport_200" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_200" onclick="SendBixReport('5', '200')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_200">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_200').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_200').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_200').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/bar-charts/discussion-200">Discuss in Forum</a>
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

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>




