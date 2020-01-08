# Simple Cookie Notice
A WordPress plugin for showing a simple cookie notice on your website or blog.

## Installation
Download the project as a .zip and extract the folder into your `/wp-content/plugins` directory. It is advised that you remove the `-master` brance extension from the end of the folder for the plugin to work without problems.

Please ensure your project is using or importing Bootstrap already, as this plugin does not do it automatically (may change in the future).

## Usage
Enter your WordPress admin panel and navigate to the settings page under `Tools > Cookie Notice`.

When a user accepts the cookie notice using the 'Accept' button, it stores a cookie called `cookie-notice-seen`, which will persist for 365 days from being set.

## Disclaimer
This plugin will **NOT** handle activating/deactivating cookies or tracking on your site, it is simply a banner to let visitors know about your privacy and cookie policies. It is intended for small sites that do not handle their own Google Analytics or other tracking/cookie storage.
