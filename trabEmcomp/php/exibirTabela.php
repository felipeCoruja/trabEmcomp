<?php

$arquivo = fopen("../csv/loginSenhaAtual.csv","a") or die("Não foi possivel abrir o arquivo");

$arq = file_get_contents("../csv/loginSenhaAtual.csv");
$array1 = explode("\n", $arq);
foreach ($array1 as $chave => $line){
    if($line != ""){
        $array3 = explode(";",$line);
        
        $idLogin = $array3[0];
    }
    
}

fclose($arquivo);



$nomeDieta = "-";
$principalCafe = "-";
$complementoCafe = "-";
$bebidaMatinal = "-";
$carneAlmoco = "-";
$verduraAlmoco = "-";
$bebidaAlmoco = "-";
$principalCafeTarde = "-";
$complementoCafeTarde = "-";
$bebidaCafeTarde = "-";
$carneJantar = "-";
$verduraJantar = "-";
$bebidaJantar = "-";

$arquivo = fopen("../csv/cadDieta.csv","a") or die("Não foi possivel abrir o arquivo");

$arq = file_get_contents("../csv/cadDieta.csv");
$array = explode("\n", $arq);
foreach ($array as $chave => $line){
    $array2 = explode(";",$line);
    
    if($array2!=""){
        if($idLogin == $array2[0]){

            $nomeDieta = $array2[1];
            $principalCafe = $array2[2];
            $complementoCafe = $array2[3];
            $bebidaMatinal = $array2[4];
            $carneAlmoco = $array2[5];
            $verduraAlmoco = $array2[6];
            $bebidaAlmoco = $array2[7];
            $principalCafeTarde = $array2[8];
            $complementoCafeTarde = $array2[9];
            $bebidaCafeTarde = $array2[10];
            $carneJantar = $array2[11];
            $verduraJantar = $array2[12];
            $bebidaJantar = $array2[13];
            
            break;
        }
    }else{
        break;
    }
}

fclose($arquivo);


?>