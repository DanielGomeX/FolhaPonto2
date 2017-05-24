<?php 


class ConexaoDB {
    
    public static $intance;
    
    public static function getIntance(){
        if (!isset(self::$intance)){
            try{
                self::$intance = new PDO('mysql:host=localhost;dbname=db_registro','root','');
            } catch (Exception $ex) {
                echo "Erro :".$ex->getMessage();
            }
        }
        return self::$intance;
    }
    
    public static function prepare($sql){
        return self::getIntance()->prepare($sql);
    }
}
