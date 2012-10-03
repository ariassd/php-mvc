<?php
/**
 * ConfigurationSettingsException
 *
 * Clase para manejo de excepciones de de la clase de configuration
 *
 * @author Luis Diego Arias Segura
 *
 * @package MbeFramework.Configuration.ConfigurationSettingsException.php
 */
class ConfigurationSettingsException extends Exception {
    
}

/**
 * ConfigurationSettings
 *
 * Clase para manejo de configuraciones por medio de arrchivo de configuracion
 *
 * @author Luis Diego Arias Segura
 *
 * @package MbeFramework.Configuration.ConfigurationSettings.php
 */
class ConfigurationSettings {

    /**
     * Lee el archivo de configuracion
     * @param String $fileName Nombre del archivo que se desea leer
     * @return 
     */
     
    public static function ReadConfigurationSetting($fileName) {

        $xml = new XMLReader();
        $xml->open($fileName);
        $tree = null;
        while ($xml->read()) {
            switch ($xml->nodeType) {
                case XMLReader::END_ELEMENT: return $tree;
                    break;
                case XMLReader::ELEMENT:
                    if ($xml->name == 'dataBaseConnection') {
                        $node[$xml->getAttribute("name")] = array(
                            "host" => $xml->getAttribute("host"),
                            "user" => $xml->getAttribute("user"),
                            "password" => $xml->getAttribute("password"),
                            "database" => $xml->getAttribute("database"),
                            "dbServer" => $xml->getAttribute("dbServer"),
                            "provider" => $xml->getAttribute("provider"),
                        );
                        $tree["ConectionString"] = $node;
                    }
                    if ($xml->name == 'add') {
                        $nodeSett[$xml->getAttribute("key")] = $xml->getAttribute("value");
                        $tree["ApplicationSetting"] = $nodeSett;
                    }
                    break;
                case XMLReader::TEXT: break;
                case XMLReader::CDATA: break;
                //$tree .= $xml->value;
            }
        }
        $xml->close();
        return $tree;
    }

    /**
     * Lectura de strings de conexion del archivo de configuracion
     * @param String $cnxName el nombre del string de conexion
     * @param string $configFile la ruta del archivo de configuracion
     * @param type $fileBase
     * @return String el string de conexion del archivo de configuracion
     */
    public static function GetConnectionString($cnxName, $configFile = null, $fileBase = __FILE__) {

        if ($configFile == null) {
            $configFile = dirname(_BASE_PATH_) . DIRECTORY_SEPARATOR . 'webconfig.xml';
        }
        $config = self::ReadConfigurationSetting($configFile);
        return $config["ConectionString"][$cnxName];
    }

    /**
     * Lee una llave del archivo de configuracion,
     * @param String $keyName Nombre de la llave de configuracion
     * @param string $configFile la ruta del archivo de configuracion
     * @return String el valor de la llave en el archivo
     */
    public static function GetApplicationSetting($keyName, $configFile = null) {
        if ($configFile == null) {
            $configFile = dirname(_BASE_PATH_) . DIRECTORY_SEPARATOR . 'webconfig.xml';
        }
        $config = self::ReadConfigurationSetting($configFile);
        return $config["ApplicationSetting"][$keyName];
    }

}

?> 