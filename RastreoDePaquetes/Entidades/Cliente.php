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
	private $s_nombre;
	private $s_apellidos;
	private $s_direccion;
	private $s_telefono;
	private $s_email;
	private $s_planContratado;
	private $s_codigoPais;
	private $s_numCasillero;
	private $o_codTienda;


    //setters
	public function setI_idcliente($i_idCliente) { $this->i_idCliente = $i_idCliente; }
	public function setS_nombre($s_nombre) { $this->s_nombre = $s_nombre; }
	public function setS_apellidos($s_apellidos) { $this->s_apellidos = $s_apellidos; }
	public function setS_direccion($s_direccion) { $this->s_direccion = $s_direccion; }
	public function setS_telefono($s_telefono) { $this->s_telefono = $s_telefono; }
	public function setS_email($s_email) { $this->s_email = $s_email; }
	public function setS_plancontratado($s_planContratado) { $this->s_planContratado = $s_planContratado; }
	public function setS_codigopais($s_codigoPais) { $this->s_codigoPais = $s_codigoPais; }
	public function setS_numcasillero($s_numCasillero) { $this->s_numCasillero = $s_numCasillero; }
	public function setO_codtienda($o_codTienda) { $this->o_codTienda = $o_codTienda; }


    //getters
	public function getI_idcliente() { return $this->i_idCliente; }
	public function getS_nombre() { return $this->s_nombre; }
	public function getS_apellidos() { return $this->s_apellidos; }
	public function getS_direccion() { return $this->s_direccion; }
	public function getS_telefono() { return $this->s_telefono; }
	public function getS_email() { return $this->s_email; }
	public function getS_plancontratado() { return $this->s_planContratado; }
	public function getS_codigopais() { return $this->s_codigoPais; }
	public function getS_numcasillero() { return $this->s_numCasillero; }
	public function getO_codtienda() { return $this->o_codTienda; }

}

?>
