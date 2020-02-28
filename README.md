# servicesJewellery
This project is a way to register the services orders from a jewellery.
When a client wants to fix a jewell in the jewellery, the user(employee) will log in the system where he will be abble to create a new 
service order, see previous registered services and register new clients to database.

### Getting Started

#### Prerequisites

To run this project in development mode, you will need to set up a local server that can work with PHP and MySql. I use [XAMPP](https://www.apachefriends.org/pt_br/index.html) in my machine.

#### Preparing the database

First we have to create the database and the system users table, run the following commands on your database administration system:

``` SQL
CREATE DATABASE main;
USE DATABASE main;
CREATE TABLE users(user_id INT PRIMARY_KEY AUTO INCREMENT,
                   user_level TINYINT NOT NULL,
                   user_pass VARCHAR(45) NOT NULL,
                   user_active TINYINT);
```

Now we have to insert a user to access the system, the user password must be encrypted.
In order to simplify this process you can add the same user as mine:
``` SQL
INSERT INTO users VALUES('','admin',1,'$2y$10$mjrSxAOiOyEU8zlwubUrQuVA3Bxzm6Iy4ZXVnRqCAyrnvSvZJsyJu',1);
 ```
In this case, the password will be the same as the username for admin.
