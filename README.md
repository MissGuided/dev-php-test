# PHP practical technical test   
Create a RESTful API using any PHP libraries, skeletons or frameworks or choose to create with standard PHP.  
1. Clone the repo
1. Create a branch from `develop` using your name
1. Create a standard API
1. After an hour you will be asked to show your code

NB. This task is for 1 hour and is more about how you go about the task and code quality rather than completing the task

## Local LAMP Stack    
To create this project you will need a local LAMP stack, this has been created for you.  

### Setup   
In the dir `docker-compose-lamp/` do a `docker-compose up -d`  
This will create a LAMP stack that is available at http://localhost   
In the main dir you will find 
  - `www/` folder, this is the root for your app   
  - `www/app/` folder, this is the public folder for your app (you can change this in the .env file)   

### Config   
All configuration for the LAMP can be found in the `.env` file including the MySQL details   

### URLs   
http://localhost - Main url  
http://localhost:8080 - phpMyAdmin, although Workbench is available   

## SQL   
There is a DB ready to use with tables and data   
The DB is `customer_db`   

