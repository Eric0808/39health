//�������
function share(){
	document.write('<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="margin-top:-3px">');
	document.write('<span class="bds_more" style="line-height:16px;">������</span>');
	document.write('<a class="bds_qzone"></a>');
	document.write('<a class="bds_tsina"></a>');
	document.write('<a class="bds_tqq"></a>');
	document.write('<a class="bds_renren"></a></div>');
	document.write('<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6496650" ></script>');
	document.write('<script type="text/javascript" id="bdshell_js"></script>');
	document.write('<script type="text/javascript">');
	document.write('document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)');
	document.write('</script>');
}

//�Ҳ�Ư������
function rightshare(){
	document.write('<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=right&amp;uid=6496650" ></script>');
	document.write('<script type="text/javascript" id="bdshell_js"></script>');
	document.write('<script type="text/javascript">');
	document.write('document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);');
	document.write('</script>');
}





//�б�ҳ������ҳ�Ҳ���
function  article_ad(n){
	
	switch(n){
		case 1:
			 //document.write('<div class="adv2" style="margin-top:1px;"><script type="text/javascript">/*����������ͼƬ����*/ var cpro_id = \'u584962\';<��/script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"><//script></div>');
				  document.write('<div class="adv2" style="margin-top:1px;"><script type="text/javascript">/*300*250ͼƬ����*/ var cpro_id = \'u584962\';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script></div>');

		break;
		
		case 2:
				document.write('<script type="text/javascript">/*300*250������Ƶ������ҳ�Ҳ� ������2011-6-30*/ var cpro_id = \'u524462\';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>');
		break;
		case 3:
			document.write('<a href="http://www.dfjdyy.com"><img src="/templets/images/img/adv06.jpg"/></a>');
		break;
		}
}

//�б�ҳ������ҳ������
function  article_left_ad(){
	   document.write('<div class="adv2"> <script type="text/javascript">/*640*60������Ƶ������ҳ��� ������2011-6-30*/ var cpro_id =\'u524457\';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script></div>');
	   //document.write('<div class="adv2"><img src="/templets/default/exam/img/adv09.jpg" /></div>');
	}


window.onload=function() { 
	for(var ii=0; ii<document.links.length; ii++) 
	document.links[ii].onfocus=function(){this.blur()} 
}
function clearonfocus() { 
	for(var ii=0; ii<document.links.length; ii++) 
	document.links[ii].onfocus=function(){this.blur()} 
}

function changeMenu(ID,name,classover,classout,num){
	var nameValue = name.substring(0,name.length-1);
	for(i=1;i<num;i++){
	  var tag2=document.getElementById(nameValue+i);
	  var con2=document.getElementById(nameValue+'content'+i);
	  tag2.className=i==ID ? classover:classout;
	  con2.style.display=i==ID?'':'none';
	 }
}

//��ҳ�����л�
function SearchContent(ID,name,classover,classout,num,searchType){
	var nameValue = name.split('_');
	for(i=1;i<=num;i++){
	  var tag2=document.getElementById(nameValue[0]+'_'+i);
	  tag2.className=i==ID ? classover:classout;
	}
	//��������
	document.getElementById('source').value = searchType
}


//ѡ�����
function changeMenus(ID,name,classover,classout,num){
	var nameValue = name.split('_');
	for(i=1;i<=num;i++){
		var tag2=document.getElementById(nameValue[0]+'_'+i);
		var con2=document.getElementById(nameValue[0]+'con'+i);
		tag2.className=i==ID ? classover:classout;
		con2.style.display = i==ID ?'':'none';
	}
}

function changeMenuss(ID,name,classover,classout,num){
	var nameValue = name.split('_');
	for(i=1;i<=num;i++){
		var tag2=document.getElementById(nameValue[0]+'_'+i);
		var con2=document.getElementById(nameValue[0]+'con'+i);
		var links=document.getElementById(nameValue[0]+'links'+i);
		tag2.className=i==ID ? classover:classout;
		con2.style.display = i==ID ?'':'none';
		links.style.display = i==ID ?'':'none';
	}
}

function searchform(ID){
	for(i=1;i<9;i++){
		var tag=document.getElementById('search' + i);
		tag.className=i==ID?"curr":"";
	}
}

function AddFavorite(sURL, sTitle){
    try{
        window.external.addFavorite(sURL, sTitle);
    }catch (e){
        try{
            window.sidebar.addPanel(sTitle, sURL, "");
        }catch (e){
            alert("�����ղ�ʧ�ܣ���ʹ��Ctrl+D�������");
        }
    }
}

/**
* �ı���Ĭ����ʾ����
* @param string idname �ڵ�id��
* @param string info Ĭ����ʾ��Ϣ
* @param string dcolor Ĭ����ʾ��Ϣ��ɫ
* @param string scolor ��ʾ�������ݵ���ɫ
* @param string getval GET�ύ������ֵ
*/
function notice(idname,info){
	//�������մ���
	var dcolor = arguments[2] ? arguments[2] : 'grey';
	var scolor = arguments[3] ? arguments[3] : 'black';
	var getval = arguments[4] ? arguments[4] : '';
	//��ʼ��ʽ��ֵ
	if(getval){
		$('#'+idname).val(getval).css('color',scolor);
	}else{
		$('#'+idname).val(info).css('color',dcolor);
	}
	//��ȡ�����ʧȥ����ʱ����ʽ��ֵ
	$('#'+idname).focus(function(){
		if($(this).val() == info){
			$(this).val('');
			$(this).css('color',scolor);
		}
	}).blur(function(){
		if($(this).val() == ''){
			$(this).val(info);
			$(this).css('color',dcolor);
		}
	}).parents('form').submit(function(){
		if($.trim($('#'+idname).val()) == info){
			$('#'+idname).val('');
		}
		$('#'+idname).focus();
	});
}