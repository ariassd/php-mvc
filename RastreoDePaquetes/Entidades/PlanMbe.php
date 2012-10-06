<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad PlanMbe
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.PlanMbe
 */
class PlanMbe extends MbeEntity {
    //Atributos
	private $i_id;
	private $s_tipo;
	private $d_seguroParaPaquetes;


    //setters
	public function setI_id($i_id) { $this->i_id = $i_id; }
	public function setS_tipo($s_tipo) { $this->s_tipo = $s_tipo; }
	public function setD_seguroparapaquetes($d_seguroParaPaquetes) { $this->d_seguroParaPaquetes = $d_seguroParaPaquetes; }


    //getters
	public function getI_id() { return $this->i_id; }
	public function getS_tipo() { return $this->s_tipo; }
	public function getD_seguroparapaquetes() { return $this->d_seguroParaPaquetes; }

}

?>
