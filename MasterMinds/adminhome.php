<?php
session_start();
if (!isset($_SESSION['username'])) { //not logged in
    //redirect to homepage
    header("Location: sign-in.html.php");
}
?>
    <!doctype html>
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


        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <style>
            body {
                background-image: url("images/1902671.jpg");
                color: black;
            }
        </style>

    </head>

    <body>
        <?php
include("database.php");
?>
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
            <br>
            <br>
            <!-- /.container -->

            <!-- jQuery -->
            <div class="container">
                <!-- Codrops top bar -->
                <!--/ Codrops top bar -->

                <section>
                    <div id="container_buttons">
                        <center>
                            <p>
                                <a class="a_demo_four btn btn-success" href="ranklist.php">
                            Rank List
                        </a>
                            </p>
                            <p>
                                <a href="student-details.php" class="a_demo_four btn btn-success">
                          Student Details
                        </a>
                            </p>
                            <p>
                                <a href="upload-data.php" class="a_demo_four btn btn-success">
                          Add Data
                        </a>
                            </p>
                            <p>
                                <a href="add-students.php" class="a_demo_four btn btn-success">
                          Add Students
                        </a>
                            </p>
                            <p>
                                <a href="delete-student-data.php" class="a_demo_four btn btn-success">
                          Delete Students
                        </a>
                            </p>
                        </center>
                    </div>
                </section>
            </div>
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <!--<?php
echo"<br><br><br>";
echo "<a href='ranklist.php'> Rank List </a><br>";
echo "<a href='student-details.php'> Student Details </a><br>";
echo"<a href='upload-data.php'>Add Data</a><br>";
echo"<a href= 'add-students.php'> Add students </a>";
?>-->
    </body>

    </html>