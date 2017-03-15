<?php
function printHeader($print_nav,$active=""){
    ?>
<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <?php if ($print_nav) : ?>
    <nav>
        <div class="nav-wrapper <?php echo HEADER_COLOR; ?>">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <?php printNav($active,"right hide-on-med-and-down","",""); ?>
            <?php printNav($active,"side-nav","mobile-demo",""); ?>
        </div> <!-- <div class="nav-wrapper"> -->
    </nav>
    <?php endif; ?>

    <?php
}
function printNav($active,$ul_classes, $ul_id, $li_classes){
    ?>
<ul class="<?php echo $ul_classes; ?>" <?php if (!IsNullOrEmptyString($ul_id)) { echo "id=\"$ul_id\""; } ?>>
                <li class="<?php if ($active=="home"){ echo "active";}?>"><a href="index.php"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>>Home</a></li>
                <li class="<?php if ($active=="login"){ echo "active";}?>"><a href="login.php"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>>Login</a></li>
                <li class="<?php if ($active=="manage"){ echo "active";}?>"><a href=""<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>>Manage</a></li>
                <li class="<?php if ($active=="about"){ echo "active";}?>"><a href=""<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>>About</a></li>
                <li class="<?php if ($active=="prices"){ echo "active";}?>"><a href="prices.php"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>>Prices</a></li>
            </ul>
    <?php
}
function printFooter($print_footer){
?>
    <?php if ($print_footer) : ?>
    <footer class="page-footer <?php echo FOOTER_COLOR; ?>">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div> <!-- <div class="col l6 s12"> -->
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <?php printNav("","","","grey-text text-lighten-3"); ?>
                </div> <!-- <div class="col l4 offset-l2 s12"> -->
            </div> <!-- <div class="row"> -->
        </div> <!-- <div class="container"> -->
        <div class="footer-copyright <?php echo FOOTER_COPYRIGHT_COLOR;?>">
            <div class="container">
                 © <?php echo date("Y");?> Developed by <a href="https://ncatz.com">nCatz</a> 
            </div> <!-- <div class="container"> -->
        </div> <!-- <div class="footer-copyright"> -->
    </footer>
    <?php endif; ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
    <?php
}

// Function for basic field validation (present and neither empty nor only white space
function IsNullOrEmptyString($question){
    return (!isset($question) || trim($question)==='');
}

function isLogged(){
    return false;
}
?>