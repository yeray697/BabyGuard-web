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
            <a href="" class="brand-logo">Logo</a>
            <a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <?php printMenu($active,"right hide-on-med-and-down","",""); ?>
            <?php printMenu($active,"side-nav","mobile-demo",""); ?>
        </div> <!-- <div class="nav-wrapper"> -->
    </nav>
    <?php endif; ?>

    <?php
}
function printMenu($active,$ul_classes, $ul_id, $li_classes){
    if (isLogged()){
        printMenuLogged($active,$ul_classes, $ul_id, $li_classes);
    } else {
        printMenuNotLogged($active,$ul_classes, $ul_id, $li_classes);        
    }
}
function printMenuLogged($active,$ul_classes, $ul_id, $li_classes){
    ?>
<ul class="<?php echo $ul_classes; ?>" <?php if (!IsNullOrEmptyString($ul_id)) { echo "id=\"$ul_id\""; } ?>>
                <li class="<?php if ($active=="home"){ echo "active";}?>"><a href="<?php echo INDEX_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_home">Home</span></a></li>
                <li class="<?php if ($active=="manage"){ echo "active";}?>"><a href="<?php echo MANAGE_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_manage">Manage</span></a></li>
                <li class="<?php if ($active=="about"){ echo "active";}?>"><a href="<?php echo ABOUT_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_about">About</span></a></li>
                <li class="<?php if ($active=="prices"){ echo "active";}?>"><a href="<?php echo PRICES_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_prices">Prices</span></a></li>                
                <li><a href="<?php echo LOGOUT_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_logout">Log Out</span></a></li>
            </ul>
    <?php
}

function printMenuNotLogged($active,$ul_classes, $ul_id, $li_classes){
    ?>
<ul class="<?php echo $ul_classes; ?>" <?php if (!IsNullOrEmptyString($ul_id)) { echo "id=\"$ul_id\""; } ?>>
                <li class="<?php if ($active=="home"){ echo "active";}?>"><a href="<?php echo INDEX_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_home">Home</span></a></li>
                <li class="<?php if ($active=="about"){ echo "active";}?>"><a href="<?php echo ABOUT_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_about">About</span></a></li>
                <li class="<?php if ($active=="prices"){ echo "active";}?>"><a href="<?php echo PRICES_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_prices">Prices</span></a></li>
                <li class="<?php if ($active=="login"){ echo "active";}?>"><a href="<?php echo LOGIN_PHP; ?>"<?php if (!IsNullOrEmptyString($li_classes)) { echo " class=\"$li_classes\""; } ?>><span data-translatekey="menu_login">Login</span></a></li>
            </ul>
    <?php
}
function loadManageIds(){
    ?>    <thead>
                                <tr>
                                    <th data-field="id"><span data-translatekey="manage_users_table_id">Id</span></th>
                                    <th data-field="name"><span data-translatekey="manage_users_table_name">Name</span></th>
                                    <th data-field="email"><span data-translatekey="manage_users_table_email">Email</span></th>
                                    <th data-field="options"><span data-translatekey="manage_users_table_options">Options</span></th>
                                </tr>
                            </thead>
    <?php
}
function parseHandlerUser($id, $name, $email){
    if(getUserType() == ADMIN_USER_TYPE) {
        $baseUrl = MANAGE_NURSERY_PHP;
    }
    elseif (getUserType() == NURSERY_USER_TYPE){
        $baseUrl = MANAGE_USER_PHP;
    }
    echo "<tr>
                                    <td>".$id."</td>
                                    <td>".$name."</td>
                                    <td>".$email."</td>
                                    <td><a href='".$baseUrl."?action=edit&id=".$id."'><i class=\"material-icons\">mode_edit</i></a> <a onclick=\"openDeleteUserModal(".$id.")\"><i class=\"material-icons cursor-pointer\">delete</i></a></td>
                                </tr>";
}
function loadManageContent(){
    echo "<tbody>";
    for ($i=1; $i <= 30; $i++) { 
        parseHandlerUser($i,"Alvin","alvin@gmail.com");
        $i++;
        parseHandlerUser($i,"Alan","alan@gmail.com");
        $i++;
        parseHandlerUser($i,"Jonathan","jonathan@gmail.com");
    }
    echo "</tbody>";
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
                    <?php printMenu("","","","grey-text text-lighten-3"); ?>
                </div> <!-- <div class="col l4 offset-l2 s12"> -->
            </div> <!-- <div class="row"> -->
        </div> <!-- <div class="container"> -->
        <div class="footer-copyright <?php echo FOOTER_COPYRIGHT_COLOR;?>">
            <div class="container">
                 © <?php echo date("Y");?> <span data-translatekey="footer_copyright">Developed by</span> <a href="https://ncatz.com">nCatz</a>
            </div> <!-- <div class="container"> -->
        </div> <!-- <div class="footer-copyright"> -->
    </footer>
    <?php endif; ?>
    <!-- Script to pass PHP variables to init.js -->
    <script type="text/javascript">var manage_user_base_url = "<?php if(getUserType() == ADMIN_USER_TYPE) {
        $baseUrl = MANAGE_NURSERY_PHP;
    }
    elseif (getUserType() == NURSERY_USER_TYPE){
        $baseUrl = MANAGE_USER_PHP;
    }
    ?>";</script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/simple_i18n.min.js"></script>
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
    return true;
}

define ("ADMIN_USER_TYPE","1");
define ("NURSERY_USER_TYPE","2");

function getUserType(){
    return ADMIN_USER_TYPE;
}

?>