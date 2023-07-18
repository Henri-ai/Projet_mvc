<?php

class Movie_styles
{
    private int $movies_id;
    private int $styles_id;

    //movies_id----------------------------------------------------------------------------------------
    public function getMoviesId(): int
    {
        return $this->movies_id;
    }
    public function setMoviesId(int $movies_id)
    {
        $this->movies_id = $movies_id;
    }
    //styles_id------------------------------------------------------------------------------------------
    public function getStylesId(): int
    {
        return $this->styles_id;
    }
    public function setStylesId(int $styles_id)
    {
        $this->styles_id = $styles_id;
    }
    
    /** méthode qui permet d'ajouter l'id du style ainsi que l'id du film
     * @return bool
     */
    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `movies_styles` (`styles_id`,`movies_id`)
        VALUES (:styles_id, :movies_id);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':styles_id', $this->styles_id);
        $sth->bindValue(':movies_id', $this->movies_id);
        return $sth->execute();
    } 

    /** méthode qui permet de 
     * @param mixed $id
     * 
     * @return array
     */
    public static function getByMovie($id):array|false
    {
        $pdo = Database::getInstance();
        $sql='SELECT `styles`.`label`
        FROM `styles`
        JOIN `movies_styles` ON `styles`.`styles_id`=`movies_styles`.`styles_id`
        WHERE `movies_styles`.`movies_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        return $sth->fetchAll();
    }
    
    public static function delete($movies_id): bool
    {
        $pdo = Database::getInstance();
        $sql = 'DELETE FROM `movies_styles` WHERE `movies_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $movies_id);
        return $sth->execute();
    }

    public static function getAll():array|false
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `movies_styles`.`movies_id`,`movies_styles`.`styles_id`
                FROM `movies_styles`';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    public static function getByStyle($id){
        $pdo = Database::getInstance();
        $sql='SELECT *
        FROM `movies_styles`
        INNER JOIN `movies` ON `movies`.`movies_id`=`movies_styles`.`movies_id`
        WHERE `movies_styles`.`styles_id`= :id ;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id',$id,PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll();
    }
}
