# PHP practical technical test
Create a RESTful API using any PHP libraries, skeletons or frameworks or choose to create with standard PHP.

## Local LAMP Stack 
To create this project you will need a local LAMP stack, this has been created for you.

### Setup
In the dir `docker-compose-lamp/` do a `docker-compose up -d`
This will create a LAMP stack that available at http://localhost 
In the main dir you will find
  - `www/` folder, this is the root for your app
  - `www/app/` folder, this is the public folder for your app (you can change this in the .env file)

### Config
All configuration for the LAMP can be found in the `.env` file including the MySQL details

### URLs
http://localhost - Main url  
http://localhost:8080 - phpMyAdmin, although Workbench is available   
http://localhost/test_db.php - Test your DB connection is working   



