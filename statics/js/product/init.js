(function(c){var b=c.Config.debug;function a(w){if(typeof w=="string"){w=w.split(",")}var l=[],s={},m=[],x={},e={};b=c.Config.debug;c.each(w,function(A){var i=c.Loader.Utils.createModuleInfo(c,A);d(i,l,m,s,x,e)});if(l.length){if(c.config("combine")){var q=c.Config,r=q.comboPrefix,f=q.comboSep,y=q.comboMaxFileNum,z=q.comboMaxUrlLength;var u="";var h="";var o=[];var n=[];for(var v=0;v<l.length;v++){var g=l[v];var k=g.getPackage();var j=k.getPrefixUriForCombo();var p=g.getFullPath();if(!k.isCombine()||!c.startsWith(p,j)){document.writeln('<link href="'+p+'"  rel="stylesheet"/>');continue}var t=p.slice(j.length).replace(/\?.*$/,"");o.push(g);n.push(t);if(o.length===1){u=j+r;h="?t="+encodeURIComponent(k.getTag())}else{if((n.length>y)||(u.length+n.join(f).length+h.length>z)||o[0].getPackage()!=k){o.pop();n.pop();document.writeln('<link href="'+(u+n.join(f)+h)+'"  rel="stylesheet"/>');o=[];n=[];v--}else{}}}if(n.length){document.writeln('<link href="'+(u+n.join(f)+h)+'"  rel="stylesheet"/>')}}else{c.each(l,function(i){document.writeln('<link href="'+i.getFullPath()+'"  rel="stylesheet"/>')})}}}function d(h,g,e,k,j,l){var f=h.getName();if(b&&j[f]){c.error("circular dependencies found: "+e);return}if(l[f]){return}l[f]=1;if(h.getType()=="css"){if(!k[f]){h.status=4;g.push(h);k[f]=1}return}var i=h.getRequiredMods();if(b){j[f]=1;e.push(f)}c.each(i,function(m){d(m,g,e,k,j,l)});if(b){e.pop();delete j[f]}}window.importStyle=a})(KISSY);KISSY.config("modules",{"components/tooltip/index":{requires:["brix/core/pagelet","overlay","components/tooltip/index.css"]},"components/comment/index":{requires:["brix/core/brick","components/pagination/index","components/comment/index.css"]},"components/pagination/index":{requires:["brix/core/brick","components/pagination/index.css"]},"components/share/index":{requires:["brix/core/brick","components/share/index.css"]},"components/starrating/index":{requires:["brix/core/brick","node","ua","components/starrating/index.css"]},"components/placeholder/index":{requires:["brix/core/brick"]}});KISSY.config({combine:true,packages:{components:{base:"http://a.tbcdn.cn/apps/e/activity/131008",debug:true}}});