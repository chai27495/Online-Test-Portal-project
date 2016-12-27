<?php
session_start();
?>
<!---
Site	:	WWW.FEWPRESS.COM
Author	:	Md. Rokonuzzaman Rokon
--->

<?php 
require 'database.php';
if(!empty($_SESSION['username'])){
    $test_cat="";$test_sub_cat="";$level="";
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
  
   $keys=array_keys($_POST);
   $order=join("','",$keys);
   
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
//   echo $order;
   $response=mysql_query("select Qid,Qcat,Qsub_cat,Qlevel,ans from qbank where Qid IN('".$order."') ORDER BY FIELD(Qid,'".$order."')") or die(mysql_error());
//        echo mysql_num_rows($response);
   while($result=mysql_fetch_array($response)){
//       echo $_POST[$result['Qid']];
       $test_cat=$result['Qcat'];
       $test_sub_cat=$result['Qsub_cat'];
       $level=$result['Qlevel'];
       
       if($result['ans']==$_POST[$result['Qid']]){
               $right_answer++;
           }else if($_POST[$result['Qid']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
//    echo $i;
   $total = $right_answer+$unanswered+$wrong_answer;
    if($total==0)$percentage=0;
    else $percentage= ($right_answer/$total)*100;
   $name=$_SESSION['username'];  
    $date = date_create(null,timezone_open("Asia/Kolkata"));
    $datestring=date_format($date,"d/m/Y H:i:s");
   $sql="insert into score (sid,test_date,test_cat,test_sub_cat,level,correct, wrong, unanswered, percentage) values ($name,now(),'".$test_cat."','".$test_sub_cat."',".$level.",$right_answer, $wrong_answer, $unanswered, $percentage)";
//    echo $sql;
    $retval = mysql_query($sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
    
include('demo.php');
   
//   echo "Entered data successfully\n";
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
<style>
body {
        background-image: url("images/1902671.jpg");color:white;
} 
 
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
        <div class="container result">
            <div class="row"> 
                    
           </div>  
           <hr>   
           <div class="row"> 
<!--
                  <div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3"> 
                    
                  </div>
-->
                  
                  <div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-5"> 
                     
                   
                       <div >
                        <p>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></p>
                        <p>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></p>   
                                        
                       </div> 
                       <a href="<?php echo BASE_PATH;?>" class='btn btn-success'>Start new Quiz!!!</a>                   
                     <a href="<?php echo BASE_PATH.'logout.php';?>" class='btn btn-success'>Logout</a>
                   
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
        <footer>
            <p class="text-center" id="foot">
                
            </p>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery.validate.min.js"></script>



    </body>
</html>
<?php }else{
    
 header( 'Location: http://localhost/MasterMinds/index.php' ) ;
      
}?>