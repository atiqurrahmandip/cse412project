document.addEventListener("DOMContentLoaded", function () {
    "use strict";

    document.querySelector('.sidebar-toggler').addEventListener('click', function () {
        document.querySelector('.sidebar').classList.toggle("open");
        document.querySelector('.content').classList.toggle("open");
    });

});



