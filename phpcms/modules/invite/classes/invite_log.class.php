<?php
// --------------------------------------------------------------------------------
// 会员邀请记录类
// --------------------------------------------------------------------------------
// 鲁丛丛
// --------------------------------------------------------------------------------
// $Id: invite_log.class.php 2013-11-22$
// --------------------------------------------------------------------------------

class invite_log {

	private $db;

	/**
	 * 构造函数
	 */
	public function __construct() {
		
	}

	/**
	 * 添加邀请记录
	 * @param unknown_type
	 */
	public function add_invite($invite_uid,$from_uid){
		$this->db = pc_base::load_model('invite_model');
		return $this->db->add_invite($invite_uid,$from_uid);
	}

	/**
	 * 获取用户的邀请记录
	 * @param init $uid 用户ID
	 */
	public function get_uer_invite($uid) {
		$this->db = pc_base::load_model('invite_model');
		$uid = intval($uid);
		return $this->db->get_uer_invite($uid);
	}

	/**
	 * 获取所有的邀请记录
	 */
	public function get_all_invite() {
		$this->db = pc_base::load_model('invite_model');
		return $this->db->get_all_invite();
	}
	
	/**
	 * 会员邀请积分奖励
	 * @param intval $userid 用户ID
	 * @param intval $point 被邀请会员本次消费的积分
	 */
	public static function invite_reward($userid,$point) {
		//$invite_log_model = self::db;
		$module_db = pc_base::load_model('module_model');
		$setting = $module_db->get_one(array('module'=>'invite'), 'setting');
		$setting = string2array($setting['setting']);
		$proportion = $setting['proportion'];
		$add_point = intval($point*($proportion/100));
		$invite_log = self::_get_invite_uid($userid);
		if($invite_log){

			$member_db = pc_base::load_model('member_model'); //加载会员数据模型
			$member_db->update(array('point'=>'+='.$add_point), array('userid'=>$invite_log['invite_uid']));
			self::_get_invite_uid($invite_log['id'],'update',$add_point);
		}
	}

	private static function _get_invite_uid($id,$type='select',$point=0)
	{
		$invite_model = pc_base::load_model('invite_model');
		$invite_model->table_name = $invite_model->db_tablepre.'invite_log';
		//var_dump($invite_model);die;
		if($type=='select'){
			return $invite_model->get_one(array('from_uid'=>$id),'id,invite_uid');
		}
		if($type=='update'){
			return $invite_model->update(array('points'=>'+='.$point), array('id'=>$id));
		}
		
	}

	
}