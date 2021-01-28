window.addEventListener('load', function() {
    if (document.cookie.replace(/(?:(?:^|.*;\s*)cookie-notice-seen\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
        document.getElementById('cookie-notice').style.display = 'block';
    } else {
        document.getElementById('cookie-notice').remove();
    }
    if (document.getElementById('cookie-notice-accept')) {
        document.getElementById('cookie-notice-accept').addEventListener('click', function() {
            document.cookie = "cookie-notice-seen=true; max-age=31536000; path=/;";
            document.getElementById('cookie-notice').remove();
        });
    }
}, false );