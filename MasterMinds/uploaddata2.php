<?php
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo - Import Excel file data in mysql database using PHP, Upload Excel file data in database</title>
<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>
<style>
body {
        background-image: url("images/1902671.jpg");color:black;
} 
 
</style>

</head>
<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

 $connect = mysql_connect("localhost","root","");
    mysql_select_db("online_test_portal",$connect) or die("Couldnot connect to Database"); 
	$databasetable = "qbank";

//define ("DB_HOST", "localhost"); // set database host
//define ("DB_USER", "root"); // set database user
//define ("DB_PASS","nfra8025"); // set database password
//define ("DB_NAME","test_portal"); // set database name

//$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
//$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//$databasetable = "exce";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'upload_data.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
//$Qid1 = trim($allDataInSheet[$i]["A"]);
$Qcat1 = trim($allDataInSheet[$i]["B"]);
$Qsub_cat1 = trim($allDataInSheet[$i]["C"]);
$Qlevel1 = trim($allDataInSheet[$i]["D"]);
$Qtype1 = trim($allDataInSheet[$i]["E"]);
$Qdescription1 = trim($allDataInSheet[$i]["F"]);
$op11 = trim($allDataInSheet[$i]["G"]);
$op21 = trim($allDataInSheet[$i]["H"]);
$op31 = trim($allDataInSheet[$i]["I"]);
$op41 = trim($allDataInSheet[$i]["J"]);
$ans1 = trim($allDataInSheet[$i]["K"]);
$Qexplanation1 = trim($allDataInSheet[$i]["L"]);
$Qimage1 = trim($allDataInSheet[$i]["M"]);
$Q_pdf1 = trim($allDataInSheet[$i]["N"]);


$query = "SELECT Qcat FROM qbank WHERE Qcat = '".$Qcat1."' and Qsub_cat = '".$Qsub_cat1."' and Qlevel = ".$Qlevel1." and Qtype = '".$Qtype1."'and Qdescription = '".$Qdescription1."' and op1 = ".$op11."  and op2 = ".$op21."  and op3 = ".$op31." and op4 = ".$op41." and ans = ".$ans1." and Qexplanation = '".$Qexplanation1."' and Qimage = '".$Qimage1."' and Q_pdf = '".$Q_pdf1."'";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["Qcat"];
if($existName=="") {
$insertTable= mysql_query("insert into qbank (Qcat,Qsub_cat,Qlevel,Qtype,Qdescription,op1,op2,op3,op4,ans,Qexplanation,Qimage,Q_pdf) values('".$Qcat1."', '".$Qsub_cat1."','".$Qlevel1."', '".$Qtype1."', '".$Qdescription1."', '".$op11."', '".$op21."', '".$op31."', '".$op41."', '".$ans1."', '".$Qexplanation1."', '".$Qimage1."', '".$Q_pdf1."');");


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html>