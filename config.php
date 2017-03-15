<?php
session_start();
//COLORS
define('PRIMARY_COLOR', 'blue');
define('ACCENT_COLOR', 'pink');
define('HEADER_COLOR', PRIMARY_COLOR.' lighten-2');
define('FOOTER_COLOR', PRIMARY_COLOR.' lighten-2');
define('FOOTER_COPYRIGHT_COLOR', PRIMARY_COLOR.' lighten-1');
define('LOGIN_COLOR', PRIMARY_COLOR.' lighten-3');
define('LOGIN_CARD_COLOR', PRIMARY_COLOR.' lighten-5');
define('LOGIN_BUTTON_COLOR', PRIMARY_COLOR.' darken-1');
define('LOGIN_ACCENT_COLOR', ACCENT_COLOR.'-text text-accent-2');
define('ACCENT_BTN_ADD_USER_COLOR', ACCENT_COLOR.' lighten-2');
define('LINK_COLOR', ACCENT_COLOR.'-text text-accent-1');

//FILES
define('CONFIG_PHP','config.php');
define('FORGOT_PASS_PHP','forgot-pass.php');
define('FUNCTIONS_PHP','functions.php');
define('INDEX_PHP','index.php');
define('LOGIN_PHP','login.php');
define('MANAGE_PHP','manage.php');
define('MANAGE_NURSERY_PHP','manage-nursery.php');
define('MANAGE_USER_PHP','manage-user.php');
define('PRICES_PHP','prices.php');
define('ABOUT_PHP','about.php');
define('LOGOUT_PHP','logout.php');
require_once FUNCTIONS_PHP;
?>