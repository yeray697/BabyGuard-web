<?php require_once "functions.php";?>
<?php printHeader(false); ?>
<main class="<?php echo LOGIN_COLOR;?>">
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l6 offset-m2 offset-l3">
                <div class="card <?php echo LOGIN_CARD_COLOR;?>">
                    <div class="card-content grey-text text-darken-2">
                        <span class="card-title">Login</span>
                        <div class='row'>
                            <form method="post">
                                <div class='input-field col s12'>
                                    <input class='validate' type='email' name='email' id='email' />
                                    <label for='email'>Enter your email</label>
                                </div>
                                <div class='input-field col s12'>
                                    <input class='validate' type='password' name='password' id='password' />
                                    <label for='password'>Enter your password</label>
                                </div>
                                <div class="col s12">
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect <?php echo LOGIN_BUTTON_COLOR;?>'>Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#" class="<?php echo LOGIN_ACCENT_COLOR;?>">Forgot Password?</a>
                        <a href="#" class="right <?php echo LOGIN_ACCENT_COLOR;?>">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php printFooter(false); ?>