<?php
$menu = 1;
?>
<ul class="menu">     
    <li><a href="Index.php">Inicio</a></li> 
    <li> 
        <a href="javascript:return(false)">Clientes</a> 
        <ul class="submenu"> 
            
            <li><a href="<?php echo ('Clientes.php?vista=IngresoClienteCargaArchivotxt');?>">Insertar Clientes por Archivo TXT</a></li>
            <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetesCliente');?>">Consultar Paquetes</a></li>
            <li><a href="<?php echo ('Clientes.php?vista=RegistroClientesManual');?>">Insertar Client Manual</a></li> 
            <li><a href="<?php echo ('Clientes.php?vista=ClienteActualizaInformacion');?>">Actualizacion de Datos</a></li>
            <li><a href="<?php echo ('Clientes.php?vista=ActualizacionDatosCliente');?>">Cambio de contraseña</a></li> 
            <li><a href="<?php echo ('PreAlertas.php?vista=InsertarPreAlerta');?>">Pre-Alertas</a></li>
            <li><a href="">Notificar Paquete Perdido</a></li>
            <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetes');?>">Consultar Paquetes</a></li>
            <li><a href="<?php echo ('Clientes.php?vista=CalculadoraImpuestos');?>">Calculadora de Impuestos</a></li>     
        </ul> 
    </li> 
    <li> 
        <a href="javascript:return(false)">Seguimiento Paquetes</a> 
        <ul class="submenu">
            <li><a href="<?php echo ('SeguimientoDePaquetes.php?vista=CargaDeListadoDePaquetes');?>">Carga Listado de Paquetes</a></li>
            <li><a href="<?php echo ('Manifiestos.php?vista=CargarManifiesto');?>">Carga de Manifiestos</a></li> 
            <li><a href="<?php echo ('Manifiestos.php?vista=ActualizarManifiestos');?>">Actualizacion de Estados</a></li>
            <li><a href="<?php echo ('Manifiestos.php?vista=MantenimientoDeEstados');?>">Mantenimiento de Estados</a></li>
        </ul> 
    </li> 
    <li> 
        <a href="javascript:return(false)">Administracion</a> 
        <ul class="submenu"> 
            <li><a href="<?php echo ('Empleados.php?vista=AdministracionUsuarios');?>">Administracion de Usuarios</a></li>
            <li><a href="<?php echo ('Empleados.php?vista=InsertarEmpleado');?>">Cambiar Contraseña</a></li>
            <li><a href="<?php echo ('Empleados.php?vista=AdministracionDePermisos');?>">Administracion de Permisos</a></li> 
            <li><a href="<?php echo ('Empleados.php?vista=InsertarEmpleado');?>">Insertar Empleado</a></li> 
        </ul> 
    </li> 
    
    <li> 
        <a href="javascript:return(false)">Configuracion</a> 
        <ul class="submenu"> 
            <li><a href="">Gestion de Idiomas</a></li>
            <li><a href="">Gestion de Publicidad</a></li>
            <li><a href="">Mantenimiento de Valores Arancelarios</a></li>
            <li><a href="<?php echo ('Tiendas.php?vista=AgregarTienda');?>">Gestion de Tiendas</a></li>
             
        </ul> 
    </li> 
    <li><a href="">Contáctenos</a></li> 
    
</ul> 
<br/>