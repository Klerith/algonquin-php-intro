<?php 

    $base = 4;


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
    <body class="container">
        <h1 class="mt-5">Multiplication Table</h1>
        <hr/>
       
        
        <table class="table table-striped">
            <thead>
                <th>Base</th>
                <th>Number</th>
                <th>Result</th>
            </thead>
            
            <tbody>
                <?php 
//                    for( $i = 1; $i <= 100; $i++ ) {
//                        
//                        $result = $i * $base;
//                       
//                        $html = <<<EOL
//                        <tr>
//                            <td> $base </td>
//                            <td> $i </td>
//                            <td> $result </td>
//                        </tr>
//                        EOL;
//                        
//                        print( $html );
//                    }
                ?>
                
                <?php 
                     for( $i = 1; $i <= 100; $i++ ) {
                ?>
                         
                        <tr>
                            <td> <? print($base); ?> </td>
                            <td> <? print($i); ?> </td>
                            <td> <? print($base * $i); ?> </td>
                        </tr>
                         
                         
                <?php
                     }
                
                ?>
                
                
<!--                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                </tr>-->
            </tbody>
            
        </table>
        
        
    </body>
</html>
