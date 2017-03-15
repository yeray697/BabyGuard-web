<?php require_once "config.php";?>
<?php printHeader(true,"manage"); ?>
<main>
    <div class="manage-header"></div>
    <div class="row grey lighten-4">
        <div class="col s12">
            <div class="container manage-content">
                <div class="row table-manage-user">
                        <div class="card-panel z-depth-2">
                            <a href="
                            <?php
                            if(getUserType() == ADMIN_USER_TYPE) {
                                echo MANAGE_NURSERY_PHP;
                            }
                            elseif (getUserType() == NURSERY_USER_TYPE){
                                echo MANAGE_USER_PHP;
                            }
                            ?>
                            " class="manage-users-add waves-effect waves-light btn <?php echo ACCENT_BTN_ADD_USER_COLOR; ?>"><i class="material-icons right">perm_identity</i><span data-translatekey="manage_users_table_add">Add</span></a>
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
    <div id="delete-user-modal" class="modal">
    <div class="modal-content">
      <h4>¿Deseas eliminar a '???'?</h4>
      <p>No podrás recuperarlo.</p>
    </div>
    <div class="modal-footer">
      <a id="delete-user-modal-yes" href="javascript:void(0)" class="modal-action modal-close waves-effect waves-green btn-flat">Sí</a>
      <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>
</main>
<?php printFooter(true); ?>