<?php
include_once 'Model/matricula.php';
    class controlador{
        
        public $MODEL;

        public function __construct(){
            $this->MODEL = new matricula();
        }

        public function index(){
            include_once 'View/home.php';
        }
        public function informacion(){
            include_once 'View/datosTabla.php';
        }
        public function listEstudiantes(){
            include_once 'View/estudiantes.php';
        }
        public function listMaterias(){
            include_once 'View/materias.php';
        }

        public function insertDatos(){
            $datos=new matricula();

            $datos->est_cedula=$_POST['txtCedula'];
            $datos->est_nombres=$_POST['txtNombre'];
            $datos->est_apellidos=$_POST['txtApellido'];
            $datos->est_direccion=$_POST['txtAddress'];
            $datos->est_telefono=$_POST['txtTelef'];

            $this->MODEL->registrarEstudiante($datos);
            header("Location: index.php");
        }

        public function insertClase(){
            $datos=new matricula();
            
            $datos->clas_nombre=$_POST['txtMateria'];
            $datos->clas_descripcion=$_POST['txtDescrip'];

            $this->MODEL->insertMaterias($datos);
            header("Location: index.php");
        }

        public function eliminarD(){
            $this->MODEL->deleteDatos($_REQUEST['id']);
            header("Location: http://localhost/appMatricula/?c=listEstudiantes");
        }

        public function eliminarM(){
            $this->MODEL->deleteMateria($_REQUEST['id']);
            header("Location: http://localhost/appMatricula/index.php?c=listMaterias");
        }

        public function updateDatos(){
            $datos=new matricula();

            $datos->est_id=$_POST['Ids'];
            $datos->est_cedula=$_POST['txtCedu'];
            $datos->est_nombres=$_POST['txtNom'];
            $datos->est_apellidos=$_POST['txtApell'];
            $datos->est_direccion=$_POST['txtDire'];
            $datos->est_telefono=$_POST['txtTelef'];

            $this->MODEL->updateEstudiante($datos);
            header("Location:  http://localhost/appMatricula/?c=listEstudiantes");
        }
        public function updateM(){
            $datos=new matricula();
            
            $datos->clas_id=$_POST['Ids'];
            $datos->clas_nombre=$_POST['txtMater'];
            $datos->clas_descripcion=$_POST['txtDescr'];

            $this->MODEL->updateMateria($datos);
            header("Location: http://localhost/appMatricula/index.php?c=listMaterias");
        }
        
    }