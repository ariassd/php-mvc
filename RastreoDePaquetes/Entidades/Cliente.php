<?php
import("MbeFramework.MbeEntity");
class Cliente extends MbeEntity {
    private $i_idCliente;
    private $s_nombreCompleto;
    private $s_direccion;
    private $s_estado;
    
    public function getI_idCliente() {
        return $this->i_idCliente;
    }

    public function setI_idCliente($i_idCliente) {
        $this->i_idCliente = $i_idCliente;
    }

    public function getS_nombreCompleto() {
        return $this->s_nombreCompleto;
    }

    public function setS_nombreCompleto($s_nombreCompleto) {
        $this->s_nombreCompleto = $s_nombreCompleto;
    }

    public function getS_direccion() {
        return $this->s_direccion;
    }

    public function setS_direccion($s_direccion) {
        $this->s_direccion = $s_direccion;
    }

    public function getS_estado() {
        return $this->s_estado;
    }

    public function setS_estado($s_estado) {
        $this->s_estado = $s_estado;
    }

}

?>
