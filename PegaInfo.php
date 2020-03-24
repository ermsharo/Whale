<?php

$nome = $_POST['nome'];
$Sobrenome = $_POST['sobrenome']; 
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


            ini_set('display_errors', 1);

            error_reporting(E_ALL);

            $from = "ermsharo@gmail.com";
            
                
            $nome = $_GET[‘nome’];

            
            $sobrenome = $_POST[‘sobrenome’];
                
                                          
            
            $to = "ermsharo@gmail.com";

            $subject = $nome ;


            $headers = "";

            mail($to, $subject, $message, $headers);



?>