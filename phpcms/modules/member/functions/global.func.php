<?php 

/**
 * 获取视频模型的栏目
 **/
function video_categorys() {
	$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : 1;
	$sitemodel_field = pc_base::load_model('sitemodel_field_model'); //加载模型字段数据库类
	$result = $sitemodel_field->select(array('formtype'=>'video', 'siteid'=>$siteid), 'modelid'); //搜索站点下的视频模型
	if (is_array($result)) {
		$models = '';
		foreach ($result as $r) {
			$models .= $r['modelid'].',';
		}
	}
	$models = substr(trim($models), 0, -1);
	$cat_db = pc_base::load_model('category_model'); //加载栏目数据库类
	$where = '`modelid` IN ('.$models.') AND `type`=0 AND `siteid`=\''.$siteid.'\'';
	$result = $cat_db->select($where, '`catid`, `catname`, `parentid`, `siteid`, `child`', '', '`listorder` ASC, `catid` ASC', '', 'catid');
	return $result;
}

/**
 * 获取模型下的视频字段名称
 * @param int $catid 栏目id
 */
function get_video_field($catid = 0) {
	static $categorys;
	if (!$catid) return false;
	$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : 1;
	if (!$categorys) {
		$categorys = getcache('category_content_'.$siteid, 'commons');
	}
	$modelid = $categorys[$catid]['modelid'];
	$model_field = pc_base::load_model('sitemodel_field_model');
	$r = $model_field->get_one(array('modelid'=>$modelid, 'formtype'=>'video'));
	return $r['field'] ? $r['field'] : '';
}

/**
 *
 * 会员邀请码生成  ...
 */
function invite_code($in, $to_num = false, $pad_up = 6, $passKey = '#FDJDUIEJ4&df8533')
{
  $index = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  if ($passKey !== null) 
  {
	for ($n = 0; $n<strlen($index); $n++) 
	{
	  $i[] = substr( $index,$n ,1);
	}
 
	$passhash = hash('sha256',$passKey);
	$passhash = (strlen($passhash) < strlen($index))
	  ? hash('sha512',$passKey)
	  : $passhash;
 
	for ($n=0; $n < strlen($index); $n++) 
	{
	  $p[] =  substr($passhash, $n ,1);
	}
 
	array_multisort($p,  SORT_DESC, $i);
	$index = implode($i);
	
  }
 
  $base  = strlen($index);
 
  if ($to_num) 
  {
	$in  = strrev($in);
	$out = 0;
	$len = strlen($in) - 1;
	for ($t = 0; $t <= $len; $t++) 
	{
	  $bcpow = bcpow($base, $len - $t);
	  $out   = $out + strpos($index, substr($in, $t, 1)) * $bcpow;
	}
 
	if (is_numeric($pad_up)) 
	{
	  $pad_up--;
	  if ($pad_up > 0) {
		$out -= pow($base, $pad_up);
	  }
	}
	$out = sprintf('%F', $out);
	$out = substr($out, 0, strpos($out, '.'));
  } 
  else 
  {
	if (is_numeric($pad_up)) 
	{
	  $pad_up--;
	  if ($pad_up > 0) 
	  {
		$in += pow($base, $pad_up);
	  }
	}
 
	$out = "";
	for ($t = floor(log($in, $base)); $t >= 0; $t--) 
	{
	  $bcp = bcpow($base, $t);
	  $a   = floor($in / $bcp) % $base;
	  $out = $out . substr($index, $a, 1);
	  $in  = $in - ($a * $bcp);
	}
	$out = strrev($out); 
  }
 
  return $out;
}
?>