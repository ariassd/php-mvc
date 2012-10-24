<?php
include("../../MbeFramework/MbeFramework.php");
import("MbeFramework.Configuracion.ConfigurationSettings");

class EstadoManifiestoBL{
    public static function CrearEstado($idEstado,$Descripcion,$Activo){
        $Estado=new EstadoManifiesto();
        $Estado->setI_idEstado($idEstado);
        $Estado->setS_descripcion($Descripcion);
        $Estado->setS_activo($Activo);
        
        return $Estado;
    }
}
?>
