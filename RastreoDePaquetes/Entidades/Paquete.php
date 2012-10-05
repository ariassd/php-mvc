<?php
import("MbeFramework.MbeEntity");
/**
 * Este codigo es autogenerado usando PhpGenerator.py, desarrollado
 * por Luis Diego Arias Segura
 */
/**
 * Entidad Paquete
 *
 * @author Luis Diego Arias Segura
 * @package RastreoDePaquetes.Paquete
 */
class Paquete extends MbeEntity {
    //Atributos
	private $i_numeroEBL;
	private $s_trackingExterno;
	private $s_numeroDeBolsa;
	private $s_codPais;
	private $i_numCasillero;
	private $s_descripcion;
	private $i_piezasEnInterior;
	private $i_piezas;
	private $d_peso;
	private $d_largo;
	private $d_ancho;
	private $d_espesor;
	private $e_tipo;
	private $d_valorComercial;
	private $dt_fechaIngresoAMiami;
	private $dt_fechaUltimoEstado;
	private $s_manifiesto;
	private $s_estadoImportacion;
	private $s_estadoArchivado;


    //setters
	public function setI_numeroebl($i_numeroEBL) { $this->i_numeroEBL = $i_numeroEBL; }
	public function setS_trackingexterno($s_trackingExterno) { $this->s_trackingExterno = $s_trackingExterno; }
	public function setS_numerodebolsa($s_numeroDeBolsa) { $this->s_numeroDeBolsa = $s_numeroDeBolsa; }
	public function setS_codpais($s_codPais) { $this->s_codPais = $s_codPais; }
	public function setI_numcasillero($i_numCasillero) { $this->i_numCasillero = $i_numCasillero; }
	public function setS_descripcion($s_descripcion) { $this->s_descripcion = $s_descripcion; }
	public function setI_piezaseninterior($i_piezasEnInterior) { $this->i_piezasEnInterior = $i_piezasEnInterior; }
	public function setI_piezas($i_piezas) { $this->i_piezas = $i_piezas; }
	public function setD_peso($d_peso) { $this->d_peso = $d_peso; }
	public function setD_largo($d_largo) { $this->d_largo = $d_largo; }
	public function setD_ancho($d_ancho) { $this->d_ancho = $d_ancho; }
	public function setD_espesor($d_espesor) { $this->d_espesor = $d_espesor; }
	public function setE_tipo($e_tipo) { $this->e_tipo = $e_tipo; }
	public function setD_valorcomercial($d_valorComercial) { $this->d_valorComercial = $d_valorComercial; }
	public function setDt_fechaingresoamiami($dt_fechaIngresoAMiami) { $this->dt_fechaIngresoAMiami = $dt_fechaIngresoAMiami; }
	public function setDt_fechaultimoestado($dt_fechaUltimoEstado) { $this->dt_fechaUltimoEstado = $dt_fechaUltimoEstado; }
	public function setS_manifiesto($s_manifiesto) { $this->s_manifiesto = $s_manifiesto; }
	public function setS_estadoimportacion($s_estadoImportacion) { $this->s_estadoImportacion = $s_estadoImportacion; }
	public function setS_estadoarchivado($s_estadoArchivado) { $this->s_estadoArchivado = $s_estadoArchivado; }


    //getters
	public function getI_numeroebl() { return $this->i_numeroEBL; }
	public function getS_trackingexterno() { return $this->s_trackingExterno; }
	public function getS_numerodebolsa() { return $this->s_numeroDeBolsa; }
	public function getS_codpais() { return $this->s_codPais; }
	public function getI_numcasillero() { return $this->i_numCasillero; }
	public function getS_descripcion() { return $this->s_descripcion; }
	public function getI_piezaseninterior() { return $this->i_piezasEnInterior; }
	public function getI_piezas() { return $this->i_piezas; }
	public function getD_peso() { return $this->d_peso; }
	public function getD_largo() { return $this->d_largo; }
	public function getD_ancho() { return $this->d_ancho; }
	public function getD_espesor() { return $this->d_espesor; }
	public function getE_tipo() { return $this->e_tipo; }
	public function getD_valorcomercial() { return $this->d_valorComercial; }
	public function getDt_fechaingresoamiami() { return $this->dt_fechaIngresoAMiami; }
	public function getDt_fechaultimoestado() { return $this->dt_fechaUltimoEstado; }
	public function getS_manifiesto() { return $this->s_manifiesto; }
	public function getS_estadoimportacion() { return $this->s_estadoImportacion; }
	public function getS_estadoarchivado() { return $this->s_estadoArchivado; }

}

?>
