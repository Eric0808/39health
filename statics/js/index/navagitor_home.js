document.write('<span id="fh_logins"></span>')
var my_url = "http://my.fh21.com.cn";
var url = my_url+'/index.php?m=common&c=login&a=js_userstatus&callback=?';
$.getJSON(url,function(myuser){
    str = '<ol class="admin" style="display:none;" id="befores"><p style="padding-top:10px;">';
    str += '<a href="'+my_url+'/index.php?m=common&c=login&a=index">���¼</a><span></span><a href="'+my_url+'/index.php?m=common&c=register&a=index" target="_blank">���ע��</a>';
    str += '</p></ol>';
    if(myuser!=0){
        str += '<ol class="admin" id="afters" style="display:none;">';
        str += '<div id="admin01a" class="admin01a" onmouseover="loginShow()" onmouseout="loginHidden()"><a href="'+my_url+'/index.php?m=member&c=member&a=init" class="adminLink01" target="_blank">�û�����</a>';
        str += '<div id="admin01d" class="admin01d" style="display:none;" onmouseover="loginShow()" onmouseout="loginHidden()">';
        str += '<div><dl>';
        str += '<dt><a href="'+my_url+'/index.php?m=member&c=member&a=init" target="_blank"><img src="'+myuser['headimage']+'" onError="this.onError=null;this.src=\''+my_url+'/statics/images/myfh/45.jpg\'" /></a></dt>';
        str += '<dd><a href="'+my_url+'/index.php?m=member&c=member&a=init" target="_blank">'+myuser['username']+'</a></dd></dl>';
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02a.gif" /><a href="'+my_url+'/index.php?m=member&c=member&a=edit" target="_blank">�˻�����</a></p>';
        //str += '<p><img src="'+my_url+'/statics/images/myfh/pic02j.gif" /><a href="'+my_url+'/index.php?m=register&c=index&a=init" target="_blank">ԤԼ�Һ�</a></p>';
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02b.gif" /><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=allmessage" target="_blank">�ҵ���Ϣ</a></p>';
        if(myuser['usertype']>0){
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02c.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=ask" target="_blank">���ҵ�����</a></p>';
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02d.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=noask" target="_blank">���������</a></p>';
        }else{
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02c.gif" /><a href="'+my_url+'/index.php?m=iask&c=index&a=ask" target="_blank">�ҵ�����</a></p>';
            str += '<p><img src="'+my_url+'/statics/images/myfh/pic02d.gif" /><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=thread" target="_blank">�ҵ�����</a></p>';
        }
        str += '<p><img src="'+my_url+'/statics/images/myfh/pic02e.gif" /><a href="'+my_url+'/index.php?m=comment&c=comment&a=comment" target="_blank">�ҵ�����</a></p>';
        str += '</div></div></div>';

//        str += '<div id="admin01e" class="admin01e" style="display:none;">';
//        str += '<p><img src="'+my_url+'/statics/images/myfh/close.gif" onclick="msgClose();" /></p>';
//        str += '<span></span>';
//        str += '<div><a href="'+my_url+'/index.php?m=bbs&c=bbs&a=allmessage" target="_blank">'+myuser['nums']+'��δ����Ϣ</a></div></div>';
        str += '<div class="admin01c"><a href="javascript:logout();">�˳�</a></div></ol>';
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
            alert('�˳�ʧ�ܣ�����ϵ��վ����Ա');
        }
    });
}