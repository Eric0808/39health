<?php
/**
 * 企业会员后台操作类。完善公司信息，发布、修改信息等
 */

defined('IN_PHPCMS') or exit('No permission resources.');
define('CACHE_MODEL_PATH', CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
pc_base::load_app_class('common');
pc_base::load_sys_class('form', '', 0);
pc_base::load_app_func('global','yp');
class business extends common {

	function __construct() {
		parent::__construct();
		$company_memberinfo = $this->memberinfo;
		define('COMPANY_URL', $company_memberinfo['url']);
   	}

   	public function init()
   	{
   		header("location:index.php?m=yp&c=business&a=pay&t=4");
   	}

	//订单处理
	public function pay() {
		$o = pc_base::load_app_class('order');
		$status = isset($_GET['status']) ? intval($_GET['status']) : '';
		$data = $o->user_listinfo($this->_userid, $status);
		$pages = $o->pages;
		include template('yp', 'company_order');
	}
	//查看订单详情
	public function check_pay() {
        $id = intval($_GET['id']);
        if (!$id) {
            showmessage(L('illegal_parameters'));
        }
        $o = pc_base::load_app_class('order');
        if (isset($_POST['dosubmit'])) {
            $o->update($id, $_POST['info']);
            showmessage(L('operation_success'), APP_PATH.'index.php?m=yp&c=business&a=pay&t=3');
        } else {
            $info = $o->get($id);
            include template ('yp', 'company_check_order');
        }
	}

	public function member_address() {
		$userid = param::get_cookie('_userid');
		if (!$userid) showmessage(L('login_website'), APP_PATH.'index.php?m=member&c=index&a=login&forward='.urlencode($_SERVER["REQUEST_URI"]));
		
		$member_address = pc_base::load_model('member_address_model');
		$address = $member_address->get_one(array('userid'=>$userid));
		$member_db = pc_base::load_model('member_model');

		//seo
		$siteid = get_siteid();
		$SEO = seo($siteid, '', '收货地址');
		include template('yp', 'member_address');
	}

	
}
?>