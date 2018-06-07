jQuery(document).ready(function(){

    // If the 'accepted' cookie doesn't exist already, show the cookie notice. Otherwise, hide it.
    if (document.cookie.replace(/(?:(?:^|.*;\s*)cookie-notice-seen\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
        jQuery('#cookie-notice').show();
    } else {
        jQuery('#cookie-notice').hide();
    };

    // If the notice has been accepted, set the 'accepted' cookie and hide the notice.
    jQuery('#cookie-notice-accept').click(function(){
        document.cookie = "cookie-notice-seen=true; max-age=31536000";
        jQuery('#cookie-notice').hide();
    });

});
