Brickimedia
===========

Brickimedia Source Code

Brickimedia is an open project to create a resource for all LEGO-related wikis on the web based on the MediaWiki software.

For information about Brickimedia development, please see http://meta.brickimedia.org

To Do
----------
- Finish refreshed default Brickimedia skin
- Finish custard Brickimedia skin
- Change Brickimedia-specific items in our skins to variables for open source
- Pass W3 validation


Setting up a local clone
----------
To set up a local clone, you'll first need Apache or nginx, PHP, and MySQL installed.

The webserver should be configured to where "localhost" will direct to the ```/brickimedia.org``` subfolder of the clone, and that "meta.localhost" and other subdomains should be directed to the ```/wiki``` subfolder of the clone.

In your ```/wiki``` directory of your clone, create a new file titled ```LocalSettings_private.php```. The following code should be placed in that file:
```php
<?php
$wgCookieDomain = '.localhost';
$wgDBuser = 'root';
$wgDBpass = 'rootmysqlpassword';
$bmServerBase = 'localhost';
```
This needs to be configured with the appropriate MySQL username and passwords, and server/domain names or IP addresses if pertinent.

Next, you need to make the databases, which will be one sharing the same name as each subdomain you configure. The SQL can be accessed from "meta.localhost/adminer.php" assuming you set up the directories as guided above. The clone works for the following subdomains/databases; any other subdomains added will need additional LocalSettings configuration.
- ```meta```
- ```en```
- ```customs```
- ```cuusoo```
- ```stories```
- ```admin```
- ```dev```

Additionally, a ```shared``` and a ```globalblocking``` database is required.

Now you'll need to add extensions not held in the Brickimedia/brickimedia clone, which can be found at https://github.com/Brickimedia. Each extension should be installed according to its MediaWiki.org instructions, or in a /wiki/extensions subfolder of the name of the extension.

Next will be database tables. Access the SQL with adminer as instructed above, and for each database (not counting ```shared``` or ```globalblocking```), run an SQL command of the script contained at https://github.com/Brickimedia/brickimedia/blob/master/wiki/maintenance/tables.sql.

The following tables need to be placed in the shared database:
- ```user```
- ```user_properties```

Further tables to be included in the shared database are in the next step.

Now try accessing the wiki, http://meta.locahost for example. Depending on your configuration, it may send you to a Not Found 404 page. To fix this, simply change the URL to http://meta.localhost/index.php?title=Main_Page. The page will likely display SQL errors, which will be from missing tables in the databases. To fix this, you can do one of two things. The first option is available if you can use command line:
```bat
# This needs to be the address of the /wiki/maintenance subfolder of your clone
cd /var/www/brickimedia/wiki/maintenance
WIKI=meta php update.php
```
[NOTE: The above code example only works on Linux-based systems. For instructions on another operating system, try searching for instructions on setting a shell environment and running PHP on that operating system]
This will run the automated maintenance script on the "meta" database. This may or may not create all the required tables.

The second option is to go back into adminer, and the SQL error you see should be understandable as to what the error is for. Go into the /wiki/extensions directory and find the extension in which the SQL error correlates to. There should be an SQL file in the directory of that extension, which can be run through adminer to create the correct database table. Continue repeating this and refreshing your cloned wiki until you get a MediaWiki article display and not an SQL error.

Assuming you have set up everything correctly, you should have a fully functioning clone server. Additional help can be requested to any Brickimedia system administrator.
