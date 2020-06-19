<?php namespace App\Controllers;

class Empleado extends BaseController
{
	public function index()
	{
		return view ('empleados\Vempleados');
	}
}
