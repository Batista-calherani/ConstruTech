<?php

session_start();

require_once "data.php";

if(!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $Produtos;
};


if(!isset($_SESSION['users'])) {
    $_SESSION['users'] = $users;
};

if(!isset($_SESSION['pass'])) {
    $_SESSION['pass'] = $pass;
};
if(!isset($_SESSION['access'])) {
    $_SESSION['access'] = $access;
}
$complete = array_combine($_SESSION['users'],$_SESSION['pass']);
$try = json_encode($complete);
$total = array_sum(array_column($_SESSION['produtos'] ,'Qtd',));

$limite_minimo = 50;

