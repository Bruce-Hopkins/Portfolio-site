# My Old Portfolio-site

## Table of Contenants
- My Site
- Requierements
- Project Notes
- Dev Notes

## My Site

http://cobydesigns.budgetchamp.net/

If you want to see my newest portfolio:

https://github.com/Bruce-Hopkins-Jr/infinidreams-Potfolio

## Requieremnets

- WordPress is the CMS I use. If you use a diferent CMS obviously the Functions file is not needed.
- Install Bootstrap or used the Bootstrap WordPress already has (not tested)
- In order to add scroll animations I used Scroll Triggered Animations plugin.

 ## Project notes 
 
 - The blog will be added to the index.php file but for the meanwhile the page is not linked.
 - The Home.php is the first displayed page
 
 ## Dev notes
 
 - sidebar.php is not being used because I decided it wasn't needed. I kept it just in case I wanted to add a sidebar to the blog side of the website.
 - In the new.js file there is a line to asure that none of the rest of the elements load before the whole page has loaded.
```javascript
$(window).load(function() {
    $("#cover").hide();
  });
```
Just in case Javascript doesn't load well the cover is only shown if the Javascript loads.

```javascript
 jQuery(document).ready(function($) {
    $("#cover").show();
  }
  
```

Please contact me for any ajustments. Thank you.


