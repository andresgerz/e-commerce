CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

The Entity Relationship Diagrams module lets the user visualize the Entity
structure of the Drupal 8 site using an Entity Relationship Diagram (ERD).

While this isn't meant to be a fully functional tool to build new ERDs, it is
meant to be used as a learning tools for developers and site builders.

 * For a full description of the module visit:
   https://www.drupal.org/project/erd

 * To submit bug reports and feature suggestions, or to track changes visit:
   https://www.drupal.org/project/issues/erd


REQUIREMENTS
------------

This module requires no modules outside of Drupal core.


INSTALLATION
------------

 * Install the Entity Relationship Diagrams module as you would normally install
   a contributed Drupal module. Visit https://www.drupal.org/node/1897420 for
   further information.


CONFIGURATION
-------------

    1. Navigate to Administration > Extend and enable the module.
    2. Navigate to Administration > Structure > Entity Relationship Diagram to
       create a new diagram.
    3. Use the search box to search for entities and select them to place on
       diagram. Add two or more. To draw relationships, hover over the entity
       and drag the dot to the next entity.
    4. There is an option to toggle between human readable names and machine
       names.
    5. Select the disk icon to save the diagram locally.

All information seen at /admin/structure/erd is dynamically generated and
provided by Drupal

    1. Only Entity References and Image References are supported at this time
       for dynamically generated links.
    2. All Javascript dependencies are taken in via a CDN, which means that this
       module will not work offline without modification or erd.libraries.yml.
       This was done for ease of use and installation.
    3. The permission to view /admin/structure/erd is "administer site
       configuration", which may be too permissive for a production site if
       exposing all your Entity Types/Bundles to an administrator poses a
       security risk to you.


MAINTAINERS
-----------

 * Samuel Mortenson (samuel.mortenson) -
   https://www.drupal.org/u/samuelmortenson
 * Martin Anderson-Clutz (mandclu) -
   https://www.drupal.org/u/mandclu
