<?php namespace App\Controllers;

class Empleadomostrar extends BaseController
{
	public function index()
	{
		return view ('empleados\VempleadosVeer');
	}
}
