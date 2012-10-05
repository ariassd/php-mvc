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
	private $i_id;
	private $s_nombre;
	private $s_nombreDeUsuario;
	private $s_clave;
	private $e_tipo;
	private $o_tiendaALaQuePertenece;


    //setters
	public function setI_id($i_id) { $this->i_id = $i_id; }
	public function setS_nombre($s_nombre) { $this->s_nombre = $s_nombre; }
	public function setS_nombredeusuario($s_nombreDeUsuario) { $this->s_nombreDeUsuario = $s_nombreDeUsuario; }
	public function setS_clave($s_clave) { $this->s_clave = $s_clave; }
	public function setE_tipo($e_tipo) { $this->e_tipo = $e_tipo; }
	public function setO_tiendaalaquepertenece($o_tiendaALaQuePertenece) { $this->o_tiendaALaQuePertenece = $o_tiendaALaQuePertenece; }


    //getters
	public function getI_id() { return $this->i_id; }
	public function getS_nombre() { return $this->s_nombre; }
	public function getS_nombredeusuario() { return $this->s_nombreDeUsuario; }
	public function getS_clave() { return $this->s_clave; }
	public function getE_tipo() { return $this->e_tipo; }
	public function getO_tiendaalaquepertenece() { return $this->o_tiendaALaQuePertenece; }

}

?>
