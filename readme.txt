=== Cleancut ===
Contributors: contraculto
Donate link: http://p.contraculto.com/
Tags: string, content, clean, trim, html, length, words, characters
Requires at least: 2.0
Tested up to: 3.1
Stable tag: 1.2.0

Strip of HTML and cut a piece of text, either by character or word count.

== Description ==

A couple of simple php functions that, when passed a string of text and a length value, strips the text of html tags and markup, and cuts it to the specified length.

clencut_w returns the given number of words or less, cleancut_c returns given number of characters or less. Only complete words are returned.

They can be called as `cleancut_w($string,$length)` and `cleancut_c($string,$length=50)` from any template file.

Example: `<?php $text_clean = cleancut_w($sometext,50); echo $text_clean; ?>`.

== Installation ==

1. Copy `cct_cleancut.php` to the `/wp-content/plugins/` directory.
2. Activate it.
3. Now you can use `cleancut_w($string,$length)` and `cleancut_c($string,$length=50)` in your templates.

== Frequently Asked Questions ==

Nothing here.

== Screenshots ==

1. The functions.

== Changelog ==

= 1.2 =
* Now returns clean string instead of echoing it.

== Upgrade Notice ==

Nothing here.