<?php

class Controller{
    
    public $cadastroIndex = false;
    public $loginIndex = false;
    public $listaProduto = false;
    public $mensagemProduto = false;
  
  public function index(){
      if($_SERVER['REQUEST_METHOD'] == "POST"){
          
          if(isset($_POST['cadastrar'])){
              
              $email=$_POST['email'];
              $nome=$_POST['nome'];
              $senha=$_POST['senha'];
              
              $usuario = new usuario();
              $this->cadastroIndex = $usuario->addUsuario($email, $nome, $senha);
          }
        
          if(isset($_POST['login'])){
              
             $email=$_POST['email'];
             $senha=$_POST['senha'];
             $login= new usuario();
             
             if($login->validaUsuario($email, $senha)>0){
                 header('Location:home.php');
                 exit;
             }else{
                 $this->loginIndex = "Dados Invalidos";
             }         
          }
      }
  }

  public function produtos(){

    $p = new produto();
    $this->listaProduto = $p->recebeProdutos();

    if(isset($_POST['add'])){
        $lista = new lista();

        $this->mensagemProduto = $lista->addItem('test@teste.com',$_POST['codigo']);
    }

  }
}



?>