document.body.onload = function() {
    setTimeout(function() {
        var preloader = document.getElementById('preloader-page-login');

        if(!preloader.classList.contains('preloader-login')) 
            preloader.classList.add('done');
            loader.classList.remove('dimmer');
            //////////////////////////////////
}
    , 500);
    window.addEventListener('mousemove', function(e) {
        e.preventDefault(); 
        const backgroudParallax = document.getElementById('loginBackground');
        backgroudParallax.style.backgroundPositionX = `-${((document.body.offsetWidth/1)-e.clientX)/20}px`;
        backgroudParallax.style.backgroundPositionY = `-${((document.body.offsetHeight/1)-e.clientY)/20}px`;
    });
}





$('.ui.toggle.checkbox').checkbox();

var sign = {
    signin: function () {
        var formLogin = $('#formLogin');
        formLogin.submit(function(e) {
            e.preventDefault(); 

            var formData = new FormData(); 

            var email = $('#email').val();
            var password =$('#password').val(); 

            formData.append('email', email);
            formData.append('password', password); 

            $.ajax({
                url: '/dynweb/cms/admin/auth/', 
                type: 'POST', 
                data: formData, 
                processData: false, 
                contentType: false, 
                beforeSend: function() {
                    var msg = "";
                    $('#login').addClass('loading'); 
                    formLogin.addClass('loading');
                    $('#email').attr('disabled', 'disabled');
                    $('#password').attr('disabled', 'disabled');
                    const errorMessage = $('#errorMessage');
                    errorMessage.html(msg);
                    errorMessage.addClass('hidden');
                }, 
                complete: function() {
                        
                        
                }, 
                success: function(response) {
                        if (response != true) {
                        $('#login').removeClass('loading'); 
                        formLogin.removeClass('loading');
                        $('#email').removeAttr('disabled', 'disabled');
                        $('#password').removeAttr('disabled', 'disabled');
                        const errorMessage = document.getElementById('errorMessage');
                        errorMessage.innerHTML = "<ul class='ui list'> <div class='item'> <div class='content'> <div class = 'header'> <i class='cancel icon'> </i> <span> An error occured</span></div> <div class = 'description'> <p> This an user wasn't finding in our database or check out input parameters again </p></div></div> </div> </ul>";
                        errorMessage.classList.remove('hidden');
                        } 
                        else
                        {
                        const errorMessage = document.getElementById('errorMessage');
                        errorMessage.innerHTML = "<ul class='ui list'> <div class='item'> <div class='content'> <div class = 'header'> <i class='check icon'> </i> <span> Success </span></div> <div class = 'description'></div></div> </div> </ul>";
                        errorMessage.classList.remove('hidden', 'error');
                        errorMessage.classList.add('success');
                        location.replace('/dynweb/cms/admin/');
                        }
                }, 
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus, errorThrown);
                }

            });
            
        });

    }
}

const login = document.getElementById('login');
login.addEventListener('click', sign.signin);