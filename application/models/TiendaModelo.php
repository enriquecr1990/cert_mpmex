<?php

defined('BASEPATH') OR exit('No tiene access al script');

class TiendaModelo extends CI_Model{

	function __construct()
	{

	}

	public function obtenerPublicidad(){
		$publicidad = array(
			array('url' => base_url().'assets/img/publicidad/pub001.jpg','alt' => 'Publicidad 01'),
			array('url' => base_url().'assets/img/publicidad/pub002.jpg','alt' => 'Publicidad 02'),
			array('url' => base_url().'assets/img/publicidad/pub003.jpg','alt' => 'Publicidad 03'),
		);
		return $publicidad;
	}

	public function obtenerProductosMoviles(){
		$productos[] = $this->obtenerProductoMovil(1234);
		$productos[] = $this->obtenerProductoMovil(1235);
		$productos[] = $this->obtenerProductoMovil(1236);
		$productos[] = $this->obtenerProductoMovil(1237);
		return $productos;
	}

	public function obtenerProductoMovil($id){
		$producto = array();
		switch ($id){
			case 1234:
				$producto = array(
					'id' => 1234,
					'nombre' => 'Samsung galaxy M',
					'descripcion' => 'Dispositivo móvil de Tienda e-commerce',
					'imagen' => base_url().'assets/img/productos/moviles/sg_m20.jpg',
					'precio' => '2859.99',
				);
				break;
			case 1235:
				$producto = array(
					'id' => 1235,
					'nombre' => 'Motorola G9 power',
					'descripcion' => 'Dispositivo móvil de Tienda e-commerce',
					'imagen' => base_url().'assets/img/productos/moviles/moto_g9.jpg',
					'precio' => '5999.99',
				);
				break;
			case 1236:
				$producto = array(
					'id' => 1236,
					'nombre' => 'iPhone 12',
					'descripcion' => 'Dispositivo móvil de Tienda e-commerce',
					'imagen' => base_url().'assets/img/productos/moviles/iphone_12.jpg',
					'precio' => '22999.99',
				);
				break;
			case 1237:
				$producto = array(
					'id' => 1237,
					'nombre' => 'Huawei P40 Lite',
					'descripcion' => 'Dispositivo móvil de Tienda e-commerce',
					'imagen' => base_url().'assets/img/productos/moviles/huawei_p40_lite.jpg',
					'precio' => '6999.99',
				);
				break;
		}
		return $producto;
	}

}
