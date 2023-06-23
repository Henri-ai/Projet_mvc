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
}
