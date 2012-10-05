<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad ValoresArancelario
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.ValoresArancelario
 */
class ValoresArancelario extends MbeEntity {
    //Atributos
	private $d_valorAdicional;
	private $d_valorBodegaje;
	private $d_valorDesalmacenaje;
	private $e_operacionValoradicional;


    //setters
	public function setD_valoradicional($d_valorAdicional) { $this->d_valorAdicional = $d_valorAdicional; }
	public function setD_valorbodegaje($d_valorBodegaje) { $this->d_valorBodegaje = $d_valorBodegaje; }
	public function setD_valordesalmacenaje($d_valorDesalmacenaje) { $this->d_valorDesalmacenaje = $d_valorDesalmacenaje; }
	public function setE_operacionvaloradicional($e_operacionValoradicional) { $this->e_operacionValoradicional = $e_operacionValoradicional; }


    //getters
	public function getD_valoradicional() { return $this->d_valorAdicional; }
	public function getD_valorbodegaje() { return $this->d_valorBodegaje; }
	public function getD_valordesalmacenaje() { return $this->d_valorDesalmacenaje; }
	public function getE_operacionvaloradicional() { return $this->e_operacionValoradicional; }

}

?>
