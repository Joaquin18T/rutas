<?php

require_once '../config/Server.php';

class Conexion{
    //Esta clase no podra llamarse afuera de la carpeta models
    /**
     * Retorna una conexion activa al servidor y BD
     */
    protected static function getConexion(){
        try{
            $pdo = new PDO(SGBD, USER, PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(Exception $e){
            error_log(($e->getMessage()));
        }
    }

    public function encryption($string){

    }

    public function decryption($string){

    }

    public function getAll($sp){

    }

    public function search($data =[]){
        
    }
}