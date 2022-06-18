<?php

require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";

function singup($username, $password, $email)
{
    global $db;
    $query = "INSERT INTO users(username,password,email,points)
        VALUES(?,?,?,?) ";
    $hashPwd = password_hash($password, PASSWORD_DEFAULT);
    $db->prepare($query)->execute([$username, $hashPwd, $email, 0]);
}

function login($username)
{
    global $db;
    $query = "SELECT * FROM users
                WHERE username='$username'";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

function checkUsername($username)
{
    global $db;
    $query = "SELECT username FROM users
                WHERE username='$username'";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

function checkEmail($email)
{
    global $db;
    $query = "SELECT email FROM users
                WHERE email='$email'";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

function AddPoints($points,$username)
{
    global $db;
    $query = "UPDATE users SET points=points+'" . $points . "' WHERE username='$username'";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

function SubPoints($points,$username)
{
    global $db;
    $query = "UPDATE users SET points=points-'" . $points . "' WHERE username='$username'";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

?>