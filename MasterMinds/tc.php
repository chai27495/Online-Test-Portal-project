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
                    <p><p>Study the following table and answer the questions based on it.</p>
    <p align="center" class="di-heading">Expenditures of a Company (in Lakh Rupees) per Annum Over the given Years.</p>
    <p align="center">
    
<table class="di-tbl-data" cellpadding="5" cellspacing="0" border="0" width="90%"> 
<tbody><tr>
    <td rowspan="2" class="di-heading">Year</td> 
    <td colspan="5" class="di-heading">Item of Expenditure</td>
</tr>
<tr> 
    <td class="di-heading">Salary</td> 
    <td class="di-heading">Fuel and Transport</td> 
    <td class="di-heading">Bonus</td> 
    <td class="di-heading">Interest on Loans</td> 
    <td class="di-heading">Taxes</td> 
</tr>
<tr> <td>1998</td><td>288</td><td>98</td><td>3.00</td><td>23.4</td><td>83</td> </tr>
<tr> <td>1999</td><td>342</td><td>112</td><td>2.52</td><td>32.5</td><td>108</td> </tr>
<tr> <td>2000</td><td>324</td><td>101</td><td>3.84</td><td>41.6</td><td>74</td> </tr>
<tr> <td>2001</td><td>336</td><td>133</td><td>3.68</td><td>36.4</td><td>88</td> </tr>
<tr> <td>2002</td><td>420</td><td>142</td><td>3.96</td><td>49.4</td><td>98</td> </tr>
</tbody></table>
    
    </p></p>
                </div></div></td></tr>
    <tr>
        <td style="padding-left:5px" valign="top">
            
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">1.&nbsp;</td>
   
  <td class="bix-td-qtxt" valign="top"><p>What is the average amount of interest per year which the company had to pay during this period?</p></td>
            </tr>

            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_156" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_156"><a id="lnkOptionLink_A_156" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_156">Rs. 32.43 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_156"><a id="lnkOptionLink_B_156" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_156">Rs. 33.72 lakhs</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_156"><a id="lnkOptionLink_C_156" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_156">Rs. 34.18 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_156"><a id="lnkOptionLink_D_156" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_156">Rs. 36.66 lakhs</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_156" value="" />


<div class="panel panel-default"><!-- panel-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo">Answer..>>>></a>
                            </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Average amount of interest paid by the Company during the given period</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
  <td class="di-td-divident">23.4 + 32.5 + 41.6 + 36.4 + 49.4</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
  <td class="di-td-line-lrpad" rowspan="2">lakhs</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">5</td>
</tr>
</tbody></table>
</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">   
                            </div>
                        </div>
                    </div>



 <div class="div-spacer" id="divDirectionText">
                    <p><p>Study the following table and answer the questions based on it.</p>
    <p align="center" class="di-heading">Expenditures of a Company (in Lakh Rupees) per Annum Over the given Years.</p>
    <p align="center">
    
<table class="di-tbl-data" cellpadding="5" cellspacing="0" border="0" width="90%"> 
<tbody><tr>
    <td rowspan="2" class="di-heading">Year</td> 
    <td colspan="5" class="di-heading">Item of Expenditure</td>
</tr>
<tr> 
    <td class="di-heading">Salary</td> 
    <td class="di-heading">Fuel and Transport</td> 
    <td class="di-heading">Bonus</td> 
    <td class="di-heading">Interest on Loans</td> 
    <td class="di-heading">Taxes</td> 
</tr>
<tr> <td>1998</td><td>288</td><td>98</td><td>3.00</td><td>23.4</td><td>83</td> </tr>
<tr> <td>1999</td><td>342</td><td>112</td><td>2.52</td><td>32.5</td><td>108</td> </tr>
<tr> <td>2000</td><td>324</td><td>101</td><td>3.84</td><td>41.6</td><td>74</td> </tr>
<tr> <td>2001</td><td>336</td><td>133</td><td>3.68</td><td>36.4</td><td>88</td> </tr>
<tr> <td>2002</td><td>420</td><td>142</td><td>3.96</td><td>49.4</td><td>98</td> </tr>
</tbody></table>
    
    </p></p>
                </div></div></td></tr>
    <tr>
        <td style="padding-left:5px" valign="top">
            
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">1.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>What is the average amount of interest per year which the company had to pay during this period?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_156" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_156"><a id="lnkOptionLink_A_156" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_156">Rs. 32.43 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_156"><a id="lnkOptionLink_B_156" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_156">Rs. 33.72 lakhs</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_156"><a id="lnkOptionLink_C_156" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_156">Rs. 34.18 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_156"><a id="lnkOptionLink_D_156" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_156">Rs. 36.66 lakhs</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_156" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_156">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_156').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Average amount of interest paid by the Company during the given period</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
  <td class="di-td-divident">23.4 + 32.5 + 41.6 + 36.4 + 49.4</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
  <td class="di-td-line-lrpad" rowspan="2">lakhs</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">5</td>
</tr>
</tbody></table>
</p>
<p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr align="center">
  <td class="di-td-line-rpad" rowspan="2">&nbsp; &nbsp; = Rs.</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
  <td class="di-td-divident">183.3</td>
  <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
  <td class="di-td-line-lrpad" rowspan="2">lakhs</td>
</tr>
<tr align="center">
  <td class="di-td-divisor">5</td>
</tr>
</tbody></table>
</p>
<p>&nbsp; &nbsp; = Rs. 36.66 lakhs.</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_156">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_156').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_156">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_156').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_156';" name="" id="txtReport_156" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_156" onclick="SendBixReport('1', '156')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_156">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_156').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_156').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_156').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/table-charts/discussion-156">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">2.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>The total amount of bonus paid by the company during the given period is approximately what percent of the total amount of salary paid during this period?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_158" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_158"><a id="lnkOptionLink_A_158" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_158">0.1%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_158"><a id="lnkOptionLink_B_158" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_158">0.5%</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_158"><a id="lnkOptionLink_C_158" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_158">1%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_158"><a id="lnkOptionLink_D_158" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_158">1.25%</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_158" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_158">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_158').slideToggle('slow');">Answer &amp; Explanation</a></div>
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
    <td class="di-td-divident">(3.00 + 2.52 + 3.84 + 3.68 + 3.96)</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">(288 + 342 + 324 + 336 + 420)</td>
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
    <td class="di-td-divident">17</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">1710</td>
  </tr>
  </tbody></table>
  </td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad"><img src="/_files/images/data-interpretation/common/15-sym-aeq.gif" alt="~="> 1%.</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_158">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_158').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_158">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_158').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_158';" name="" id="txtReport_158" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_158" onclick="SendBixReport('2', '158')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_158">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_158').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_158').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_158').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/table-charts/discussion-158">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">3.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>Total expenditure on all these items in 1998 was approximately what percent of the total expenditure in 2002?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_157" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_157"><a id="lnkOptionLink_A_157" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_157">62%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_157"><a id="lnkOptionLink_B_157" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_157">66%</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_157"><a id="lnkOptionLink_C_157" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_157">69%</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_157"><a id="lnkOptionLink_D_157" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_157">71%</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_157" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_157">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_157').slideToggle('slow');">Answer &amp; Explanation</a></div>
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
    <td class="di-td-divident">(288 + 98 + 3.00 + 23.4 + 83)</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">(420 + 142 + 3.96 + 49.4 + 98)</td>
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
    <td class="di-td-divident">495.4</td>
    <td class="di-td-line-lpad" rowspan="2">x 100</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
    <td class="di-td-line" rowspan="2">%</td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">713.36</td>
  </tr>
  </tbody></table>
  </td>
</tr>
<tr>
  <td class="di-td-normal-rpad"></td>
  <td class="di-td-normal-rpad"><img src="/_files/images/data-interpretation/common/15-sym-aeq.gif" alt="~="> 69.45%.</td>
</tr>
</tbody></table>
</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_157">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_157').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_157">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_157').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_157';" name="" id="txtReport_157" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_157" onclick="SendBixReport('3', '157')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_157">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_157').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_157').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_157').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/table-charts/discussion-157">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">4.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>The total expenditure of the company over these items during the year 2000 is?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_155" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_155"><a id="lnkOptionLink_A_155" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_155">Rs. 544.44 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_155"><a id="lnkOptionLink_B_155" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_155">Rs. 501.11 lakhs</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_155"><a id="lnkOptionLink_C_155" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_155">Rs. 446.46 lakhs</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_155"><a id="lnkOptionLink_D_155" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_155">Rs. 478.87 lakhs</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_155" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_155">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_155').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>Total expenditure of the Company during 2000</p>
<p>&nbsp; &nbsp; = Rs. (324 + 101 + 3.84 + 41.6 + 74) lakhs</p>
<p>&nbsp; &nbsp; = Rs. 544.44 lakhs.</p> </p> 
                        </div>
                    </div>
                    
                    <div class="bix-div-workspace" style="display:none" id="divWorkspace_155">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divWorkspace_155').slideToggle('slow');">Workspace</a></div>
                        <div class="div-spacer"> 
                            <!-- div class="div-calc" align="right"><input type="text" value="Calc" size="15" class="calc-box" /></div //-->
                            <textarea rows="10" cols="65" style="width:100%; padding: 10px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="bix-div-report" style="display:none" id="divReport_155">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divReport_155').slideToggle('slow');">Report Errors</a></div> 
                        <div class="div-spacer"> 
                            <textarea onchange="javascript:if(this.name == '')this.name='txtReport_155';" name="" id="txtReport_155" rows="8" cols="65" style="width:100%;padding:10px;">Kindly mention the details of the error here...




[Your Name]
[Your Email]</textarea> 
                            <input id="btnReport_155" onclick="SendBixReport('4', '155')" type="button" value="Send Report" style="margin-top:2px" />
                        </div>
                    </div>
                    <div class="bix-div-toolbar" id="divToolBar_155">
    <a class="answer"      href="javascript: void 0;"  onclick="$('#divAnswer_155').slideToggle('slow')"    >View Answer</a>
    <a class="workspace"   href="javascript: void 0;"  onclick="$('#divWorkspace_155').slideToggle('slow')" >Workspace</a>
    <a class="report"      href="javascript: void 0;"  onclick="$('#divReport_155').slideToggle('slow')"    >Report</a>    
    <a class="discuss"     href="/data-interpretation/table-charts/discussion-155">Discuss in Forum</a>
</div>
                    
                </td>
            </tr>
            </table>
            </div><hr />
            <div class="bix-div-container">
            <table class="bix-tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="bix-td-qno"  rowspan="2" valign="top" align="left">5.&nbsp;</td>
                <td class="bix-td-qtxt" valign="top"><p>The ratio between the total expenditure on Taxes for all the years and the total expenditure on Fuel and Transport for all the years respectively is approximately?</p></td>
            </tr>
            <tr>
                <td class="bix-td-miscell" valign="top"><table class="bix-tbl-options" id="tblOption_154" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_A_154"><a id="lnkOptionLink_A_154" href="javascript: void 0;">A.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_A_154">4:7</td><td class="bix-td-option" width="1%"  id="tdOptionNo_B_154"><a id="lnkOptionLink_B_154" href="javascript: void 0;">B.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_B_154">10:13</td></tr><tr><td class="bix-td-option" width="1%"  id="tdOptionNo_C_154"><a id="lnkOptionLink_C_154" href="javascript: void 0;">C.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_C_154">15:18</td><td class="bix-td-option" width="1%"  id="tdOptionNo_D_154"><a id="lnkOptionLink_D_154" href="javascript: void 0;">D.</a></td>
                 <td class="bix-td-option" width="49%" id="tdOptionDt_D_154">5:8</td></tr></table><input type="hidden" class="jq-hdnakq" id="hdnAnswer_154" value="" />
                    <div class="bix-div-answer" style="display:none" id="divAnswer_154">
                        <div class="title-bar"><a href="javascript: void 0;" onclick="$('#divAnswer_154').slideToggle('slow');">Answer &amp; Explanation</a></div>
                        <div class="div-spacer">
                            <p><span class="ib-green"><b>Answer:</b></span> Option <b class="jq-hdnakqb"></b></p> 
                            <p><span class="ib-green"><b>Explanation:</b></span></p> 
                            <p> <p>
<table class="di-tbl-answer" cellpadding="0" cellspacing="0">
<tbody><tr>
  <td class="di-td-normal-rpad">Required ratio</td>
  <td class="di-td-normal-rpad">
  <table class="di-tbl-answer" cellpadding="0" cellspacing="0">
  <tbody><tr align="center">
    <td class="di-td-line-rpad" rowspan="2">=</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-obracket-h1.gif" alt="["></td>
    <td class="di-td-divident">(83 + 108 + 74 + 88 + 98)</td>
    <td class="di-td-line" rowspan="2"><img src="/_files/images/data-interpretation/common/15-sym-cbracket-h1.gif" alt="]"></td>
  </tr>
  <tr align="center">
    <td class="di-td-divisor">(98 + 112 + 101 + 133 + 142)</td>
  </tr>
  </tbody></table>
  </td>
</tr>



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



