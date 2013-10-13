var loaded = false;
jQuery(document).ready(function ($) {
    if (!loaded) {
        jQuery(document.body).click(function (e) {
            mouseMove(e);
        })
    }
    loaded = true;
});

function mouseMove(e) {
    e = e || window.event;
    var x = e.pageX || e.clientX + document.documentElement.scrollLeft || document.body.scrollLeft || 0;
    var y = e.pageY || e.offsetY + document.documentElement.scrollTop || document.body.scrollTop || 0;
    var x0 = 10;
    x0 = document.documentElement.clientWidth > 981 ? ((document.documentElement.clientWidth - 980) / 2) : 10;
    x0 = JSRound(x0, 0);
    x0 = x0 > 9 ? x0 : 10;
    var s = window.screen.width + "*" + window.screen.height;
    var x = (x * 1 - x0);
    if (x > -1 && x < 981) {
        var browserName = window.navigator.userAgent.toLowerCase();
        var osV = "Others";
        osV = getClientOs();
        mybrowser = {
            version: (browserName.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [0, '0'])[1],
            safari: /webkit/i.test(browserName) && !this.chrome,
            opera: /opera/i.test(browserName),
            firefox: /firefox/i.test(browserName),
            msie: /msie/i.test(browserName) && !/opera/.test(browserName),
            mozilla: /mozilla/i.test(browserName) && !/(compatible|webkit)/.test(browserName) && !this.chrome,
            chrome: /chrome/i.test(browserName) && /webkit/i.test(browserName) && /mozilla/i.test(browserName)
        }
        var binfo = "";
        if (mybrowser.msie) { binfo = "Microsoft Internet Explorer " + browserName.match(/msie ([\d.]+)/)[1] }
        if (mybrowser.mozilla) { binfo = "Mozilla Firefox " + browserName.match(/firefox\/([\d.]+)/)[1] }
        if (mybrowser.safari) { binfo = "Apple Safari " + browserName.match(/version\/([\d.]+).*safari/) != null ? 0 : browserName.match(/version\/([\d.]+).*safari/)[1] }
        if (mybrowser.opera) { binfo = "Opera " + browserName.match(/version\/([\d.]+)/)[1] }
        if (mybrowser.chrome) { binfo = "Chrome " + browserName.match(/chrome\/([\d.]+)/)[1] }
        var u = navigator.userAgent.toLowerCase();
        fnGetJSON(x, y, s, binfo, osV, u);
    }
}

function getClientOs() {
    var sUserAgent = navigator.userAgent;
    var isWin = (navigator.platform == "Win32") || (navigator.platform == "Windows");
    if (isWin) {
        var isWin2K = sUserAgent.indexOf("Windows NT 5.0") > -1 || sUserAgent.indexOf("Windows 2000") > -1;
        if (isWin2K) return "Win2000";
        var isWinXP = sUserAgent.indexOf("Windows NT 5.1") > -1 || sUserAgent.indexOf("Windows XP") > -1;
        if (isWinXP) return "WinXP";
        var isWin2003 = sUserAgent.indexOf("Windows NT 5.2") > -1 || sUserAgent.indexOf("Windows 2003") > -1;
        if (isWin2003) return "Win2003";
        var isWinVista = sUserAgent.indexOf("Windows NT 6.0") > -1 || sUserAgent.indexOf("Windows Vista") > -1;
        if (isWinVista) return "WinVista";
        var isWin7 = sUserAgent.indexOf("Windows NT 6.1") > -1 || sUserAgent.indexOf("Windows 7") > -1;
        if (isWin7) return "Win7";
    }
    var isMac = (navigator.platform == "Mac68K") || (navigator.platform == "MacPPC") || (navigator.platform == "Macintosh") || (navigator.platform == "MacIntel");
    if (isMac) return "Mac";
    var isUnix = (navigator.platform == "X11") && !isWin && !isMac;
    if (isUnix) return "Unix";
    var isLinux = (String(navigator.platform).indexOf("Linux") > -1);
    if (isLinux) return "Linux";
    return "None";
}
function JSRound(fNum, fBit) { var i = 1; var m = 1; var tempNum = fNum; for (i = 1; i <= fBit; i++) m = m * 10; tempNum = tempNum * m; tempNum = Math.round(tempNum); tempNum = tempNum / m; return tempNum }

function fnGetJSON(strx, stry, strs, strbrowser, stros, stru) {
    var url = window.location.href;var rp;
    if (document.referrer.length > 0) { rp = document.referrer } else { rp = url }
    //var regex = /.*\:\/\/([^\/]*).*/;
    var regex = /http\:\/\/([^\/]+)\/$/;
    var match = url.match(regex);
    if (typeof match != "undefined" && null != match) { host = match[1] } else { return }
    var strhosts = host.split("."); host = strhosts.length > 1 ? strhosts[0] : "www";
    if (url.lastIndexOf("/") == url.length - 1) {
        url = url.substring(0, url.length - 1);
    }
    if (rp.lastIndexOf("/") == rp.length - 1) {
        rp = rp.substring(0, rp.length - 1);
    }
    url = url.toLowerCase();
    rp = rp.toLowerCase();
    jQuery.getJSON("http://hits.39.net/Data/HistsData.ashx?x=" + strx + "&y=" + stry + "&s=" + strs + "&bro=" + strbrowser + "&os=" + stros + "&typeid=" + host + "&u=" + stru + "&si=" + url + "&rp=" + rp + "&jsoncallPP=?", function (data) { });
}
