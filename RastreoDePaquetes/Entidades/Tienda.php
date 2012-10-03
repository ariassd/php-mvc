<?php
import("MbeFramework.MbeEntity");

class Tienda  extends MbeEntity {
    private $i_idTienda;
    private $s_descripcion;
    private $s_estado;


    public function getI_idTienda() {
        return $this->i_idTienda;
    }
    
    public function setI_idTienda( $valor) {
        $this->i_idTienda = $valor;
    }
    
    public function getS_descripcion() {
        return $this->s_Descripcion;
    }
    
    public function setS_descripcion( $valor) {
        $this->s_Descripcion = $valor;
    }
    public function getS_estado() {
        return $this->s_Estado;
    }
    
    public function setS_estado( $valor) {
        $this->s_Estado = $valor;
    }
    
}
?>
