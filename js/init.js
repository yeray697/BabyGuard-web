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

function addTelephoneField(){
  var $div = $('input[id^="nursery_phone"]:last');

  var num = 1;
  var id = $div.prop("id");
  if (id != "nursery_phone") {
    num = parseInt( id.match(/\d+/g), 10 );
  }
  if(num < 5){
    num = num + 1;
    var newElement ="<div class=\"input-field input-group col s10\"><i class=\"material-icons prefix \">phone</i><input id=\"nursery_phone"+num+"\" name=\"nursery_phone"+num+"\" type=\"text\" class=\"validate\"> <label for=\"nursery_phone"+num+"\">Telephone #"+num+"</label><span class=\"suffix\"><a class=\"delete_phone\" onclick=\"deleteTelephoneField("+num+")\" href=\"javascript:void(0)\"><i class=\"material-icons right\">clear</i> </span> </div>";
    newElement = $('<aux/>').html(newElement).contents();
    newElement.insertBefore("#manage-nursery-telephone-add");
  }

  if (num == 5){
    $("#manage-nursery-telephone-add").addClass("hide");
  }
}
function deleteTelephoneField(id){
  $('input[id^="nursery_phone'+id+'"]').parent().remove();
  var $div = $('input[id^="nursery_phone"]:last');
  var num = 1;
  var id_aux = $div.prop("id");
  if (id_aux != "nursery_phone") {
    num = parseInt( id_aux.match(/\d+/g), 10 );
  }

  if(num >= id) { //If it is not the last item, uptade index
    $('input[id^="nursery_phone"]').each(function( index ) {
      var id_aux=parseInt( $( this ).prop("id").match(/\d+/g), 10 );
      if (id_aux >= id){
        $( this ).prop("id","nursery_phone"+(id_aux-1));
        $( this ).prop("name","nursery_phone"+(id_aux-1));
        $( this ).parent().find(".delete_phone").attr("onclick","deleteTelephoneField("+(id_aux-1)+")");
        $( this ).next().prop("for","nursery_phone"+(id_aux-1));
        $( this ).next().text($( this ).next().text().slice(0,-1)+(id_aux-1));
      }
    });
    Materialize.updateTextFields();
  }
  if(num < 5){
    $("#manage-nursery-telephone-add").removeClass("hide");
  }
}