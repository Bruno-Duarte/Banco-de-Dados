CREATE TABLE users ( 
    id INT(11) NOT NULL AUTO_INCREMENT , 
    username VARCHAR(100) NOT NULL , 
    email INT(11) NOT NULL , 
    password INT(11) NOT NULL , 
    PRIMARY KEY (id),
) ENGINE = InnoDB;

CREATE TABLE posts ( 
    id INT(11) NOT NULL AUTO_INCREMENT , 
    content VARCHAR(150) NOT NULL , 
    user_id INT(11) NOT NULL , 
    topic_id INT(11) NOT NULL , 
    PRIMARY KEY (id),
    FOREIGN KEY (topic_id) REFERENCES topics (id),
    FOREIGN KEY (user_id)  REFERENCES users (id)
) ENGINE = InnoDB;

CREATE TABLE topics ( 
    id INT(11) NOT NULL AUTO_INCREMENT , 
    title VARCHAR(50) NOT NULL , 
    user_id INT(11) NOT NULL , 
    PRIMARY KEY (id),
    FOREIGN KEY (user_id)  REFERENCES users (id)
) ENGINE = InnoDB;

CREATE TABLE comments ( 
    id INT(11) NOT NULL AUTO_INCREMENT , 
    content VARCHAR(100) NOT NULL , 
    post_id INT(11) NOT NULL , 
    user_id INT(11) NOT NULL , 
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (post_id)  REFERENCES posts (id)
) ENGINE = InnoDB;


