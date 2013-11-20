<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
	function __construct() {
		pc_base::load_app_func('global');
	}
	
	/*public function init() {
		$siteid = SITEID;
 		$setting = getcache('link', 'commons');
		$SEO = seo(SITEID, '', L('link'), '', '');
		include template('link', 'index');
	}*/
	
	 /**
	 *	生成邀请链接
	 */
	public function my_invite_code() {
		$userid = param::get_cookie('_userid');
		if($userid){
			$invite_code = invite_code($userid);
			$invite_link = APP_PATH.'index.php?m=member&c=index&a=register&siteid=1&code='.$invite_code;
		}
		else{
			$is_exit = '0';//未登录
		}
		
  		include template('invite', 'my_invite_code');
	} 
 	
	 
	
}
?>