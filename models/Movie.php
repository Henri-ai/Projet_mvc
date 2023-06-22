<?php 

class Movie{

    private int $movies_id;
    private string $title;
    private string $movie_year;
    private string $duration;
    private string $picture;
    private string $synopsis;
    private string $added_at;
    private int $grades_id;


//id---------------------------------------------------------------------------------------------
public function getMoviesId():int
{
    return $this->movies_id;
}
public function setMoviesId(int $movies_id)
{
    $this->movies_id=$movies_id;
}
//title------------------------------------------------------------------------------------------
public function getTitle():string
{
    return $this->title;
}
public function setTitle(string $title)
{
    $this->title=$title;
}
//year---------------------------------------------------------------------------------------------
public function getMovieYear():string
{
    return $this->movie_year;
}
public function setMovieYear(string $movie_year)
{
    $this->movie_year=$movie_year;
}
//duration-----------------------------------------------------------------------------------------
public function getDuration():string
{
    return $this->duration;
}
public function setDuration(string $duration)
{
    $this->duration=$duration;
}
//picture------------------------------------------------------------------------------------------
public function getPicture():string
{
    return $this->picture;
}
public function setPicture(string $picture)
{
    $this->picture=$picture;
}
//synopsis------------------------------------------------------------------------------------------
public function getSynopsis():string
{
    return $this->synopsis;
}
public function setSynopsis(string $synopsis)
{
    $this->synopsis=$synopsis;
}
//added_at-------------------------------------------------------------------------------------------
public function getAddedAt():string
{
    return $this->added_at;
}
public function setAddedAt(string $added_at)
{
    $this->added_at=$added_at;
}
//grades_id-------------------------------------------------------------------------------------------
public function getGradesId():Int
{
    return $this->grades_id;
}
public function setGradesId(int $grades_id)
{
    $this->grades_id=$grades_id;
}











}