# Singlebrook Drupal Bootstrap

## Project Setup

### Rename Theme Template
Replace sb_template with updated template name, by renaming:
  - `sites/all/themes/sb_template/sb_template.info`
  - `sb_template_preprocess_page` in `sites/all/themes/sb_template/template.php`
  - `sites/all/themes/sb_template`

## SB_Dev module info here

## Theming with Guard and Livereload
This project is configured with guard to watch for changes to the scss and js files and compile them. There is a an executable script in the bin folder which starts both the guardfile and the livereload server. 

### Requirements
  - Ruby
  - [Bundler](http://bundler.io/)
  - run `bundle install` once from the project root to download guard and livereload utilities

To start theming, run `bin/themify` from the project root and edited Sass and js files will automagically reload in the browser. To stop the guard and livereload processes, hit `^c` (control + c).