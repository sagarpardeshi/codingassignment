## Installation
1. Clone this repository in your desired location on your system
2. Create a empty database with your desired name on MySQL or MariaDB server, whichever you're using.
3. Open .env file from application's root directory and locate below mentioned configuration line:
4. `DATABASE_URL=mysql://root:''@127.0.0.1:3306/[database_name]?serverVersion=[database_server_version]`
5. From above line replace `database_name` with your database name and `database_server_version` with your database server version as these name suggests. In my case database server version was - `mariadb-10.4.11`
6. Now open command prompt and switch to the application directory,
7. Run composer command: `composer install` and wait until the completion of this command.
8. Once the dependancies are installed, you can run application by using command : `symfony server:start` and hit the url -` http://127.0.0.1:8000/` in your browser.
9. If you're using WAMP/XAMPP then you can run application by browsing url: `localhost/[application_directory]/public`