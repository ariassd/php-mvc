$(document).ready(function(){
 
	$("ul.submenu").parent().append("<span></span>"); 
	
	$("ul.menu li").click(function() { //Al hacer click se ejecuta...
		
		//Con este codigo aplicamos el movimiento de arriva y abajo para el submenu
		$(this).find("ul.submenu").slideDown('fast').show(); //Menu desplegable al hacer click
 
		$(this).hover(function() {
		}, function(){	
			$(this).find("ul.submenu").slideUp('slow'); //Ocultamos el submenu cuando el raton sale fuera del submenu
		});
 
		}).hover(function() { 
			$(this).addClass("subhover"); //Agregamos la clase subhover
		}, function(){	//Cunado sale el cursor, sacamos la clase
			$(this).removeClass("subhover"); 
	});
 
});