$(document).ready(function(){

	Load.startMenuUsr();
	Load.cesta();
	Load.notificaciones();

});

var Load = {

	startMenuUsr : function (){
		$('#navbarDropdown').trigger('click');
	},

	cesta : function (){
		Carrito.cesta();
	},

	notificaciones : function(){
		var notificaciones = JSON.parse(window.localStorage.getItem('notificaciones'));
		if(notificaciones.length > 0){
			$('#bdg_notificacion').html(notificaciones.length);
			$('#bdg_notificacion').fadeIn();
		}else{
			$('#bdg_notificacion').fadeOut();
		}
	}

}
