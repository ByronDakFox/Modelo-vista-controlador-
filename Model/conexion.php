<?php 
class Conexion{
    /*private $server="localhost";
    private $user="root";
    private $paswd="";
    private $database="bdd_pa_project";
    private $conec;
    */

    public static function conectar(){
        try {
            $conec = new PDO("mysql: host=localhost; dbname=bdd_pa_project; charset=utf8","root", "");
            $conec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo ("Conección exitosa");
            return $conec;
        } catch (PDOException $ex) {
            $conect = 'Error de conexión';
            echo "ERROR: " . $ex->getMessage();
        }
    }
}