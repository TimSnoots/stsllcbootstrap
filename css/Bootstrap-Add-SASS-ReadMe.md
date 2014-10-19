# Adding SASS to an existing Bootstrap site

1. To integrate SASS into the project.  Create (add) a `public_html/sites/all/themes/my-drupal-theme/sass/` directory.  Bootstrap doesn't uses SASS but we are going to build in SASS for custom stylesheets.  It's best to simply use the minified bootstrap CSS files without modification and then override them using one or more custom CSS files that can use SASS.  The best was to override is to set a CSS `class` on the BODY tag for the site (e.g. `<body class='my.site.name'>`).  Great instructions are available in "How to Build a Website Using Twitter Bootstrap and SASS (see reference URL below).

2. Move the existing (nearly empty) `css/main.css` file that is provided by bootstrap into the `sass/` directory and change it's extension to `.scss`.  By doing this, we will be able to use SASS in that file and it will be compiled into main.css which is already linked by bootstrap.

3. Create `scss/_base.scss` file with custom site variables and custom mixins (include this file at the top of `sass/main.scss` and all other .scss files).  Refer to the `_base.scss` best practice info at (http://compass-style.org/help/tutorials/best_practices/).  The directory structure should now look like:

`public_html/sites/all/themes/my-drupal-theme/
  |-css/
  |-img/
  |-js/
  |-sass/
    |-main.scss
    |-_base.scss
    |-_custom.scss
  |-index.php
`

4. Create a new SASS project:

`cd public_html/sites/all/themes/my-drupal-theme
compass create --sass-dir=sass --css-dir=css .
`

5. You can use or delete the `ie.scss`, `print.scss`, `screen.scss` files that it creates as these are not used by bootstrap.

4. Then, you can use the `compass watch` command to compile `sass/main.scss` to `css/main.css` as you work on it.

`cd public_html
compass watch
`

## Reference projects

Compass
http://compass-style.org/

SASS
http://sass-lang.com/


How to Build a Website Using Twitter Bootstrap and SASS:
http://www.1stwebdesigner.com/css/build-website-using-twitter-bootstrap-sass-1/
http://www.1stwebdesigner.com/css/build-website-using-twitter-bootstrap-sass-2/

