const splash = document.querySelector('.launch-logo');
const login = document.querySelector('.login-page');

document.addEventListener('DOMContentLoaded', (e) => {
    setTimeout(() => {
        splash.classList.add('display-none');
        login.classList.add('display')
    }, 4000);
})

jQuery(function($) {
    var path = window.location.href;
    $('ul a').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});

$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $(".head-bar").addClass("scrolled");
    }
    else {
        $(".head-bar").removeClass("scrolled");
    }

    // Tugas Scroll
    if (scroll > 100) {
        $(".tugas-search").addClass("scrolled");
    }
    else {
        $(".tugas-search").removeClass("scrolled");
    }
});


// DETAIL-TUGAS JS
// ATTACHMENT MENU
$(".dTugas-attachment-icon").click(function (e) {
    e.stopPropagation()
    $(".dTugas-attachment-icon").children(".dTugas-attachment-options-wrapper").removeClass("dTugas-options-show")
    $(this).children(".dTugas-attachment-options-wrapper").toggleClass("dTugas-options-show")
});

$(".dTugas-attachment-options-wrapper").mouseout(function (e) {
    e.stopPropagation()
    $(this).removeClass("dTugas-options-show")
});

// FOOTER DRIPUP
$('#dTugas-footer-expand').click(function (e) {
    e.stopPropagation()
    dropContentSwitch()
});
$('#dTugas-footer-collapse').click(function (e) {
    e.stopPropagation()
    dropContentSwitch()
});
$('#drop-bg').click(function (e) { 
    e.stopPropagation()
    dropContentSwitch()
});

function dropContentSwitch() {
    $('#dTugas-footer-dropContentWrapper').toggleClass('dTugas-show')
    $('#drop-bg').toggleClass('dTugas-show')
    $('#dTugas-footer-expand').toggleClass('dTugas-hidden')
    $('#dTugas-footer-collapse').toggleClass('dTugas-hidden')
}