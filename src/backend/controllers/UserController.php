<?php
require_once('../models/UserModel.php');
class UserController{
    //
    public function __construct(){}
    //Methods
    public function addUser($name,$surname,$tel,$tel2,$rgCpf,$assoc,$conexao){
        $user = new UserModel($name,$surname,$tel,$tel2,$rgCpf,$assoc);
        if($user){
            $exec = mysqli_query($conexao,'CALL addUser(\'\',$name,$surname,$tel,$tel2,$rgCpf,$assoc)');
            return $this->getLastUser();
        }else{
            return false;
        }
        mysqli_close($conexao);
    }
    public function searchUser($userName){

    }

    public function getLastUser(){
        return "id";
    }
    public function getUsers(){

    }
}
