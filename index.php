<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include './model/conexao.php';
        include './model/usuario.php';
        
        $u = new usuario();
        echo $u->validaUsuario('a@a', 'a');
        
        //var_dump(conexao::getConexao());
    
        ?>
    </body>
</html>
