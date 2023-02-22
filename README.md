
# Portfolio - Guy Farley

## A portfolio site to showcase my personal projects

**Author:** Guy Farley

## How to Run This Application

Deployed at <https://guyfarleydevelops.com/>

## Problem Domain

The objective was to convert my previous portfolio site from the original HTML template to a WordPress theme. The original [Forty](https://html5up.net/forty) theme was downloaded from [HTML5 UP](https://html5up.net/) (see credits below).

In making this conversion, my goal was to learn the basics of WordPress and PHP - specifically around building a WordPress theme from an HTML template.

## Features / Routes

- **PROJECTS:** Showcase page for my personal projects
- **BLOG:** A page dedicated to all blog posts, dynamically updated through WordPress

## Challenges & Constraints

**Challenge:** Working with conflicting versions of JQuery

- Once all scripts had been imported into the WordPress theme, I realized the main menu was not showing up when the MENU button was clicked. Digging deeper, I found the `is-menu-visible` class was not being applied to the `<body>` element as it should have been. Through debugging, I was able to narrow down the issue to the main JQuery script - then, eventually found that the version of JQuery that is automatically included by WordPress was conflicting with the JQuery that was included in my template!

- I was able to solve this by de-registering WordPress' version of JQuery within my `functions.php` file before enqueueing the JS scripts that had been compiled by Webpack. Thankfully, this solved the issue and my menu worked perfectly afterwards!

## Links and Resources

Tutorials:

- [Configure Webpack 5 in Wordpress (2023) with Typescript and SASS](https://www.youtube.com/watch?v=Ij8SJe_mwpU&list=PLMVV8yyL2GN9e8hITsqM_pl3woMiwZQnd&index=3)
- [Convert HTML template to WordPress Theme (2023) - Full Course](https://www.youtube.com/watch?v=A5r8kslNSF0&list=PLMVV8yyL2GN9e8hITsqM_pl3woMiwZQnd&index=2)

Resources:

- [WordPress.org](https://wordpress.org/)
- [How to Convert Any HTML5 Template Into an Awesome WordPress Theme](https://wpmudev.com/blog/convert-html5-template-wordpress-theme/)
- [Create App - Frontend build config generator](https://createapp.dev/)
- [Underscores](https://underscores.me/)

Credit for Original HTML Theme:

Forty by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

This is Forty, my latest and greatest addition to HTML5 UP and, per its incredibly
creative name, my 40th (woohoo)! It's built around a grid of "image tiles" that are
set up to smoothly transition to secondary landing pages (for which a separate page
template is provided), and includes a number of neat effects (check out the menu!),
extra features, and all the usual stuff you'd expect. Hope you dig it!

Demo images* courtesy of Unsplash, a radtastic collection of CC0 (public domain) images
you can use for pretty much whatever.

(* = not included)

AJ
aj@lkn.io | @ajlkn

Credits:

 Demo Images:
  Unsplash (unsplash.com)

 Icons:
  Font Awesome (fontawesome.io)

 Other:
  jQuery (jquery.com)
  Scrollex (github.com/ajlkn/jquery.scrollex)
  Responsive Tools (github.com/ajlkn/responsive-tools)
