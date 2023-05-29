<?php 
$host="localhost";
$usuario="root";
$senha="";
$bd="login";

$conexao = new mysqli($host, $usuario,$senha,$bd);
if (!$conexao){
    echo"falha na conexão".mysqli_connect_error();
}
else{
    echo "conexão com sucesso";
}
    
?>