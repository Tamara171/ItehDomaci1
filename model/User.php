<?php

class User{
    public $id;
    public $username;
    public $password;
    public $odeljenje;

    public function __construct($id=null,$username=null,$password=null, $odeljenje=null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->odeljenje = $odeljenje;
    }

    public static function logInUser($usr, mysqli $conn)
    {
        $query = "SELECT * FROM user WHERE username='$usr->username' and password='$usr->password'";
        return $conn->query($query);
    }
}


?>