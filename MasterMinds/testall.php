<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in

    //redirect to homepage
    header("Location: sign-in.html");
    die();

}
include("database.php");
$_SESSION['catid']=0;
$_SESSION['subcatid']=0;
?>


<?php header("Location: SubSubCategory.php?catid=0&subcatid=0");
?>
