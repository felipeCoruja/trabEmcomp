<?php
    

$idLogin = $_POST["id"];
$senha = $_POST["senha"];



$arquivo = fopen("../csv/cadLoginSenha.csv","a") or die("Não foi possivel abrir o arquivo");

$arq = file_get_contents("../csv/cadLoginSenha.csv");
$array = explode("\n", $arq);
foreach ($array as $chave => $line){
    $array2 = explode(";",$line);

    if($array2 !=""){

        if($array2[0] == $idLogin){
            $chave = $array2[1];
            if($senha == $chave){
                $arquivo2 = fopen("../csv/loginSenhaAtual.csv","w") or die ("Nao foi possivel abris o arquivo loginSenhaAtual.csv");
                $str = "".$idLogin.";".$senha.";\n";
                fwrite($arquivo2,$str);
                fclose ($arquivo2);
                fclose($arquivo);
                
                header('Location:../html/index.php');
                break; 
            }else{
                header('Location:http:../html/login.html');
                echo "<script> alert('login ou senha incorreto!')</script>";
                break; 
            }
            
        }

    }else{
        break;
    }
   
}


fclose ($arquivo);


?>