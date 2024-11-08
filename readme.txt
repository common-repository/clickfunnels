=== ClickFunnels ===

Contributors: Wynter Jones, Ross Hunter
Plugin URI: http://clickfunnels.com/
Author URI: https://profiles.wordpress.org/clickfunnelscom
Tags: landing pages, clickfunnels, funnels, sales funnel, optin, internet marketing
Requires at least: 4.3
Tested up to: 6.2.2
Stable tag: 3.1.3

Connect your ClickFunnels pages to your WordPress blog. Create custom pages, set as homepage or 404 page with easy setup.

== Description ==
Connect to your ClickFunnels account to show your funnel pages within your blog without any coding. Create clean URLs to your pages with ease and much more.

First, you install the plugin in your WordPress dashboard. (check Installation
for more info) and connect to ClickFunnels using the *Authentication Key*
provided for you.

You can now connect unlimited pages using custom URLs to truly get the most out of your ClickFunnels account.

**With the ClickFunnels plugin you can...**

* Create custom URLs for your pages
* Set any page as homepage
* Set any page as 404 page
* Edit / Manage your pages

Want to show an order page of one of your Webinar funnels? Easy, just select the
funnel and choose the order page and create a custom URL.

Example: "http://yourblog.com/ordernow" can be connected to your order page from any funnel within your ClickFunnels account.

**Don't have a ClickFunnels account?** You can sign up now to transform the way you run your business online. The WordPress plugin is free to all members.

**Need more help?** Check out the installation, FAQ and screenshots for more information or check out the Support Desk.

<https://support.clickfunnels.com/>

ClickFunnels.com is the premier service for building complete funnels for any marketing campaign. High converting email optin funnels or complex membership funnels.

The power is in your hands with the **Editor** allows you to design and change your pages in your web browser. Choose from a huge array of templates and edit on the fly.

*Complete with hosting and free WordPress plugin.*

**Sign up for ClickFunnels Now:**
<https://clickfunnels.com/>


== Installation ==

**Turn off Minify for JavaScript when using CloudFlare on Your Blog **

**Easy Installation**: In your WordPress dashboard go to Plugins > Add New and search for "clickfunnels" and you will be able to quickly install the latest version of the plugin.

*Updates will be ready automatically and you will be notified in your dashboard.*

**Manual Installation**: Download the ClickFunnels WordPress plugin .zip file. Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation via a FTP and then activate the Plugin from Plugins page.

**How to Setup Authenication Key**

Login to your ClickFunnels account and go to your Settings to get the
authentication key, which is unique to your account.

You will also need the email address you signed up with. From there you can use the email and key to connect the plugin to your account.

See more in Screenshots or visit the Support Desk.

<https://support.clickfunnels.com/>

== Frequently Asked Questions ==

Here are some of the most frequently asked questions:

= Where do I get Authentication Key? =

To access your Authentication Token go to your ClickFunnels Members area and choose My Account > Settings and you will find your unique authenication key.

= What is a Custom URL? =

A custom URL is the web address that will point to your ClickFunnels page. For example, "www.mydomain.com/signup" could point to any of your ClickFunnels pages such as an opt-in page.

= How do I Set Homepage or 404 Page? =

To set a page to show as the home page just select any of your ClickFunnels pages (within the plugin) and select "Home Page" and hit save. You can only have one page set to Home page or 404 page at a time.

= Do I Need a ClickFunnels Account? =

**Yes.** A clickfunnels account is required to use this plugin. If you are not already a member you can sign up for your account and transform the way you run your online business.

= Blank Pages? =

The version 3 upgrade changed the structure of how we store pages. Bugs in previous versions made this a difficult transition. New pages store all their data in a much more reliable format. Pages created before this had to be upgraded, but all the data we want for them might not have been present. You may need to edit and resave old pages to get them working again.

== Changelog ==

Stay current with the latest version of the plugin:

= Version 3.1.3 =

* Fix security issue that allowed executing JavaScript in Shortcodes

= Version 3.1.2 =

* Updated code to comply with WordPress plugin coding best practices

= Version 3.1.1 =

* More efficient queries to support more hosting environments
* Automatically upgrade posts, rather than require an activation/deactivation cycle.

= Version 3.1.0 =

* Adds option to download page content instead of displaying it in an iframe
* Fix setting of homepage issue

= Version 3.0.6 =

* Fix upgrading if metadata was not properly saved in version 2

= Version 3.0.5 =

* Fix potential conflict with other plugins overwriting post_meta

= Version 3.0.3 =

* Fix javascript loading for non-standard installation locations

= Version 3.0.2 =

* Fix for old versions of PHP

= Version 3.0.1 =

* Leaner, meaner, more productive wordpress plugin
* Support A/B testing

= Version 2.0.10 =

* RSS clickgate fix

= Version 2.0.9 =

* Add warning if there is no funnels in client account

= Version 2.0.8 =

* JS match() fix
* favicon warning fix

= Version 2.0.7 =

* Add velocity lib to fix popups

= Version 2.0.6 =

* Warnings, Offset fixes

= Version 2.0.5 =

* Redirect fixes

= Version 2.0.4 =

* White screan fix
* Favicon fix

= Version 2.0.3 =

* API Not Connected Issue Fix

= Version 2.0.2 =

* fix conflict with other plugins when saving/updating
* fix unable to pull funnels for some users
* fix % and other characters in meta data

= Version 2.0.1 =

* Fix clickpop url

= Version 2.0 =

* Read blog post -> http://blog.clickfunnels.com/all-new-updates-to-the-clickfunnels-wordpress-plugin-v2-0/

= Version 1.1.2 =

* Error caused by array improperly formatted.
(to update meta tag for URL when sharing on Facebook, please save and update old pages to get proper WordPress page url)

= Version 1.1.1 =

* Added WordPress URL to social meta data (facebook open graph)
* Fix split tests and cookies
* New function for curl, file_get_contents fallback

= Version 1.1.0 =

* Added mini preview of chosen page
* Added 'publish' status for for ClickFunnels pages
* Added meta data status check
* Added ClickFunnels URL and editable meta data
* Enable split tests & custom code option


= Version 1.0.8 =

* Fixed bug for 'no template selected' causing certain pages not show

= Version 1.0.7 =

* Excluded only pages with no template chosen
* Better page management screen
* Small copy changes.
* Now display the chosen Funnel with Page name

= Version 1.0.6 =

* Auto save if page id = null (fixes some blank page issues)
* 404 No Page Found Error fixed to 200 OK

= Version 1.0.5 =

* Fixed funnels showing no pages (caused by pages with template selected)

= Version: 1.0.4 =

* Added CURL as a backup to flie_get_contents
* Added developer testing for easier error reporting

= Version: 1.0.3 =

* Fix Blank Homepage (caused by template_include)
* Special Character Fix (see FAQ)

= Version: 1.0.2 =

* Ping Page to Fix "Blank Pages"
* Excluded Special Pages (OTO/Order)
* Notification for Empty Funnels

= Version: 1.0.1 =

* Meta UTF-8

= Version: 1.0.0 =

* Launch Plugin to Repository
* Added Support FAQ Tab
* API Connection
* Set as Home / 404 Page
* Edit Funnel / Launch Editor


== Screenshots ==
1. Get Your Authentication Key
2. Connect Plugin to ClickFunnels
3. Add and Edit Your Pages
4. Manage All Your Pages
5. Set as Home Page or 404 Page
