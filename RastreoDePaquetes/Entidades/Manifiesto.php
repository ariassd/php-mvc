<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Manifiesto
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Manifiesto
 */
class Manifiesto extends MbeEntity {
    //Atributos
	private $s_idManifiesto;
	private $dt_fechaRegistro;
	private $s_estadoDelManifiesto;
	private $s_Formato;


    //setters
	public function setS_idmanifiesto($s_idManifiesto) { $this->s_idManifiesto = $s_idManifiesto; }
	public function setDt_fecharegistro($dt_fechaRegistro) { $this->dt_fechaRegistro = $dt_fechaRegistro; }
	public function setS_estadodelmanifiesto($s_estadoDelManifiesto) { $this->s_estadoDelManifiesto = $s_estadoDelManifiesto; }
	public function setS_formato($s_Formato) { $this->s_Formato = $s_Formato; }


    //getters
	public function getS_idmanifiesto() { return $this->s_idManifiesto; }
	public function getDt_fecharegistro() { return $this->dt_fechaRegistro; }
	public function getS_estadodelmanifiesto() { return $this->s_estadoDelManifiesto; }
	public function getS_formato() { return $this->s_Formato; }

}

?>
