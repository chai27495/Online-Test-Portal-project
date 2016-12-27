<?php
 $connect = mysql_connect("localhost","root","");
    mysql_select_db("online_test_portal",$connect) or die("Couldnot connect to Database"); define('BASE_PATH','http://localhost/MasterMinds/');
?>