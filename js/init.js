(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
function openDeleteUserModal(id){
    var manage_user_php = "manage-user.php";
    $('#delete-user-modal-yes').attr("href", manage_user_php+"?action=delete&id="+id);
    $('#delete-user-modal').modal('open');
}
$(document).ready(function () {
    translatePage("lang");
    $('#delete-user-modal').modal();
});