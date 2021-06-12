<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Rosto-Livro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css"  href="../css/estilo.css">
    </head>
    <body>
        
        <?php
            include "exibirTabela.php";
        
        ?>

        <div id="tabela">
            <table border="1">
                
                <tr>    
                    <th>User:<?php echo "$idLogin"?></th>
                    <th><?php echo "$nomeDieta"?></th>
                </tr>
                <tr>
                    <td>Café Da Manhã</td>
                    <td><?php echo "$principalCafe "," " ,"$complementoCafe "," e", "$bebidaMatinal"?></td>
                </tr>
                <tr>
                    <td>Almoço</td>
                    <td>Arroz, Feijão ,<?php echo "$carneAlmoco"," " ,"$verduraAlmoco"," e ","$bebidaAlmoco"?></td>
                </tr>
                <tr>
                    <td>Café Da Tarde</td>
                    <td><?php echo "$principalCafeTarde"," ","$complementoCafeTarde"," e ","$bebidaCafeTarde"?></td>
                </tr>
                <tr>
                    <td>Jantar</td>
                    <td>Arroz, Feijão ,<?php echo "$carneJantar"," ", "$verduraJantar"," e ","$bebidaJantar"?></td>
                </tr>
                
                
            </table><br>
            
            
        </div>
    </body>
</html>
