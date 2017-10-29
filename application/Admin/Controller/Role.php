<?php

namespace app\Admin\Controller;

class Role extends Admin
{
	public function index()
	{
		return $this->fetch('index');
	}
}