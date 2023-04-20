// @ts-nocheck
let app_header = document.getElementById("navbar");
if (app_header) {
    document.addEventListener("scroll", function () {
        window.scrollY > 170 ? app_header.classList.add("is-sticky") : app_header.classList.remove("is-sticky");
    });
    const megaMenu = document.getElementById('megaMenu');   
    megaMenu.addEventListener('show.bs.collapse', event => {
        app_header.classList.add('dark-header');
    })
    megaMenu.addEventListener('hide.bs.collapse', event => {
        app_header.classList.remove('dark-header');
    })
}

let scrollToElement = function (el, ms) {
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top - $("#navbar").outerHeight(true)
    }, speed);
}
$(".category-list a").on("click", function (event) {
    event.preventDefault();
    scrollToElement($(this).attr('href'));
})