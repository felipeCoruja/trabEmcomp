<?php
    
$nomeDieta = $_POST["nomeDieta"];
$principalCafe = $_POST["alimentoPrincipal"];
$complementoCafe = $_POST["complemento"];
$bebidaMatinal = $_POST["bebidaMatinal"];
$carneAlmoco = $_POST["carneAlmoco"];
$verduraAlmoco = $_POST["verduraAlmoco"];
$bebidaAlmoco = $_POST["bebidaAlmoco"];
$principalCafeTarde = $_POST["principalCafeTarde"];
$complementoCafeTarde = $_POST["complementoCafeTarde"];
$bebidaCafeTarde = $_POST["bebidaCafeTarde"];
$carneJantar = $_POST["carneJantar"];
$verduraJantar = $_POST["verduraJantar"];
$bebidaJantar = $_POST["bebidaJantar"];



$arq = fopen("../csv/loginSenhaAtual.csv","a") or die("Não foi possivel abri o arquivo");
$arq2 = file_get_contents("../csv/loginSenhaAtual.csv");
$array = explode("\n",$arq2);
foreach($array as $chave => $line){
    if($line !=""){
        $array2 = explode(";",$line);
        $idUser = $array2[0];
        break;
    }
}
fclose($arq);

$arquivo = fopen("../csv/cadDieta.csv","a") or die("Não foi possivel abrir o arquivo");

$str = "".$idUser.";".$nomeDieta.";".$principalCafe.";".$complementoCafe."; ".$bebidaMatinal.";".$carneAlmoco.";".$verduraAlmoco.";".$bebidaAlmoco.";".$principalCafeTarde.";".$complementoCafeTarde." ;".$bebidaCafeTarde.";".$carneJantar.";".$verduraJantar.";".$bebidaJantar.";\n";  

fwrite($arquivo, $str);
fclose($arquivo);

header('Location: ../html/index.php');
echo "<script> alert('Usuario Cadastrado com sucesso!')</script>";


?>