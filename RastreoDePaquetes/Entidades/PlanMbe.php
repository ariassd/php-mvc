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
	private $s_ipo;
	private $d_seguroParaPaquetes;


    //setters
	public function setI_id($i_id) { $this->i_id = $i_id; }
	public function setS_ipo($s_ipo) { $this->s_ipo = $s_ipo; }
	public function setD_seguroparapaquetes($d_seguroParaPaquetes) { $this->d_seguroParaPaquetes = $d_seguroParaPaquetes; }


    //getters
	public function getI_id() { return $this->i_id; }
	public function getS_ipo() { return $this->s_ipo; }
	public function getD_seguroparapaquetes() { return $this->d_seguroParaPaquetes; }

}

?>
