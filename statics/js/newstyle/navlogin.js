/*
 * 登录导航条js
 * joe
 */
var MyDomain = "my.39.net";
//var MyDomain = "my-45.39.net";

var NavPid = null;
var NavUserName = null;
var NavCookie = document.cookie.split("; ");
var NavRequestHelper = null;
var NavTimer = null;
var NavTimerOut = 30;
var NavUserData = null;

function NavSetupUserDataBase() {
    if (document.getElementById("NavNickName") != null) {
        document.getElementById("NavNickName").innerHTML = NavUserName;
    }
    if (document.getElementById("NavMyAsk") != null) {
        document.getElementById("NavMyAsk").setAttribute("href", "http://my.39.net/UserCenter/default.aspx?menu=myquestions"); 
    }
    if (document.getElementById("NavBlog") != null) {
        document.getElementById("NavBlog").setAttribute("href", "http://blog.39.net/" + NavUserName); 
    }
    if (document.getElementById("NavMyMessage") != null) {
        document.getElementById("NavMyMessage").innerHTML = "短消息";
        document.getElementById("NavMyMessage").setAttribute("href", "http://my.39.net/UserCenter/default.aspx?menu=inbox"); 
    }
}

function NavSetupUserData() {
    if (NavUserData != null) {
//        document.getElementById("NavNickName").innerHTML = NavUserData.NickName;
//        document.getElementById("NavMyMessage").innerHTML = "短消息(<b class='orange'>" + NavUserData.UnreadMsgCount + "</b>/<b>" + NavUserData.MsgCount + "</b>)";
    }
}

function NavUserDateSetCache() {
    var cacheTimeout = 3;
    NavSetCookie("Nav_Pid", NavUserData.Pid, cacheTimeout);
//    NavSetCookie("Nav_NickName", NavUserData.NickName, cacheTimeout);
    NavSetCookie("Nav_UnreadMsgCount", NavUserData.UnreadMsgCount, cacheTimeout);
    NavSetCookie("Nav_MsgCount", NavUserData.MsgCount, cacheTimeout);
}

function NavUserDateGetCache() {
    var pid = NavGetCookie("Nav_Pid");
    if (pid != null && pid == NavPid) {
        var data = new Object();
        data.Pid = pid;
//        data.NickName = NavGetCookie("Nav_NickName");
        data.UnreadMsgCount = NavGetCookie("Nav_UnreadMsgCount");
        data.MsgCount = NavGetCookie("Nav_MsgCount");
        return data;
    }
    return null;
}

function NavGetUserData() {
    if (NavUserData != null) {
        NavSetupUserData();
        NavUserDateSetCache();
        if (NavTimer != null) {
            clearInterval(NavTimer);
            NavTimer = null;
        }
    }
    else {
        NavTimerOut--;
        if (NavTimerOut <= 0) {
            clearInterval(NavTimer);
            NavTimer = null;
        }
    }
}

function NavShow(id, num) {
    if (num == 1) {
        if(document.getElementById(id)!=null)
            document.getElementById(id).style.display = "block";
    }
    else {
        if (document.getElementById(id) != null)
            document.getElementById(id).style.display = "none";
    }
}

function NavLoginCheck() {
    if (NavIsLogin()) {
    
        NavPid = NavGetCookie("pid");
        NavUserName = NavGetCookie("username");

        var UserData = NavUserDateGetCache();
        if (UserData == null) {
            NavRequestHelper = NavRequest("NavRequestDom", "http://" + MyDomain + "/post.ashx?action=NavGetUserData&pid=" + NavPid);
            NavTimer = setInterval("NavGetUserData()", 1000);
        }
        else {
            NavUserData = UserData;
            NavSetupUserData();
        }
        NavSetupUserDataBase();

        NavShow("NavLoginDiv", 0);
        NavShow("NavLoginUserDiv", 1);
    }
    else {
        NavShow("NavLoginDiv", 1);
        NavShow("NavLoginUserDiv", 0);
    }
}

function NavSetCookie(name, value, timeOut) {
    var exp = new Date();
    exp.setTime(exp.getTime() + timeOut * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString() + ";path=/;domain=39.net";
}
function NavGetCookie(name) {
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null) return unescape(arr[2]); return null;
}
function NavDelCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getCookie(name);
    if (cval != null) document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString() + ";path=/;domain=39.net";
}

function NavIsLogin() {
    var pid = NavGetCookie("pid");
    var userName = NavGetCookie("username");
    if (pid != null && pid > 0 && userName != null && userName.length > 0) {
        return true;
    }
    return false;
}

function NavLogout(AppID) {
    if (AppID == null)
        AppID = 1;
    window.location.href = "http://" + MyDomain + "/post.ashx?action=logout&app=" + AppID + "&ref=" + encodeURIComponent(window.location.href);
}

function NavCheckUserNamePassword(userName, password) {
    if (userName.length == 0 || password.length == 0) {
        return false;
    }
    return true;
}

function NavLogin(AppID) {
    if (AppID == null)
        AppID = 1;
    var userName = document.getElementById("NavUserName").value;
    var password = document.getElementById("NavPassword").value;
    if (!NavCheckUserNamePassword(userName, password)) {
        alert("用户名密码必须填！");
        return false;
    }
    window.location.href = "http://" + MyDomain + "/post.ashx?action=login&uname=" + userName + "&pwd=" + password + "&app=" + AppID + "&ref=" + encodeURIComponent(window.location.href);
}

function NavLogin2(userName, password, AppID) {
    if (AppID == null)
        AppID = 1;
    if (!NavCheckUserNamePassword(userName, password)) {
        alert("用户名密码必须填！");
        return false;
    }
    window.location.href = "http://" + MyDomain + "/post.ashx?action=login&uname=" + userName + "&pwd=" + password + "&app=" + AppID + "&ref=" + encodeURIComponent(window.location.href);
}

function NavRequest(id, url) {
    oScript = document.getElementById(id);
    var head = document.getElementsByTagName("head").item(0);
    if (oScript) {
        head.removeChild(oScript);
    }
    oScript = document.createElement("script");
    oScript.setAttribute("src", url);
    oScript.setAttribute("id", id);
    oScript.setAttribute("type", "text/javascript");
    oScript.setAttribute("language", "javascript");
    head.appendChild(oScript);
    return oScript;
}

NavLoginCheck();

