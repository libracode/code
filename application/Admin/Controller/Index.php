<?php

namespace app\Admin\Controller;


class Index extends Admin
{
	public function index()
	{
		if(true)
			return $this->fetch('index');
		else
			return $this->redirect('Common/login');
	}
}