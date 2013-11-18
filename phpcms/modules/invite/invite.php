<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);

class invite extends admin {

	private $db;

	function __construct() {
		parent::__construct();
	}

	public function init() {
		include $this->admin_tpl('yp_quick_panel');
	}

	public function setting() {
		$module_db = pc_base::load_model('module_model');
		if (isset($_POST['dosubmit'])) {
			$_POST['setting']['priv'] = $_POST['priv'];
			$setting = array2string($_POST['setting']);
			$module_db->update(array('setting'=>$setting), array('module'=>'invite'));
 			setcache('invite_setting', $_POST['setting']);
  			showmessage(L('operation_success'), HTTP_REFERER);
		} else {
			pc_base::load_sys_class('form', '', '');
			$setting = $module_db->get_one(array('module'=>'invite'), 'setting');
			$setting = string2array($setting['setting']);
			$show_validator = 1;
 			include $this->admin_tpl('invite_setting');
		}
	}
}
?>