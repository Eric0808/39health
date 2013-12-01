<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('foreground');

class index extends foreground {

	protected $_uid = false;
	function __construct() {
		parent::__construct();
		pc_base::load_app_func('global');
		$this->_uid = param::get_cookie('_userid');
	}
	
	 /**
	 *	生成邀请链接
	 */
	public function my_invite_code() {
		
		if($this->_uid){
			$invite_code = invite_code($this->_uid);
			$invite_link = APP_PATH.'api.php?op=invite_check&code='.$invite_code;
		}
		else{
			$is_exit = '0';//未登录
		}
		
  		include template('invite', 'my_invite_code');
	} 

	/*我的邀请记录*/
	public function my_invite_list()
	{
		$objInvite = pc_base::load_app_class('invite_log');
		$member_db = pc_base::load_model('member_model');
		$invite_logs = $objInvite->get_uer_invite($this->_uid);
		if($invite_logs){
			foreach ($invite_logs as &$value) {
				
				$value['time'] = date('Y-m-d H:i:s',$value['time']);
				$member_info = $member_db->get_one(array('userid'=>$value['from_uid']));
				$value['name'] = $member_info['username'];
			}
		}
		//print_r($invite_logs);die;
		include template('invite', 'my_invite_list');
	}


	
}
?>