<?php 

class Grade{
    private int $grades_id;
    private int $note;

// id-----------------------------------------------------------------------------
    public function getGradesId(): int
    {
        return $this->grades_id;
    }

    public function setGradesId(int $grades_id)
    {
        $this->grades_id=$grades_id;
    }
//note------------------------------------------------------------------------------
public function getNote():int
{
    return $this->note;
}
public function setNote($note)
{
    $this->note-$note;
}











}