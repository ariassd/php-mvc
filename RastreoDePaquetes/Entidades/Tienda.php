<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Tienda
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Tienda
 */
class Tienda extends MbeEntity {
    //Atributos
	private $i_codigoTienda;
	private $b_estadoActivo;
	private $s_email;
	private $s_telefono;
	private $s_direccion;
	private $s_descripcion;
        private $s_pais;


    //setters
	public function setI_codigotienda($i_codigoTienda) { $this->i_codigoTienda = $i_codigoTienda; }
	public function setB_estadoactivo($b_estadoActivo) { $this->b_estadoActivo = $b_estadoActivo; }
	public function setS_email($s_email) { $this->s_email = $s_email; }
	public function setS_telefono($s_telefono) { $this->s_telefono = $s_telefono; }
	public function setS_direccion($s_direccion) { $this->s_direccion = $s_direccion; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }
        public function setS_pais($s_pais) {$this->s_pais = $s_pais;}

 
    //getters
	public function getI_codigotienda() { return $this->i_codigoTienda; }
	public function getB_estadoactivo() { return $this->b_estadoActivo; }
	public function getS_email() { return $this->s_email; }
	public function getS_telefono() { return $this->s_telefono; }
	public function getS_direccion() { return $this->s_direccion; }
	public function getS_descripcion() { return $this->s_descripcion; }
        public function getS_pais() {return $this->s_pais;}



}

?>
