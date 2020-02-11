//$('#trumbowyg').trumbowyg({});
$(document).ready(function() {
    const menuNew = document.getElementById('newMenu'); 

function add() {
$('.ui.mini.modal').modal('show');
}

menuNew.addEventListener('click', ()=> add());

});

$(function() {
    var group = Sortable.create(listItems, {
        handle: '#arrow', 
        animation: 150, 
        //draggable: '.ui.card'
        sort: true,
        onUpdate: function() {
             
        saveMenuItemsUpdate()
           
        }
       
    });
   function saveMenuItemsUpdate() {
       var positions = {data: [] };
    var menuId = $('#sortMenuId').val();
       $('#listItems').children().each(function() {
           positions.data.push( { "id": $(this).attr('data-id'), "position": $(this).attr('data-position') } );
       }); 
       
       positions = JSON.stringify(positions, null, ' ');

       var formData =  new FormData(); 

       formData.append('data', positions);
       formData.append('menu_id', menuId); 
       
       $.ajax({
           url: '/dynweb/cms/admin/settings/ajaxMenuSortItem/', 
           type: 'POST', 
           data: formData,
           processData: false,
           contentType: false, 
           beforeSend: function() {
               
               $('#listItems').addClass('loading');
                $('#settingMainEdit').attr('disabled', 'disabled');
           },
           success: function() {
            $('#listItems').removeClass('loading');
            $('#settingMainEdit').removeAttr('disabled', 'disabled');
           }
       })
   }
});