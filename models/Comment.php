<?php

class Comment
{

    private int $comments_id;
    private string $comment;
    private string $added_at;
    private int $users_id;
    private int $movies_id;


    // id-------------------------------------------------------------------------------------------------
    public function getCommentsId(): int
    {
        return $this->comments_id;
    }
    public function setActorsId(int $comments_id)
    {
        $this->comments_id = $comments_id;
    }
    // comment----------------------------------------------------------------------------------------------

    public function getComment(): string
    {
        return $this->comment;
    }
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }
    // added_at---------------------------------------------------------------------------------------------
    public function getAddedAt(): string
    {
        return $this->added_at;
    }

    public function setAddedAt(string $added_at)
    {
        $this->added_at = $added_at;
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

    /**methode qui permet d'ajouter un commentaire en bdd
     * @return bool
     */
    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `comments` (`comment`,`movies_id`,`users_id`)
        VALUES (:comment, :movies_id, :users_id);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':comment', $this->comment);
        $sth->bindValue(':movies_id', $this->movies_id);
        $sth->bindValue(':users_id', $this->users_id);
        return $sth->execute();
    }

    /**methode qui permert d'afficher tout les commentaires
     * @return array
     */
    public static function getAll(): array|false
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `comments`.`comments_id`,`comments`.`comment`
            FROM `comments`;';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }
}
