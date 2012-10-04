<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Cliente
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Cliente
 */
class Cliente extends MbeEntity {
    //Atributos
	private $i_idCliente;
	private $s_nombreCompleto;
	private $s_direccion;
	private $s_estado;


    //setters
	public function setI_Idcliente($i_idCliente) { $this->i_idCliente = $i_idCliente; }
	public function setS_Nombrecompleto($s_nombreCompleto) { $this->s_nombreCompleto = $s_nombreCompleto; }
	public function setS_Direccion($s_direccion) { $this->s_direccion = $s_direccion; }
	public function setS_Estado($s_estado) { $this->s_estado = $s_estado; }


    //getters
	public function getI_Idcliente() { return $this->i_idCliente; }
	public function getS_Nombrecompleto() { return $this->s_nombreCompleto; }
	public function getS_Direccion() { return $this->s_direccion; }
	public function getS_Estado() { return $this->s_estado; }

}

?>
