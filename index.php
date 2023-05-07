<?php require ('pages/sqlConnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta name="author" content="OGU HEARTILY PASISI, PASCOTECH">
    <meta name="description" content="Betmystro is an accurate Sports, soccer and Football prediction site where winning bet is top priority">
    <!-- this is a meta tag with comma seperated multi-rule content for bots to index the page for SEO -->
    <meta name="robots" content="index, follow, max-snippet:-1">
    <meta name="googlebot" content="index, follow">
    <title><?php require_once("pages/title.php"); ?></title>
    <!-- BOOTSTRAP ONLINE CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT AWESOME CDN js LINK -->
    <script src="https://kit.fontawesome.com/0923c3d217.js" crossorigin="anonymous"></script>
    <!-- FAVICON - BROWSER ICON -->
    <link rel="shortcut icon" href="images/Betmystro-black.png" type="image/x-icon">
    <!-- BOOTSTRAP OFFLINE CSS LINK -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME CSS LINK -->
    <link rel="stylesheet" href="fontawesome5/css/all.min.css">
    <!-- SITE CSS STYLESHEET -->
    <link rel="stylesheet" href="css/mystrostyle.css">
    <style>      
      #mystroLogo{
        width: 40px;
      }
    </style>
</head>
<body>
    <Noscript>THIS SITE REQUIRES JAVASCRIPT TO RUN, ENABLE JAVASCRIPT IN BROWSER</Noscript>
        <!-- NAVIGATION -->
        <nav class="navbar navbar-expand-md bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand py-2" href="index.php"><img src="images/Betmystro-transparent.png" alt="Betmystro-logo" class="image-responsive" id="mystroLogo"><?php require("pages/title.php");?></a>
            <button class="navbar-toggler fa fa-bars" type="button" data-bs-toggle="collapse" data-bs-target="#hiddenMenu">
            </button>
            <div class="collapse navbar-collapse  justify-content-end" id="hiddenMenu">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active"><a class="nav-link h5" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#help">Help?</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#contactUs">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- MAIN PAGE -->

<?php include "pages/main.php"; ?>


<!-- FOOTER -->
<footer>
    <div class="container-fluid footer py-3">
        <div class="row">
            <div class="col-12">
                <p id="responibleGambling" class="p-1">
                <img src="images//responsible-white.png" alt="responsible gambling logo" class="me-2">
                 Strictly for Adults over 18. Gambling does <b>ruin lives</b>, to avoid this, Check our <a href="#" data-bs-toggle="modal" data-bs-target="#gambleResponsible"  class="text-primary">responsible gambling page</a>  for more info & help.</p>

                <!-- responsible gambling modal -->
                
            </div>
            <!-- 12 col span above, 4, 4, 4 cols below -->
            <div class="col-6">
                <hr class="light">
                <div>
                    <h6>Let's Connect</h6>
                    <hr class="light">
                    <p><a href="https://web.facebook.com/profile.php?id=100089238085856" target="_blank"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;facebook</a></p>
                    <p><a href="https://www.instagram.com/betmystro/?next=%2F" target="_blank"><i class="fab fa-instagram"></i>&nbsp;&nbsp;instagram</a></p>
                    <p><a href="https://twitter.com/Bet_mystro" data-show-count="false" target="_blank"><i class="fab fa-twitter">&nbsp;&nbsp;twitter</i></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
                    <p><a href="https://www.youtube.com/channel/UCwd6T7Mg1KMIgqPSW7vDscQ" target="_blank"><i class="fab fa-youtube me-2"></i>&nbsp;&nbsp;youtube</a></p> 
                </div>
            </div>

            <div class="col-6" id="footerLinks">
                <hr class="light">
                <h5>Leagues</h5>
                <hr class="light">
                <p><a href="#epl_target">Premier League</a> </p>
                <p><a href="#bundesliga_target">Bundesliga</a> </p>
                <p><a href="#laliga_target">La Liga</a></p>
                <p><a href="#seriea_table">Serie A</a></p>
                <p><a href="#eredivisie">Eredivisie</a></p>
                <p><a href="#ligue1">Ligue 1</a></p>
                <p><a href="#otherlgs">Other leagues</a></p>
            </div>
    
            <div class="col-12 text-center">
                <hr class="light-100">
                <p>Copyright &copy; 2021 - 
                    <?php echo date('Y');?> pascohtech
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- ALL MODAL CONTENTS GOES HERE -->
<!-- Responsible Gambling Modal -->
<div class="modal fade" id="gambleResponsible" tabindex="-1" aria-labelledby="gambleResponsibleLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="gambleResponsibleLabel">Stop When The FUN Stops</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include ("pages/gambleResponsibly.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Help Modal -->
<div class="modal fade" id="help" tabindex="-2" aria-labelledby="helpLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="helpLabel">HELP PAGE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include ("pages/help.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ContactUs Modal -->
<div class="modal fade" id="contactUs" tabindex="-3" aria-labelledby="contactUsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="contactUsLabel">CONTACT US</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include ("pages/contactUs.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- BOOTSTRAP ONLINE JS LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- BETMYSTRO SCRIPT -->
<script src="script/mystroscript.js"></script>
<!-- BOOTSTRAP OFFLINE JS LINK -->
<!-- <script src="script/bootstrap.bundle.min.js"></script> -->
</body>
</html>
