# CMP-204 Web Development

## Using XAMPP to locally host the site
This site can be quite easily ran using [XAMPP](https://www.apachefriends.org/download.html)
For setup and installation of XAMPP i recommend checking the FAQ section of
their site.

Once XAMPP has been installed correctly place the all files from the WEBSITE
folder of this repo into <install-location>/XAMPP/htdocs removing any documents
that were left there by the XAMPP install.

Before the website is ready to run the `db-connect.php` file needs to be created
this is where credentials are to be stored for logging into the database.

### Example db-connect.php file
```
<?php
$db_hostname = "127.0.0.1:3306"; // IP and port that MySQL runs on
$db_username = "username";
$db_passwd = "password";
$db_name = "sql";
```

Using the XAMPP control panel both the Apache and MySQL modules need to be
running. Now accessing localhost or 127.0.0.1 in your browser should show the
homepage of the site.

## Bugs / Issues

1. Anything that pulls accesses the database is broken, as the information is not there
    * Information about individual albums on the main page is not present. 
    * Registration/login functionality is unlikely to work straight out the box

1. error handling that should replace album info with lorem ipsum if unable to
   reach db, does not work
   * status is always 200 so its never hitting the other conditional


## Contact Me

If theres any questions etc. dm me on twitter @itsWavey_
