<?php
require_once __DIR__.'/../helpers/connect.php';
class Movie
{

    private int $movies_id;
    private string $title;
    private string $movie_year;
    private string $duration;
    private string $picture;
    private string $synopsis;
    private string $added_at;
    private string $name_actors;
    private string $name_producers;


    //id---------------------------------------------------------------------------------------------
    public function getMoviesId(): int
    {
        return $this->movies_id;
    }
    public function setMoviesId(int $movies_id)
    {
        $this->movies_id = $movies_id;
    }
    //title------------------------------------------------------------------------------------------
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    //year---------------------------------------------------------------------------------------------
    public function getMovieYear(): string
    {
        return $this->movie_year;
    }
    public function setMovieYear(string $movie_year)
    {
        $this->movie_year = $movie_year;
    }
    //duration-----------------------------------------------------------------------------------------
    public function getDuration(): string
    {
        return $this->duration;
    }
    public function setDuration(string $duration)
    {
        $this->duration = $duration;
    }
    //picture------------------------------------------------------------------------------------------
    public function getPicture(): string
    {
        return $this->picture;
    }
    public function setPicture(string $picture)
    {
        $this->picture = $picture;
    }
    //synopsis------------------------------------------------------------------------------------------
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }
    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;
    }
    //added_at-------------------------------------------------------------------------------------------
    public function getAddedAt(): string
    {
        return $this->added_at;
    }
    public function setAddedAt(string $added_at)
    {
        $this->added_at = $added_at;
    }
    //name_actors----------------------------------------------------------------------------------------
    public function getNameActors(): string
    {
        return $this->name_actors;
    }
    public function setNameActors(string $name_actors)
    {
        $this->name_actors = $name_actors;
    }
    //name_producers-------------------------------------------------------------------------------------
    public function getNameProducers(): string
    {
        return $this->name_producers;
    }
    public function setNameProducers(string $name_producers)
    {
        $this->name_producers = $name_producers;
    }


    public static function getAll(): array|false
    {
        $db = connect();
        $sql = 'SELECT `movies`.`movies_id`,`movies`.`title`,`movies`.`movie_year`,
                `movies`.`duration`,`movies`.`picture`,`movies`.`synopsis`,`movies`.`name_actors`,`movies`.`name_producers`
            FROM `movies`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }

    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `movies` (`title`,`movie_year`,`duration`,`picture`,`synopsis`,`name_actors`,`name_producers`)
        VALUES (:title, :movie_year, :duration, :picture, :synopsis, :name_actors, :name_producers);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':title', $this->title);
        $sth->bindValue(':movie_year', $this->movie_year);
        $sth->bindValue(':duration', $this->duration);
        $sth->bindValue(':picture', $this->picture);
        $sth->bindValue(':synopsis', $this->synopsis);
        $sth->bindValue(':name_actors', $this->name_actors);
        $sth->bindValue(':name_producers', $this->name_producers);
        return $sth->execute();
    }

    public static function get($movies_id): mixed
    {
        $db = connect();
        $sql = 'SELECT `movies`.`movies_id`,`movies`.`title`,`movies`.`movie_year`,
        `movies`.`duration`,`movies`.`picture`,`movies`.`synopsis`,`movies`.`name_actors`,`movies`.`name_producers`
        FROM `movies`
        WHERE `movies`.`movies_id`=:id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $movies_id);
        $sth->execute();
        return $sth->fetch();
    }

    public function update(): bool
    {
        $db = connect();
        $sql = 'UPDATE `movies` SET `title`=:title,`movie_year`=:movie_year,`duration`=:duration,
        `picture`=:picture, `synopsis`=:synopsis, `name_actors`=:name_actors, `name_producers`=:name_producers
        WHERE `movies_id`=:id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $this->movies_id);
        $sth->bindValue(':title', $this->title);
        $sth->bindValue(':movie_year', $this->movie_year);
        $sth->bindValue(':duration', $this->duration);
        $sth->bindValue(':picture', $this->picture);
        $sth->bindValue(':synopsis', $this->synopsis);
        $sth->bindValue(':name_actors', $this->name_actors);
        $sth->bindValue(':name_producers', $this->name_producers);
        return $sth->execute();
    }

    public function delete($movies_id): bool
    {
        $db = connect();
        $sql = 'DELETE FROM `movies` WHERE `movies_id`=:id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $movies_id);
        return $sth->execute();
    }
}
