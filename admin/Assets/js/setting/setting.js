
var settings = {
    update: function() {
        var formSetting =  $('#formSetting'); 
        var formButton = $('#settingUpdate');
        var formData = new FormData(); 

        var nameSite = $('#nameSite').val();
        var descriptionSite = $('#descriptionSite').val();
        var adminEmail = $('#adminEmail').val();
        var language = $('#language').val(); 

        formData.append('nameSite', nameSite); 
        formData.append('descriptionSite',descriptionSite);
        formData.append('adminEmail', adminEmail);
        formData.append('language', language);

        formSetting.submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '/dynweb/cms/admin/settings/general/update/', 
                type: 'POST', 
                data: formData, 
                processData: false, 
                contentType: false, 
                beforeSend: function() {
                    formSetting.addClass('loading'); 
                    formButton.addClass('loading');

                    $('#nameSite').attr('disabled', 'disabled');
                    $('#descriptionSite').attr('disabled', 'disabled');
                    $('#adminEmail').attr('disabled', 'disabled');
                    $('language').attr('disabled', 'disabled');
                }, 
                complete: function() {
                    formSetting.addClass('loading'); 
                    formButton.addClass('loading');
                }, 
                success: function() {
                 
                    
                    formSetting.removeClass('loading'); 
                    formButton.removeClass('loading');
                    location.reload();
                    
                }
                
            })
            

        });

    }, 
    menu: function() {
       
        var formSetting = $('#settingAddMenu');
        var formButton = $('#saveMenu');
        var formData = new FormData();

        var newMenu = $('#addMenu').val();
        formData.append('name', newMenu);

        formSetting.submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '/dynweb/cms/admin/settings/general/ajaxMenuAdd/', 
                type: 'POST', 
                data: formData, 
                processData: false, 
                contentType: false,
                beforeSend: function() {
                    formSetting.addClass('loading');
                    $('#addMenu').attr('disabled', 'disabled');
                    formButton.addClass('loading');
                }, 
                complete: function() {
                    formSetting.addClass('loading');
                    $('#addMenu').attr('disabled', 'disabled');
                    formButton.addClass('loading');
                }, 
                success: function() {
                    formSetting.removeClass('loading');
                    $('#addMenu').removeAttr('disabled', 'disabled');
                    formButton.removeClass('loading');
                    location.reload();
                }
            });
        });
    }, 
    listItems:  $('#listItems'),
    addMenuItem: function(menuId) {
        var formItemMenu = $('#formAddMenuItem'); 
        var formButton = $('#buttonAddItem');
        var formData = new FormData(); 
        var _this = this;

        formData.append('menu_id', menuId);
        if (menuId < 1) {
            return false;
        }
       
            
            $.ajax({
                url: '/dynweb/cms/admin/settings/general/ajaxMenuAdditem/', 
                type: 'POST', 
                data: formData,
                processData: false, 
                contentType: false,
                beforeSend: function() {
                    formItemMenu.addClass('loading');
                    formButton.addClass('loading');
                    
                }, 
                complete: function() {
                    formItemMenu.addClass('loading');
                    formButton.addClass('loading');
                    
                }, 
                success: function(result) {
                    if (result) {
                        _this.listItems.append(result);
                    }
                    location.reload();
                }
            });
       
    }, 
    deleteMenuItem: function(id) {
       
        var formData = new FormData(); 
        var deleteButton = document.querySelectorAll('.delete'); 

        function deleteButtonAddLoader(id) { 
            
            deleteButton.forEach(function(elem) {
            
            if (elem.dataset.index == id) {
                
                elem.classList.add('loading'); 
            }
        });
    }
    function deleteButtonRemoveLoader(id) { deleteButton.forEach(function(elem) {
        if (elem.dataset.index == id) { 
            
            elem.classList.remove('loading'); 
           
        }
    });
    }
        formData.append('id', id); 
        

            $.ajax({
                url: '/dynweb/cms/admin/settings/ajaxMenuDeleteItem/', 
                type: 'POST', 
                data: formData,
                processData: false, 
                contentType: false, 
                complete: function() { 
                    deleteButtonAddLoader(id);
                    //$('#listItems').addClass('loading');  
                }, 
                success: function() {
                    $(`.column[data-id="${id}"]`).remove();
                    deleteButtonRemoveLoader(id);
                    //$('#listItems').removeClass('loading');
                    
                }
            });
        
    }, 
    changeMenuItemName: function(id) {
        var changeForm = $('#formAddMenuItem'); 
        var formData = new FormData(); 

        var changeButton = $(`input[data-name="${id}"]`).val();
        formData.append('id', id); 
        formData.append('name', changeButton);

        $.ajax({
            url: '/dynweb/cms/admin/settings/ajaxMenuChangeItemName/', 
            type: 'POST', 
            data: formData,
            contentType: false, 
            processData: false, 
            beforeSend: function() {
                changeForm.addClass('loading');
            }, 
            success: function() {
                changeForm.removeClass('loading');
            }
        }); 
    }, 
    changeMenuItemLink: function(id) {
        var changeForm = $('#formAddMenuItem'); 
        var formData = new FormData(); 
        var changeLink = $(`input[data-link=${id}]`).val();
        formData.append('id', id); 
        formData.append('link', changeLink);
        $.ajax({
            url: '/dynweb/cms/admin/settings/ajaxMenuChangeItemLink/', 
            type: 'POST', 
            data: formData,
            contentType: false, 
            processData: false, 
            beforeSend: function() {
                changeForm.addClass('loading');
            }, 
            success: function() {
                changeForm.removeClass('loading');
            }
        }); 
    }
}

