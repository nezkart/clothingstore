function toggleMobileMenu(menu) {
    menu.classList.toggle('open')
}

function toggleBurger() {
    var x = document.getElementsByClassName("mobile-menu-list")
    if (x.style.display === "block") {
        x.style.display = "none"
    } else {
        x.style.display = "block"
    }
}

$(".checkbox-burger").on("change", function () {
    if ($(this).prop("checked")) {
        $("body").css("overflow", "hidden")
        $(".mobile-cart-a").css("z-index", 0)
        $("#mobile-logo").css("z-index", 0)
    } else {
        $("body").css("overflow", "visible")
        $(".mobile-cart-a").css("z-index", 1)
        $("#mobile-logo").css("z-index", 1)
    }
})