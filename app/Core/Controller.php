<?php

namespace App\Core;

class Controller
{
	public function model($model)
	{
		$model = "\\App\\Models\\" . $model;
		return new $model;
	}

	public function view($view, array $data = [])
	{
		require_once __DIR__ . '/../Views/' . $view . '.php';
	}
}
