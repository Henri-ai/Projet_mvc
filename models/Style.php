<?php

class Style
{

    private int $styles_id;
    private string $label;

    //styles_id------------------------------------------------------------------------------------------------
    public function getStylesId(): int
    {
        return $this->styles_id;
    }
    public function setStylesId(int $styles_id)
    {
        $this->styles_id = $styles_id;
    }
    //label-----------------------------------------------------------------------------------------------------
    public function getLabel(): string
    {
        return $this->label;
    }
    public function setLabel(string $label)
    {
        $this->label = $label;
    }


    public static function getAll(): array|false
    {
        $db = connect();
        $sql = 'SELECT `styles`.`styles_id`,`styles`.`label`
            FROM `styles`;';
        $sth = $db->query($sql);
        return $sth->fetchAll();
    }

    public static function get($styles_id): mixed
    {
        $db = connect();
        $sql = 'SELECT `styles`.`styles_id`,`styles`.`label`
        FROM `styles`
        WHERE `styles`.`styles_id`=:id;';
        $sth = $db->prepare($sql);
        $sth->bindValue(':id', $styles_id);
        $sth->execute();
        return $sth->fetch();
    }
}
