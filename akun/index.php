<?php
error_reporting();
session_start();
if (!isset($_SESSION['level'])){
    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Akuanusa</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/navbar-fixed-top.css" rel="stylesheet">
    <script src="../assets/js/angular.js"></script>
   
  </head>

  <body ng-app="my-app">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Akuanusa Administrator</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php?module=dashboard">Dashboard</a></li>
              <li><a href="index.php?module=Artikel">Artikel</a></li>
              <li class="active"><a href="logout.php">Logout <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <br/>
            <?php
            if (!isset($_GET['module'])) {
                require  "beranda.php";
            } elseif ($_GET['module'] == 'dashboard') {
                include "beranda.php";
            }elseif ($_GET['module'] == 'inputchart') {
                include "inputchart.php";
            }elseif ($_GET['module'] == 'tambahkambing') {
                include "tambahkambing.php";
            }elseif ($_GET['module'] == 'Artikel') {
                include "Artikel.php";
            }
            ?>    
    </div>
        <script src="../assets/js/jquery-3.1.1.js"></script>
        
       <script src="../assets/js/bootstrap.min.js"></script>
       
  </body>
</html>
