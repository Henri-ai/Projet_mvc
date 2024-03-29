<?php

class Grade
{
    private int $grades_id;
    private int $note;
    private int $users_id;
    private int $movies_id;

    // id-----------------------------------------------------------------------------
    public function getGradesId(): int
    {
        return $this->grades_id;
    }
    public function setGradesId(int $grades_id)
    {
        $this->grades_id = $grades_id;
    }
    //note------------------------------------------------------------------------------
    public function getNote(): int
    {
        return $this->note;
    }
    public function setNote($note)
    {
        $this->note - $note;
    }
    // users_id---------------------------------------------------------------------------
    public function getUsersId(): int
    {
        return $this->users_id;
    }
    public function setUsersId($users_id)
    {
        $this->users_id = $users_id;
    }
    // movies_id--------------------------------------------------------------------------
    public function getMoviesId(): int
    {
        return $this->movies_id;
    }
    public function setMoviesId($movies_id)
    {
        $this->movies_id = $movies_id;
    }

    /**methode qui ajoute une note de film en bdd
     * @return bool
     */
    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `grades` (`note`,`users_id`,`movies_id`)
        VALUES (:note, :users_id, :movies_id);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':note', $this->note);
        $sth->bindValue(':users_id', $this->users_id);
        $sth->bindValue(':movies_id', $this->movies_id);
        return $sth->execute();
    }

    /**methode qui récupere une note précise
     * @param mixed $grades_id
     * 
     * @return mixed
     */
    public static function get($grades_id): mixed
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `grades`.`note`,`grades`.`users_id`,`grades`.`movies_id`
        FROM `grades`
        WHERE `grades`.`grades_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $grades_id);
        $sth->execute();
        return $sth->fetch();
    }
}
