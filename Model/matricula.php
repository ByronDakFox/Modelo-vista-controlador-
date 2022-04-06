<?php
class matricula{

    // datos para insertar
    //datos estudiante
    public $est_id;
    public $est_cedula;
    public $est_nombres;
    public $est_apellidos;
    public $est_direccion;
    public $est_telefono;
    public $est_estado;

    //materia
    public $clas_id;
    public $clas_nombre;
    public $clas_descripcion;
    public $clas_estado;

    public $CNX;
    public function __construct(){
    try {
        $this->CNX = Conexion::conectar();
    } catch (Exception $th) {
        die($th->getMessage());
    }
}

public function selectDatos(){
    try {
        $query="SELECT * FROM tbl_estudiantes";
        $select=$this->CNX->prepare($query);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function selectInformacion(){
    try {
        $query=" SELECT a.est_cedula, a.est_nombres, a.est_apellidos, a.est_direccion, a.est_telefono,
        b.clas_nombre,b.clas_descripcion,c.jor_tipo FROM tbl_matricula AS d  INNER JOIN tbl_jornada AS c ON d.jor_id = c.jor_id 
        INNER JOIN tbl_clases AS b ON d.clas_id = b.clas_id INNER JOIN tbl_estudiantes AS a ON d.est_id = a.est_id";
        $select=$this->CNX->prepare($query);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function registrarEstudiante(matricula $datos){
    try {
        $query="INSERT INTO tbl_estudiantes( est_cedula, est_nombres, est_apellidos, est_direccion, est_telefono) VALUES 
        (?,?,?,?,?)";
        $this->CNX->prepare($query)->execute(array($datos->est_cedula, $datos->est_nombres,$datos->est_apellidos,$datos->est_direccion,$datos->est_telefono));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function updateEstudiante($datos){
    try {
        $query="UPDATE tbl_estudiantes SET est_cedula=?,est_nombres=?,est_apellidos=?,est_direccion=?,est_telefono=? WHERE est_id=?";
        $this->CNX->prepare($query)->execute(array($datos->est_cedula, $datos->est_nombres,$datos->est_apellidos,
        $datos->est_direccion,$datos->est_telefono,$datos->est_id));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function deleteDatos($id){
    try {
        $query="DELETE FROM tbl_estudiantes WHERE est_id=?";
        $delete=$this->CNX->prepare($query);
        $delete->execute(array($id));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function selectMaterias(){
    try {
        $query="SELECT * FROM tbl_clases";
        $select=$this->CNX->prepare($query);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $th) {
        die($this->getMessage());
    }
}
public function insertMaterias(matricula $datos){
    try {
        $query="INSERT INTO tbl_clases(clas_nombre, clas_descripcion) VALUES (?,?)";
        $this->CNX->prepare($query)->execute(array($datos->clas_nombre, $datos->clas_descripcion));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function updateMateria($datos){
    try {
        $query="UPDATE tbl_clases SET clas_nombre=?,clas_descripcion=? WHERE clas_id=?";
        $this->CNX->prepare($query)->execute(array($datos->clas_nombre, $datos->clas_descripcion, $datos->clas_id));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}
public function deleteMateria($id){
    try {
        $query="DELETE FROM tbl_clases WHERE clas_id=?";
        $delete=$this->CNX->prepare($query);
        $delete->execute(array($id));
    } catch (Exception $th) {
        die($this->getMessage());
    }
}
/*
public function cargarMateria(){
    try {
        $query="SELECT * FROM tbl_clases";
        $select=$this->CNX->prepare($query);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $th) {
        die($this->getMessage());
    }
}

public function cargarJornada(){
    try {
        $query="SELECT * FROM tbl_jornada";
        $select=$this->CNX->prepare($query);
        $select->execute();
        return $select->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $th) {
        die($this->getMessage());
    }
}
*/

}