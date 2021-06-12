<?php
    
$idUser = $_POST["id"];
$senha = $_POST["senha"];
$confirmaSenha = $_POST["confirmaSenha"];

if($senha == $confirmaSenha){

    $arquivo = fopen("../csv/cadLoginSenha.csv","a") or die("Não foi possivel abrir o arquivo");

    $str = "".$idUser.";".$senha.";\n";
    fwrite($arquivo, $str);
    fclose($arquivo);

    header('Location:../html/login.html');
    echo "<script> alert('Usuario Cadastrado com sucesso!')</script>";

}else{
    echo "<script>alert('ERRO - Confirmação da senha diferente!')</script>";
}

?>