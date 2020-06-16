<?php

    session_start();

    //variavel que verifica se a autenticação e existe

    $user_authentic = false;

    //usuarios do sistemas
    $usuarios_app = array(
        array('email' => 'test@gmail.com', 'senha' => '1234'),
        array('email' => 'test2@gmail.com', 'senha' => '12345')
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $user_authentic = true;
        }
    }

    if($user_authentic){
        echo 'Usuário autenticado';
        $_SESSION['autenticado']= 'SIM';
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado']= 'NAO';
    }

    
?>
