CREATE TABLE producers(
   producers_id INT AUTO_INCREMENT,
   firstname VARCHAR(50)  NOT NULL,
   lastname VARCHAR(50)  NOT NULL,
   PRIMARY KEY(producers_id)
);

CREATE TABLE actors(
   actors_id INT AUTO_INCREMENT,
   firstname VARCHAR(50)  NOT NULL,
   lastname VARCHAR(50)  NOT NULL,
   PRIMARY KEY(actors_id)
);

CREATE TABLE comments(
   comments_id INT AUTO_INCREMENT,
   comment TEXT NOT NULL,
   added_at VARCHAR(50) ,
   PRIMARY KEY(comments_id)
);

CREATE TABLE grades(
   grades_id INT AUTO_INCREMENT,
   note SMALLINT,
   PRIMARY KEY(grades_id)
);

CREATE TABLE movies(
   movies_id INT AUTO_INCREMENT,
   title VARCHAR(50)  NOT NULL,
   movie_year DATE NOT NULL,
   duration TIME NOT NULL,
   picture VARCHAR(50)  NOT NULL,
   synopsis TEXT NOT NULL,
   added_at DATETIME,
   grades_id INT,
   PRIMARY KEY(movies_id),
   FOREIGN KEY(grades_id) REFERENCES grades(grades_id)
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
   grades_id INT,
   PRIMARY KEY(users_id),
   FOREIGN KEY(grades_id) REFERENCES grades(grades_id)
);

CREATE TABLE styles(
   styles_id INT AUTO_INCREMENT,
   label VARCHAR(100)  NOT NULL,
   movies_id INT NOT NULL,
   PRIMARY KEY(styles_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id)
);

CREATE TABLE movies_producers(
   movies_id INT,
   producers_id INT,
   PRIMARY KEY(movies_id, producers_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(producers_id) REFERENCES producers(producers_id)
);

CREATE TABLE movies_actors(
   movies_id INT,
   actors_id INT,
   PRIMARY KEY(movies_id, actors_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(actors_id) REFERENCES actors(actors_id)
);

CREATE TABLE users_comments(
   users_id INT,
   comments_id INT,
   PRIMARY KEY(users_id, comments_id),
   FOREIGN KEY(users_id) REFERENCES users(users_id),
   FOREIGN KEY(comments_id) REFERENCES comments(comments_id)
);

CREATE TABLE movies_comments(
   movies_id INT,
   comments_id INT,
   PRIMARY KEY(movies_id, comments_id),
   FOREIGN KEY(movies_id) REFERENCES movies(movies_id),
   FOREIGN KEY(comments_id) REFERENCES comments(comments_id)
);
