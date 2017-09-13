# EDUCANET prog 17/18 

Slides that are used for teaching of PHP at EDUCANET Brno.


Repo layout
===========
php/ - Externally exposed PHP code goes here
libs/ - Additional libraries
misc/ - For PHP code that should not be accessible by end users
deplist.txt - list of pears to install
.openshift/action_hooks/pre_build - Script that gets run every git push before the build
.openshift/action_hooks/build - Script that gets run every git push as part of the build process (on the CI system if available)
.openshift/action_hooks/deploy - Script that gets run every git push after build but before the app is restarted
.openshift/action_hooks/post_deploy - Script that gets run every git push after the app is restarted


Notes about layout
==================
OpenShift will look for the php and libs directories when serving your 
application. index.php will handle requests to the root URL of your 
application. You can create new directories as needed.

