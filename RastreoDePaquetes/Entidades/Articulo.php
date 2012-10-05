<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad ArticuloCalculadora
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.ArticuloCalculadora
 */
class ArticuloCalculadora extends MbeEntity {
    //Atributos
	private $d_peso;
	private $d_porcentajeArancelario;
	private $d_valorComercial;
	private $s_descripcion;


    //setters
	public function setD_peso($d_peso) { $this->d_peso = $d_peso; }
	public function setD_porcentajearancelario($d_porcentajeArancelario) { $this->d_porcentajeArancelario = $d_porcentajeArancelario; }
	public function setD_valorcomercial($d_valorComercial) { $this->d_valorComercial = $d_valorComercial; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }


    //getters
	public function getD_peso() { return $this->d_peso; }
	public function getD_porcentajearancelario() { return $this->d_porcentajeArancelario; }
	public function getD_valorcomercial() { return $this->d_valorComercial; }
	public function getS_descripcion() { return $this->s_descripcion; }

}

?>
