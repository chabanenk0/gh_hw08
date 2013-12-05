GUEST FORM DEMO
===============

This demo shows the usage of simple forms and bootstrap for guestbook

INSTALLATION NOTES
==================

1) download this branch

2) install vendors
 composer install

3) create database
 app/console doctrine:database:create

4) create database schema
 app/console doctrine:schema:create

5) upload fixtures to the database
 app/console doctrine:fixtures:load

6) Dump assets 
 app/console assetic:dump

7) configure knp_paginator bundle. In app/config/config_dev.yml
in the section knp_paginator set up the parameter page_range. This is the number of posts at the screen.

8) Use "/" route to see the demo (Acme\DemoBundle, Welcome controller,index action)


