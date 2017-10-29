<?php

namespace app\Admin\Controller;

class Access extends Admin
{
	public function index()
	{
		return $this->fetch('index');
	}
}