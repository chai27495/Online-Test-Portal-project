<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title></title>
<style>
body {
        background-image: url("images/1902671.jpg");color:white;
} 
 
</style>

</head>
<body>
<?php
include("database.php");
extract($_GET);
echo "<h2> Select Topic </h2>";
$rs=mysql_query("select * from parameter_master where lookup_value_group=$catid");
echo "<table align=center>";
$_SESSION['category'] = $_GET["catid"];
$catid = $_GET["catid"];
while($row=mysql_fetch_row($rs))
{
	//$_SESSION['category'] = $_GET["catid"];
	//$cat = $_SESSION['category'];
	//print $cat;

	echo "<tr><td align=center ><a href=SubSubCategory.php?catid=$catid&subcatid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>
