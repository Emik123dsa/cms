var post = {
    add: function() {
        var formPost = $('#formPostCreate'); 
        formPost.submit(function(e) {
        e.preventDefault(); 

        var formData = new FormData(); 
        var formTitle = $('#formTitle').val(); 
        var formContent = $('#formContent').val(); 

        formData.append('title', formTitle);
        formData.append('content', formContent); 

        $.ajax({
            url: '/dynweb/cms/admin/post/add/',
            type: 'POST', 
            data: formData, 
            processData: false, 
            contentType: false, 
            beforeSend: function() {
                $('#postPage').addClass('loading');
                $('#formTitle').attr('disabled', 'disabled');
                $('#formContent').attr('disabled', 'disabled');
                formPost.addClass('loading');
                
            },
            complete: function () {
                $('#postPage').addClass('loading');
                $('#formTitle').attr('disabled', 'disabled');
                $('#formContent').attr('disabled', 'disabled');
                formPost.addClass('loading');
            },
            success: function() {
                $('#postPage').removeClass('loading');
                $('#formTitle').removeAttr('disabled', 'disabled');
                $('#formContent').removeAttr('disabled', 'disabled');
                formPost.removeClass('loading');
                location.replace('/dynweb/cms/admin/posts/');
            },
            error: function() {

            }

        })


        });

    },
    edit: function() {
        var formPost = $('#formPostEdit'); 
        formPost.submit(function(e) {
        e.preventDefault(); 

        var formData = new FormData(); 
        var formTitle = $('#formTitle').val(); 
        var formContent = $('#formContent').val(); 
        var formPostId = $('#formPostId').val();
            
        formData.append('post_id', formPostId);
        formData.append('title', formTitle);
        formData.append('content', formContent); 
        
        $.ajax({
            url: '/dynweb/cms/admin/posts/update/',
            type: 'POST', 
            data: formData, 
            processData: false, 
            contentType: false, 
            beforeSend: function() {
                $('#postPageEdit').addClass('loading');
                $('#formTitle').attr('disabled', 'disabled');
                $('#formContent').attr('disabled', 'disabled');
                formPost.addClass('loading');
                
            },
            complete: function () {
                $('#postPageEdit').addClass('loading');
                $('#formTitle').attr('disabled', 'disabled');
                $('#formContent').attr('disabled', 'disabled');
                formPost.addClass('loading');
            },
            success: function() {
                $('#postPage').removeClass('loading');
                $('#formTitle').removeAttr('disabled', 'disabled');
                $('#formContent').removeAttr('disabled', 'disabled');
                formPost.removeClass('loading');
                location.replace('/dynweb/cms/admin/posts/');
            },
            error: function() {

            }

        })


        });

    }

}