<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<script type="text/javascript">
<!--
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
	})
//-->
</script>

<form name="myform" id="myform" action="?m=invite&c=invite&a=setting" method="post">
<div class="pad-10">
<div class="col-tab">
<ul class="tabBut cu-li">
<li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',3,1);"><?php echo L('base_setting')?></li>
</ul>
<div id="div_setting_1" class="contentList pad-10">

<table width="100%" class="table_form ">
		<tr>
		<th width="200"><strong>会员邀请积分赚取比例：</th>
		<td class="y-bg" id="position_list">
		<input type="text" class="input-text" name="setting[proportion]" size='5' value="<?php echo $setting['proportion']?>">&nbsp;% &nbsp;&nbsp;&nbsp; 注：若要开启会员邀请，但不兑换积分，请设为 0；
		</td>
	  </tr>
	  <tr>
        <th width="200"><strong>是否开启会员邀请功能</strong>：</th>
        <td>
			<input type='radio' name='setting[isopen]' value='1' <?php if ($setting['isopen']) {?>checked<?php }?>> <?php echo L('yes')?>&nbsp;&nbsp;&nbsp;&nbsp;
		  	<input type='radio' name='setting[isopen]' value='0' <?php if (!$setting['isopen']) {?>checked<?php }?>>  <?php echo L('no')?>
		</td>
      </tr>
      
</table>

</div>

 <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="<?php echo L('submit')?>" class="button">

</form>
</div>

</div>
<!--table_form_off-->
</div>

<script language="JavaScript">
<!--
	window.top.$('#display_center_id').css('display','none');
	function SwapTab(name,cls_show,cls_hide,cnt,cur){
		for(i=1;i<=cnt;i++){
			if(i==cur){
				 $('#div_'+name+'_'+i).show();
				 $('#tab_'+name+'_'+i).attr('class',cls_show);
			}else{
				 $('#div_'+name+'_'+i).hide();
				 $('#tab_'+name+'_'+i).attr('class',cls_hide);
			}
		}
	}
	function change_tpl(modelid) {
		if(modelid) {
			$.getJSON('?m=admin&c=category&a=public_change_tpl&modelid='+modelid, function(data){$('#template_list').val(data.template_list);$('#category_template').html(data.category_template);$('#list_template').html(data.list_template);$('#show_template').html(data.show_template);});
		}
	}
	function load_file_list(id) {
		if(id=='') return false;
		$.getJSON('?m=admin&c=category&a=public_tpl_file_list&style='+id+'&catid=<?php echo $parentid?>', function(data){$('#category_template').html(data.category_template);$('#list_template').html(data.list_template);$('#show_template').html(data.show_template);});
	}
	<?php if($modelid) echo "change_tpl($modelid)";?>

//-->
</script>