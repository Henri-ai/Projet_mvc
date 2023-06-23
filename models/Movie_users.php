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
}
