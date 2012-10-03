<?php

/**
 * MbeFramework
 *
 * Clase de entidada para las entidades del sistema, aqui se definen las 
 * propiedades para las entidades
 *
 * @author Luis Diego Arias Segura
 *
 * @package MbeFramework.MbeEntity.php
 */
class MbeEntity {
    /**
     * Para las propiedades de get de las entidades
     *
     * @access public
     * @param string $propiedad el nombre del atributo que se desea acceder
     */
    public function __get ($propiedad)
    {
        if (method_exists ($this, $metodo = 'get' . ucfirst($propiedad)))
            return $this->$metodo();
    }
 
    /**
     * Para las propiedades de set de las entidades
     *
     * @access public
     * @param string $propiedad el nombre del atributo que se desea acceder
     * @param string $valor el valor que se le desea aplicar al atributo
     */
    public function __set ($propiedad, $valor)
    {
        if (method_exists($this, $metodo = 'set' . ucfirst($propiedad)))
            $this->$metodo($valor);
    }
}

?> 