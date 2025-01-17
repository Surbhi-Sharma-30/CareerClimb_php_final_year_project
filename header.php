
<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "campusplacement");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carrer Climb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
    <!--Custom-Theme-files-->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"> </script>
    <!--/script-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>

</head>
<body>
<!-- header-section-starts -->
<div class="h-top" id="home" >
    <div class="top-header" style="background-color:#226625;">
        <ul class="top-nag" >
            <?php
            if(isset($_SESSION['admin'])){
                echo '<li><a class="active" href="dashboard.php" data-hover="Dashboard" style="color:#772244;">Dashboard</a></li>';
                echo '<li><a href="logout.php" data-hover="LOGOUT"><b style="color:#665566;">Logout</b></a ></li>';
            }else {
                if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "home.php")
                        echo '<li><a class="active" href="home.php" data-hover="Home" style="color:#772244;">Home</a></li>';
                    else
                        echo '<li><a href="home.php" data-hover="Home"><b style="color:#665566;">Home</b></a></li>';

                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "profile.php")
                        echo '<li><a class="active" href="profile.php" data-hover="Profile">Profile</a></li>';
                    else
                        echo '<li><a href="profile.php" data-hover="Profile"><b style="color:#665566;">Profile</b></a></li>';
                } else {
                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "registration.php")
                        echo '<li><a class="active" href="registration.php" data-hover="Registration"><b style="color:#665566;">Registration<b></a></li>';
                    else
                        echo '<li><a href="registration.php" data-hover="registration"><b style="color:#665566;">registration</b></a></li>';

                    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "login.php")
                        echo '<li><a class="active" href="login.php" data-hover="Login"><b style="color:#665566;">Login</b></a></li>';
                    else
                        echo '<li><a href="login.php" data-hover="Login"><b style="color:#665566;">Login</b></a></li>';
                }
                echo '<li><a href="about.php" data-hover="ABOUT"><b style="color:#665566;">About</b></a></li>';
                if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
                    echo '<li><a href="logout.php" data-hover="LOGOUT"><b style="color:#665566;">Logout</b></a></li>';
                }
            }
            ?>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<div class="full">
    <div class="col-md-3 top-nav register" style="background-color: #0BE0FD;color:red;">
        <div class="logo">
            <style>
                .btn-social {
                    width: 100px;
                    position: relative;
                    opacity: 1.0;
                    transition: 0.3s ease;
                    cursor: pointer;
                }

                .btn-social:hover {
                    transform: scale(1.1, 1.2); /** default is 1, scale it to 1.5 */
                    opacity: 1;
                }
            </style>
            <!-- <center><a href="home.php"><img src="image_uploads/logo.png" class="img-responsive" width="200px"></a>  </center> -->
        </div>
        <div class="top-menu" >
            <span class="menu"> </span>

            <!--ul class="cl-effect-16">
                <li><a href="index.php" data-hover="HOME"><b style="color:#665566;">Home</b></a></li>
                <li><a href="about.php" data-hover="About"><b style="color:#665566;">About</b></a></li>
                <li><a href="grid.php" data-hover="Grids"><b style="color:#665566;">Grids</b></a></li>
                <li><a href="services.php" data-hover="Services"><b style="color:#665566;">Services</b></a></li>
                <li><a href="gallery.php" data-hover="Gallery"><b style="color:#665566;">Gallery</b></a></li>
                <li><a href="contact.php" data-hover="CONTACT"><b style="color:#556566;">Contact</b></a></li>
            </ul-->
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu ul" ).slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
            <ul class="side-icons">
                <li><a class="fb" href="#"></a></li>
                <li><a class="twitt" href="#"></a></li>
                <li><a class="goog" href="#"></a></li>
                <li><a class="drib" href="#"></a></li>
            </ul>
        </div>
    </div>
