const splash = document.querySelector('.launch-logo');
const login = document.querySelector('.login-page');
const bg = document.querySelector('.bg-container');
const pop = document.querySelector('.modal');

document.addEventListener('DOMContentLoaded', (e) => {
    setTimeout(() => {
        splash.classList.add('display-none');
        // pop.classList.add('display-none');
        login.classList.add('display');
        bg.classList.add('display');     
    }, 2500);
})

jQuery(function($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
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
});
$('#myTable').DataTable({
    "oLanguage": {
                    "sLengthMenu": " _MENU_ ", 
                    "sInfo": "Menampilkan kata gaul _START_ sampai _END_ dari total _TOTAL_ yang ada",
                },

});