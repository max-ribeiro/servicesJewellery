<?php
require_once('../models/UserModel.php');
class UserController{
    //
    public function __construct(){}
    //Methods
    public function addUser($name,$surname,$tel,$tel2,$rgCpf,$assoc,$conexao){
        if(isset($name)&&isset($surname)){
            $query = "SELECT client_id FROM clients WHERE client_name LIKE '$name' AND client_surname LIKE '$surname' AND client_rgCpf LIKE '$rgCpf'";
            $verifyUser = mysqli_query($conexao,$query);
            if(mysqli_num_rows($verifyUser)<1){
                mysqli_next_result($conexao);
                $user = new UserModel($name,$surname,$tel,$tel2,$rgCpf,$assoc);
                if($user){
                    $exec = mysqli_query($conexao,'CALL addClient(\''.$user->getName().'\',\''.$user->getSurname().'\',\''.$user->getTel().'\',\''.$user->getTel2().'\',\''.$user->getRgCpf().'\',\''.$user->getAssoc().'\')');
                    if($exec){
                        return $this->getLastUser($conexao);
                    }else{
                        return mysqli_error($conexao);
                    }
                }else{
                    echo"Erro ao criar usuario";
                    return false;
                }
            }else{
                echo" Usuario ja Cadastrado";
                return false;
            }
        }else{
            echo "Nome e/ ou sobrenome não foram preenchidos corretamente";
            return false;
        }
        mysqli_close($conexao);
    }
    
    public function searchUser($name,$surname,$tel,$rgCpf,$conexao){
        mysqli_close($conexao);
    }

    public function getLastUser($conexao){
        $query = mysqli_query($conexao,"SELECT client_id FROM clients ORDER BY client_id DESC LIMIT 1");
        if($query){
            $id = mysqli_fetch_row($query);
            return $id[0];
        }else{
            return mysqli_error($conexao);
        }
        mysqli_close($conexao);
    }

    public function getUsers(){

    }
    

}
