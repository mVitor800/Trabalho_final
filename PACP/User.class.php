<?php

class adm{

    public function login($email, $senha){
        global $pdo;
        $sql = "SELECT * FROM adm WHERE email = :email and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql_fetch();

            $_SESSION['id_adm'] = $dado['id_adm'];

            return true;
        }else{
            header("Location: login.php")
        }
    }


}

?>