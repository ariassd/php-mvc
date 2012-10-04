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
	private $i_idTienda;
	private $s_descripcion;
	private $s_estado;


    //setters
	public function setI_idtienda($i_idTienda) { $this->i_idTienda = $i_idTienda; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }
	public function setS_estado($s_estado) { $this->s_estado = $s_estado; }


    //getters
	public function getI_idtienda() { return $this->i_idTienda; }
	public function getS_descripcion() { return $this->s_descripcion; }
	public function getS_estado() { return $this->s_estado; }

}

?>
