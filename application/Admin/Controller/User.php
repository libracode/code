<?php

namespace app\Admin\Controller;

class User extends Admin
{
	public function index()
	{
		return $this->fetch('index');
	}
}