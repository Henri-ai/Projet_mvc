<?php 

class Style{

private int $styles_id;
private string $label;
private int $movies_id;

//styles_id------------------------------------------------------------------------------------------------
public function getStylesId():int
{
    return $this->styles_id;
}
public function setStylesId(int $styles_id)
{
    $this->styles_id=$styles_id;
}
//label-----------------------------------------------------------------------------------------------------
public function getLabel():string
{
    return $this->label;
}
public function setLabel(string $label)
{
    $this->label=$label;
}
//movies_id-------------------------------------------------------------------------------------------------
public function getMoviesId():int
{
    return $this->movies_id;
}
public function setMoviesId(int $movies_id)
{
    $this->movies_id=$movies_id;
}






















}