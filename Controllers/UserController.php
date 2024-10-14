<?php

class UserController
{
    public static function index()
    {
        include('Models/User.php');

        $user = new User();
        $user->getAllRows();
        
        include('Views/modules/ListUser.php');
    }

    public static function form()
    {
        include('Views/modules/FormUser.php');
    }

    public static function save()
    {
        // var_dump($_POST);
        include('Models/User.php');

        $user = new User();

        $user->name     = $_POST['name'];
        $user->username = $_POST['username'];
        $user->email    = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();

        header('Location: /user');
    }
}
