<?php
class Movie_users
{

    private int $movies_id;
    private int $users_id;

    // movies_id-----------------------------------------------------------------------------------
    public function getMoviesId(): int
    {
        return $this->movies_id;
    }
    public function setMoviesId($movies_id)
    {
        $this->movies_id = $movies_id;
    }
    //users_id--------------------------------------------------------------------------------------
    public function getUsersId(): int
    {
        return $this->users_id;
    }
    public function setUsersId($users_id)
    {
        $this->users_id = $users_id;
    }


    /** méthode qui permet de lister les films que l'utilisateur a ajouter
     * @return array
     */
    public static function getAll($users_id):array|false
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `movies`.`title`, `movies`.`picture`,`movies_users`.`movies_id`,
        `movies_users`.`users_id`
        FROM `movies_users`
        INNER JOIN `movies` ON `movies_users`.`movies_id`= `movies`.`movies_id`
        WHERE `movies_users`.`users_id`= :id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id',$users_id);
        $sth->execute();
        return $sth->fetchAll();
    }

    /** Méthode qui permet d'ajouter à sa liste personnalisée
     * @return bool
     */
    public function add() : bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `movies_users` (`movies_id`,`users_id`)
        VALUES (:movies_id, :users_id);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':movies_id', $this->movies_id,PDO::PARAM_INT);
        $sth->bindValue(':users_id', $this->users_id,PDO::PARAM_INT);
        return $sth->execute();
    }

    /**methode qui permet de verifier si l'utilisateur a déjà enregistré le film en base
     * @return mixed
     */
    public function isExist():mixed
    {
        $pdo = Database::getInstance();
        $sql='SELECT * 
        FROM `movies_users`
        WHERE `movies_users`.`movies_id`=:movies_id;';
        $sth=$pdo->prepare($sql);
        $sth->bindValue(':movies_id',$this->movies_id);
        $sth->execute();
        return $sth->fetch();
    }

    public static function delete($movies_id,$users_id): bool
    {
        $pdo = Database::getInstance();
        $sql ='DELETE FROM `movies_users` WHERE `movies_id`=:movies_id AND `users_id`= :users_id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':movies_id', $movies_id);
        $sth->bindValue(':users_id', $users_id);
        return $sth->execute();
    }
}   
