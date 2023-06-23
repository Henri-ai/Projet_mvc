<?php

class User
{

    private int $users_id;
    private string $pseudo;
    private string $email;
    private string $password;
    private string $created_at;
    private string $validated_at;
    private string $updated_at;
    private string $deleted_at;

    //$users_id-----------------------------------------------------------------------------------------------
    public function getUsersId(): int
    {
        return $this->users_id;
    }
    public function setUsersId(int $users_id)
    {
        $this->users_id = $users_id;
    }
    //pseudo-------------------------------------------------------------------------------------------------
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }
    //email--------------------------------------------------------------------------------------------------
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    //password-----------------------------------------------------------------------------------------------
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    //created_at---------------------------------------------------------------------------------------------
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }
    public function setCreatedAt(string $created_at)
    {
        $this->created_at = $created_at;
    }
    //validated_at---------------------------------------------------------------------------------------------
    public function getValidatedAt(): string
    {
        return $this->validated_at;
    }
    public function setValidatedAt(string $validated_at)
    {
        $this->validated_at = $validated_at;
    }
    //updated_at---------------------------------------------------------------------------------------------
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }
    public function setUpdatedAt(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }
    //deleted_at---------------------------------------------------------------------------------------------
    public function getDeletedAt(): string
    {
        return $this->deleted_at;
    }
    public function setDeletedAt(string $deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }
}
