**Installation**

1. Clone project: https://github.com/obinnajohnphill/YoutubeVideo_Non_Laravel.git

2. Rename .env.example to .env

3. Add database credentials and rabbitMQ server login details to .env

4. Install RabbitMQ Server and set user



**Create a table**

CREATE TABLE videos(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
video_id VARCHAR(30) NOT NULL,
title VARCHAR(500) NOT NULL,
created_date TIMESTAMP
)


**Expectation**

1. Search Youtube videos (max of 50 at a time)

2. Save video

3. View all saved videos

4. Delete videos 

5. Can select all or deselect all videos / inverted select

6. Run receiver_1 (1 to 4) on multiple terminals

7. You should see a queued video saved message when videos are save (a basic demo of rabbitMQ)