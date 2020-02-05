<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['userName'])&&!empty($_POST['password'])){
        require_once('./src/backend/DataBase/AuthUtils.php');
        $userName = mysqli_real_escape_string($conexao,$_POST['userName']);
        $passWord = mysqli_real_escape_string($conexao,$_POST['password']);
        // $passWordHash= password_hash($passWord,PASSWORD_DEFAULT);
        // print $passWordHash;
        userAuth($userName,$passWord,$conexao);
    }else{
        echo "<div class=\"alert-box\">Preencha corretamente os campos e tente novamente!</div>";
    }

}
    
?>