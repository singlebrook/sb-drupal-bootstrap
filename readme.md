# Singlebrook Drupal Bootstrap
The Singlebrook Drupal Bootstrap is a starting point for new Drupal projects. Highlights include:
  - A base structure ready for deployment to Acquia
  - Some handy bash scripts for project initialization, rebuilding and seamless integration with theming tools like Sass and livereload
  - A ready-to-go profile and theme
  - A custom Dev module that wraps useful dev tools like devel, diff and field_ui

## New Project Setup
You can read more about the bash scripts in the [readme](https://github.com/singlebrook/sb-drupal-bootstrap/tree/master/bin) of the `bin` folder. Typical setup is as follows:
  1. [Download](https://github.com/singlebrook/sb-drupal-bootstrap/zipball/master) the zipped version of the project
  2. Configure your vhost, if necessary
  3. Create your db
  4. Create a `sites/default/settings.php` file or run installer up to the "Configure site" pane.
  5. Run `bin/init` from the project root and answer questions

Your responses to the questions in the init script will set up the site for the new client and replace a bunch of placholder variables in the profile and theme. It will also rename this readme and create a new, blank readme and initialize the new git repo, before running a drush site-install. The Drupal username post-install is 'admin' and the password is 'testing'.
 
## Theming with Guard and Livereload
This project is configured with guard to watch for changes to the scss and js files and compile them. There is a an executable script in the bin folder which starts both the guardfile and the livereload server. 

### Requirements
  - Ruby
  - [Bundler](http://bundler.io/)
  - run `bundle install` once from the project root to download guard and livereload utilities

To start theming, run `bin/themify` from the project root and edited Sass and js files will automagically reload in the browser. To stop the guard and livereload processes, hit `^c` (control + c).

## Local Development to SB Drupal Bootstrap
It is not advised to run the init script if you're updating the bootstrap itself. Instead, confirm the settings in `config/devify_config` and run the project with the sb_client profile and sb_template theme. Themify will work out of the box, and simplify updates to the bootstrap.