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
			if(value == 'answer'){//ʱʱ�䶯��ר��
				document.write('<span id="iask_js_list_'+value+'"><img src="/templets/image/loading_d.gif" height="18" /></span>');
				Getdoctorlist(value);
				
				$("#iask_js_list_"+value).css({"height":"87px","display":"block","position":"relative","overflow":"hidden"})
				
			}else if(value == 'present'){
				document.write('<span id="iask_js_list_'+value+'"><img src="/templets/image/loading_d.gif" height="18" /></span>');
				//��ȡ�յ������л�ŵ�ר����Ϣ
				var iaskurl = 'http://iask.fh21.com.cn/index.php?m=js&c=index&a=GetDoctorgift&callback=?';	
				$.getJSON(iaskurl,function(data){
					var strlist = '';
					var strlist = '';
					for(var i in data){
						strlist += '<dl><dt><p><a href="'+data[i].url+'" target="_blank">'+data[i].zname+'</a><span>'+data[i].holderofanoffice+'</span></p>';
						strlist += '<a href="'+data[i].url+'" target="_blank" class="link15a">������ҳ</a>';
						strlist += '</dt><dd><ul>'+data[i].hospital+'</ul>';
						strlist += '<ol>�ո��յ���'+data[i].type+'��<img src="/templets/images/image/home03f2.gif" /></ol></dd></dl>';
					}
					$("#iask_js_list_"+value).html(strlist);
				});
			}else if(value == 'question'){
				document.write('<span id="iask_js_list_'+value+'"><img src="/templets/image/loading_d.gif" height="18" /></span>');
				//��ȡ���»ش��ר����Ϣ
				var iaskurl = 'http://iask.fh21.com.cn/index.php?m=js&c=index&a=GetDoctorlist&callback=?';
				$.getJSON(iaskurl,function(data){
					var strlist = '';
					var x = 0
					for(var i in data){
						x++;
						var question = data[i].question;
						var hospital = data[i].hospital;
						var answer = data[i].answer
						strlist += '<ul class="block07b2a"><a href="'+data[i].questionurl+'" target="_blank" title="'+data[i].question+'">'+question.substr(0,12)+'</a></ul>';
						strlist += '<dl class="block07b2b"><dt>';
						strlist += '<img src="'+data[i].headimg+'" onError="this.src=\'/templets/images/image/nophoto.gif\'" />';
						strlist += '<strong><a href="'+data[i].url+'" target="_blank">'+data[i].zname+'</a></strong>';
						strlist += '<span title="'+data[i].hospital+'">'+hospital.substr(0,5)+'</span>';
						strlist += '</dt><dd>';
						strlist += '<ul><p></p>'+answer.replace(/<\/?[^>]+>/g,'').substr(0,33)+'��<a href="'+data[i].questionurl+'" target="_blank" class="link05">[��ϸ]</a></ul>';
						strlist += '<ol><a href="http://iask.fh21.com.cn/question/add/'+data[i].uid+'.html" target="_blank" class="link02">��Ҫ��ѯ</a></ol>';
						strlist += '</dd></dl>';
						if(x==2){break;}
						if(x==1){$("#new_doctorlist").text(data[i].addtime);}
					}
					
					$("#iask_js_list_"+value).html(strlist);	
				});	
			}
		}else if(typeof args[name]=="string"){ //�����Ѿ������򱣴�Ϊ����
			args[name]=[args[name]]
			args[name].push(value);
		}else{  //�Ѿ��������
			args[name].push(value);
		}
	}
})();

function Getdoctorlist(value){
	//��ȡ���»ش��ר����Ϣ
	var iaskurl = 'http://iask.fh21.com.cn/index.php?m=js&c=index&a=GetDoctorlist&callback=?';
	$.getJSON(iaskurl,function(data){
		var strlist = '<span id="iask_js_list_'+value+'1" style="position:absolute;top:0;width:227px;">';
		var x = 0;
		for(var i in data){
			strlist += '<dl data-time="'+data[i].addtime+'" style="background:none;"><dt><p><a href="'+data[i].url+'" target="_blank">'+data[i].zname+'</a><span>'+data[i].holderofanoffice+'</span></p>';
			strlist += '<a href="http://iask.fh21.com.cn/question/add/'+data[i].uid+'.html" target="_blank" class="link15a">��Ҫ����</a>';
			strlist += '</dt><dd><ul>'+data[i].hospital+'</ul>';
			strlist += '<ol>�ش��������⣡<img src="/templets/images/image/home03f2.gif" /></ol></dd></dl>';
			x++;
			if(x==1){$("#dorctortime span").text(data[i].addtime);}
		}
		strlist += '</span>';
		
		$("#iask_js_list_"+value).html(strlist);
		
		//����Ч��
		var length = $("#iask_js_list_"+value+"1").find('dl').length;
		doctorNews(value,length);
	});	
}

function doctorNews(value,length){
	  var timer		=	null,
		  _l		=	length,
		  _v		=	value,
		  _i		=	1,		//��ʼ����
		  _h		=	87,		//�߶�
		  _s		=	1000,	//�ٶ�
		  _t		=	5000;	//ʱ��
	
	//����һ��
	$("#iask_js_list_"+_v+"1").append($("#iask_js_list_"+_v+"1").html());

	_init();
	
	//����ֹͣ
	$("#iask_js_list_"+_v+"1").hover(
		function () {
			clearInterval(timer);
		},
		function () {
			_init();
		}
	);
	//init
	function _init(){
		timer = setInterval(_run,_t);
		
	}
	
	//�ƶ�
	function _run(){
		//ʱ��仯
		$('#dorctortime span').fadeOut();
		
		$("#iask_js_list_"+_v+"1:not(:animated)").stop().animate({top:-_i*_h},_s,function(){
			$('#dorctortime span').text($("#iask_js_list_"+_v+"1").find('dl').eq(_i).attr('data-time')).fadeIn();
			if(_i == _l){
				_i = 1;
				$("#iask_js_list_"+_v+"1").css('top',0);
				//Getdoctorlist(_v);
			}else{
				_i++;
			}
		});	
	}
}