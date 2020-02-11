<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dynweb/cms/admin/Assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/node_modules/normalize.css/normalize.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/semantic/dist/semantic.min.css" rel="stylesheet" type="text/css">
        <link href="/dynweb/cms/admin/Assets/node_modules/trumbowyg/dist/ui/trumbowyg.min.css" rel="stylesheet" type="text/css">
    </head>
        <body>
          <div id="preloader-page-login">
              <div class="preloader-login">
              <!-- /.preloader -->
                <!-- /.ui segment -->
                    <div id = "loader" class="ui active dimmer">
                        <div class="ui massive loader"> </div>
                        <!-- /.ui loader -->
                        <img class="ui mini image" src="/dynweb/cms/admin/Assets/img/logotype.png" alt="dental">
                    </div>  
                </div>
              <!-- /.preloader-page -->
          </div>
          <!-- /#preloader -->
            <!-- /#particles-js -->
        <!-- /.background-gradient -->
        <header class="header">
                <div id="loginBackground" class="background-login">
                    <!-- /.background -->
                    <div id="particles-js"> 
                        <canvas class="particles-js-canvas-el" width="660" height="657" style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div> 
        </header>
        <main class="main main-login">
            <section class="ui raised very padded text container">

               <div class="ui top attached info message">

                <div class="ui circular mini centered image logo" > 
           
            </div>

                    </div>

                    <div class="ui attached segment">
                    <!-- /.ui attached segment -->
                    <h1 class="ui aligned center horizontal blue divider header"> Welcome </h1>
                    <!-- /.ui header -->
                      <div class="ui top attached tabular menu "> 
                     
                              <a class="active item" href="/dynweb/cms/admin/login/"> Sign In</a>
                              <!-- /.ui header -->
                          <a class="item" href="/dynweb/cms/admin/signup/"> Sign Up</a>
                
                          <!-- /.item -->
                          <!-- /.active item -->
                      </div>

                      <div class="ui bottom attached segment">
                     
                      <form id="formLogin" class="ui form">
                          
                      <div class="field required ">
                            <label> Email </label>
                            <div class="ui left icon input">
                                    <input type="email" id="email" autocomplete = "current-email" placeholder="E-mail">
            
                                    <i class="envelope icon"></i>
                                   
                                    <!-- /.ui basic red pointing prompt label transition visible -->
                                        </div>
                                        
                    </div>
                        <!-- /.form_wrap_login_p -->
                              
                                <div class="field required">
                                    <label >Password</label>
                                         <div class="ui left icon input">
                                     <input type="password" id="password" autocomplete = "current-password" placeholder="Password" >

                                     <i class="lock icon"></i>
                                    
                                     </div>
                                   
                                 </div>
                                <!-- /.form_wrap_password_p -->
                                <div class="field">
                              
                               
                                 
                                    <div class="ui toggle checkbox">
                                    
                                        <input type="checkbox" name="public">
                                        <label>Remember Me</label>
                                        </div>                        

                                       
                                    </div>
                                    <!-- /.ui error message -->
                                    <button  id ="login" class="ui fluid primary button"> <i class="fly icon"></i> <!-- /.fly icon -->
                                        Log In</button>
                                    <!-- /.ui secondary button -->
                                <!-- /.form_wrap_checkbox_p -->
                        </form>
                      <!-- /.form_wrap -->
                      </div>
                    <!-- /.form_wrap -->
                    </div>
                    
                    <!-- /.ui attached segment -->
                    <div id="errorMessage" class="ui attached error message hidden"> </div>
                    </div>
               <div class="ui bottom attached info message"> 
               
               <i class="question icon"></i>

  You don't have have an account in our system? <a href="javascript:void(0)">Please, Sign Up</a>

               </div>
               
               <!-- /.ui error message -->
               <!-- /.ui top attached bottom warning message -->
              
                <!-- /.container -->
            </section>
            <!-- /.form -->
        </main>
        <!-- /.main -->
        <footer class="footer"> 

        </footer>
        <!-- /.footer -->
            <script type="text/javascript" src="/dynweb/cms/admin/Assets/node_modules/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="/dynweb/cms/admin/Assets/semantic/dist/semantic.min.js"></script>
            <script type="text/javascript" src = "/dynweb/cms/admin/Assets/js/particles.min.js"></script>
            <script type="text/javascript" src = "/dynweb/cms/admin/Assets/js/app.js"></script>
            <script type="text/javascript" src = "/dynweb/cms/admin/Assets/js/lib/stats.js"></script>
            <script type="text/javascript" src="/dynweb/cms/admin/Assets/js/login.js"></script>
            <script type="text/javascript" src="/dynweb/cms/admin/Assets/node_modules/trumbowyg/dist/trumbowyg.min.js" > </script>
        <script type="text/javascript">
        $('.ui.form').form( {
            inline : true,
            on: 'blur', 
            delay: true,
            fields: {
                email: {
                   identifier: 'email',
                   rules: [
                       {
                            type: 'empty', 
                            prompt: 'Please enter an e-mail'
                       }, 
                       {
                            type: 'email',
                            prompt: '{name} must be a valid e-mail' 
                        }
                   ]
                
                },  
                password: {
                    identifier: 'password', 
                    rules: [
                        {
                            type: 'empty', 
                            prompt: 'Please enter a password'
                    }, 
                    {
                        type: 'minLength[6]', 
                        prompt: 'Your password has to be at least {ruleValue} characters'
                    }
                ]
                }
            } 
            
        });
        </script>
        </body>
</html>