# Coding Assignment
# Setup Instructions:
1. Edit .env file line - DATABASE_URL=mysql://root:''@127.0.0.1:3306/[db_name]?serverVersion=[db_version]
On my local machine it was : DATABASE_URL=mysql://root:''@127.0.0.1:3306/connectr?serverVersion=mariadb-10.4.11
2. Make sure to create database with the same which is mentioned in above described database configuration line.
3. Make sure that the database server is running
4. Now open command prompt and switch to project directory
5. Since the source code include already created migration, run this migration using command: php bin/console doctrine:migrations:migrate
6. If everything worked fine you will be able to see tables into given database.
7. Run command "symfony server:start" from command-prompt
