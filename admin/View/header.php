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
          <div id="preloader-page">
              <div class="preloader">
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
            <header class="header">
                <div class="background">
                    <!-- /.background -->
                    <div id="particles-js"> 
                        <canvas class="particles-js-canvas-el" width="660" height="657" style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.ui divider -->
                <div class="pusher">
                    <!-- /.ui top atttached tabular menu -->
                    <!-- /.ui top attached -->
                    <div class="navbar ui masthead center aligned vertical">
                        <div class="navbar ui container">
                            <div class="ui large top attached pointing menu ">
                        <div class="left menu">
                                <!-- /.left menu -->
                                <div class="item ">
                                                <img class="ui mini image" src="/dynweb/cms/admin/Assets/img/logotype.png" alt="dental">
                                </div>
                                <div class="item">
                                                <div class="content">
                                                    <a href="javascript:void(0)" class="ui blue header">Dental Cms</a href="javascript:void(0)">
                                                </div>
                                                <!-- /.content -->
                                    <!-- /.ui logo shape -->
                            </div>
                        </div>
                                <div class="center menu">
                                    
                                        <a href="/dynweb/cms/admin/" class="item " >
                                            <i class="home icon"></i> <!-- /.menu icon -->
                                            <?= $lang->dashboardMenu['home']  ?>
                                    </a> 
                                    
                                        <a href="/dynweb/cms/admin/pages/page/1" class="item ">
                                            <i class="list icon"></i> <!-- /.menu icon -->
                                            <?= $lang->dashboardMenu['pages']  ?>
                                    </a>
                                 
                                        <a href="/dynweb/cms/admin/posts/post/1" class="item ">
                                            <i class="folder icon"></i> <!-- /.menu icon -->
                                            <?= $lang->dashboardMenu['posts']  ?>
                                    </a>
                                  
                                        <div class="navbar settings ui dropdown link pointing item">
                                            <i class="setting icon"></i> <!-- /.menu icon -->
                                            <?= $lang->dashboardMenu['setting']  ?>
                                            <i class="dropdown icon"></i>
                                            <div class="menu"> 
                                                <a href="/dynweb/cms/admin/settings/general/" class="item "> <i class="fly icon"></i> General</a>
                                                <!-- /.item -->
                                                <a href="javascript:void(0)" class="item"> <i class="fly icon"></i> Appereance</a>
                                                <!-- /.item -->
                                                <a href="/dynweb/cms/admin/settings/appearance/menus/" class="item"> <i class="fly icon"></i> Menu</a>
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.menu -->
                                        </div> 
                                    <!-- /.item -->
                                </div>
                                <div class="right menu">
                                    <div class="item">
                                       
                                        <a href="/dynweb/cms/admin/logout/" class="ui negative button">
                                            <i class="sign-out mail icon"></i> <!-- /.mail icon -->
                                        Log Out
                                    </a> <!-- /.ui label -->
                                </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.right menu -->
                                <!-- /.right menu inverted -->
                                <!-- /.item -->
                            </div>
                            <!-- /.ui large inverted secondary network menu -->
                        </div>
                        <!-- /.navbar ui container -->
                    </div>
                     <div class="navigation ui container">
                     <!-- /.ui container -->
                            <div class="ui attached segment breadcrumb">
                                <a href="javascript:void(0)" class="section">Home</a>
                                <i class="right angle icon divider"></i>
                              </div>
                              </div>
                </div>
            </header>