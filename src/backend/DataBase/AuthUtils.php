<?php
require_once('Connect.php');
function userAuth($userName,$userPass,$conexao){
    $query="CALL userAuth('$userName')";
    $nameAuth = mysqli_query($conexao,$query);
    if($nameAuth){
        if(mysqli_num_rows($nameAuth)>0){
            $data = mysqli_fetch_assoc($nameAuth);
            if(password_verify($userPass,$data['user_pass'])){
                session_start();
                //Session vars
                $_SESSION["loggedin"] = true;
                $_SESSION["user_id"] = $data['user_id'];
                $_SESSION["user_level"] = $data['user_level'];     
                $_SESSION["user_name"]=$userName;
                header("location: dashboard/");
            }else{
                echo "<div class=\"alert-box\">Usuario e senha não conhecidem.</div>";
            }
        }else{
            echo "<div class=\"alert-box\">Usuario não encontrado, verifique os dados informados e tente novamente!</div>";

        }
    }else{
        echo mysqli_error($conexao);
    }

}