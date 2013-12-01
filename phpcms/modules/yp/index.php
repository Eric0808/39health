<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('form', '', 0);
class index {
	public $models,$setting,$buy_type;

	function __construct() {
		$this->setting = getcache('yp_setting', 'yp');
		if($this->setting['encode_page_cache'] && in_array(ROUTE_A,array('init','model','company'))) cache_page_start();
		pc_base::load_app_func('global');
		$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : get_siteid();
		$this->models = getcache('yp_model', 'model');
		//全局推荐位ID,模块配置推荐位第一个为列表页推荐位配置
		$this->global_posid = $this->setting['position'][1]['posid'];
		$this->buy_type = array(1=>L('supply'),2=>L('buy'), 3=>L('used'), 4=>L('promotional'));
		$this->setting_models = getcache('models', 'yp');
  		define("SITEID",$siteid);
	}

	public function init() {
		$userid = param::get_cookie('_userid');
		//检查是否是企业会员
		$company_db = pc_base::load_model('yp_company_model');
		$sql = array("userid"=>$userid);
		$company_user_array = $company_db->get_one($sql);
		if($userid){
			 if($company_user_array){
			 	$user_array = get_memberinfo($userid);
			 	$is_exit = '2';//是企业会员
			 }else{
			 	$user_array = get_memberinfo($userid);
			 	$is_exit = '1';//登录，不是企业会员
			 }
		}else{
			$is_exit = '0';//未登录
		}
		//列表页推荐位ID,模块配置推荐位第二个为列表页推荐位配置
		$posid = intval($this->setting['position'][2]['posid']);
 		$siteid = SITEID;
		$SEO = seo(SITEID, '', $this->setting['seo_title'], $this->setting['seo_description'], $this->setting['seo_keywords']);
		//产品modelid
		$product_id = $this->setting_models[73];
		$buy_id = $this->setting_models[76];

 		$pro_categorys = getcache('category_yp_'.$this->setting_models['73'],'yp');
 		pc_base::load_sys_class('form', '', 0);

 		$groups = getcache('grouplist', 'member');
 		$groupid = param::get_cookie('_groupid');
  		$memberinfo['groupname'] = $groups[$groupid]['name'];
  		include template('yp', 'index');
		if($this->setting['encode_page_cache']) cache_page(360);
	}

	
	public function show() {
		$id = $_GET['id'] = intval($_GET['id']);
		$catid = $_GET['catid'] = intval($_GET['catid']);
		if (!$id) showmessage(L('link_address_error_content'));
		if (!$catid) showmessage(L('link_address_error_category'));
		$category_db = pc_base::load_model('category_model');
        $cat_info = $category_db->get_one(array('catid'=>$catid));
		if (!$cat_info) showmessage(L('category_does_not_exist'));
        $dianping_type = intval($cat_info['commenttypeid']);

		$content_yp = pc_base::load_model('yp_content_model');
		$data = $content_yp->get_content($catid, $id);
		if (!$data) showmessage(L('information_deleted'));
		if ($data['addition_field']) {
			$addition_field = $data['addition_field'];
			unset($data['addition_field']);
		}
		$modelid  = $content_yp->modelid;
		$groupid = param::get_cookie('_groupid') ? param::get_cookie('_groupid') : 8;
		if (!$this->setting['priv'][$groupid]['view'][$modelid]) showmessage(L('no_priv'));
		$categorys = getcache('category_yp_'.$modelid, 'yp');
		$CAT = $categorys[$catid];
		$CAT['setting'] = string2array($CAT['setting']);

		require_once CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR.'yp_output.class.php';
		$yp_output = new yp_output($modelid,$catid,$categorys);
		$userid = intval($data['userid']);
        $str_keywords = $data['keywords'];
		$rs = $yp_output->get($data);
		if ($addition_field) {
			$addition_field = string2array($addition_field);
			$additional_fields = $yp_output->fields = get_additional_fields($catid, $categorys);
			$additional_data = $yp_output->get($addition_field);
			$additional_base = $additional_general = array();
			foreach ($additional_data as $k => $v) {
				if ($additional_fields[$k]['isbase']) {
					$additional_base[$k] = $additional_data[$k];
				} else {
					$additional_general[$k] = $additional_data[$k];
				}
			}
			unset($additional_data, $addition_field);
		}
		extract($rs);
		$setting = $this->setting;
		//取得模板文件名
		$MODEL = $this->models[$modelid];
		if (!$MODEL) showmessage(L('model_does_not_exist'));
		$default_style = $MODEL['default_style'] ? $MODEL['default_style'] : 'default';
		$template = $MODEL['show_template'];
		//SEO
		$siteid = get_siteid();
		$model_setting = string2array($MODEL[$modelid]['setting']);
		$seo_keywords = $CAT['setting']['meta_keywords'] ? $CAT['setting']['meta_keywords'] : ($model_setting['meta_keywords'] ? $model_setting['meta_keywords'] : $this->setting['meta_keywords']);
		$seo_description = $CAT['setting']['meta_description'] ? $CAT['setting']['meta_description'] : ($model_setting['meta_description'] ? $model_setting['meta_description'] : $this->setting['meta_description']);
		$SEO = seo($siteid, '', $title, $seo_description, $seo_keywords);

		pc_base::load_sys_class('form', '', 0);

		include template('yp', $template, $default_style);
	}


	//向购物车中添加数据
	public function buycar() {
		$id = intval($_GET['id']);
		$modelid = intval($_GET['modelid']);
		if (!$id || !$modelid) {
			exit('1');
		}
		$content_yp = pc_base::load_model('content_model');
		$content_yp->set_model($modelid);
		$r = $content_yp->get_one(array('id'=>$id, 'status'=>99), 'title, thumb, url, price, id');
		if (!$r) {
			exit('1');
		}
		$userid = param::get_cookie('_userid');
		if ($userid == $r['userid']) exit('2');
		$prov_userid = param::get_cookie('prov_userid');
		if ($userid) $this->tidy_buycar($userid); //整理购物车
		$prov_userid = intval($prov_userid);
		if (!$userid && !$prov_userid) {
			$prov_userid = intval(mt_rand(1, 16777214));
			param::set_cookie('prov_userid', $prov_userid);
		}
		$buycar_db = pc_base::load_model('buycar_model');
		$exceed_time = SYS_TIME-3600*24;
		$sql = "`userid`=0 AND `prov_userid`>0 AND `addtime`<$exceed_time";
		$buycar_db->delete($sql);
		if ($userid) {
			if ($buycar_db->get_one(array('userid'=>$userid, 'status'=>0, 'productid'=>$id, 'modelid'=>$modelid))) {
				exit('3');
			} else {
				$data = array(
							'userid' => $userid,
							'productid'	=> $id,
							'modelid' => $modelid,
							'price' => $r['price'],
							'quantity' => 1,
							'uid' => $r['sysadd'],
							'title' => $r['title'],
							'thumb' => $r['thumb'],
							'url' => $r['url'],
							'addtime' => SYS_TIME,
						);
				$buycar_db->insert($data);
			}
			$res = $buycar_db->get_one(array('userid'=>$userid, 'status'=>0), 'COUNT(id) AS num, SUM(price*quantity) AS total');
		} elseif($prov_userid) {
			if ($buycar_db->get_one(array('prov_userid'=>$prov_userid, 'productid'=>$id, 'modelid'=>$modelid))) {
				exit('3');
			} else {
				$data = array(
							'prov_userid' => $prov_userid,
							'productid'	=> $id,
							'modelid' => $modelid,
							'price' => $r['price'],
							'quantity' => 1,
							'uid' => $r['sysadd'],
							'title' => $r['title'],
							'thumb' => $r['thumb'],
							'addtime' => SYS_TIME,
						);
				$buycar_db->insert($data);
			}
			$res = $buycar_db->get_one(array('prov_userid'=>$prov_userid), 'COUNT(id) AS num, SUM(price*quantity) AS total');
		}
		exit(json_encode($res));
	}

	//获取购物车中的数据 加减购物车中商品的数量
	public function get_buycar() {
		$userid = param::get_cookie('_userid');
		if ($userid) $this->tidy_buycar($userid); //整理购物车
		$buycar_db = pc_base::load_model('buycar_model');
		//购物车中商品的数量添加、减少、删除操作
		if (isset($_GET['action']) && in_array($_GET['action'], array('-', '+', 'delete'))) {
			$id = intval($_GET['id']);
			if (!$id) exit('1');
			if ($_GET['action']=='-') {
				$buycar_db->update(array('quantity'=>'-=1'), array('id'=>$id));
			} elseif ($_GET['action']=='+') {
				$buycar_db->update(array('quantity'=>'+=1'), array('id'=>$id));
			} else {
				$buycar_db->delete(array('id'=>$id));
			}
		}
		if (isset($_GET['action']) && ($_GET['action']=='set')) {
			$quantity = intval($_GET['quantity']);
			$id = intval($_GET['id']);
			if (!$id) exit('1');
			if ($quantity>0) {
				$buycar_db->update(array('quantity'=>$quantity), array('id'=>$id));
			} else {
				exit('1');
			}
		}

		if (!$userid) {
			$prov_userid = param::get_cookie('prov_userid');
			if(!$prov_userid) {
				$prov_userid = intval(mt_rand(1, 16777214));
				param::set_cookie('prov_userid', $prov_userid);
			}
			$res = $buycar_db->get_one(array('prov_userid'=>$prov_userid), 'COUNT(id) AS num, SUM(price*quantity) AS total');
		} else {
			$res = $buycar_db->get_one(array('userid'=>$userid, 'status'=>0), 'COUNT(id) AS num, SUM(price*quantity) AS total');
		}
		exit(json_encode($res));
	}

	//购物车列表
	public function buycar_list() {
		$userid = param::get_cookie('_userid');
		$buycar_db = pc_base::load_model('buycar_model');
		if ($userid) $this->tidy_buycar($userid); //整理购物车
		if (!$userid) {
			$prov_userid = param::get_cookie('prov_userid');
			if(!$prov_userid) {
				$prov_userid = intval(mt_rand(1, 16777214));
				param::set_cookie('prov_userid', $prov_userid);
				showmessage(L('shopping_cart_empty'), APP_PATH);
			}
			$products = $buycar_db->select(array('prov_userid'=>$prov_userid));
		} else {
			$products = $buycar_db->select(array('userid'=>$userid, 'status'=>0));
		}
		if (empty($products)) {
			showmessage(L('shopping_cart_empty'), APP_PATH);
		}
		//seo
		$siteid = get_siteid();
		$SEO = seo($siteid, '', L('my_cart'));
		include template('yp', 'buycar_list');
	}

	//订单详情
	public function orderinfo() {
		$userid = param::get_cookie('_userid');
		if (!$userid) showmessage(L('login_website'), APP_PATH.'index.php?m=member&c=index&a=login&forward='.urlencode($_SERVER["REQUEST_URI"]));
		$this->tidy_buycar($userid); //整理购物车
		$member_address = pc_base::load_model('member_address_model');
		$address = $member_address->get_one(array('userid'=>$userid));
		$buycar_db = pc_base::load_model('buycar_model');
		$products = $buycar_db->select(array('userid'=>$userid, 'status'=>0));
		$member_db = pc_base::load_model('member_model');
		//$memberinfo = $member_db->get_one(array('userid'=>$userid), 'amount');
		//$amounts = $memberinfo['amount'];
		$memberinfo = $member_db->get_one(array('userid'=>$userid), 'point');
		$amounts = $memberinfo['point'];
		//seo
		$siteid = get_siteid();
		$SEO = seo($siteid, '', L('order_information'));
		include template('yp', 'orderinfo');
	}

	//支付
	public function pay() {
		$userid = param::get_cookie('_userid');
		if (!$userid) showmessage(L('login_website'), APP_PATH.'index.php?m=member&c=index&a=login&forward='.urlencode($_SERVER["REQUEST_URI"]));
		//判断是否设置收货地址
		$member_address = pc_base::load_model('member_address_model');
		$buyerinfo = $member_address->get_one(array('userid'=>$userid));
		if (!$buyerinfo) {
			showmessage(L('fill_out_receipt_information'), APP_PATH.'index.php?m=yp&c=index&a=orderinfo');
		}
		//支付信息
		$buycar_db = pc_base::load_model('buycar_model');
		$result = $buycar_db->select(array('userid'=>$userid, 'status'=>0));
		if (is_array($result) && !empty($result)) {
			$uids = $orders = $error_uid = array();
			$usernote = $_POST['usernote'];
			$username = param::get_cookie('_username');
			$total_fee = 0;
			$comment_arr = array(); //点评关系数组
			foreach ($result as $r) {
				if (!in_array($r['uid'], $uids)) {
					$uids[] = $r['uid'];
					$buycarid = $r['id'];
					$orders[$r['uid']] = array(
							'userid'      => $userid,
							'username'    => $username,
							'uid'		  => $r['uid'],
							'buycarid'	  => $buycarid,
							'money'       => trim(intval($r['price']))*intval($r['quantity']),//trim(floatval($r['price']))*intval($r['quantity']),
							'quantity'    => intval($r['quantity']),
							'telephone'   => $buyerinfo['telephone'] ? trim($buyerinfo['telephone']) : trim($buyerinfo['mobile']),
							'contactname' => $r['title'],
							'email'       => trim($buyerinfo['email']),
							'addtime'	  => SYS_TIME,
							'ip'	      => ip(),
							'usernote'    => $usernote,
							'order_sn'	  => create_transaction_code(),
					);
				} else {
					$orders[$r['uid']]['buycarid'] .= ','.$r['id'];
					$orders[$r['uid']]['quantity'] += intval($r['quantity']);
					$orders[$r['uid']]['contactname'] .= '、'.$r['title'];
					//$orders[$r['uid']]['money'] += trim(floatval($r['price']))*intval($r['quantity']);
					$orders[$r['uid']]['money'] += trim(intval($r['price']))*intval($r['quantity']);
				}
				//$total_fee += trim(floatval($r['price']))*intval($r['quantity']); //计算总费用
				$total_fee += trim(intval($r['price']))*intval($r['quantity']); //计算总费用
				$comment_arr[] = array('userid'=>$userid, 'module'=>'yp', 'modelid'=>$r['modelid'], 'contentid'=>$r['productid'], 'uid'=>$r['uid'], 'addtime'=>SYS_TIME);
			}
			$o = pc_base::load_app_class('order');
			pc_base::load_app_class('receipts','pay',0);
			pc_base::load_app_class('spend','pay',0);
			$member_db = pc_base::load_model('member_model'); //加载会员数据模型
			//判断买家账户余额是否足够
			//$buyerinfo = $member_db->get_one(array('userid'=>$userid), 'amount');
			$buyerinfo = $member_db->get_one(array('userid'=>$userid), 'point');
			//if (floatval($total_fee)>floatval($buyerinfo['amount'])) showmessage(L('account_balance_less_than'), APP_PATH.'index.php?m=pay&c=deposit&a=pay');
			if (intval($total_fee)>intval($buyerinfo['point'])) showmessage(L('account_balance_less_than'), APP_PATH.'index.php?m=pay&c=deposit&a=pay');
			$yp_company_db = pc_base::load_model('yp_company_model'); //加载企业库数据模型
			$comment_relation_db = pc_base::load_model('comment_relation_model'); //加载点评关系表
			foreach ($orders as $order) {
				$o->add_record($order);
				//减去购买者的账户中购买商品的金额
				//if (spend::amount($order['money'],$order['contactname'],$order['userid'], $order['username'], '',L('system_automation'))) {
				if (spend::point($order['money'],$order['contactname'],$order['userid'], $order['username'], '',L('system_automation'))) {
					//给商家自动添加商品的金额
					$m = $member_db->get_one(array('userid'=>$order['uid']), 'username');
					//receipts::amount($order['money'],$order['uid'], $m['username'], $order['order_sn'],'selfincome',$order['contactname'],L('system_automation'), 'succ',$order['usernote']);
					receipts::point($order['money'],$order['uid'], $m['username'], $order['order_sn'],'selfincome',$order['contactname'],L('system_automation'), 'succ',$order['usernote']);
					//标记购物车该项记录已被结算
					$buycar_db->update(array('status'=>1), '`id` IN('.$order['buycarid'].')');
					//购买完成给商铺加的积分
					//$yp_company_db->update(array('points'=>'+='.$order['quantity']), array('userid'=>$order['uid']));
				} else {
					$error_pay = true;
					$error_uid[] = $order['uid'];
				}
			}
			//写入点评关系表
			foreach ($comment_arr as $p) {
				if (!empty($error_uid) && in_array($p['uid'], $error_uid)) continue;
				unset($p['uid']);
				$comment_relation_db->insert($p);
			}
			if ($error_pay) {
				showmessage(L('some_goods_paid'), APP_PATH.'index.php?m=yp&c=index&a=buycar_list');
			} else {
				showmessage(L('payment_success'), APP_PATH.'index.php?m=yp&c=business&a=pay&t=4');
			}
		}
 	}

	//ajax修改用户收货地址
	public function changeaddress() {
		$userid = param::get_cookie('_userid');
		if (!$userid) exit('1');
		$info['truename'] = $_GET['name'] ? $_GET['name'] : exit('2');
		$info['province'] = $_GET['province'] ? $_GET['province'] : exit('2');
		$info['address'] = $_GET['address'] ? $_GET['address'] : exit('3');
		$info['mobile'] = $_GET['mobile'];
		$info['telephone'] = $_GET['telephone'];
		if (!$info['mobile'] && !$info['telephone']) exit('4');
		$info['email'] = $_GET['email'];
		$info['code'] = $_GET['code'];
		$member_address = pc_base::load_model('member_address_model');
		$info = array_iconv($info, 'UTF-8', CHARSET);
		if ($member_address->get_one(array('userid'=>$userid))) {
			$member_address->update($info, array('userid'=>$userid));
		} else {
			$info['userid'] = $userid;
			$member_address->insert($info);
		}
		exit('5');
	}

	public function get_member_address() {
		$userid = param::get_cookie('_userid');
		if (!$userid) exit('0');
		$member_address = pc_base::load_model('member_address_model');
		if ($member_address->get_one(array('userid'=>$userid))) {
			exit('1');
		} else {
			exit('0');
		}
	}

	/*
	 * tidy_buycar 整理购物车
	 * @param intval $userid 用户ID
	 */
	private function tidy_buycar($userid) {
		$userid = intval($userid);
		$yp_content_db = pc_base::load_model('yp_content_model');
		$prov_userid = param::get_cookie('prov_userid');
		if (!$userid || !$prov_userid) return false;
		$buycar_db = pc_base::load_model('buycar_model');
		$result = $buycar_db->select(array('prov_userid'=>$prov_userid), 'id, productid, modelid, uid');
		if (is_array($result) && !empty($result)) {
			foreach ($result as $r) {
				$yp_content_db->set_model($r['modelid']);
				if (!$yp_content_db->get_one(array('id'=>$r['productid'], 'status'=>99))) {
					$buycar_db->delete(array('id'=>$r['id']));
				}
				if ($buycar_db->get_one(array('userid'=>$userid, 'productid'=>$r['productid'], 'modelid'=>$r['modelid']))) {
					$buycar_db->delete(array('id'=>$r['id']));
				} else {
					if ($r['uid']==$userid) {
						$buycar_db->delete(array('id'=>$r['id']));
					} else {
						$buycar_db->update(array('userid'=>$userid, 'prov_userid'=>0), array('id'=>$r['id']));
					}
				}
			}
		}
		param::set_cookie('prov_userid', '');
		return true;
	}
}
?>