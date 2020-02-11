document.body.onload = function() {
    setTimeout(function() {
        var preloader = document.getElementById('preloader-page');

        if(!preloader.classList.contains('preloader')) 
            preloader.classList.add('done');
            loader.classList.remove('dimmer');
}
    , 500);
}


$(document).ready((function() {
    $('.navbar.settings').dropdown();

    $('.ui.dropdown.link.pointing.item').dropdown();

    $('.ui.fluid.blue.accordion').accordion('refresh');

}));

