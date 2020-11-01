<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('TiendaModelo');
	}

	public function index()
	{
		$data['publicidad'] = $this->TiendaModelo->obtenerPublicidad();
		$data['moviles'] = $this->TiendaModelo->obtenerProductosMoviles();
		//var_dump($data);exit;
		$this->load->view('index',$data);
	}

	public function productos(){
		$this->load->view('productos');
	}

	public function contacto(){
		$this->load->view('contacto');
	}

	public function quienes_somos(){
		$this->load->view('quien_somos');
	}

	public function ver_carrito(){
		$post = $this->input->post();
		$data['moviles'] = array();
		foreach ($post as $it){
			$data['moviles'][] = $this->TiendaModelo->obtenerProductoMovil($it);
		}
		$this->load->view('carrito',$data);
	}
}
