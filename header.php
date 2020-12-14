<?php
/**
 * The file doc comment
 * php version 7.2.10
 * 
 * @category Class
 * @package  Package
 * @author   Original Author <author@example.com>
 * @license  https://www.cedcoss.com cedcoss 
 * @link     link
 */
session_start();
require 'Product.php';
$Product = new Product();

$filename = basename($_SERVER['REQUEST_URI']);
// echo $filename;
$menu = array('index.php', 'about.php', 'services.php', 'pricing.php', 'blog.php', 
'contact.php', 'login.php');

$data = $Product->fetchChildCategory();
// echo "<pre>";
// print_r($data);
// exit();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ced Hosting</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template,
 Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG,
 SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
addEventListener("load", function() { 
    setTimeout(hideURLbar, 0); }, 
    false
); 
function hideURLbar(){
    window.scrollTo(0,1); 
} 
</script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet'
 type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,\
400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' 
type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
 crossorigin="anonymous">
<script src="js/frontScript.js"></script>

<!--lightboxfiles-->
<script type="text/javascript">
    // $(function() {
    //     $('.team a').Chocolat();
    // });
</script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script type="text/javascript">
    // $(function() {
    // $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

    // });
</script>
<!--script-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
    jQuery(function($) {
$(".swipebox").swipebox();
});
</script>
<!--script-->


</head>
<body>
<!---header--->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" 
                    data-toggle="collapse"  
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <i class="sr-only">Toggle navigation</i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    </button>
                    <div class="navbar-brand">
                        <!-- <h1><a href="index.php"><span>Ced</span> Hosting</a>
                        </h1> -->
                        <img src="images/image/logo.png" alt="logo">
                    </div>
                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" 
                id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" 
                            class="
                            <?php 
                            if ($filename == 'index.php') : 
                            ?>
                            current
                            <?php endif; ?>">
                            Home</a>
                        </li>
                        <li>
                            <a href="about.php" 
                                class="
                                    <?php if ($filename == 'about.php') : ?>
                                    current
                                    <?php endif; ?>">
                                    About
                            </a>
                        </li>
                        <li>
                            <a href="services.php" 
                            class="<?php if ($filename == 'services.php') : ?>
                            current<?php endif; ?>">Services</a>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle 
                            <?php if (($filename == 'linuxhosting.php') || ($filename =='wordpresshosting.php') || ($filename == 'windowshosting.php')|| ($filename == 'cmshosting.php')) : ?>
                            current
                            <?php endif; ?>" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        Hosting<i class="caret"></i></a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($data as $row) {
                            ?>
                                <li>
                                <a href="catpage.php?id=<?php echo $row['id'];?>">
                                <?php echo $row['prod_name']; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                        </li>
                        <li>
                            <a href="pricing.php" 
                            class="<?php if ($filename == 'pricing.php') : ?>
                            current<?php endif; ?>">Pricing</a>
                        </li>
                        <li><a href="blog.php" 
                        class="<?php if ($filename == 'blog.php') : ?>
                        current<?php endif; ?>">Blog</a></li>
                        <li><a href="contact.php" 
                        class="<?php if ($filename == 'contact.php') : ?>
                        current<?php endif; ?>">Contact</a></li>
                        <?php
                        if (isset($_SESSION['userdata'])) {
                        ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php
                        } else {
                        ?>
                        <li><a href="login.php" 
                        class="<?php if ($filename == 'login.php') : ?>
                        current<?php endif; ?>">Login</a></li>
                        <?php
                        }
                        ?>
                        <li><a href="cart.php">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a></li>
                        <?php
                        if (isset($_SESSION['userdata'])) {
                        ?>
                        <li><a><?php echo "Hi, " . $_SESSION['userdata']['name']; ?>
                        </a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!---header--->