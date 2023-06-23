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
    public function setActorsId(int $movies_id)
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
}
