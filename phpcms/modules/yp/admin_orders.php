<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form', '', 0);
pc_base::load_app_func('global','yp');
class admin_orders extends admin {
	private $db;
	public $siteid;
	function __construct() {
		parent::__construct();
		$this->siteid = $this->get_siteid();
	}
	
	//订单处理
	public function pay() {
		$order_list  = 	array(
			array(''),
			);
		$o = pc_base::load_app_class('order');
		$status = isset($_GET['status']) ? intval($_GET['status']) : '';
		//echo $status;exit;
		$data = $o->admin_listinfo($this->_userid, $status);
		$pages = $o->pages;
		include $this->admin_tpl('order_list');
	}
	//查看订单详情
	public function check_pay() {
		unset($show_header);
        $id = intval($_GET['id']);
        if (!$id) {
            showmessage(L('illegal_parameters'));
        }
        $o = pc_base::load_app_class('order');
        if (isset($_POST['dosubmit'])) {
            $o->update($id, $_POST['info']);
            showmessage(L('operation_success'), APP_PATH.'index.php?m=yp&c=admin_orders&a=pay&t=3');
        } else {
            $info = $o->get($id);
            //print_r($info);
            include $this->admin_tpl('order_detail');
        }
	}

	//发布商品
	public function add_product()
	{
		$url_forward = APP_PATH.'index.php?m=content&c=content&a=add&menuid=&catid=15';
		showmessage('发布商品', $url_forward);
	}

}
?>