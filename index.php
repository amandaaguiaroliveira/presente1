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
        include './model/produto.php';
        include './model/lista.php';
        
        //$u = new usuario();
        //print_r($u->recebeUsuario('a@a'));
        //echo $u->validaUsuario('a@a', 'a');
        //print_r($u->recebeUsuarioporcampo('nome', 'a'));
        //print_r($u->recebeUsuarios());
        
        //var_dump(conexao::getConexao());
        
        //$p = new produto;
        //print_r($p->recebeProdutos());
        
        $l = new lista();
        //print_r($l->addLista('4b9411a9b28f9063ea75e5fee24bb2a8','lista de presentes'));
        //echo $l->removeLista('teste@teste.com');
        
        //print_r($l->getLista('teste@teste.com'));
        //echo $l->addItem('teste@teste.com', 1);
        //echo $l->removeItem(25, 1);

        print_r($l->getItem(25));
        
        echo 'aqui';
    
        ?>
    </body>
</html>
