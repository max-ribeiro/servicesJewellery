<?php
$conexao = mysqli_connect('localhost','root','','main');
if($conexao){
    return true;
}else{
    echo mysqli_error($conexao);
}
?>