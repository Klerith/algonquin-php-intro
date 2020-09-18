<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
    <body class="container">
        
        <h1 class="mt-5">Basic Form - Data from PHP </h1>
        <hr />
        
        
        <ul class="list-group">
        
        <?php
        // put your code here
        print_r(var_dump( $_POST )  );
        
        // $email = $_POST['email'];
        $email = filter_input( INPUT_POST, 'email' );
        $password = filter_input( INPUT_POST, 'password' );
        $chkRemember = filter_input( INPUT_POST, 'chkRemember' );
        
        if ( !isset( $email ) || strlen($email) == 0  ) {
            print("<li class=\"list-group-item\">Email is required</li>");
        }
        
        if ( !isset( $password ) || strlen($password) == 0  ) {
            print("<li class=\"list-group-item\">Password is required</li>");
        }
        
        if ( $chkRemember != "on"  ) {
            print("<li class=\"list-group-item\">You must select the checkbox</li>");
        }
        
        
        
        
        ?>
         
        </ul>
            
            
    </body>
</html>
