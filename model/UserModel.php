<?php

class UserModel {
    public $db;

    public function CheckUserLogin($username, $password)
    {
        $query = "SELECT count(*) FROM tbl_user WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function UserRegister($username, $password) {
        $query = "INSERT INTO tbl_user (username, password) VALUES (:username, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return 1;
    }
}