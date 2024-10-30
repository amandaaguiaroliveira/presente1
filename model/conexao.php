<?php
class conexao {
    public static $instance;
    
    public static function getConexao(){
        if(!isset(self::$instance)){
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=presentes","root","");
                self::$instance->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                //tratar erro de conexão
                die("Erro ao conectar: " . $e->getMessage());
            }
        } return self::$instance;
    }
    
    public static function closeConexao(){
        return self::$instance = null;
    }
}
