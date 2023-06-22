<?php 


class Producer{

private int $producers_id;
private string $firstname;
private string $lastname;

//producers_id--------------------------------------------------------------------------------------------------------
public function getProducersId():int
{
    return $this->producers_id;
}
public function setProducersId(int $producers_id)
{
    $this->producers_id=$producers_id;
}
//firstname-----------------------------------------------------------------------------------------------------------
public function getFirstname():string
{
    return $this->firstname;
}
public function setFirstname(string $firstname)
{
    $this->firstname=$firstname;
}
//lastname------------------------------------------------------------------------------------------------------------
public function getLastname():string
{
    return $this->lastname;
}
public function setLastname(string $lastname)
{
    $this->lastname=$lastname;
}

}





