//��ȡjs����Ĳ���
var getArgs=(function(){
	var sc=document.getElementsByTagName('script');
	var paramsArr=sc[sc.length-1].src.split('?')[1].split('&');
	var args={},argsStr=[],param,t,name,value;
	for(var ii=0,len=paramsArr.length;ii<len;ii++){
		param=paramsArr[ii].split('=');
		name=param[0],value=param[1];
		if(typeof args[name]=="undefined"){ //�����в�����
			args[name]=value;
			document.write('<div id="iask_js_list_'+value+'"><img src="/templets/image/loading_d.gif" height="18" /></div>');
			//��ȡ����������Ϣ
			var iaskurl = 'http://ypk.fh21.com.cn/index.php?m=index&c=masterDrugComment&jsoncallback=?';	
			$.getJSON(iaskurl,function(data){
				var strlist = '',x = 0;
				for(var i in data){
					strlist += '<dl><dt><p><a href="http://ypk.fh21.com.cn/summary-'+data[i].articleid+'.html" target="_blank">'+data[i].medicinal+'</a></p>';
					strlist += '<ol class="xingji"><li style="width:'+data[i].star+'%;"></li></ol>';
					strlist += '</dt><dd><ul>ʹ�ú�'+data[i].effect+'</ul>';
					strlist += '<ol>'+data[i].content+'<a href="http://ypk.fh21.com.cn/comment-'+data[i].articleid+'-3-1.html" target="_blank" class="link05">[��ϸ]</a><img src="/templets/images/image/home03f4.gif" /></ol>';
					strlist += '<ul>����'+data[i].address+data[i].times+'</ul></dd></dl>';
					x++;
					if(x==1){$("#commenttime").text(data[i].addtime);}
				}
				$("#iask_js_list_"+value).html(strlist);
			});
				
		}else if(typeof args[name]=="string"){ //�����Ѿ������򱣴�Ϊ����
			args[name]=[args[name]]
			args[name].push(value);
		}else{  //�Ѿ��������
			args[name].push(value);
		}
	}
})();