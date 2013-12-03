//获取js后面的参数
var getArgs=(function(){
	var sc=document.getElementsByTagName('script');
	var paramsArr=sc[sc.length-1].src.split('?')[1].split('&');
	var args={},argsStr=[],param,t,name,value;
	for(var ii=0,len=paramsArr.length;ii<len;ii++){
		param=paramsArr[ii].split('=');
		name=param[0],value=param[1];
		if(typeof args[name]=="undefined"){ //参数尚不存在
			args[name]=value;
			document.write('<span id="iask_js_list_'+value+'"><img src="/templets/image/loading_d.gif" height="18" /></span>');
			var iaskurl = 'http://iask.fh21.com.cn/index.php?m=js&c=index&a=GetiaskList&jid='+value+'&callback=?';
			$.getJSON(iaskurl,function(data){
				//$("#iask_js_list_"+value).parent().html(data);
				$("#iask_js_list_"+value).html(data);
			});
		}else if(typeof args[name]=="string"){ //参数已经存在则保存为数组
			args[name]=[args[name]]
			args[name].push(value);
		}else{  //已经是数组的
			args[name].push(value);
		}
	}
})();