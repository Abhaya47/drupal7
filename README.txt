ASSET MANAGEMENT SYSTEM

This is a asset management system implemented in Drupal 7.

Tech Stack

    Core: Drupal 7.x

    PHP: 8.2

    Database: mariadb:10.6


Project Structure

A quick guide to where the important bits live:

    /drupal: The Drupal docroot.

    /sites/all/modules/custom: Custom modules specific to this project.

    /sites/all/themes/adminimal_theme: The primary frontend theme.

Custom Modules

The list of custom modules created and their use
    /sites/all/modules/custom/alter_login_form: Used to alter default login page to add clientside validation
    /sites/all/modules/custom/organization: An entity based module for organization where user can create, add, view, edit organizations. Permissions implemented. Custom themes created. Tests included
    /sites/all/modules/custom/asset: An entity based module for user assets. Additional implementation of drupal queue and mail. The queue adds data to maintenance table
    /sites/all/modules/custom/maintenance: An entity based module that uses default views to show data
    /sites/all/modules/custom/dashboard: Uses google graph api to show data.
    /sites/all/modules/custom/location: A form used to store location data. No entity
    /sites/all/modules/custom/alterform: Used to alter location form

The list of contribed modules used
    charts
    ctools
    entity
    entityreference
    jquery_update
    pathauto
    rules
    smtp
    views
    webform


Contributor: Abhaya Nepal