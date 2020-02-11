 <!-- IT"S REQUIRED A DEVELOPMENT!-->
 <?php

use Engine\Core\Template\Asset;
use Engine\Core\Template\Theme;
use Engine\Core\Template\Menu;
use Engine\Core\Template\Setting; 

?>

 <!DOCTYPE html> 
    <html lang="en">
        <head>
            <meta charset = "utf-8">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
            <?php
Asset::render('css')?>
            <title> <?php 
                               echo Theme::title(); ?></title>
            </head>
            
        <body>
            <div id="page-preloader">
                <div class="preloader">
                    
                </div>
                <!-- /.preloader-image -->
            </div>
            <!-- /#preloader-bg -->
            <!-- /.hello -->
            <?php ?>
            <header class="header">
                <!-- /.navbar_menu -->
                <!-- /.particel-js -->
                <div class="navbar_main">
                <!-- /.navbar_menu -->
                <div class="navbar_description">
                    <div class="container">
                        <div class="navbar_description_wrap">
                            <div class="navbar_description_wrap_content">
                            <!-- /.navbar_description_wrap_content -->
                            <div class="navbar_description_wrap_address">
                                <address class="navbar_description_wrap_address_title">
                                    10 Firs Avenue, Muswell Hill, London N10
                                </address>
                                <!-- /.navbar_description_wrap_address_title -->
                            </div>  
                            <!-- /.navbar_description_wrap_address -->
                            <div class="navbar_description_wrap_work_time">
                                    <span class="navbar_description_wrap_work_time_title">
                                        Weekdays: 8:00–20:00 Weekends: Closed
                                    </span> <!-- /.navbar_description_wrap_work_time_title -->
                            </div>
                        </div>
                            <!-- /.navbar_description_wrap_work_time -->
                            <div class="navbar_description_wrap_search_content">
                                <span class="navbar_description_wrap_search_content_title"> What Are You Looking For?
                                </span> <!-- /.navbar_wrap_search_content_title -->
                                <span class="navbar_description_wrap_search_content_icon"></span> <!-- /.navbar_wrap_search_content_icon -->
                            </div>
                            <!-- /.navbar_wrap_search_content -->
                        </div>
                        <!-- /.navbar_description_wrap -->
                    </div>
                    <!-- /.conatiner -->
                </div>
                <!-- /.navbar_description -->
                <div class="navbar">
                    <div class="container">
                        <div class="navbar_wrap">
                            <div class="navbar_wrap_title">
                              
                                <!-- /.navbar_wrap_logo_content -->
                                <a href="javascript://0" class="navbar_wrap_logotype"></a> 
                       
                                <!-- /.navbar_wrap_logotype -->
                               <h1 class="navbar_wrap_title_logo"> <?php 
                               echo Setting::get('nameSite'); ?></h1>
                               <!-- /.navbar_wrap_title_logo -->
                                <!-- /.navbar_wrap_title_content -->
                            </div>
                            <!-- /.navbar_wrap_list_menu -->
                            <div id = "node" class="navbar_wrap_list">
                                
                                <navbar id="navbar" class="navbar_wrap_list_navbar">
                                    <ul class="navbar_wrap_list_ul">
                                        <?php foreach(Menu::getItems(0) as $item) :?>
                                        <li class="navbar_wrap_list_li"><a href="<?= $item['link'] ?>"  class="navbar_wrap_list_link"><?= $item['name']?></a> <!-- /.navbar_wrap_list_links --></li>
                                        <!-- /.navbar_wrap_list_li -->
                                        <?php endforeach;?>
                                        <li class="navbar_wrap_telephone">
                                        
                                            <i class="fad fa-phone-alt fa-lg"></i>
                                            <span class="navbar_wrap_telephone_title">
                                                1-800-700-6200
                                        </span> <!-- /.navbar_wrap_telephone_title --></li>
                                        <!-- /.navbar_wrap_list_li -->
                                    </ul>
                                    <!-- /.navbar_wrap_list_ul -->
                                </navbar>
                                 <!-- /.navbar_wrap_list_menu_link -->
                                <!-- /.navbar_wrap_list_navbar -->
                            </div>
                            <div class="navbar_wrap_list_responsive">
                                <div class="navbar_wrap_list_responsive_header">
                                <!-- /.navbar_wrap_list_responsive_header -->
                                <a href="javascript://0" class="navbar_wrap_list_menu_about_link">
                                    <span class="navbar_wrap_list_menu_about">
                                        
                                    </span>
                                </a>
                                <!-- /.navbar_wrap_list_responsive -->
                                
                                <a href="javascript://0" class="navbar_wrap_list_menu_link">
                                    <span class="navbar_wrap_list_menu">
                                    </span>
                                </a>
                            </div>
                            <div class="navbar_wrap_list_responsive_menu">
                                <navbar class="navbar_wrap_list_responsive_menu_navbar">
                                    <ul class="navbar_wrap_list_responsive_menu_ul">
                                        <li class="navbar_wrap_list_responsive_menu_li"><a href="javascript://0" class="navbar_wrap_list_responsive_menu_links">Home</a> <!-- /.navbar_wrap_list_responsive_menu_links --></li>
                                        <!-- /.navbar_wrap_list_responsive_menu_li -->
                                        <li class="navbar_wrap_list_responsive_menu_li"><a href="javascript://0" class="navbar_wrap_list_responsive_menu_links">About</a> <!-- /.navbar_wrap_list_responsive_menu_links --></li>
                                        <!-- /.navbar_wrap_list_responsive_menu_li -->
                                        <li class="navbar_wrap_list_responsive_menu_li"><a href="javascript://0" class="navbar_wrap_list_responsive_menu_links">Equipments</a> <!-- /.navbar_wrap_list_responsive_menu_links --></li>
                                        <!-- /.navbar_wrap_list_responsive_menu_li -->
                                        <li class="navbar_wrap_list_responsive_menu_li"><a href="javascript://0" class="navbar_wrap_list_responsive_menu_links">Timetable</a> <!-- /.navbar_wrap_list_responsive_menu_links --></li>
                                        <!-- /.navbar_wrap_list_responsive_menu_li -->
                                        <li class="navbar_wrap_list_responsive_menu_li"><a href="javascript://0" class="navbar_wrap_list_responsive_menu_links">Contact</a> <!-- /.navbar_wrap_list_responsive_menu_links --></li>
                                        <!-- /.navbar_wrap_list_responsive_menu_li -->
                                    </ul>
                                    <!-- /.navbar_wrap_list_responsive_menu_ul -->
                                </navbar>
                                <!-- /.navbar__wrap_list_responsive_menu_navbar -->
                                <!-- /.navbar_wrap_list_responsive_menu -->
                            </div>
                            <!-- /.navbar_wrap_list_responsive_menu -->
                            </div>
                            <!-- /.navbar_wrap_telephone -->
                            <!-- /.navbar_wrap_list -->
                            <!-- /.navbar_wrap_title -->
                        </div>
                        <!-- /.navbar_wrap -->
                    </div>
                    <!-- /.container -->
                </div>
            </div>
            </div>
            <div class="hero">
            <?php 
                               echo Setting::get('descriptionSite'); ?>
              <div id="media" class="hero_wrap_social_medias">
                  <a rel="nofollow" href="http://facebook.com" class="hero_wrap_facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a> <!-- /.hero_wrap_facebook -->
                <a rel="nofollow" href="http://twitter.com" class="hero_wrap_twitter">
                <i class="fab fa-twitter"></i>
            </a> <!-- /.hero_wrap_twitter -->
            <a rel="nofollow" href="http://google.com" class="hero_wrap_google_plus">
                <i class="fab fa-google-plus"></i>
            </a> <!-- /.hero_wrap_google_plus -->
              </div>
              <!-- /.hero_wrap_social_medias -->
                    <div class="hero_wrap">
                        <!-- /.hero_wrap_swtich_buttons -->
                        <!-- /.hero_wrap_social_medias -->
                        <div class="hero_wrap_dentist_equipments">
                            <!-- /.container -->
                            <!-- /.hero_wrap_dentist_equipments -->
                            <div id="slider-1" class="hero_wrap_dentist_equipments_first">
                            <!-- /.hero_wrap_dentist_equipments_first -->
                            <div class="hero_wrap_dentist_equipments_first_description">
                                <div class="container">
                                <!-- /.container -->
                                <div class="hero_wrap_dentist_equipments_first_feature">
                                    <i class="fad fa-tooth fa-3x"></i>
                                </div>
                                <div class="hero_wrap_dentist_equipments_first_description_feature">
                                <!-- /.hero_wrap_dentist_equipments_first_description_feature -->
                                <!-- /.hero_wrap_dentist_equipments_first_feature -->
                                <span class="hero_wrap_dentist_equipments_first_description_feature">
                                    Lorem ipsum dolor sit amet
                                </span> <!-- /.hero_wrap_dentist_equipments_first_description_feature -->
                            </div>
                                <h2 class="hero_wrap_dentist_equipments_first_description_title">
                                    Dentist 
                                </h2>
                                <button class="hero_wrap_dentist_equipments_first_button">
                                    Make An Appointment
                                </button> <!-- /.hero_wrap_dentist_equipments_first_button -->
                                <div class="hero_wrap_dentist_equipments_first_mousescroll">
                                    <i class="fad fa-mouse fa-2x"></i>
                                </div>
                                <!-- /.hero_wrap_dentist_equipments_first_mousescroll -->
                                <!-- /.hero_wrap_dentist_equipments_first_description_title -->
                            </div>
                            </div>
                            <!-- /.hero_wrap_dentist_equipments_first_description -->
                        </div>

                        <div id="slider-2" class="hero_wrap_dentist_equipments_second">
                            <div class="hero_wrap_dentist_equipments_second_description">
                                <div class="container">
                                    <div class="hero_wrap_dentist_equipments_second_feature">
                                        <i class="fad fa-thumbs-up fa-3x"></i>
                                    </div>
                                    <div class="hero_wrap_dentist_equipments_second_description_feature">
                                    <!-- /.hero_wrap_dentist_equipments_second_description_feature -->
                                    <span class="hero_wrap_dentist_equipments_second_description_feature">
                                        Lorem ipsum dolor sit amet
                                    </span> <!-- /.hero_wrap_dentist_equipments_first_description_feature -->
                                </div>
                                    <h2 class="hero_wrap_dentist_equipments_second_description_title">
                                        High Quality
                                    </h2>
                                    <button class="hero_wrap_dentist_equipments_second_button">
                                        Make An Appointment
                                    </button> <!-- /.hero_wrap_dentist_equipments_first_button -->
                                    <div class="hero_wrap_dentist_equipments_first_mousescroll">
                                        <i class="fad fa-mouse fa-second fa-2x"></i>
                                    </div>
                                </div>
                                <!-- /.container -->
                            </div>
                            <!-- /.hero_wrap_dentist_equipments_second_description -->
                        <!-- /.hero_wrap_dentist_equipments_second -->
                         
                        </div>

                        <div id="slider-3" class="hero_wrap_dentist_equipments_third">
                            <div class="hero_wrap_dentist_equipments_third_description">
                                <div class="container">
                                    <div class="hero_wrap_dentist_equipments_third_feature">
                                        <i class="fad fa-heart fa-3x"></i>
                                    </div>
                                    <div class="hero_wrap_dentist_equipments_third_description_feature">
                                    <!-- /.hero_wrap_dentist_equipments_third_description_feature -->
                                    <span class="hero_wrap_dentist_equipments_third_description_feature">
                                        Lorem ipsum dolor sit amet
                                    </span> <!-- /.hero_wrap_dentist_equipments_third_description_feature -->
                                </div>
                                    <h2 class="hero_wrap_dentist_equipments_third_description_title">
                                        Warranty 
                                    </h2>
                                    <button class="hero_wrap_dentist_equipments_third_button">
                                        Make An Appointment
                                    </button> <!-- /.hero_wrap_dentist_equipments_third_button -->
                                    <div class="hero_wrap_dentist_equipments_third_mousescroll">
                                        <i class="fad fa-mouse fa-third fa-2x"></i>
                                    </div>
                                </div>
                                <!-- /.container -->
                            </div>
                            <!-- /.hero_wrap_dentist_equipments_third_description -->
                        <!-- /.hero_wrap_dentist_equipments_third -->
                           
                    </div>

                        </div>
                        <!-- /.single-item -->
                    </div>
                    <!-- /.hero_wrap -->
            </div>
            <!-- /.hero -->
                <!-- /.navbar -->
            </header>