<?php
require_once __DIR__.'/../helpers/connect.php';
class User
{

    private int $users_id;
    private int $type;
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
    //type---------------------------------------------------------------------------------------------------
    public function getType(): int
    {
        return $this->type;
    }
    public function setType(int $type)
    {
        $this->users_id = $type;
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

    /**methode qui permet d'enregistrer un utilisateur en bdd
     * @return bool
     */
    public function add(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'INSERT INTO `users` (`pseudo`,`email`,`password`)
        VALUES (:pseudo, :email, :password);';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':pseudo', $this->pseudo);
        $sth->bindValue(':email', $this->email);
        $sth->bindValue(':password', $this->password);
        return $sth->execute();
    }


    /**methode qui affiche tous les utilisateurs enregistrés
     * @return array
     */
    public static function getAll(): array|false
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `users`.`users_id`,`users`.`pseudo`,`users`.`email`,
                `users`.`password`
                FROM `users`;';
        $sth = $pdo->query($sql);
        return $sth->fetchAll();
    }

    /**methode qui retourne un utilisateur precis via l'id
     * @param int $users_id
     * 
     * @return mixed
     */
    public static function get(int $users_id): mixed
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `users`.`users_id`,`users`.`pseudo`,`users`.`email`,
        `users`.`password`
            FROM `users`
            WHERE `users`.`users_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $users_id,PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    /**methode qui permet de retrouver un utilisateur via l'email
     * @param mixed $email
     * 
     * @return mixed
     */
    public static function getByMail($email): mixed
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `users`.`users_id`,`users`.`pseudo`,`users`.`email`,
        `users`.`password`,`users`.`type`
            FROM `users`
            WHERE `users`.`email`=:email ;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();
        return $sth->fetch();
    }

    /**methode qui permet de mettre à jour le profil de l'utilisateur
     * @return bool
     */
    public function updateProfil(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'UPDATE `users` SET `pseudo`=:pseudo
                WHERE `users_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $this->users_id);
        $sth->bindValue(':pseudo', $this->pseudo);
        return $sth->execute();
    }

    /**methode qui permet de modifier le mot de passe de l'utilisateur
     * @return bool
     */
    public function updatePassword(): bool
    {
        $pdo = Database::getInstance();
        $sql = 'UPDATE `users` SET `password`=:password
                WHERE `users_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $this->users_id);
        $sth->bindValue(':password', $this->password);
        return $sth->execute();
    }

    /**methode qui permet de supprimer un utilisateur via l'id
     * @param mixed $users_id
     * 
     * @return bool
     */
    public static function delete($users_id): bool
    {
        $pdo = Database::getInstance();
        $sql = 'DELETE FROM `users` WHERE `users_id`=:id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $users_id);
        return $sth->execute();
    }


    /**verifie si l'email existe en bdd
     * @return mixed
     */
    public function isExist(): mixed
    {
        $pdo = Database::getInstance();
        $sql=('SELECT `users`.`email` 
        FROM `users` WHERE `users`.`email`=:email');
        $sth=$pdo->prepare($sql);
        $sth->bindValue(':email',$this->email);//bindValue : Associe une valeur à un paramètre
        $sth->execute();
        return $sth->fetch();
    }

    
}
