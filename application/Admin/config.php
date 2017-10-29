<?php


return [

	// 异常页面的模板文件
    'exception_tmpl'         => '/student/application/Admin/View/Common/404.html',
    // 错误显示信息,非调试模式有效
	'error_message'          => '页面错误！请稍后再试～',
	// 显示错误信息
	'show_error_msg'         => false,

	// 视图输出字符串内容替换
	'view_replace_str'  =>  [
	    '__JS__'    => '/student/public/Admin/assets/js',
	    '__CSS__'   => '/student/public/Admin/assets/css',
	    '__IMG__'   => '/student/public/Admin/assets/img',
	    '__I__'     => '/student/public/Admin/assets/i',
	],
];

