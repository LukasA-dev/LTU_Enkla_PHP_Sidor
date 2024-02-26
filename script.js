document.addEventListener("DOMContentLoaded", function() {
    // Ladda in menyn från menu.php
    var menuXhr = new XMLHttpRequest();
    menuXhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("menu-container").innerHTML = this.responseText;
        }
    };
    menuXhr.open("GET", "menu.php", true);
    menuXhr.send();

    // Ladda in footern från footer.php
    var footerXhr = new XMLHttpRequest();
    footerXhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("footer-container").innerHTML = this.responseText;
        }
    };
    footerXhr.open("GET", "footer.php", true);
    footerXhr.send();
});
