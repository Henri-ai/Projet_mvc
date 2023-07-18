

CREATE TABLE `movies`(
   `movies_id` INT AUTO_INCREMENT,
   `title` VARCHAR(50)  NOT NULL,
   `movie_year` DATE NOT NULL,
   `duration` TIME NOT NULL,
   `picture` VARCHAR(50)  NOT NULL,
   `synopsis` TEXT NOT NULL,
   `added_at` DATETIME,
   `name_actors` TEXT NOT NULL,
   `name_producers` TEXT NOT NULL,
   PRIMARY KEY(`movies_id`)
);


CREATE TABLE users(
   users_id INT AUTO_INCREMENT,
   pseudo VARCHAR(50)  NOT NULL,
   email VARCHAR(50)  NOT NULL,
   password VARCHAR(50)  NOT NULL,
   created_at DATETIME NOT NULL,
   validated_at DATETIME,
   updated_at DATETIME,
   deleted_at DATETIME,
   PRIMARY KEY(users_id)
);

CREATE TABLE styles(
   styles_id INT AUTO_INCREMENT,
   label VARCHAR(100)  NOT NULL,
   PRIMARY KEY(styles_id)
);

CREATE TABLE comments(
   comments_id INT AUTO_INCREMENT,
   comment TEXT NOT NULL,
   added_at VARCHAR(50) ,
   movies_id INT NOT NULL,
   users_id INT NOT NULL,
   PRIMARY KEY(comments_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(users_id) REFERENCES users(users_id)
);

CREATE TABLE grades(
   grades_id INT AUTO_INCREMENT,
   note SMALLINT,
   users_id INT NOT NULL,
   movies_id INT NOT NULL,
   PRIMARY KEY(grades_id),
   FOREIGN KEY(users_id) REFERENCES users(users_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id)
);

CREATE TABLE movies_styles(
   movies_id INT,
   styles_id INT,
   PRIMARY KEY(movies_id, styles_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(styles_id) REFERENCES styles(styles_id)
);

CREATE TABLE movies_users(
   movies_id INT,
   users_id INT,
   PRIMARY KEY(movies_id, users_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(users_id) REFERENCES users(users_id)
);
