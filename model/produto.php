<?php
class produto {
    
    public function recebeProdutos(){
        try {
            
            $sql = "Select * from produto";
            $stmt = conexao::getConexao()->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_BOTH);
            
            return $result;
        } catch (Exception $ex) {
            return false;
        }
    }
}
