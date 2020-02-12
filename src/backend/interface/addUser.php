<?php
require_once('../DataBase/Connect.php');
require_once('../controllers/UserController.php');
$userController = new UserController();

$name = mysqli_escape_string($conexao,$_POST['name']);
$surname = mysqli_escape_string($conexao,$_POST['surname']);
$tel = mysqli_escape_string($conexao,$_POST['tel']);
$tel2 = mysqli_escape_string($conexao,$_POST['tel2']);
$rgCpf = mysqli_escape_string($conexao,$_POST['rgCpf']);
$assoc = mysqli_escape_string($conexao,$_POST['assoc']);

if(!empty($name)&&!empty($surname)){
    $userId = $userController->addUser($name,$surname,$tel,$tel2,$rgCpf,$assoc,$conexao);
    if(isset($userId)){
        echo $userId;
    }else{
        return false;
    }
}else{
    return false;
}
