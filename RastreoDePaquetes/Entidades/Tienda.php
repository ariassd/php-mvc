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
	private $s_codigoTienda;
	private $s_estadoActivo;
	private $s_email;
	private $s_telefono;
	private $s_direccion;


    //setters
	public function setS_codigotienda($s_codigoTienda) { $this->s_codigoTienda = $s_codigoTienda; }
	public function setS_estadoactivo($s_estadoActivo) { $this->s_estadoActivo = $s_estadoActivo; }
	public function setS_email($s_email) { $this->s_email = $s_email; }
	public function setS_telefono($s_telefono) { $this->s_telefono = $s_telefono; }
	public function setS_direccion($s_direccion) { $this->s_direccion = $s_direccion; }


    //getters
	public function getS_codigotienda() { return $this->s_codigoTienda; }
	public function getS_estadoactivo() { return $this->s_estadoActivo; }
	public function getS_email() { return $this->s_email; }
	public function getS_telefono() { return $this->s_telefono; }
	public function getS_direccion() { return $this->s_direccion; }

}

?>
