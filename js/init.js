(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
function openDeleteUserModal(id,name){
    $('#manage_dialog_title_name').text(name);
    $('#delete-user-modal-yes').attr("href", manage_user_base_url+"?action=delete&id="+id);
    $('#delete-user-modal').modal('open');
}
$(document).ready(function () {
    translatePage("lang");
    $('#delete-user-modal').modal();
});