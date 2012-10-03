<?php
class MySqlHelper {
    //_BASE_PATH_;
    public static function ExecuteQuery($connectionParams, $query) {
        
        if ($connectionParams == null) {
            throw new Exception("Must specify the connection parameters");
        }
        
        if ($connectionParams["dbServer"] != "MYSQL") {
            throw new Exception("This connection is not for MySQL Must specify 'MYSQL' in the connection configuration");
        }
        
        $dataTable = NULL;
        
        try {
            $link =  mysql_connect($connectionParams["host"], $connectionParams["user"], $connectionParams["password"]);
            if (!$link) {
                die('Cannot connect to mysql: ' . mysql_error());
            }
            
            mysql_select_db($connectionParams["database"], $link); 
            $result = mysql_query($query);
            
            $dataTable = $result;

            mysql_close($link);
            $link = null;
            
        } catch (Exception $e) {    
            throw($e);
        }
		
	return $dataTable;
		
    }


}

?>
