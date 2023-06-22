<?php 

class Actor
{
    private int $actors_id;
    private string $firstname;
    private int $lastname;

    // public function __construct(int $actor_id,string $firstname, string $lastname)
    // {
    //     $this->setActorsId($actors_id);
    //     $this->setFirstname($firstname);
    //     $this->setLastname($lastname);
    // }

    //id-------------------------------------------------------------------------
    public function getActorsId(): int
    {
        return $this->actors_id;
    }
    public function setActorsId(int $actors_id)
    {
        $this->actors_id=$actors_id;
    }
    //firstname-------------------------------------------------------------------
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname)
    {
        $this->firstname=$firstname;
    }
    //id patients-----------------------------------------------------------------
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setIdPatients(string $lastname)
    {
        $this->lastname=$lastname;
    }
}