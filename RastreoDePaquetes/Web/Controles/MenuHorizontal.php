<?php
$menu = 1;
?>
<ul class="menu">     
    <li><a href="http://localhost/MailBoxesOnlineTracking/RastreoDePaquetes/Web/Index.php">Inicio</a></li> 
    <li><a href="<?php echo ('Clientes.php?vista=CalculadoraImpuestos');?>">Calculadora</a></li> 
    <li>
        <a href="#">Login</a>
        <ul class="submenu"> 
            <li><a href="<?php echo ('Clientes.php?vista=LogInCliente');?>">Ingreso al sistema</a></li> 
            <li><a href="#">Cambio contraseña</a></li> 
            
        </ul>
    </li> 
     
    <li> 
        <a href="#">Empleados</a> 
        <ul class="submenu"> 
            <li><a href="<?php echo ('Empleados.php?vista=InsertarEmpleado');?>">Agregar Empleado</a></li> 
            <li><a href="<?php echo ('Empleados.php?vista=BuscarEmpleado');?>">Buscar Empleado</a></li> 
            <li><a href="<?php echo ('Empleados.php?vista=ListarEmpleado');?>">Listar Empleados</a></li>
        </ul> 
    </li> 
    
    <li> 
        <a href="#">Clientes</a> 
        <ul class="submenu"> 
            <li><a href="<?php echo ('Clientes.php?vista=RegistroClientesManual');?>">Agregar Nuevo Cliente</a></li> 
            <li><a href="<?php echo ('Clientes.php?vista=IngresoClienteCargaArchivotxt');?>">Carga de Clientes por Archivo</a></li> 
            <li><a href="<?php echo ('Clientes.php?vista=ActualizacionDatosCliente');?>">Actualizar Datos del Cliente</a></li>  
            <li><a href="<?php echo ('Clientes.php?vista=ClienteActualizaInformacion');?>">Actualizar Informacion Personal</a></li>
            <li><a href="Clientes.php?vista=ListarCliente">Lista de Clientes</a></li>
            <li><a href="#">Buscar Cliente</a></li>
            <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetesCliente');?>">Consultar Paquetes</a></li>
            <li><a href="<?php echo ('PreAlertas.php?vista=InsertarPreAlerta');?>">Agregar Pre-Alertas</a></li>
        </ul> 
    </li> 
    
    <li> 
        <a href="#">Paquetes</a> 
        <ul class="submenu">
            <li><a href="<?php echo ('Manifiestos.php?vista=CargarManifiesto');?>">Carga de Manifiestos</a></li> 
            <li><a href="<?php echo ('Manifiestos.php?vista=ActualizarManifiestos');?>">Actualizar Estado Manifiestos</a></li>
            <li><a href="<?php echo ('SeguimientoDePaquetes.php?vista=CargaDeListadoDePaquetes');?>">Carga Listado de Paquetes</a></li>
            <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetes');?>">Consultar Paquetes</a></li>
            
            
        </ul> 
    </li> 
    <li> 
        <a href="#">Configuracion</a> 
        <ul class="submenu"> 
            <li><a href="<?php echo ('Tiendas.php?vista=AgregarTienda');?>">Agregar Tienda</a></li>
             
        </ul> 
    </li> 
    <li><a href="">Quienes Somos?</a></li> 
    <li><a href="">Contáctenos</a></li> 
    
</ul> 
<br/>