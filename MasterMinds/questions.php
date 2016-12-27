<?php
session_start();
?>
<!---
Site	:	WWW.FEWPRESS.COM
Author	:	Md. Rokonuzzaman Rokon
--->

<?php 
//error_reporting(1);
require 'database.php';
extract($_POST);
extract($_GET);
extract($_SESSION);
if(isset($catid) && isset($subcatid)&& isset($qlevel))
{
$_SESSION['catid']=$catid;
$_SESSION['subcatid']=$subcatid;
$_SESSION['subsubcatid']=$qlevel;
//echo "ya";
//$qlevel =1;
//header("location:quiz.php");
}
if(!isset($_SESSION['catid']) || !isset($_SESSION['subcatid']) || !isset($_SESSION['subsubcatid']))
{
//    echo $catid." sc";
//    echo $subcatid." ql";
//    echo $qlevel." ";
	//header("location:index.php");
}
if(!empty($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Responsive Quiz Application Using PHP, MySQL, jQuery, Ajax and Twitter Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/modern-business.css" rel="stylesheet">
     
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
		<script src="js/countdown.js"></script>
	
		<style>
            body{background-image: url("images/1902671.jpg");color:white;}
			.container {
/*				margin-top: 110px;*/
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}
			.hide{display: none;}
		</style>
	</head>
	<body>
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
        <div id='timer'>
            <script type="application/javascript">
            var myCountdownTest = new Countdown({
                                    time: 60*60, 
                                    width:200, 
                                    height:80, 
                                    rangeHi:"minute"
                                    });
           </script>
            
        </div>
        
		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
				<p>
					
				</p>
				<hr>
				<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
					<?php 
                    if($catid==0 && $subcatid==0)
                    {
                        $res = mysql_query("select Qid,Qdescription,op1,op2,op3,op4,ans from qbank where Qlevel=$qlevel ORDER BY RAND() LIMIT 10") or die(mysql_error());
                    }
                    else{    
                    $res = mysql_query("select lookup_value_code from parameter_master where lookup_value_id=$catid") or die(mysql_error());
                        
                    $result=mysql_fetch_array($res);
                    $cat=$result['lookup_value_code'];

                    $res = mysql_query("select lookup_value_code from parameter_master where lookup_value_id=$subcatid") or die(mysql_error());
                    $result=mysql_fetch_array($res);
                    $subcat=$result['lookup_value_code'];


                    //echo "cat: ".$cat.",sc: ".$subcat.",ssc: ".$subsubcat;

                    $res = mysql_query("select Qid,Qdescription,op1,op2,op3,op4,ans from qbank where Qcat='".$cat."' and Qsub_Cat='".$subcat."'  and Qlevel=$qlevel ORDER BY RAND() LIMIT 10") or die(mysql_error());
                                  
//					$res = mysql_query("select Qid,Qdescription,op1,op2,op3,op4 from qbank where Qlevel=$qlevel") or die(mysql_error());
                    }
                    $rows = mysql_num_rows($res);
					$i=1;
                while($result=mysql_fetch_array($res)){?>
                    
                    
                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['Qdescription'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op1'];?>
                   <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/>                                                                      
                    <br/>
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button'>Next</button>
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    
                    </div>     
                      
                     <?php }elseif($i<1 || $i<$rows){?>
                     
                       <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['Qdescription'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op1'];?>
                    <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/>                                                                      
                    <br/>
<!--                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    -->
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='button' >Next</button>
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
                       
                       
                       
                        
                        
                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['Qdescription'];?></p>
                    <input type="radio" value="1" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op1'];?>
                    <br/>
                    <input type="radio" value="2" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op2'];?>
                    <br/>
                    <input type="radio" value="3" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op3'];?>
                    <br/>
                    <input type="radio" value="4" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/><?php echo $result['op4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['Qid'];?>' name='<?php echo $result['Qid'];?>'/>                                                                      
                    <br/>
                    
<!--                    <button id='<?php echo $i;?>' class='previous btn btn-success' type='button'>Previous</button>                    -->
                    <button id='<?php echo $i;?>' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>
					
				</form>
			</div>
		</div>
       <footer>
            <p class="text-center" id="foot">
               
            </p>
        </footer>

	<script>
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');
		 
		 $(document).on('click','.next',function(){
		     last=parseInt($(this).attr('id'));     
		     nex=last+1;
		     $('#question'+last).addClass('hide');
		     
		     $('#question'+nex).removeClass('hide');
		 });
		 
//		 $(document).on('click','.previous',function(){
//             last=parseInt($(this).attr('id'));     
//             pre=last-1;
//             $('#question'+last).addClass('hide');
//             
//             $('#question'+pre).removeClass('hide');
//         });
            
         setTimeout(function() {
             $("form").submit();
          }, 60000*60);
		</script>
	</body>
</html>
<?php }else{
    
 header( 'Location: http://localhost/MasterMinds/index.php' ) ;
      
}
?>