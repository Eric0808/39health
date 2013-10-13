//39健康搜索
function getNavigatorType(){
	if(navigator.appName == "Microsoft Internet Explorer")
		return 1;  
	else if(navigator.appName == "Netscape")
		return 2;	
	else 
		return 0;
}

function getObject(objectId){ 
	// checkW3C DOM, then MSIE 4, then NN 4. 
	if(document.getElementById && document.getElementById(objectId)){ 
		return document.getElementById(objectId);
	}else if (document.all && document.all(objectId)){ 
		return document.all(objectId); // IE4,5.0 
	}else if (document.layers && document.layers[objectId]){ 
		return document.layers[objectId];  // Netscape 4.x 
	}else{ 
		return false; 
	} 
}

function wValChg(idx,sts){
	var s = "http://so.39.net/";
	if(idx == "showlist") getObject("wn_"+ sts +"").innerHTML = "综合";
	if(idx == "yyk") getObject("wn_"+ sts +"").innerHTML = "医院";
	if(idx == "ksk") getObject("wn_"+ sts +"").innerHTML = "科室";
	if(idx == "ysk") getObject("wn_"+ sts +"").innerHTML = "医生";
	if(idx == "jbk") getObject("wn_"+ sts +"").innerHTML = "疾病";
	if(idx == "zzk") getObject("wn_"+ sts +"").innerHTML = "症状";
	if(idx == "jck") getObject("wn_"+ sts +"").innerHTML = "检查";
	if(idx == "ypk") getObject("wn_"+ sts +"").innerHTML = "药品";
	if(idx == "yqk") getObject("wn_"+ sts +"").innerHTML = "药企";
	if(idx == "article") getObject("wn_"+ sts +"").innerHTML = "文章";
	if(idx == "ask") getObject("wn_"+ sts +"").innerHTML = "问医生";
	if(idx == "bbs") getObject("wn_"+ sts +"").innerHTML = "论坛";
	if(idx == "blog") getObject("wn_"+ sts +"").innerHTML = "博客";
	if(idx == "hzpk") getObject("wn_"+ sts +"").innerHTML = "化妆品";
	if(idx == "zxk") getObject("wn_"+ sts +"").innerHTML = "整形库";
	if(sts == "h"){
		//20130628 chenlieixn修改
		if(idx == "yyk"){
			document.search.action='http://yyk.39.net/search/hospital';
			document.getElementById('swords').setAttribute('name','name');
		}else if(idx == "ysk"){
			document.search.action='http://yyk.39.net/search/doctor';
			document.getElementById('swords').setAttribute('name','name');
		}else if(idx == "ypk"){
			document.search.action='http://ypk.39.net/search/all/';
			document.getElementById('swords').setAttribute('name','k');
		}else{
			document.getElementById('swords').setAttribute('name','words');
			document.search.action = s + idx +".aspx";
		};
	}
	getObject("sbArea_"+ sts +"").style.display = "none";
}

function wValDisp(sts,idx){
	if(getObject("sbArea_"+ sts +"").style.display == "none"){
		getObject("sbArea_"+ sts +"").style.display = "";
	}else{
		getObject("sbArea_"+ sts +"").style.display = "none";
	}
}

function setSelBox(event){
	var _event;
	switch (getNavigatorType()) {
		case 1 : // IE
			_event = window.event;
			node = _event.srcElement;
			nodeName = _event.srcElement.className;
			break;
		case 2 : // Netscape
			_event = event;
			node = _event.target;
			nodeName = _event.target.className;
			break;
		default :
			nodeName = "None"; 
			break;
	}
	if(nodeName == "dselObj"){
		
	}else{
		try{
			document.getElementById("sbArea_h").style.display = "none";
		}catch(e){}
	}
}
document.onmousedown = setSelBox;

//显示与隐藏列表
function showList(id,num){
	if(num == 1){
		document.getElementById(id).style.display = "block";
	}
	else{
		document.getElementById(id).style.display = "none";
	}
}

//选项卡切换
function showTab(n1,n2){
	var h=document.getElementById("Tab"+n1).getElementsByTagName("h2");
	var d=document.getElementById("Tab"+n1).getElementsByTagName("div");
	for(var i=0;i<h.length;i++){
		if(n2-1==i){
			h[i].className+=" up";
			d[i].className+=" block";
		}
		else {
			h[i].className=" ";
			d[i].className=" ";
		}
	}
}

//设为首页&加入收藏
var isIE=(document.all&&document.getElementById&&!window.opera)?true:false; 
var isMozilla=(!document.all&&document.getElementById&&!window.opera)?true:false; 
var isOpera=(window.opera)?true:false;
var seturl='url(#default#homepage)';
var weburl=window.location.href;
var webname=document.title;

function myhomepage()	{
	if(isMozilla){
		try {netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");} 
		catch (e){alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]设置为'true'");}
		var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		prefs.setCharPref('browser.startup.homepage',weburl);
	}
	if(isIE){
		this.homepage.style.behavior=seturl;this.homepage.sethomepage(weburl); 
	}
}

//20130423 修改加入收藏 chenliexin
function bookmark(sURL,sTitle){
	try{
		window.external.addFavorite(sURL,sTitle);
	}catch(e){
		try{
			window.sidebar.addPanel(sTitle,sURL,"");
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		};
	};
};
function addfavorite(sURL,sTitle){
	//用于jbk部分页面
	sURL=sURL||weburl;
	sTitle=sTitle||webname;
	try{
		window.external.addFavorite(sURL,sTitle);
	}catch(e){
		try{
			window.sidebar.addPanel(sTitle,sURL,"");
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		};
	};
};

//flash 浮标必要脚本
function insertFlash(elm, url, w, h, id) {
 if (!document.getElementById(elm)) return;
 var str = '';
 str += '<embed width="'+ w +'" height="'+ h +'" src="'+ url +'" quality="autohigh" wmode="opaque" type="application/x-shockwave-flash" plugspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" id='+id+'></embed>';
 document.getElementById(elm).innerHTML = str;
}

function insertFlash1(elm, url, w, h, id) {
 if (!document.getElementById(elm)) return;
 var str = '';
 str += '<embed width="'+ w +'" height="'+ h +'" src="'+ url +'" quality="autohigh" wmode="transparent" type="application/x-shockwave-flash" plugspace="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" id='+id+'></embed>';
 document.getElementById(elm).innerHTML = str;
}


//** Featured Content Slider script- (c) Dynamic Drive DHTML code library: http://www.dynamicdrive.com.
var featuredcontentslider={
enablepersist: true, //persist to last content viewed when returning to page?
settingcaches: {}, //object to cache "setting" object of each script instance

buildcontentdivs:function(setting){
	var alldivs=document.getElementById(setting.id).getElementsByTagName("div")
	for (var i=0; i<alldivs.length; i++){
		if (this.css(alldivs[i], "contentdiv", "check")){ //check for DIVs with class "contentdiv"
			setting.contentdivs.push(alldivs[i])
				alldivs[i].style.display="none" //collapse all content DIVs to begin with
		}
	}
},

buildpaginate:function(setting){
	this.buildcontentdivs(setting)
	var sliderdiv=document.getElementById(setting.id)
	var pdiv=document.getElementById("paginate-"+setting.id)
	var toc=setting.toc
	var pdivlinks=pdiv.getElementsByTagName("a")
	var toclinkscount=0 //var to keep track of actual # of toc links
	for (var i=0; i<pdivlinks.length; i++){
		if (this.css(pdivlinks[i], "toc", "check")){
			if (toclinkscount>setting.contentdivs.length-1){ //if this toc link is out of range (user defined more toc links then there are contents)
				pdivlinks[i].style.display="none" //hide this toc link
				continue
			}
			pdivlinks[i].setAttribute("rel", ++toclinkscount) //store page number inside toc link
			pdivlinks[i][setting.revealtype]=function(){
				featuredcontentslider.turnpage(setting, this.getAttribute("rel"))
				return false
			}
			setting.toclinks.push(pdivlinks[i])
		}
		else if (this.css(pdivlinks[i], "prev", "check") || this.css(pdivlinks[i], "next", "check")){ //check for links with class "prev" or "next"
			pdivlinks[i].onclick=function(){
				featuredcontentslider.turnpage(setting, this.className)
				return false
			}
		}
	}
	this.turnpage(setting, setting.currentpage, true)
	if (setting.autorotate[0]){ //if auto rotate enabled
		pdiv[setting.revealtype]=function(){
			featuredcontentslider.cleartimer(setting, window["fcsautorun"+setting.id])
		}
		sliderdiv["onclick"]=function(){ //stop content slider when slides themselves are clicked on
			featuredcontentslider.cleartimer(setting, window["fcsautorun"+setting.id])
		}
		setting.autorotate[1]=setting.autorotate[1]+(1/setting.enablefade[1]*50) //add time to run fade animation (roughly) to delay between rotation
	 this.autorotate(setting)
	}
},

urlparamselect:function(fcsid){
	var result=window.location.search.match(new RegExp(fcsid+"=(\\d+)", "i")) //check for "?featuredcontentsliderid=2" in URL
	return (result==null)? null : parseInt(RegExp.$1) //returns null or index, where index (int) is the selected tab's index
},

turnpage:function(setting, thepage, autocall){
	var currentpage=setting.currentpage //current page # before change
	var totalpages=setting.contentdivs.length
	var turntopage=(/prev/i.test(thepage))? currentpage-1 : (/next/i.test(thepage))? currentpage+1 : parseInt(thepage)
	turntopage=(turntopage<1)? totalpages : (turntopage>totalpages)? 1 : turntopage //test for out of bound and adjust
	if (turntopage==setting.currentpage && typeof autocall=="undefined") //if a pagination link is clicked on repeatedly
		return
	setting.currentpage=turntopage
//	setting.contentdivs[turntopage-1].style.zIndex=++setting.topzindex
	this.cleartimer(setting, window["fcsfade"+setting.id])
	setting.cacheprevpage=setting.prevpage
	if (setting.enablefade[0]==true){
		setting.curopacity=0
		this.fadeup(setting)
	}
	if (setting.enablefade[0]==false){ //if fade is disabled, fire onChange event immediately (verus after fade is complete)
		setting.contentdivs[setting.prevpage-1].style.display="none" //collapse last content div shown (it was set to "block")
		setting.onChange(setting.prevpage, setting.currentpage)
	}
	setting.contentdivs[turntopage-1].style.visibility="visible"
	setting.contentdivs[turntopage-1].style.display="block"
	if (setting.prevpage<=setting.toclinks.length) //make sure pagination link exists (may not if manually defined via "markup", and user omitted)
		this.css(setting.toclinks[setting.prevpage-1], "selected", "remove")
	if (turntopage<=setting.toclinks.length) //make sure pagination link exists (may not if manually defined via "markup", and user omitted)
		this.css(setting.toclinks[turntopage-1], "selected", "add")
	setting.prevpage=turntopage
	if (this.enablepersist)
		this.setCookie("fcspersist"+setting.id, turntopage)
},

setopacity:function(setting, value){ //Sets the opacity of targetobject based on the passed in value setting (0 to 1 and in between)
	var targetobject=setting.contentdivs[setting.currentpage-1]
	if (targetobject.filters && targetobject.filters[0]){ //IE syntax
		if (typeof targetobject.filters[0].opacity=="number") //IE6
			targetobject.filters[0].opacity=value*100
		else //IE 5.5
			targetobject.style.filter="alpha(opacity="+value*100+")"
	}
	else if (typeof targetobject.style.MozOpacity!="undefined") //Old Mozilla syntax
		targetobject.style.MozOpacity=value
	else if (typeof targetobject.style.opacity!="undefined") //Standard opacity syntax
		targetobject.style.opacity=value
	setting.curopacity=value
},

fadeup:function(setting){
	if (setting.curopacity<1){
		this.setopacity(setting, setting.curopacity+setting.enablefade[1])
		window["fcsfade"+setting.id]=setTimeout(function(){featuredcontentslider.fadeup(setting)}, 50)
	}
	else{ //when fade is complete
		if (setting.cacheprevpage!=setting.currentpage) //if previous content isn't the same as the current shown div (happens the first time the page loads/ script is run)
			setting.contentdivs[setting.cacheprevpage-1].style.display="none" //collapse last content div shown (it was set to "block")
		setting.onChange(setting.cacheprevpage, setting.currentpage)
	}
},

cleartimer:function(setting, timervar){
	if (typeof timervar!="undefined"){
		clearTimeout(timervar)
		clearInterval(timervar)
		if (setting.cacheprevpage!=setting.currentpage){ //if previous content isn't the same as the current shown div
			setting.contentdivs[setting.cacheprevpage-1].style.display="none"
		}
	}
},

css:function(el, targetclass, action){
	var needle=new RegExp("(^|\\s+)"+targetclass+"($|\\s+)", "ig")
	if (action=="check")
		return needle.test(el.className)
	else if (action=="remove")
		el.className=el.className.replace(needle, "")
	else if (action=="add")
		el.className+=" "+targetclass
},

autorotate:function(setting){
 window["fcsautorun"+setting.id]=setInterval(function(){featuredcontentslider.turnpage(setting, "next")}, setting.autorotate[1])
},

getCookie:function(Name){ 
	var re=new RegExp(Name+"=[^;]+", "i"); //construct RE to search for target name/value pair
	if (document.cookie.match(re)) //if cookie found
		return document.cookie.match(re)[0].split("=")[1] //return its value
	return null
},

setCookie:function(name, value){
	document.cookie = name+"="+value

},

init:function(setting){
	var persistedpage=this.getCookie("fcspersist"+setting.id) || 1
	var urlselectedpage=this.urlparamselect(setting.id) //returns null or index from: mypage.htm?featuredcontentsliderid=index
	this.settingcaches[setting.id]=setting //cache "setting" object
	setting.contentdivs=[]
	setting.toclinks=[]
//	setting.topzindex=0
	setting.currentpage=urlselectedpage || ((this.enablepersist)? persistedpage : 1)
	setting.prevpage=setting.currentpage
	setting.revealtype="on"+(setting.revealtype || "click")
	setting.curopacity=0
	setting.onChange=setting.onChange || function(){}
	if (setting.contentsource[0]=="inline")
		this.buildpaginate(setting)
}

}


