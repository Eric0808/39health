<?php
/**
 * 会员邀请模型数据库操作类
 */

pc_base::load_sys_class('model', '', 0);
class invite_model extends model {
	public $table_name = '';
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->siteid = get_siteid();
		parent::__construct();
	}
	

	/*添加邀请记录*/
	public function add_invite($invite_uid,$from_uid) {
		
		$this->table_name = $this->db_tablepre.'invite_log';
		if(!empty($invite_uid) && !empty($from_uid))
		{
			$this->insert(array('invite_uid'=>$invite_uid,'from_uid'=>$from_uid,'time'=>time()));
			return true;
		}
		return false;
	}

	/*获取用户的邀请记录*/
	public function get_uer_invite($uid)
	{
		$this->table_name = $this->db_tablepre.'invite_log';
		$info = $this->db->select('*',"`invite_uid`={$uid}",'','order by time dese','','id');
		if(!$info){
			return false;
		}
		return $info;
	}
	/*获取所有的邀请记录*/
	public function get_all_invite()
	{
		$this->table_name = $this->db_tablepre.'invite_log';
		$info = $this->db->select('*',"",'','order by time dese','','id');
		if(!$info){
			return false;
		}
		return $info;
	}
	
}
?>