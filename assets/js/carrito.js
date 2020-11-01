$(document).ready(function(){

	$(document).on('click','.agregarCarrito',function(){
		var btnProducto = $(this);
		Carrito.agregarProducto(btnProducto.data('id'));
		Carrito.cesta();
	});

	$(document).on('click','#lnkCarrito',function(){
		Carrito.mostrar();
	});

	$(document).on('click','.eliminarProducto',function () {
		var btnProducto = $(this);
		$('#divMovil'+btnProducto.data('id')).fadeOut();
		$('#divMovil'+btnProducto.data('id')).remove();
		Carrito.removerElemento(btnProducto.data('id'));
	});

});

var Carrito = {

	agregarProducto : function(id){
		var cesta = JSON.parse(window.localStorage.getItem('cesta'));
		if(cesta.length == 0){
			cesta = [id];
		}else{
			cesta.push(id);
		}
		window.localStorage.setItem('cesta',JSON.stringify(cesta));
	},

	cesta : function (){
		var cesta = JSON.parse(window.localStorage.getItem('cesta'));
		if(cesta == null){
			
		}else{
			if(cesta.length > 0){
				$('#bdg_carrito').html(cesta.length);
				$('#bdg_carrito').fadeIn();
			}else{
				$('#bdg_notificacion').fadeOut();
			}
		}
	},

	mostrar : function (){
		var cesta = JSON.parse(window.localStorage.getItem('cesta'));
		Master.post(base_url + 'tienda/ver_carrito',cesta);
	},

	removerElemento : function (id){
		var cesta = JSON.parse(window.localStorage.getItem('cesta'));
		var indice = cesta.indexOf(id);
		if(indice > -1){
			cesta.splice(indice,1);
		}
		window.localStorage.setItem('cesta',JSON.stringify(cesta));
		Carrito.cesta();
	}

};
