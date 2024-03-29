<?php

namespace App\Controllers;
use App\Core\Controller as Controller;

class Home extends Controller
{
	public function index($name = '')
	{
		$user = $this->model('User');
		$user->name = $name;
		$this->view('home/index', ['name' => $user->name]);
	}
}