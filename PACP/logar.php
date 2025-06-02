<?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require 'conexao.php';
        require 'user.class.php'

        $adm = new adm();
        
        $email = addcslashes($_POST['email']);
        $senha = addcslashes($_POST['senha']);

        if($adm->login($email, $senha) == true){
            if(isset($_SESSION['id_adm'])){
                header("Location: index.php");
            }else{
                header("Loacation: login.php");
            }
        }else{
            header("Loacation: login.php");
        }

        
    else{
        header("location: login.php")
        }
    }

?>