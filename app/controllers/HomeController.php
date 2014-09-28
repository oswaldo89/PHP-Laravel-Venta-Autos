<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('site.index');
	}

	public function listado()
	{
		return View::make('site.listado');
	}

	public function registro()
	{
		return View::make('site.registro');
	}

	public function acceso()
	{
		return View::make('site.acceso');
	}

	public function recuperarPassword()
	{
		return View::make('site.recuperar-password');
	}

	public function detalleAnuncio()
	{
		return View::make('site.detalle-anuncio');
	}
}
