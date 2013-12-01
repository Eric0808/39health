<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
pc_base::load_sys_class('param', '', 0);
$system = pc_base::load_config('system');
$invite_code = isset($_GET['code'])?$_GET['code']:false;
if($invite_code){
	$get_cookie = param::get_cookie('invite_code');
	if(!$get_cookie){
		$cookietime = time()+3600*24*30;
		param::set_cookie('invite_code', $invite_code, $cookietime);
	}
	header("location:".$system['app_path']);
	
}
else
{
	echo '无效的链接！';die;
}


?>
