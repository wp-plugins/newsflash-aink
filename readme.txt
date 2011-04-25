=== NewFlash Aink ===
Contributors: Dannie Herdyawan
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=7QJS8A2BP3M9W&lc=ID&item_name=Classifindo&item_number=NewsFlash%20Aink&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: newflash, aink, newflash aink, news, ticker, marquee, scrolling text, news flash, flash
Requires at least: 3.0
Tested up to: 3.0
Stable tag: 2.0.0

Inserts a scroll up text.


== Description ==

**A JQuery based NewFlash Displays a scroll up text list of news or information and ads or link. Starting from Wordpress ver.3.0 the ticker can also be used as a image gallery with description**

in NewFlash Setting, you can set:

* NewFlash Enable: To show NewFlash Aink on your site.
* NewFlash Width: Width for NewFlash.
* NewFlash Speed: Speed for NewFlash in second.
* NewFlash Title Text Align: Text align for title of NewFlash.
* NewFlash Content Text Align: Text align for content of NewFlash.

in NewFlash Create New pages, you can set:

* NewFlash Content: Content for your NewFlash, HTML is allowed.
* NewFlash Status: Status for your NewFlash. If you do not want the NewFlash live, select "Inactive".
* NewFlash Show for: Show the NewFlash for selected user.


== Installation ==

1. Upload the folder `newflash-aink` to your `/wp-content/plugins/` directory,
2. Activate the plugin through the "Plugins" menu in WordPress,
3. Then place the following code into your theme files where you want the menu to appear:

	&lt;?php if (function_exists('NewFlashAink')) { echo NewFlashAink(); } ?&gt;

4. Configure options via the NewFlash ==> Settings menu,
5. Create a new NewFlash on NewFlash ==> Create New page.


== Upgrade Notice ==

No available


== Screenshots ==

No available


== Frequently Asked Questions ==

No available


== Notice ==

If you found a bugs, or want to donate, please use this email; yumanie[at]gmail[dot]com. Thanks before.


== Changelog ==

= 1.0.0 =
* (Apr 13, 2011) - First Release.

= 2.0.0 =
* (Apr 25, 2011) - Fixed NewsFlash Aink Setting show only for admin.