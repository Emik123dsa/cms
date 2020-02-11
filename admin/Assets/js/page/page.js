var page = {
    add: function() {
    var formPage = $('#formPageCreate');
       formPage.submit(function(e) {
            e.preventDefault();
            var formData = new FormData(); 
            var formTitle = $('#formTitle').val();
            var formContent = $('#formContent').val(); 

            formData.append('title', formTitle);
            formData.append('content', formContent);
            
            $.ajax( { 
                url: '/dynweb/cms/admin/page/add/', 
                type: 'POST', 
                data: formData,
                processData: false, 
                contentType:  false, 
                complete: function() {},
                beforeSend: function() {
                    $('#createPage').addClass('loading');
                    $('#formTitle').attr('disabled', 'disabled');
                    $('#formContent').attr('disabled', 'disabled');
                    formPage.addClass('loading');
                    
                },
                complete: function () {
                    $('#createPage').addClass('loading');
                    $('#formTitle').attr('disabled', 'disabled');
                    $('#formContent').attr('disabled', 'disabled');
                    formPage.addClass('loading');
                },
                success: function() {
                    $('#createPage').removeClass('loading');
                    $('#formTitle').removeAttr('disabled', 'disabled');
                    $('#formContent').removeAttr('disabled', 'disabled');
                    formPage.removeClass('loading');
                       location.replace('/dynweb/cms/admin/pages/');
                },
                error: function() {

                }
            } ); 
        });
        
        
    }
,
   edit: function() {
        var formPage = $('#formPageUpdate');
        formPage.submit(function(e) {
            e.preventDefault();
            var formData = new FormData();

            var formPageId = $('#formPageId').val(); 
            var formTitle = $('#formTitle').val();
            var formContent = $('#formContent').val(); 
    
            formData.append('page_id', formPageId);
            formData.append('title', formTitle); 
            formData.append('content', formContent); 
    
            $.ajax({
                url: '/dynweb/cms/admin/pages/update/',
                type: 'POST', 
                data: formData,
                processData: false, 
                contentType: false, 
                beforeSend: function() {
                    $('#createPage').addClass('loading');
                    $('#formTitle').attr('disabled', 'disabled');
                    $('#formContent').attr('disabled', 'disabled');
                    formPage.addClass('loading');
                    
                },
                complete: function () {
                    $('#updatePage').addClass('loading');
                    $('#formTitle').attr('disabled', 'disabled');
                    $('#formContent').attr('disabled', 'disabled');
                    formPage.addClass('loading');
                },
                success: function() {
                    $('#updatePage').removeClass('loading');
                    $('#formTitle').removeAttr('disabled', 'disabled');
                    $('#formContent').removeAttr('disabled', 'disabled');
                    formPage.removeClass('loading');
                    location.replace('/dynweb/cms/admin/pages/');
                },
                error: function() {
    
                }
    
            });});
        

    }
}