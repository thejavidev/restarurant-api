function toggleTheme() {
    if (localStorage.getItem("Javid-theme") !== null) {
        if (localStorage.getItem("Javid-theme") === "dark") {
            $("body").addClass("dark");
        }
        else {
            $("body").removeClass("dark");
        }
    }
    updateIcon();
}
toggleTheme();

$(".toggle-theme").on("click", function () {
    $("body").toggleClass("dark");
    if ($("body").hasClass("dark")) {
        localStorage.setItem("Javid-theme", "dark");
    }
    else {
        localStorage.setItem("Javid-theme", "light");
    }
    updateIcon();
})

function updateIcon() {
    if ($("body").hasClass("dark")) {
        $(".toggle-theme i").removeClass("fa-moon");
        $(".toggle-theme i").addClass("fa-sun");
    } else {
        $(".toggle-theme i").removeClass("fa-sun");
        $(".toggle-theme i").addClass("fa-moon");
    }
}
AOS.init({
    once: true,
});





jQuery(document).ready(function () {
    var off_msg = "Səhifəni tərk etmə :(";
    var oldTitle = document.title;
    window.a = {
        offMsg: off_msg, visible: function () { document.title = oldTitle }, hidden: function () { a.removeTimer(), window.originalDocumentTitle = document.title, document.title = a.offMsg, a.addTimer() },
        removeTimer: function () { a.timeOut && window.clearTimeout(a.timeOut) },
        addTimer: function () { a.timeOut = window.setTimeout(a.visible, 10000) }
    };
    window.addEventListener('focus', function () { a.visible(); }); window.addEventListener('blur', function () { a.hidden(); });
});