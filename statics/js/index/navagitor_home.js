document.write('<span id="fh_logins"></span>')
var my_url = "http://my.fh21.com.cn";
var url = my_url+'/index.php?m=common&c=login&a=js_userstatus&callback=?';
$.getJSON(url,function(myuser){
    str = '<ol class="admin" style="display:none;" id="befores"><p style="padding-top:10px;">';
    str += '<a href="'+my_url+'/index.php?m=common&c=login&a=index">请登录</a><span></span><a href="'+my_url+'/index.php?m=common&c=register&a=index" target="_blank">免费注册</a>';
    str += '</p></ol>';
    if(myuser!=0){
        str += '<ol class="admin" id="afters" style="display:none;">';
        str += '<div id="admin01a" class="admin01a" onmouseover="loginShow()" onmouseout="loginHidden()"><a href="'+my_url+'/index.php?m=member&c=member&a=init" class="adminLink01" target="_blank">用户中心</a>';
        str += '<div id="admin01d" class="admin01d" style="display:none;" onmouseover="loginShow()" onmouseout="loginHidden()">';
        str += '<div><dl>';
        str += '<dt><a href="'+my_url+'/index.php?m=member&c=member&a=init" target="_blank"><img src="'+myuser['headimage']+'" onError="this.onError=null;this.src=\''+my_url+'/statics/images/myfh/45.jpg\'" /></a></dt>';
        str += '<dd><a href="'+my_url+'/index.php?m=member&c=member&a=init" target="_blank">'+myuser['username']+'</a></dd></dl>';
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02a.gif" /><a href="'+my_url+'/index.php?m=member&c=member&a=edit" target="_blank">账户管理</a></p>';
        //str += '<p><img src="'+my_url+'/statics/images/myfh/pic02j.gif" /><a href="'+my_url+'/index.php?m=register&c=index&a=init" target="_blank">预约挂号</a></p>';
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02b.gif" /><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=allmessage" target="_blank">我的消息</a></p>';
        if(myuser['usertype']>0){
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02c.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=ask" target="_blank">对我的提问</a></p>';
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02d.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=noask" target="_blank">待解决问题</a></p>';
        }else{
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02c.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=ask" target="_blank">我的提问</a></p>';
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02d.gif" /><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=thread" target="_blank">我的帖子</a></p>';
        }
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02e.gif" /><a href="'+my_url+'/index.php?m=comment&c=comment&a=comment" target="_blank">我的评论</a></p>';
        str += '</div></div></div>';

//        str += '<div id="admin01e" class="admin01e" style="display:none;">';
//        str += '<p><img src="'+my_url+'/statics/images/myfh/close.gif" onclick="msgClose();" /></p>';
//        str += '<span></span>';
//        str += '<div><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=allmessage" target="_blank">'+myuser['nums']+'条未读信息</a></div></div>';
        str += '<div class="admin01c"><a href="javascript:logout();">退出</a></div></ol>';
    }
    document.getElementById("fh_logins").innerHTML = str;

    if(myuser!=0){
        //if(myuser['nums']!=0){
//            document.getElementById('admin01e').style.display = '';
//        }
        $('#afters').show();
    }else{
        $('#befores').show();
    }
});

function loginShow(){
    var admin01a=document.getElementById('admin01a');
    var admin01d=document.getElementById('admin01d');
    admin01a.className='admin01b';
    admin01d.style.display='';
    //msgClose()
}
function loginHidden(){
    var admin01a=document.getElementById('admin01a');
    var admin01d=document.getElementById('admin01d');
    admin01a.className='admin01a';
    admin01d.style.display='none';
}
function msgClose(){
    document.getElementById('admin01e').style.display = 'none';
}

function logout(){
    var url =my_url+'/index.php?m=member&c=index&a=logouts&callback=?';
    $.getJSON(url,function(data){
        if(data==1){
            $('#befores').css('display','');
            $('#afters').css('display','none');
        }else{
            alert('退出失败，请联系网站管理员');
        }
    });
}