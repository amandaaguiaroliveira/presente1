<?php
class lista {
    public function addLista($email,$descricao){
        try{
            
            $sql = "Insert into lista Values(?,?,?)";
            
            $stmt = conexao::getConexao()->prepare($sql);
            
            $stmt->bindvalue(1,'0');
            $stmt->bindvalue(2,$descricao);
            $stmt->bindvalue(3,$email);
            
            $stmt->execute();
            
            return true;
            
        } catch (Exception $ex) {
            
            return false;

        }
    }
    
    public function removeLista($email){
        try{
            $sql = "delete from lista where usuario=?";
            
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$email);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
               return 'Lista excluída';
            }else{
                return 'Nenhuma lista excluída';
            } 
            
        } catch (Exception $ex) {
            return 'Erro ao excluir lista';

        }
    }
    
    public function getLista($email){
        try{
            $sql = "select * from lista where usuario=?";
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt -> bindValue(1,$email);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                $result = $stmt->fetch(PDO::FETCH_BOTH);
                
                return $result;
            }
            
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }
    
    public function addItem($email, $produto){
        try {
            $lista = $this->getLista($email);
            if(!$lista){
                return 'Lista não encontrada';
            }
            $sql = "insert into item values(?,?)";
            
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1, $lista['codigo']);
            $stmt->bindValue(2, $produto);
            
            $stmt->execute();
            
            return 'Produto adicionado com sucesso';
            
        } catch (Exception $ex) {
            if($ex->errorInfo[1]==1062){
                return 'Produto adicionado a lista';
            }else{
                return 'Produto não adicionado a lista';
            }
        }
    }
    
    public function removeItem($lista, $produto){
        try{
            
            $sql = "delete from item where lista_codigo=$lista"."and produto_codigo = $produto";
            $stmt= conexao::getConexao()->prepare($sql);
            
            $stmt->bindValue(1,$lista);
            $stmt->bindValue(2,$produto);
            
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                return 'Item excluido';
            }else{
                return 'Nenhum item removido';
            }
        } catch (Exception $ex) {
            
            return 'Erro ao excluir';

        }
    }
  
}
