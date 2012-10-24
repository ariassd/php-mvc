<?php
import("MbeFramework.MbeEntity");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




class EstadoManifiesto extends MbeEntity{
    private $i_idEstado;
    private $s_descripcion;
    private $s_activo;
    
    
    public function getI_idEstado() {
        return $this->i_idEstado;
    }

    public function setI_idEstado($i_idEstado) {
        $this->i_idEstado = $i_idEstado;
    }

    public function getS_descripcion() {
        return $this->s_descripcion;
    }

    public function setS_descripcion($s_descripcion) {
        $this->s_descripcion = $s_descripcion;
    }

    public function getS_activo() {
        return $this->s_activo;
    }

    public function setS_activo($s_activo) {
        $this->s_activo = $s_activo;
    }


}
?>
