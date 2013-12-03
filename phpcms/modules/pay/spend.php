<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class spend extends admin {
	private $db,$member_db;
	
	public function __construct() {
		$this->db = pc_base::load_model('pay_spend_model');
		parent::__construct();
	}
	
	public function init() {
		pc_base::load_sys_class('form', '', 0);
		pc_base::load_sys_class('format', '', 0);
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$sql =  "";
		if (isset($_GET['dosubmit'])) {
			$username = isset($_GET['username']) && trim($_GET['username']) ? trim($_GET['username']) : '';
			$op = isset($_GET['op']) && trim($_GET['op']) ? trim($_GET['op']) : '';
			$user_type = isset($_GET['user_type']) && intval($_GET['user_type']) ? intval($_GET['user_type']) : '';
			$op_type = isset($_GET['op_type']) && intval($_GET['op_type']) ? intval($_GET['op_type']) : '';
			$type = isset($_GET['type']) && intval($_GET['type']) ? intval($_GET['type']) : '';
			$endtime = isset($_GET['endtime'])  &&  trim($_GET['endtime']) ? strtotime(trim($_GET['endtime'])) : '';
			$starttime = isset($_GET['starttime']) && trim($_GET['starttime']) ? strtotime(trim($_GET['starttime'])) : '';
			
			if (!empty($starttime) && empty($endtime)) {
				$endtime = SYS_TIME;
			}
			
			if (!empty($starttime) && !empty($endtime) && $endtime < $starttime) {
				showmessage(L('wrong_time_over_time_to_time_less_than'));
			}
			
			
			if (!empty($username) && $user_type == 1) {
				$sql .= $sql ? " AND `username` = '$username'" : " `username` = '$username'";
			}
			
			if (!empty($username) && $user_type == 2) {
				$sql .= $sql ? " AND `userid` = '$username'" : " `userid` = '$username'";
			}
			
			if (!empty($starttime)) {
				$sql .= $sql ? " AND `creat_at` BETWEEN '$starttime' AND '$endtime' " : " `creat_at` BETWEEN '$starttime' AND '$endtime' ";
			}
			
			if (!empty($op) && $op_type == 1) {
				$sql .= $sql ? " AND `op_username` = '$op' " : " `op_username` = '$op' ";
			} elseif (!empty($op) && $op_type == 2) {
				$sql .= $sql ? " AND `op_userid` = '$op' " : " `op_userid` = '$op' ";
			}
			
			if (!empty($type)) {
				$sql .= $sql ? " AND `type` = '$type' " : " `type` = '$type'";
			}
		}
		$list = $this->db->listinfo($sql, '`id` desc', $page);
		$pages = $this->db->pages;
		include $this->admin_tpl('spend_list');
	}
	
	/*会员提现申请*/
	public function withdraw_list()
	{
		
		pc_base::load_sys_class('form', '', 0);
		pc_base::load_sys_class('format', '', 0);
		$with_draw_db = pc_base::load_model('with_draw_model');
		$this->member_db = pc_base::load_model('member_model'); //加载会员数据模型
		//$status_one = $this->member_db->update(array('point'=>'-='.$cut_point), array('userid'=>$userid));
		//$status_two = $this->member_db->update(array('amount'=>'-='.$cut_amount), array('userid'=>$userid));
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$list = $with_draw_db->listinfo('', '`id` desc', $page);

		foreach ($list as $key => &$value) {
			$userinfo = $this->member_db->get_one(array('userid'=>$value['uid']),'username');
			$value['username'] = $userinfo['username'];
			self::parse_status($value['status']);
		}
		//print_r($list);die;
		$pages = $with_draw_db->pages;
		include $this->admin_tpl('withdraw_list');
	}

	private function parse_status(&$status)
	{
		switch ($status) {
			case 0:
				$status = '等待审核';
				break;
			case 2:
				$status = '审核不通过';
				break;
			case 1:
				$status = '处理成功';
				break;
			default:
				$status = '等待审核';
				break;
		}
	}

	public function check_fail()
	{
		$with_draw_db = pc_base::load_model('with_draw_model');
		$this->member_db = pc_base::load_model('member_model'); //加载会员数据模型
		//if(isset($_GET['dosubmit'])) {
			$ids = $_GET['id'];
			if(!empty($ids)){
				$ids_arr = explode('|', $ids);
				foreach ($ids_arr as $key => $value) {
					$with_draw_db->update(array('status'=>2), array('id'=>intval($value)));
					$info = $with_draw_db->get_one(array('id'=>intval($value)),'*');
					//print_r($info);die;
					$status_one = $this->member_db->update(array('point'=>'+='.$info['cut_point']), array('userid'=>$info['uid']));
					$status_two = $this->member_db->update(array('amount'=>'+='.$info['cut_amount']), array('userid'=>$info['uid']));
					if(!$status_one||!$status_two){
						showmessage('操作失败',HTTP_REFERER);
					}
				}
				showmessage('操作成功',HTTP_REFERER);
			}
			showmessage('操作失败',HTTP_REFERER);
		
	}
	public function check_ok()
	{
		$with_draw_db = pc_base::load_model('with_draw_model');
		$this->member_db = pc_base::load_model('member_model'); //加载会员数据模型
		//if(isset($_GET['dosubmit'])) {
			$ids = $_GET['id'];
			if(!empty($ids)){
				$ids_arr = explode('|', $ids);
				foreach ($ids_arr as $key => $value) {
					$status_one = $with_draw_db->update(array('status'=>1), array('id'=>intval($value)));
					if(!$status_one){
						showmessage('操作失败',HTTP_REFERER);
					}
				}
				showmessage('操作成功',HTTP_REFERER);
			}
			showmessage('操作失败',HTTP_REFERER);
		
	}
}