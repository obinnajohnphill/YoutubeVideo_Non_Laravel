**Create a table**

CREATE TABLE videos(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
video_id VARCHAR(30) NOT NULL,
title VARCHAR(200) NOT NULL,
description VARCHAR(200),
created_date TIMESTAMP
)