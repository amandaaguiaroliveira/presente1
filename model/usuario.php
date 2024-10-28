<?php
class usuario {
    public function addUsuario($email,$nome,$senha){
        
        try{
            $sql = "Insert into usuario Values (?,?,?,?,?,?)";
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2, md5($email));
            $stmt->bindValue(3,$nome);
            $stmt->bindValue(4,$senha);
            $stmt->bindValue(5,date('Y-m-d'));
            $stmt->bindValue(6,'padrao.jpg');
            $stmt->execute();
            
            return 'Usuário cadastrado com sucesso';
        } catch (Exception $ex) {
            if($ex->errorInfo[1] == 1062)
            {
                return 'Usuário já cadastrado';
            } else{
                return 'Erro ao cadastrar usuário';
            }

        }
    }
    
    public function validaUsuario($email,$senha){
        
        try{
            $sql = 'Select * from usuario where email=? and senha=?';
            
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2,$senha);
            $stmt->execute();
            
            $result = $stmt->rowCount();
            
            return $result;
            
        } catch (Exception $ex) {
            return false;

        }
    }
    
}
