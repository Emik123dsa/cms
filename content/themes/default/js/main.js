
(function() {
    document.body.onload = function () {
        setTimeout(function() {
            var preloader = document.getElementById('page-preloader');
            if(!preloader.classList.contains('preloader')) {
                preloader.classList.add('done');
            }
}, 2000); }
const parallax_feature = document.getElementById('parallax_first');
const menuMain = document.querySelector('.navbar_main');

const button_slick_first = document.getElementById('slick-slide-control00');
const button_slick_second = document.getElementById('slick-slide-control01');
const button_slick_third = document.getElementById('slick-slide-control02');

const animate_first = document.querySelector('.hero_wrap_dentist_equipments_first_description_title');
const button_first = document.querySelector('.hero_wrap_dentist_equipments_first_button');
const span_first = document.querySelector('.hero_wrap_dentist_equipments_first_description_feature');
const image_first = document.querySelector('.hero_wrap_dentist_equipments_first_feature');

const animate_second = document.querySelector('.hero_wrap_dentist_equipments_second_description_title');
const button_second = document.querySelector('.hero_wrap_dentist_equipments_second_button');
const span_second = document.querySelector('.hero_wrap_dentist_equipments_second_description_feature');
const image_second = document.querySelector('.hero_wrap_dentist_equipments_second_feature');

const animate_third = document.querySelector('.hero_wrap_dentist_equipments_third_description_title');
const button_third = document.querySelector('.hero_wrap_dentist_equipments_third_button');
const span_third = document.querySelector('.hero_wrap_dentist_equipments_third_description_feature');
const image_third = document.querySelector('.hero_wrap_dentist_equipments_third_feature');

button_slick_first.addEventListener('click', function() {
    animate_first.classList.add('animated', 'fadeInLeftBig');
    button_first.classList.add('animated', 'fadeInRightBig');
    span_first.classList.add('animated', 'fadeInDownBig');
    image_first.classList.add('animated', 'fadeInDownBig');

    //

    animate_second.classList.remove('animated', 'fadeInLeftBig');
    button_second.classList.remove('animated', 'fadeInRightBig');
    span_second.classList.remove('animated', 'fadeInDownBig');
    image_second.classList.remove('animated', 'fadeInDownBig');

    //

    animate_third.classList.remove('animated', 'fadeInLeftBig');
    button_third.classList.remove('animated', 'fadeInRightBig');
    span_third.classList.remove('animated', 'fadeInDownBig');
    image_third.classList.remove('animated', 'fadeInDownBig')
});

button_slick_second.addEventListener('click', function() {
    animate_first.classList.remove('animated', 'fadeInLeftBig');
    button_first.classList.remove('animated', 'fadeInRightBig');
    span_first.classList.remove('animated', 'fadeInDownBig');
    image_first.classList.remove('animated', 'fadeInDownBig');

    //

    animate_second.classList.add('animated', 'fadeInLeftBig');
    button_second.classList.add('animated', 'fadeInRightBig');
    span_second.classList.add('animated', 'fadeInDownBig');
    image_second.classList.add('animated', 'fadeInDownBig');

    //

    animate_third.classList.remove('animated', 'fadeInLeftBig');
    button_third.classList.remove('animated', 'fadeInRightBig');
    span_third.classList.remove('animated', 'fadeInDownBig');
    image_third.classList.remove('animated', 'fadeInDownBig')
});

button_slick_third.addEventListener('click', function() {
    animate_first.classList.remove('animated', 'fadeInLeftBig');
    button_first.classList.remove('animated', 'fadeInRightBig');
    span_first.classList.remove('animated', 'fadeInDownBig');
    image_first.classList.remove('animated', 'fadeInDownBig');

    //

    animate_second.classList.remove('animated', 'fadeInLeftBig');
    button_second.classList.remove('animated', 'fadeInRightBig');
    span_second.classList.remove('animated', 'fadeInDownBig');
    image_second.classList.remove('animated', 'fadeInDownBig');

    //

    animate_third.classList.add('animated', 'fadeInLeftBig');
    button_third.classList.add('animated', 'fadeInRightBig');
    span_third.classList.add('animated', 'fadeInDownBig');
    image_third.classList.add('animated', 'fadeInDownBig')
});

button_slick_second.addEventListener('click', function() {
    
});

button_slick_third.addEventListener('click', function() {
    
});

const forms_appear = document.querySelector('.forms_features_wrap_users'); 

window.addEventListener("DOMContentLoaded", function() {
    animate_first.classList.add('animated', 'fadeInLeftBig');
    button_first.classList.add('animated', 'fadeInRightBig');
    span_first.classList.add('animated', 'fadeInDownBig');
    image_first.classList.add('animated', 'fadeInDownBig');
});

const reviewImage = document.getElementById('review_parallax');
const navbarMenuHigh = document.querySelector('.navbar_wrap');
const menu = document.querySelector('.navbar_wrap_list_responsive_menu');
function scroll () {
    if (pageYOffset >= 100) {
        parallax_feature.style.backgroundPositionY = `${pageYOffset/2-950}px`;
        if (document.body.clientWidth > '1170') {
        menuMain.classList.add('navbar_main_active');
        
        //node.style.position = "absolute";
        } else {
            menuMain.classList.add('navbar_main_active_mobile');
            
        }
        
     //reviewImage.style.backgroundPositionY = `${pageYOffset/3-1800}px`;
    }
    else {
        menuMain.classList.remove('navbar_main_active');
        menuMain.classList.remove('navbar_main_active_mobile');
        
    }
}

function check_out() {
if (document.body.clientWidth > '1170') {
    node.style.position = "relative";
    navbar.style.position = "relative";
    media.style.visibility = "visible";
    } else {
        media.style.visibility = "hidden";
        //menuMain.classList.add('navbar_main_active_mobile');
        node.style.position = "absolute";
        navbar.style.position = "absolute";
        node.style.height = "0";
        navbar.style.height = "0";
    }
}

check_out();


window.addEventListener('scroll', scroll);

const cartItem = document.querySelector('.experience_wrap_features_general');



const buttonMenu = document.querySelector('.navbar_wrap_list_menu_link');
const spanMenu = document.querySelector('.navbar_wrap_list_menu')
buttonMenu.addEventListener('click', function() {
    spanMenu.classList.toggle('navbar_wrap_list_menu_active');
    menu.classList.toggle('navbar_wrap_list_responsive_menu_active');
});




}).call(this);