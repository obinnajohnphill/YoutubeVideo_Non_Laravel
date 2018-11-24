**Installation**
1. Clone project: https://github.com/obinnajohnphill/YoutubeVideo_Non_Laravel.git

2. Rename .env.example to .env

3. Add details of hostname, DBname, DBusername, DBpassword, and Google API Key into .env

4. Install RabbitMQ Server and set user



**Create a table**

CREATE TABLE videos(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
video_id VARCHAR(30) NOT NULL,
title VARCHAR(500) NOT NULL,
created_date TIMESTAMP
)