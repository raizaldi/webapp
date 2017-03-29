<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Akuanusa</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/navbar-fixed-top.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        
        <script src="assets/js/angular.js"></script>
        <script src="assets/js/jquery-3.1.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
       
        
        <script type=text/javascript>
          $('.carousel').carousel()
        </script>
        

    </head>
    <body ng-app="my-app" style="background-color: white;">    
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#31ac01;">
                <div class="container">
                    <div class="navbar-header">                       
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="title">AKUANUSA</a>
                    </div>
                      
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a style="color:white; font: Myriad Pro;" href="index.php?module=beranda"><b>Beranda</b></a></li>
                            <li><a style="color:white; font: Myriad Pro;" href="index.php?module=investasi"><b>Investasi</b></a></li>
                            <?php
                            error_reporting();
                            session_start();
                             if (isset($_SESSION['email'])){
                                 echo "<li><a style='color:white; font: Myriad Pro;' href='index.php?module=myKambing'><b>My Kambing</b></a></li>";
                             }                            
                            ?>
                             <?php
                             if (isset($_SESSION['email'])){
                                 echo "<li><a style='color:white; font: Myriad Pro;' href='index.php?module=Logout'><b>Logout</b></a></li>";
                             }else{
                                 echo "<li><a style='color:white; font: Myriad Pro;' href='index.php?module=Login'><b>Login</b></a></li>";
                             }                            
                            ?> 
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>   </div> 
        <div id="article">
            
            <?php
            if (!isset($_GET['module'])) {
                include "beranda.php";
            } elseif ($_GET['module'] == 'beranda') {
                include "beranda.php";
            } elseif ($_GET['module'] == 'produk') {
                include "produk.php";
            } elseif ($_GET['module'] == 'investasi') {
                include "investasi.php";
            } elseif ($_GET['module'] == 'registrasi') {
                include "registrasi.php";
            } elseif ($_GET['module'] == 'myKambing') {
                include "myKambing.php";
            } elseif ($_GET['module'] == 'Login') {
                include "Login.php";
            } elseif ($_GET['module'] == 'Logout') {
                include "Logout.php";
            }
            ?>    
        </div>
        <br/><br/>
        <div class='col-sm-12' style='background-color: black;position:fixed;bottom: 0px;'>
            <center><div style='color:white'><h5>Copyright &copy 2016 Akuanusa.com</h5></div></center> 
        </div>
          
    </body>
</html>
