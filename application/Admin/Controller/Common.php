<?php

namespace app\Admin\Controller;

class Common extends Admin
{
	public function login()
	{
		return $this->fetch('login');
	}
}