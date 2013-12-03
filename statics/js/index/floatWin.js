/**
* 提问and回到顶部
* 2013/09/03 Zhou.J
*/

(function($,win,undefined){
	
	//图片路径
	var imgPath = 'http://zzk.fh21.com.cn/static/images/';
	var floatWinTemp = '<style type="text/css">';
	floatWinTemp += '.zxzj_rb{position: absolute;width:286px;height:170px;padding:70px 0 0 16px;border:1px solid #0086cb;background:#fff url('+imgPath+'zxzj01.gif) no-repeat 0 0; top:0;display:none}';
	floatWinTemp += '.zxzj_rb ul{position:absolute;right:-9px;top:16px;width:8px;height:15px;overflow:hidden;background:#fff url('+imgPath+'zxzj02.gif) no-repeat 0 0;}';
	floatWinTemp += '.zxzj_rb a{display:block;position:absolute;right:12px;top:16px;width:12px;height:12px;}';
	floatWinTemp += '.zxzj_rb textarea{color:#535353;border:1px solid #acb1b4;border-right-color:#e1e5e8;border-bottom-color:#e1e5e8;height:66px;line-height:22px;padding:6px 0 6px 6px;font-size:14px;width:262px;background:#fff; outline:none;word-break:break-all;word-wrap:break-word; resize: none; overflow:auto}';
	floatWinTemp += '.zxzj_rb p{padding:9px 0 17px;line-height:14px;font-family:Arial, Helvetica, sans-serif;color:#535353;}';
	floatWinTemp += '.zxzj_rb p span{font-size:14px;color:#e6567a;}';
	floatWinTemp += '.zxzj_rb input{margin-left:81px;border:0;width:115px;height:30px;*line-height:26px;cursor:pointer;font-size:18px; font-family:"微软雅黑", "黑体";text-align:center;color:#fff;padding:2px 0 3px;*padding:2px 0 0;background-color:#e6567a;}';
	floatWinTemp += '#floatWin{position:fixed; bottom:129px; right:0px; width:60px; height:113px;z-index:9999999;}';
	floatWinTemp += '.onlineAsk{ height:54px; width:54px; background:url('+imgPath+'floatWinBtnBg.gif) no-repeat; display:block; position:absolute; right:6px; top:0;opacity:0.3;filter:alpha(opacity=30)}';
	floatWinTemp += '.currOnlineAsk{background-position: 0 0;opacity:1;filter:alpha(opacity=100)}';
	floatWinTemp += '.onlineAsk:hover{ background:url('+imgPath+'floatWinBtnBg.gif) no-repeat 0 0;opacity:1;filter:alpha(opacity=100);}';
	floatWinTemp += '.toTop{ height:54px; width:54px; background:url('+imgPath+'floatWinBtnBg.gif) no-repeat 0 -56px ; display:block; margin-top:5px;position:absolute; right:6px; top:54px;display:none;opacity:0.3;filter:alpha(opacity=30)}';
	floatWinTemp += '.toTop:hover{ background:url('+imgPath+'floatWinBtnBg.gif) no-repeat 0 -56px;opacity:1;filter:alpha(opacity=100);}';
	floatWinTemp += '</style><div id="floatWin"><a class="onlineAsk"  title="在线咨询" href="javascript:void(0)"></a> <a class="toTop"  title="返回顶部" href="#" onclick="window.scrollTo(0,0);return false"></a> ';
	floatWinTemp += '<div class="zxzj_rb" style="right:70px;bottom:0;">';
	floatWinTemp += '<form action="http://iask.fh21.com.cn/question/add.html?from=sys" method="post" target="_blank">';
	floatWinTemp += '<ul></ul>';
	floatWinTemp += '<a href="javascript:void(null)" id="zxzj_rb_close"></a>';
	floatWinTemp += '<textarea name="word" cols="" rows="" style="color:#bbb;">提出健康问题，专家及时免费解答！</textarea>';
	floatWinTemp += '<p><span>无需注册</span>，5分钟内有专业医生为您解答。</p>';
	floatWinTemp += '<input type="submit" value="立即咨询" onfocus="this.blur();"  onmouseover="this.style.backgroundColor=\'#dc3d65\'"  onmouseout="this.style.backgroundColor=\'#e6567a\'" /></div></form></div>';
	
	//追加到body
	$('body').append(floatWinTemp);
	
	//floatWinInit
	function floatWinInit()
	{
		
		
		
		setFixed();			
		
		showTopBtn();
		//判断窗口状态
		if(getCookie('floatWinStatus') == 'close')
		{
			$('.zxzj_rb').hide();
			$('.onlineAsk').removeClass('currOnlineAsk');	
			$('#floatWin').css({'width':60,'height':113,'bottom':129});
		}
		if(getCookie('floatWinStatus') == 'open')
		{
			$('.zxzj_rb').show();
			$('.onlineAsk').addClass('currOnlineAsk');	
			$('#floatWin').css({'width':374,'height':242,'bottom':0});
		}
		//关闭提问
		$('#zxzj_rb_close').bind('click',function(){
			closeFloatWin();
		});	
		
		//显示提问
		$('.onlineAsk').bind('click',function(){
			if($('.zxzj_rb:hidden').length)
			{
				$('#floatWin').css({'width':374,'height':242,'bottom':0});
				$('.zxzj_rb').show();
				$('.onlineAsk').addClass('currOnlineAsk');
				setCookie('floatWinStatus','open');
			}
			else
			{
				closeFloatWin();
			}
		});
		
		//文本框点击
		$('.zxzj_rb textarea').bind('focus',function(){
			
			var dfv = $(this)[0].defaultValue;
			if($(this).val() == dfv)
			{
				$(this).val('');	
			}
			$(this).css({'color':'#535353','border-color':'#777','border-right-color':'#999','border-bottom-color':'#999'});
			
		}).bind('blur',function(){
			
			if($(this).val() == '')
			{
				$(this).val('提出健康问题，专家及时免费解答！');		
			}
			$(this).css({'color':'#bbb','border-color':'#acb1b4','border-right-color':'#e1e5e8','border-bottom-color':'#e1e5e8'});	
			
		});
		
		//显示top
		$(win).bind('scroll',function(){showTopBtn()});
	
	}
	
	function showTopBtn()
	{
		if($(document).scrollTop() > 200)
		{
			$('.toTop').show();	
		}
		else
		{
			$('.toTop').hide();
		}	
	}
	
	//关闭提问框
	function closeFloatWin()
	{
		$('#floatWin').css({'width':60,'height':113,'bottom':129});
		$('.zxzj_rb').hide();
		$('.onlineAsk').removeClass('currOnlineAsk');
		setCookie('floatWinStatus','close');
		$('.zxzj_rb textarea').val('提出健康问题，专家及时免费解答！');
	}
	
	//ie6抖动
	function setFixed()
	{
		var isIE6 = !-[1,] && !window.XMLHttpRequest;
		if(isIE6)
		{
			$('#floatWin').css({position:'absolute'});			
			//防止抖动
			if ($('body').css('backgroundAttachment') !== 'fixed')
			{
				$('html').css({'backgroundImage':'url(about:blank)','backgroundAttachment':'fixed'});
			};
			var _top = $(document).scrollTop()+($(win).height()-$('#floatWin').height());
			if($('#floatWin').height() < 242)
			{
				_top = _top-129;
			}
			
			$('#floatWin').css({'top':_top});			
			$(win).bind('scroll resize',function(){
				
				_top = $(document).scrollTop()+($(win).height()-$('#floatWin').height());
				if($('#floatWin').height() < 242)
				{
					_top = _top-129;
				}
				$('#floatWin').css({'top':_top});
			});
		}
	}
	
	//设置cookie
	function setCookie(name,value)
	{
	    var Days = 30; //此 cookie 将被保存 30 天
	    var exp = new Date(); 
	    exp.setTime(exp.getTime() + Days*24*60*60*1000);
	    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
	}
	 
	//获取cookie
	function getCookie(name)
	{
	    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
	    if(arr != null) return unescape(arr[2]); return null;
	}
	
	//删除cookie
	function delCookie(name)
	{
	    var exp = new Date();
	    exp.setTime(exp.getTime() - 1);
	    var cval = getCookie(name);
	    if(cval != null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
	}
	
	//注册
	win.floatWinInit = floatWinInit;
	
}(jQuery,this));

floatWinInit();