<?php
$menu = 1;
?>
<div id="menuheader">
       <ul class="nav">
           <li><a href="Index.php?vista=BienvenidaSistema">Inicio</a></li>
           <li><a href="javascript:return(false)">Clientes</a>
               <ul>
                   <li><a href="<?php echo ('Clientes.php?vista=IngresoClienteCargaArchivotxt');?>">Agregar Clientes por Archivo .txt</a></li>
                   <li><a href="<?php echo ('Clientes.php?vista=RegistroClientesManual');?>">Agregar Clientes</a></li>
                   <li><a href="<?php echo ('Clientes.php?vista=ActualizacionDatosCliente');?>">Actualizar Informacion del Cliente</a></li>
                   <li><a href="<?php echo ('Clientes.php?vista=BuscarClientes');?>">Buscar Clientes</a></li>
                   <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetesCliente');?>">Consultar Paquetes</a></li>
                   <li><a href="<?php echo ('Clientes.php?vista=CalculadoraImpuestos');?>">Calcular Impuestos</a></li> 
                   <li><a href="<?php echo ('Clientes.php?vista=ClienteActualizaInformacion');?>">Actualizar Informacion</a></li>
                   <li><a href="<?php echo ('Paquetes.php?vista=ConsultaPaquetes');?>">Consultar Paquetes CL</a></li>
                   <li><a href="<?php echo ('Clientes.php?vista=CambioContrasena');?>">Cambiar Contraseña</a></li>
                   <li><a href="">Pre-Alertas</a>
                       <ul>
                            <li><a href="<?php echo ('PreAlertas.php?vista=InsertarPreAlerta');?>">Agregar Pre-Alerta</a></li>
                            <li><a href="">Buscar Pre-Alerta</a></li>
                       </ul>
                   </li> 
                   <li><a href="">Notificar Paquete Perdido</a></li>
               </ul>
            </li> 
            <li><a href="javascript:return(false)">Seguimiento Paquetes</a>
                <ul>
                   <li><a href="<?php echo ('SeguimientoDePaquetes.php?vista=CargaDeListadoDePaquetes');?>">Cargar Listado de Paquetes</a></li>
                   <li><a href="<?php echo ('Manifiestos.php?vista=CargarManifiesto');?>">Carga de Manifiestos</a></li>
                   <li><a href="<?php echo ('Manifiestos.php?vista=ActualizarManifiestos');?>">Actualizacion de Estados</a></li>
                   <li><a href="<?php echo ('Manifiestos.php?vista=MantenimientoDeEstados');?>">Mantenimiento de Estados</a></li>
                                      
                </ul>
            </li>  
            <li><a href="javascript:return(false)">Administración</a>
                <ul>
                   <li><a href="javascript:return(false)">Administración de Usuarios</a>
                       <ul>
                       <li><a href="<?php echo ('Empleados.php?vista=InsertarEmpleado');?>">Registrar Empleado</a></li>
                       <li><a href="<?php echo ('Empleados.php?vista=BuscarEmpleados');?>">Buscar Empleados</a></li>
                       </ul>
                   </li>
                   <li><a href="<?php echo ('Clientes.php?vista=CambioContrasena');?>">Cambiar Contraseña</a></li>
                   <li><a href="<?php echo ('Empleados.php?vista=AdministracionDePermisos');?>">Administración de Permisos</a></li> 
                </ul>
            </li> 
            <li><a href="javascript:return(false)">Configuración</a>
                <ul>
                   <li><a href="Idiomas.php?vista=ListarIdiomas">Gestión de Idiomas</a></li>
                   <li><a href="javascript:return(false)">Gestión de Publicidad</a>
                        <ul>
                            <li><a href="<?php echo ('Banners.php?vista=IngresarBanner');?>">Agregar Publicidad</a></li>
                            <li><a href="<?php echo ('Banners.php?vista=BuscarBanners');?>">Buscar Publicidad</a></li>
                        </ul>
                   </li>
                   <li><a href="javascript:return(false)">Gestion Tiendas</a>
                       <ul>
                            <li><a href="Tiendas.php?vista=AgregarTienda">Agregar Tienda</a></li>
                            <li><a href="">Buscar Tiendas</a></li>
                       </ul>
                   </li> 
                   <li><a href="">Mantenimiento Valores Arancelarios</a></li>
                </ul>
            </li>
            
            
        <li><a href="javascript:return(false)">Contáctenos</a></li>    

        </ul>
    </div>
