<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Banner
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Banner
 */
class Banner extends MbeEntity {
    //Atributos
	private $i_id;
	private $s_descripcion;
	private $dt_fechaIngreso;
	private $dt_fechaInicioPublicacion;
	private $dt_fechaFinPublicacion;
	private $s_textoPublicitario;
	private $s_linkDeVisita;
	private $s_posicion;
	private $s_estadoDePublicacion;


    //setters
	public function setI_id($i_id) { $this->i_id = $i_id; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }
	public function setDt_fechaingreso($dt_fechaIngreso) { $this->dt_fechaIngreso = $dt_fechaIngreso; }
	public function setDt_fechainiciopublicacion($dt_fechaInicioPublicacion) { $this->dt_fechaInicioPublicacion = $dt_fechaInicioPublicacion; }
	public function setDt_fechafinpublicacion($dt_fechaFinPublicacion) { $this->dt_fechaFinPublicacion = $dt_fechaFinPublicacion; }
	public function setS_textopublicitario($s_textoPublicitario) { $this->s_textoPublicitario = $s_textoPublicitario; }
	public function setS_linkdevisita($s_linkDeVisita) { $this->s_linkDeVisita = $s_linkDeVisita; }
	public function setS_posicion($s_posicion) { $this->s_posicion = $s_posicion; }
	public function setS_estadodepublicacion($s_estadoDePublicacion) { $this->s_estadoDePublicacion = $s_estadoDePublicacion; }


    //getters
	public function getI_id() { return $this->i_id; }
	public function getS_descripcion() { return $this->s_descripcion; }
	public function getDt_fechaingreso() { return $this->dt_fechaIngreso; }
	public function getDt_fechainiciopublicacion() { return $this->dt_fechaInicioPublicacion; }
	public function getDt_fechafinpublicacion() { return $this->dt_fechaFinPublicacion; }
	public function getS_textopublicitario() { return $this->s_textoPublicitario; }
	public function getS_linkdevisita() { return $this->s_linkDeVisita; }
	public function getS_posicion() { return $this->s_posicion; }
	public function getS_estadodepublicacion() { return $this->s_estadoDePublicacion; }

}

?>
