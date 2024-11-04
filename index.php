
        <?php
        
        include './model/conexao.php';
        include './model/usuario.php';
        include './model/produto.php';
        include './model/lista.php';
        include './control/controller.php';
       
        $c = new controller();
        
        $c->index();
        
        if($c->cadastroIndex) echo $c->cadastroIndex;
        if($c->loginIndex) echo $c->loginIndex;
        
        ?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
  <div class="container">
        <header class="row clearfix">
            Logomarca
        </header>
        
        <nav class="row clearfix">
            Menu
        </nav>
        <div>
            <hr>
            <h2><strong>Produtos para sua lista</strong></h2>
        </div>
        <article class="row clearfix">
            <img src="bootstrap/img/produtos/pc.jpg" alt="foto">
            <h2>Titulo do produto</h2>
            <p>Descrição do produto</p>
            <p><a href="#">Link do produto</a></p>
            <p></p>

            <form method="POST">
                <input type="hidden" name="codigo" value="|">
                <button class="btn btn-default btn-lg" name="add">Adicionar a lista</button>
            </form>
        </article>
        </div>
    <!--  <form method="POST">
                <h2>
                    <strong>Efetue o login</strong>
                </h2>
                <hr>
                <p><input type="email" name="email" placeholder="Digite seu email" required/></p>
                <p><input type="password" name="senha" placeholder="Digite sua senha" required/></p>
                <label class ="checkbox">
                    <input type="checkbox" name="lembrete"> Lembrar Senha</label>
                <p><button name="login" type="submit">Entrar</button></p>               
            </form>
        </section>
        
        <section class="col-md-6">
            <form method="POST">
                <hr>
                <h2>
                    <strong> Cadastre-se agora</strong>
                </h2>
                <hr>
                <p><input type="email" name="email" placeholder="Digite seu email" required/></p>
                <p><input type="nome" name="nome" placeholder="Digite seu nome" required/></p>
                <p><input type="password" name="senha" placeholder="Digite sua senha" required/></p>
                <p><button name="cadastrar" type="submit">Cadastrar</button></p>
             </form>
        </section>
            </div>
        
        <section class="row clearfix">
            <hr>
            <h2><strong>Como criar sua própria lista</strong>
            </h2>
            <hr>
            <div>
            <div>
                <img alt="tutorial_1" src="bootstrap/img/index/tutorial_1.jpg">
            </div>
            <div>
                <p>
                   Texto Explicativo 
                </p>
            </div>
            </div>
            <hr>
        </section>
    </div> -->
    </body>
</html>