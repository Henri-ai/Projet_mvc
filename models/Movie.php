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


    /**methode qui permet de renvoyer tous les films enregistrer en bdd
     * @return array
     */
    public static function getAll(): array|false
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `movies`.`movies_id`,`movies`.`title`,`movies`.`movie_year`,
                `movies`.`duration`,`movies`.`picture`,`movies`.`synopsis`,
                `movies`.`name_actors`,`movies`.`name_producers`
            FROM `movies`;';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    /**methode qui permet d'ajouter un film en bdd
     * @return bool
     */
    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `movies` (`title`,`movie_year`,`duration`,
        `picture`,`synopsis`,`name_actors`,`name_producers`)
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

    /**methode qui permet de retourner un film par rapport à son id
     * @param mixed $movies_id
     * 
     * @return mixed
     */
    public static function get($movies_id): mixed
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `movies`.`movies_id`,`movies`.`title`,`movies`.`movie_year`,
        `movies`.`duration`,`movies`.`picture`,`movies`.`synopsis`,`movies`.`name_actors`,`movies`.`name_producers`
        FROM `movies`
        WHERE `movies`.`movies_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $movies_id);
        $sth->execute();
        return $sth->fetch();
    }

    /**methode qui permet de mettre à jour les informations d'un film
     * @return bool
     */
    public function update(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'UPDATE `movies` SET `title`=:title,`movie_year`=:movie_year,`duration`=:duration,
        `synopsis`=:synopsis, `name_actors`=:name_actors, `name_producers`=:name_producers
        WHERE `movies_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $this->movies_id);
        $sth->bindValue(':title', $this->title);
        $sth->bindValue(':movie_year', $this->movie_year);
        $sth->bindValue(':duration', $this->duration);
        $sth->bindValue(':synopsis', $this->synopsis);
        $sth->bindValue(':name_actors', $this->name_actors);
        $sth->bindValue(':name_producers', $this->name_producers);
        return $sth->execute();
    }

    /**methode qui permet de supprimer un film
     * @param mixed $movies_id
     * 
     * @return bool
     */
    public static function delete($movies_id): bool
    {
        $pdo = Database::getInstance();
        $sql = 'DELETE FROM `movies` WHERE `movies_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $movies_id);
        return $sth->execute();
    }

}
