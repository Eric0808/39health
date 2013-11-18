<?php
/**
 *  global.func.php 会员邀请函数库
 *
 * @copyright			(C) 2013-2014 lucongcong
 * @lastmodify			2013-11-17
 */

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