## Executable files in this folder

  1. init: This script is the initializer for new projects. It runs through a series of questions and then performs a set of initial housekeeping for project setup. 
  2. themify: Enables livereload and uses Guard to start the livereload server for theming goodness. Disables livereload when process is exited. 
  3. reinstall: This script drops the current database and reinstalls the profile from scratch (based on the config), also enabling the sb_dev module.
  4. get_config: a helper script that loads or creates the config file. Typically not run on its own.

