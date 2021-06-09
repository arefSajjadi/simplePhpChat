# simplePhpChat

Simple live chat web application with php and ajax

#Demo
Coming Soon

# Required

Use the package manager to install these.

* webServer (nginx, apache, etc)
* php
* mysql
* webBrowser

# Usage

You can use this website as a simple chat application and feel free for safe discussion with your friends. you can
select your friend to what you want to chat with him / her, and `say Hello :)`.

# Installation

1 - Copy all file into the folder [name is optional] in your web server `DocumentRoot`.

2 - Create a  database [name is optional] into the mysqlService, Then, Import `db.sql` file into this
database.
> Recommendation: use `phpmyadmin` for interactive with your mysqlService is better.

> Notice: change your information into the `db.php` file.

3 - Open the webBrowser and Try to search `http://localhost/yourFolderName/index.php`.

4 - website has been served, enjoy.

# More Documentation

* Authentication: This website use session to Authenticate your users, and you can look at the
  `app\controllers\authController.php` file for more information about this action.


* Logging protocol: It's a simple way for logging your user by checking the information and registering the user if no
  information was found.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

In the end please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
