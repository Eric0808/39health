<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "header"); ?>
<?php include template("zsask", "header"); ?>

<div class="answer">
<div style="margin-bottom:5px;" class="crumbs">
<a href="<?php echo APP_PATH;?>">首页</a><span> &gt; </span>
<a href="<?php echo ASK_PATH;?>">问答</a> &gt; 
<a href="<?php echo ASK_LIST;?>">分类</a><?php echo get_catpath($info[catid]);?> &gt;
回答</div>

<div class="pre fl">

<form name="qform" id="qform" action="" method="post">
<table class="table_form">
<tr><th class="qbg" width="40">&nbsp;</th><td><h1>
<?php echo $info['question'];?></h1>
</td></tr>

<tr><th colspan="2" style="border:none">提问者：
<a href="<?php echo APP_PATH;?>index.php?m=yp&c=com_index&userid=<?php if($info[userid]) { ?><?php echo $info['userid'];?><?php } else { ?>1655<?php } ?>" style="color:blue" target="_blank">
<?php if($info[userid]) { ?><?php echo get_nickname($info[userid]);?><?php } else { ?><?php echo substr($info[ip], 0, -4);?>.***<?php } ?></a> | 
浏览：<span id="hits"></span> 次 | 
<?php echo format_date($info[addtime]);?> &nbsp;&nbsp;&nbsp;</th></tr>

<tr><th><strong>补充：</strong></th><td>
<?php echo $info['content'];?>
</td></tr>
<?php if(empty($info[aid])) { ?>
<tr><th>回答：</th><td>
<textarea name="answer" id="answer_id" style="width:400px;height:50px;"></textarea>
</td></tr>

<tr><th></th><td>
<input type="hidden" name="qid" id="qid_id" value="<?php echo $info['qid'];?>">
<input type="submit" name="dosubmit" value=" 提交答案 " class="button" />
</td></tr>
<?php } ?>
</table>
</form>

<?php $n=1;if(is_array($ts_answer)) foreach($ts_answer AS $a) { ?>

<div class="anlist <?php if($info[aid] && $info[aid] == $a[aid]) { ?>agreeaser<?php } ?>">

<p class="anp">
<a href="<?php echo APP_PATH;?>index.php?m=yp&c=com_index&userid=<?php if($a[userid]) { ?><?php echo $a['userid'];?><?php } else { ?>1655<?php } ?>" style="color:blue" target="_blank">
<?php if($a[userid]) { ?><?php echo get_nickname($a[userid]);?><?php } else { ?><?php echo substr($a[ip], 0, -4);?>.***<?php } ?></a> | 

积分：<?php echo $a['score'];?>0 | <?php echo format_date($info[addtime]);?></p>
<pre>
<?php echo $a['content'];?><br />
<?php $answer_arr = add_answer($a[aid], $info[qid]);?>
<?php if($answer_arr) { ?>
<?php $n=1;if(is_array($answer_arr)) foreach($answer_arr AS $val) { ?>
<?php if($val[userid] ==$info[userid]) { ?><span class="zask">追问：</span><?php echo $val['content'];?><br />
<?php } else { ?><span class="zask">回答：</span><?php echo $val['content'];?><br />
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if($a[userid] == $this->userid && $info[status] ==0) { ?>
<input type="button" name="btn2" value="回答追问" class="button" onclick="addAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')">
<?php } ?><?php } ?>
</pre>
<p class="colp">
<?php if(($this->userid == $info[userid] && $info[status] ==0) || $this->admin) { ?>
<span><input type="button" name="btn1" value="选为满意答案" class="button" onclick="javascript:window.location='<?php echo APP_PATH;?>index.php?m=zsask&a=agreeAnswer&aid=<?php echo $a['aid'];?>&qid=<?php echo $info['qid'];?>'"> &nbsp;&nbsp;&nbsp;</span>
<?php } ?>
<?php if($this->userid == $info[userid] && $info[status] ==0) { ?>
<span>
<input type="button" name="btn2" value="继续追问" class="button" onclick="addAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')">&nbsp;&nbsp;&nbsp;&nbsp;</span>
<?php } ?>
<?php if(($a[userid] == $this->userid || $this->IP == $info[ip]) && $info[status] ==0) { ?>
<span><input type="button" name="btn4" value="完善答案" class="button" onclick="editAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')"> &nbsp;&nbsp;&nbsp;</span>
<?php } ?>
<?php if(param::get_cookie('admin_username')) { ?>
<input type="button" name="btn3" value="删除" class="button" onclick="delAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>', this)">&nbsp;&nbsp;&nbsp;
</span>
<?php } ?>
<span>
<input type="button" name="btn3" value="评论" class="button" onclick="commentAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')">&nbsp;
<a href="javascript:;" onclick="commentAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')">(<span style='color:red'><?php echo get_comment($info[qid], $a[aid]);?></span>)</a></span>
</p>

<div class="cinfo_<?php echo $a['aid'];?> <?php if(!isset($_GET[page])) { ?>hide<?php } ?>">

<table class="table_form" cellspacing="0">

<tbody id="grade_2">

<tr><td>
<textarea name="comment" id="comment_<?php echo $a['aid'];?>" style="width:610px;height:50px"></textarea>
<input type="button" name="cbutton" id="cbutton" value="提交" onclick="commentAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>', 1)" class="button"/>
</td></tr>

</tbody>
</table>

<table class="table_form" style="margin-top:10px; width:100%;">
<tbody id="cmlist_<?php echo $a['aid'];?>">
<?php $_aid = $a[aid]?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d84f0d95daaa0f3d69f6e88819a8d694&sql=SELECT+%2A+FROM+phpcms_ask_comment+WHERE+qid%3D%24qid+AND+aid%3D%24a%5Baid%5D+AND+status%21%3D1+ORDER+BY+cid+DESC&num=5&page=%24page&return=cminfo\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM  phpcms_ask_comment WHERE qid=$qid AND aid=$a[aid] AND status!=1 ORDER BY cid DESC");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM phpcms_ask_comment WHERE qid=$qid AND aid=$a[aid] AND status!=1 ORDER BY cid DESC LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$cminfo = $a;unset($a);?>
<?php $n=1; if(is_array($cminfo)) foreach($cminfo AS $k => $cm) { ?>
<?php if(is_numeric($k)) { ?>
<tr><td>
<a id="u_<?php echo $cm['cid'];?>" href="<?php echo APP_PATH;?>index.php?m=yp&c=com_index&userid=<?php if($cm[userid]) { ?><?php echo $cm['userid'];?><?php } else { ?>1655<?php } ?>" style="color:blue" target="_blank"><?php if($cm[userid]) { ?><?php echo get_nickname($cm[userid], 'username');?><?php } else { ?><?php echo $cm['ip'];?><?php } ?></a> | 
<?php echo format_date($cm[addtime]);?></td> 
<td align="right">
<?php if(param::get_cookie('admin_username')) { ?>
<a href="javascript:;" onclick="delComment('<?php echo $_aid;?>', '<?php echo $cm['cid'];?>', this)">删除</a> | 
<?php } ?>
<a href="javascript:;" onclick="commentAnswer('<?php echo $_aid;?>', '<?php echo $info['qid'];?>', 0, '<?php echo $cm['cid'];?>')">回复</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr>
<tr id="comt_<?php echo $cm['cid'];?>"><td colspan="2">
<div class="cm">
<?php echo $cm['content'];?>
</div>
</td></tr>
<?php } ?>
<?php $n++;}unset($n); ?>
<tr><td colspan="2">
<div id="pages"><?php echo $pages;?></div>
</td></tr>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</tbody>
</table>
</div>

</div>
<?php $n++;}unset($n); ?>
</div>
<?php include template("zsask", "right"); ?>
</div>

<script type="text/javascript">
	function addAnswer(aid, qid) {
		window.top.art.dialog({id:'zq', lock:false}).close();
		window.top.art.dialog({title:'追问', lock:false, id:'zq', iframe:'<?php echo APP_PATH;?>index.php?m=zsask&a=addAnswer&aid='+ aid +'&qid='+ qid, width:'600', height:'150'}, 
				function(){var d = window.top.art.dialog({id:'zq'}).data.iframe;
				var form = d.document.getElementById('dosubmit');form.click();return false;}, 
				function(){window.top.art.dialog({id:'zq', lock:false}).close()
		});
	}
	
	function commentAnswer(aid, qid, f, u) {
		$('.cinfo_'+ aid).show('slow');
		window.top.art.dialog({id:'zq', lock:false}).close();
		if (u) {
			$('#comment_'+ aid).val('回复 -> '+ $('#u_'+u).html() +'： ');
		}
		if (f =="1") {
			var comment = $('#comment_'+ aid).val();
			if (!comment) alert('请输入评语！');
			$.post( '<?php echo APP_PATH;?>index.php?m=zsask&a=commentAnswer&aid='+ aid +'&qid='+ qid, {comment:comment, dosubmit:'1'},
					
				function (data) {
					if (data.cid) {
						var htmls = '<tr><td>'
							+ '<a href="#" target="_blank" style="color:blue" id="u_'+data.cid+'">'
							+ '<?php if($this->userid) { ?><?php echo get_nickname($this->userid, "username");?><?php } else { ?><?php echo ip();?><?php } ?></a> | '
							+ data.time+'</td> '
							+ '<td align="right">'
						//	+ '<input type="button" name="btn3" value="回复" class="button" onclick="commentAnswer(\'<?php echo $a['aid'];?>\', \'<?php echo $info['qid'];?>\')">'
							+ '<a href="javascript:;" onclick="commentAnswer(\''+ aid +'\', \''+ qid +'\', 0, \''+data.cid+'\')">回复</a>'
							+ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
							+ '</td></tr>'
							+ '<tr><td colspan="2">'
							+ '<div class="cm">'
							+ comment
							+ '</div>'
							+ '</td></tr>';
						$('#cmlist_'+ aid).prepend(htmls);
						$('#comment_'+ aid).val('');
					}
				}, 'json'
			);
		}
	}
	
	function editAnswer(aid, qid) {
		window.top.art.dialog({id:'zq', lock:false}).close();
		window.top.art.dialog({title:'完善答案', lock:false, id:'zq', iframe:'<?php echo APP_PATH;?>index.php?m=zsask&a=editAnswer&aid='+ aid +'&qid='+ qid, width:'600', height:'150'}, 
				function(){var d = window.top.art.dialog({id:'zq'}).data.iframe;
				var form = d.document.getElementById('dosubmit');form.click();return false;}, 
				function(){window.top.art.dialog({id:'zq', lock:false}).close()
		});
	}

<?php if(param::get_cookie('admin_username')) { ?>

	function delComment(aid, cid, obj) {
		$.get('?m=zsask&c=zsask&a=delcomment&pc_hash=<?php echo session_code("", "", 1);?>&aid='+ aid +'&cid='+ cid, function(data) {
			if (data =="1") {
				$(obj).parent().parent().fadeOut('slow');
				$('#comt_'+ cid).fadeOut('slow');
			}
		});
	}
	
	function delAnswer(aid, qid, obj) {
		$.get('?m=zsask&c=zsask&a=delanswer&pc_hash=<?php echo session_code("", "", 1);?>&aid='+ aid +'&qid='+ qid, function(data) {
			if (data =="1") {
				$(obj).parent().parent().fadeOut('slow');
			}
		});
	}
<?php } ?>	
</script>

<script type="text/javascript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $info['qid'];?>&module=zsask"></script>
<?php include template("content", "footer"); ?>