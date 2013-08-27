## Executable files in this folder

  1. init: This script is the initializer for new projects. It runs through a series of questions and then performs a set of initial housekeeping for project setup and install. It requires that the db and settings.php file has already been created for successful completion. It also initializes the git repo unless one already exists. Finally it deletes itself after initialization.
  2. themify: Enables livereload and uses Guard to start the livereload server for theming goodness. Disables livereload when process is exited. 
  3. install: Executes a drush site-install and enables the sb_dev module. Useful for re-installing as well.
