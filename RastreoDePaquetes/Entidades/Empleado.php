<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Empleado
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Empleado
 */
class Empleado extends MbeEntity {
    //Atributos

	private $s_nombre;
        private $s_apellido1;
        private $s_apellido2;
        private $s_nombreDeUsuario;
	private $s_clave;
        private $s_estado;


    //setters

	public function setS_nombre($s_nombre) { $this->s_nombre = $s_nombre; }
	public function setS_nombredeusuario($s_nombreDeUsuario) { $this->s_nombreDeUsuario = $s_nombreDeUsuario; }
	public function setS_clave($s_clave) { $this->s_clave = $s_clave; }
        public function setS_apellido1($s_apellido1) {$this->s_apellido1 = $s_apellido1;}
        public function setS_apellido2($s_apellido2) {$this->s_apellido2 = $s_apellido2;}
        public function setS_estado($s_estado) {$this->s_estado = $s_estado;}

    //getters

	public function getS_nombre() { return $this->s_nombre; }
	public function getS_nombredeusuario() { return $this->s_nombreDeUsuario; }
	public function getS_clave() { return $this->s_clave; }
        public function getS_apellido1() {return $this->s_apellido1;}
        public function getS_apellido2() {return $this->s_apellido2;}
        public function getS_estado() {return $this->s_estado;}

}

?>
