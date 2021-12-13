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
    } else {
        $("body").css("overflow", "visible")
    }
})