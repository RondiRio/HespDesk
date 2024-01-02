<?php
    session_start();
    $_SESSION['a'] = 'oi sou um valor de session';
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<hr>';
    // echo '</pre>';
    // echo( $_SESSION['b']);
    // verifica se a autenticação foi feita
    $usuario_autenticado = false;
    $usuarios_app = array(
        array('email' => 'adm@helpdesk.com.br', 'senha' => 'admin123'),
        array('email' => 'user@helpdesk.com.br', 'senha' => 'userteste'),
    );
    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '<hr>';
    // echo '</pre>';
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            // echo 'user autentcaded';
        }
    }
        if($usuario_autenticado){
            echo '<hr>';
            echo 'usuario autenticado';
            echo '<hr>';
            $_SESSION['autenticado'] = 'SIM';
        }else{
            $_SESSION['autenticado'] = 'NAO';
            header('Location: index.php?login=erro');
        }
    
?>