<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Design With Bootstrap | Template 1 - Home</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- My custom CSS -->
      <link rel="stylesheet" href="css/main.css">
      <!-- Retouch with Media Query  -->
      <link rel="stylesheet" href="css/media.css">
    <!-- Switch between Deferent Theme -->
    <link rel="stylesheet" href="css/default-theme.css">
    <!-- Library for Hover Style -->
    <!-- <link rel="stylesheet" href="css/hover.css"> -->
    <!-- Animate Library, this library work with [wow.js] -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Start navbar Menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ousalah <span>Inc.</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Programming</a></li>
                <li><a href="#">Web Design</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Web Hosting</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- End navbar Menu-->

    <!-- Start Content -->
    <div class="content"></div>
    <!-- End Content -->

    <!-- Start Section Footer -->
    <section class="footer">
      <div class="copyright text-center">Copyright &copy; 2018 <span>Ousalah</span> .Inc</div>
    </section>
    <!-- End Section Footer -->

    <!-- Start Section Loading -->
    <div class="loading-overlay">
      <div class="cssload-loader">Loading</div>
    </div>
    <!-- End Section Loading -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- my Custom js -->
    <script src="js/main.js"></script>

    <!-- This is Wow.js Library, this file use [animate.css] -->
    <!-- <script src="js/wow.min.js"></script> -->
    <!-- <script> new WOW().init(); </script> -->

    <!-- Nice Scroll Library -->
    <script src="js/jquery.nicescroll.min.js"></script>
  </body>
</html>