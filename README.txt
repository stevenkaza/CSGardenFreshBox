MyProject README
-------------------
2:10 AM 11/25/2014

This is now a pyramids project, as opposed to a pylons project(newer implementation of pylons = pyramids, with more documentation!!! :D )

Important Changes:
----------------------------------------------------------------------
.html files have been converted to .pt files (pyramid template files)
and can be found in myproject/templates

Everytime a new .html/.pt file is added, we need to add the route in views.py, as well as in init.py

For now, they are listed in the route as .php, because thats what
chris had as the route for the links and i was too lazy to change them, the actual files are still .pt, its just refrenced in the href as .php


Certain things are still buggy:
 - images need to be fixed, where they are referenced from.
 - The menu still needs to be dynamacally loaded
 - Backend db functionality needs to be written 



---------------
Installing Pyramids:

Read this handy guide to installing pyramids:
http://docs.pylonsproject.org/docs/pyramid/en/latest/narr/install.html 
Let me know if you have any difficulty
-----------------------------------------------------
To run the webserver: 
---------------------------------------
Navigate to the route and type in 
$VENV/bin/pserve development.ini


