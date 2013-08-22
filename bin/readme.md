## Executable files in this folder

  1. init: This script is the initializer for new projects. It runs through a series of questions and then performs a set of initial housekeeping for project setup and install. It requires that the db and settings.php file has already been created for successful completion. It also initializes the git repo unless one already exists. 
  2. themify: Enables livereload and uses Guard to start the livereload server for theming goodness. Disables livereload when process is exited. 
  3. install: Executes a drush site-install (this is not a standalone executable, but is called from other scripts)
  4. reinstall: This script drops the current database and reinstalls the profile from scratch (based on the config), also enabling the sb_dev module.
