<?php

	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/

$uploadedStatus = 0;

if ( isset($_POST["submit"]) ) {
if ( isset($_FILES["file"])) {
//if there was an error uploading the file
if ($_FILES["file"]["error"] > 0) {
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else {
if (file_exists($_FILES["file"]["name"])) {
unlink($_FILES["file"]["name"]);
}
$storagename = "upload_data.xlsx";
move_uploaded_file($_FILES["file"]["tmp_name"],  $storagename);
$uploadedStatus = 1;
}
} else {
echo "No file selected <br />";
}
}

?>



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
                        <a class="navbar-brand" href="adminhome.php" style="background-color:orange;color:black"> <font face="Comic sans MS" size="6"><b>HOME</b></font>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font face="Comic sans MS" size="3">MY ACCOUNT</font><b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color:orange;color:black">

                                    <li>
                                        <a href="register.php"><font face="Comic sans MS" size="3">CHANGE PASSWORD</font></a>
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
        
        <!-- /.row -->
</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
<h1> steps to be followed:</h1>
<ol type="1">
<li>create an excel file with the name <b>upload_data.xslx</b> </li>
<li>click on the browse button and select the file named upload_data.xslx</li>
<li>click on the submit button</li>
<li>"file uploaded" messgage will be displayed</b>
<li> now you can upload th data into database by clicking "click here"</li>
</ol>
<h1> excel file format</h1>
<table border="1" style="width:100%">
<tr>
<th>Qid</th>
<th>Qcat</th>
<th>Qsub_cat</th>
<th>Qlevel</th>
<th>Qtype</th>
<th>Qdescription</th>
<th>op1</th>
<th>op2</th>
<th>op3</th>
<th>op4</th>
<th>ans</th>
<th>Qexplanation</th>
<th>Qimage</th>
<th>Q_pdf</th>
</tr>
<tr>
<td> </td>
<td> APT </td>
<td> Q </td>
<td> 1</td>
<td> MCQ</td>
<td>Evaluate: [(2.39)^2-(1.61)^2]/[2.39-1.61] </td>
<td> 2</td>
<td> 4</td>
<td> 6</td>
<td> 8</td>
<td> 2</td>
<td>NULL</td>
<td>NULL</td>
<td>NULL</td>
</tr>
<tr>
<td> </td>
<td>APT</td>
<td> Q</td>
<td> 2</td>
<td> MCQ</td>
<td> Find the greatest number that will divide 43, 91 and 183 so as to leave the same remainder in each case.</td>
<td>4</td>
<td>7</td>
<td>9</td>
<td>13</td>
<td> 1</td>
<td>NULL</td>
<td>NULL</td>
<td>NULL</td>
</tr>
</table>
<h1> Note </h1>
<ul >
<li> The <b> Qid</b> column should be blank</li>
<li> <b>ans</b> is the option number</li>
<li> Qcat is the question category. It consists of:</li>
<ol type="1">
<li> Aptitude - APT </li>
<li> Core- CORE </li>
</ol>
<li> <b> Qsub_cat</b> is the sub category. It consists of:
<ol type="1">
<li> Quants- Q</li>
<li> Verbal-VER</li>
<li> Logical- LOG</li>
<li> Data analysis- DATA_NA</li>
</ol>
</ul>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
<table width="600" style="margin:115px auto; background:#f8f8f8; border:1px solid #eee; padding:10px;">
<tr><td colspan="2" style="font:bold 21px arial; text-align:center; border-bottom:1px solid #eee; padding:5px 0 10px 0;">


<tr><td colspan="2" style="font:bold 15px arial; text-align:center; padding:0 0 5px 0;">Upload Excel file</td></tr>

<tr>

<td width="50%" style="font:bold 12px tahoma, arial, sans-serif; text-align:right; border-bottom:1px solid #eee; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Select file</td>

<td width="50%" style="border-bottom:1px solid #eee; padding:5px;"><input type="file" name="file" id="file" /></td>

</tr>





<tr>

<td style="font:bold 12px tahoma, arial, sans-serif; text-align:right; padding:5px 10px 5px 0px; border-right:1px solid #eee;">Submit</td>

<td width="50%" style=" padding:5px;"><input type="submit" name="submit" value="submit" /></td>

</tr>

</table>

<?php if($uploadedStatus==1){

echo "<table align='center'><tr><td  ><center>============================= <b>File Uploaded<b/> =============================================</center></td></tr>";

echo "<tr><td ><center>============================= <b>Do you want to upload the data <a href='uploaddata2.php'>Click Here</a> </b>========================</center></td></tr></table>";

}?>



</form>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>