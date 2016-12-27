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
<title>Masterminds</title>
</head>
<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/
include("database.php"); 
	$databasetable = "student_master";

//define ("DB_HOST", "localhost"); // set database host
//define ("DB_USER", "root"); // set database user
//define ("DB_PASS","nfra8025"); // set database password
//define ("DB_NAME","csv_db"); // set database name

//$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
//$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//$databasetable = "exce";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'upload_studentdata.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$Sid1 = trim($allDataInSheet[$i]["A"]);
$Full_name1 = trim($allDataInSheet[$i]["B"]);
$email1 = trim($allDataInSheet[$i]["C"]);
$Password1 = trim($allDataInSheet[$i]["D"]);
$Stream1 = trim($allDataInSheet[$i]["E"]);
$year_of_pass1 = trim($allDataInSheet[$i]["F"]);
//$Qlevel1 = trim($allDataInSheet[$i]["E"]);
//$Qtype1 = trim($allDataInSheet[$i]["F"]);
//$Qdescription1 = trim($allDataInSheet[$i]["G"]);
//$op11 = trim($allDataInSheet[$i]["H"]);
//$op21 = trim($allDataInSheet[$i]["I"]);
//$op31 = trim($allDataInSheet[$i]["J"]);
//$op41 = trim($allDataInSheet[$i]["K"]);
//$ans1 = trim($allDataInSheet[$i]["L"]);
//$Qimage1 = trim($allDataInSheet[$i]["B"]);
//$Qexplanation1 = trim($allDataInSheet[$i]["A"]);
//$Q_pdf1 = trim($allDataInSheet[$i]["B"]);


$query = "SELECT Sid FROM student_master WHERE Sid = '".$Sid1."' and Full_name = '".$Full_name1."' and email = '".$email1."' and Password = '".$Password1."'and Stream = '".$Stream1."'and year_of_pass = '".$year_of_pass1."'";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["Sid"];
if($existName=="") {
$insertTable= mysql_query("insert into student_master (Sid,Full_name,email,Password,Stream,year_of_pass) values('".$Sid1."', '".$Full_name1."', '".$email1."', '".$Password1."', '".$Stream1."', '".$year_of_pass1."');");


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html><?php
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
<title>Masterminds</title>
</head>
<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/
include("database.php"); 
	$databasetable = "student_master";

//define ("DB_HOST", "localhost"); // set database host
//define ("DB_USER", "root"); // set database user
//define ("DB_PASS","nfra8025"); // set database password
//define ("DB_NAME","csv_db"); // set database name

//$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
//$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//$databasetable = "exce";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
$inputFileName = 'upload_studentdata.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$Sid1 = trim($allDataInSheet[$i]["A"]);
$Full_name1 = trim($allDataInSheet[$i]["B"]);
$email1 = trim($allDataInSheet[$i]["C"]);
$Password1 = trim($allDataInSheet[$i]["D"]);
$Stream1 = trim($allDataInSheet[$i]["E"]);
$year_of_pass1 = trim($allDataInSheet[$i]["F"]);
//$Qlevel1 = trim($allDataInSheet[$i]["E"]);
//$Qtype1 = trim($allDataInSheet[$i]["F"]);
//$Qdescription1 = trim($allDataInSheet[$i]["G"]);
//$op11 = trim($allDataInSheet[$i]["H"]);
//$op21 = trim($allDataInSheet[$i]["I"]);
//$op31 = trim($allDataInSheet[$i]["J"]);
//$op41 = trim($allDataInSheet[$i]["K"]);
//$ans1 = trim($allDataInSheet[$i]["L"]);
//$Qimage1 = trim($allDataInSheet[$i]["B"]);
//$Qexplanation1 = trim($allDataInSheet[$i]["A"]);
//$Q_pdf1 = trim($allDataInSheet[$i]["B"]);


$query = "SELECT Sid FROM student_master WHERE Sid = '".$Sid1."' and Full_name = '".$Full_name1."' and email = '".$email1."' and Password = '".$Password1."'and Stream = '".$Stream1."'and year_of_pass = '".$year_of_pass1."'";
$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["Sid"];
if($existName=="") {
$insertTable= mysql_query("insert into student_master (Sid,Full_name,email,Password,Stream,year_of_pass) values('".$Sid1."', '".$Full_name1."', '".$email1."', '".$Password1."', '".$Stream1."', '".$year_of_pass1."');");


$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
} else {
$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="adminhome.php">Go Back</a></div>';
}
}
echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
 

?>
<body>
</html>