<?php

class User
{
    public $id;
    public $name;
    public $username;
    public $email;
    public $password;

    public $rows;

    public function save()
    {
        include('DAO/UserDAO.php');

        $dao = new UserDAO();
        $dao->insert($this);
    }

    public function getAllRows()
    {
        include('DAO/UserDAO.php');

        $dao = new UserDAO();
        $this->rows = $dao->select();
    }
}
