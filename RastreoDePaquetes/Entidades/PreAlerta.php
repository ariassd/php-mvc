<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad PreAlerta
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.PreAlerta
 */
class PreAlerta extends MbeEntity {
    //Atributos
	private $i_id;
	private $s_descripcion;
	private $d_valor;
	private $s_archivo;


    //setters
	public function setI_id($i_id) { $this->i_id = $i_id; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }
	public function setD_valor($d_valor) { $this->d_valor = $d_valor; }
	public function setS_archivo($s_archivo) { $this->s_archivo = $s_archivo; }


    //getters
	public function getI_id() { return $this->i_id; }
	public function getS_descripcion() { return $this->s_descripcion; }
	public function getD_valor() { return $this->d_valor; }
	public function getS_archivo() { return $this->s_archivo; }

}

?>
