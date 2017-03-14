<?php require_once "functions.php";?>
<?php printHeader(true,"manage"); ?>
<main>
<div class="manage-header"></div>
<div class="row grey lighten-4">
    <div class="col s12">
        <div class="container manage-content">
            <div class="row">
                <div class="col s12">
                    <div class="card-panel z-depth-2">
                        <table class="centered bordered highlight responsive-table">
                        <?php loadManageIds(); ?>
                        <?php loadManageContent(); ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php printFooter(true); ?>