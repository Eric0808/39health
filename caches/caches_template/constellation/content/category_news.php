<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>newstyle/news_index.css" rel="stylesheet" type="text/css" />
<script src="<?php echo JS_PATH;?>newstyle/jquery-1.4.2.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>newstyle/mouseonclick.js" ></script>
<script language="JavaScript" src="<?php echo JS_PATH;?>newstyle/fun_index.js" ></script>
<!--main-->
<div class="tonglan">

</div>
<div class="wrap">
<div class="box_t bco"></div>
<div class="jktips"> <div class="key"><u><a title="手足口病" href="#"  target="_blank">手足口病</a></u>  <u><a title="整形问答" href="#"  target="_blank">整形问答</a></u> <u><a title="口腔健康" href="#" >口腔健康</a></u> <u><a title="医学整形" href="#" >医学整形</a></u> <u><a title="育儿知识" href="#" >育儿知识</a></u></div> 
<div class="tips"><span>特惠：</span>【<a href="#" >乳腺癌基因检测700元优惠</a>】【<a href="#" >广州华侨医院近视术优惠</a>】【<a href="#" >更多</a>】</div> 

</div>
<div class="box_b bco"></div>
<div class="clear"></div>
</div>
<div class="wrap">
<div class="Con_L">
<div class="spk-one">
<div class="one-middle">
<div id="focus">
<div id="hotpic">
<div style="display: block"><h3><a href="#" >名医在线：中医防治乳腺病</a></h3><a href="#" ><img src="images/f76/c200026/org_138867.jpg"  alt="名医在线：中医防治乳腺病" /></a></div>
<div><h3><a href="#" >秋分节气养生</a></h3><a href="#" ><img src="images/f76/c200026/org_138248.jpg"  alt="秋分节气养生" /></a></div>
<div><h3><a href="#"  id="adtext">喝橙汁预防癌症</a></h3><a href="#"  id="adlink"><img src="images/f76/c200026/org_138270.jpg"  alt="喝橙汁预防癌症" id="adpic" /></a></div>
<div><h3><a href="#" >秋季，吃哪些水果较适宜</a></h3><a href="#" ><img src="images/f76/c200026/org_138869.jpg"  alt="秋季，吃哪些水果较适宜" /></a></div>
<div><h3><a href="#" >英国一婴儿出生即有门牙</a></h3><a href="#" ><img src="images/f76/c200026/org_138306.jpg"  alt="英国一婴儿出生即有门牙" /></a></div>
<div><h3><a href="#"  id="adtext2">灰指甲感染原因</a></h3><a href="#"  id="adlink2"><img src="images/f76/c200026/org_138257.jpg"  alt="灰指甲感染原因" id="adpic2" /></a></div>
</div>
<div class="carousel"> <span class="active" id="t0" onmouseover="Mea(0);clearAuto();" onmouseout="setAuto();">1</span> <span class="bg" id="t1" onmouseover="Mea(1);clearAuto();" onmouseout="setAuto();">2</span> <span class="bg" id="t2" onmouseover="Mea(2);clearAuto();" onmouseout="setAuto();">3</span> <span class="bg" id="t3" onmouseover="Mea(3);clearAuto();" onmouseout="setAuto();">4</span> <span class="bg" id="t4" onmouseover="Mea(4);clearAuto();" onmouseout="setAuto();">5</span> <span class="bg" id="t5" onmouseover="Mea(5);clearAuto();" onmouseout="setAuto();">6</span> </div>
<script type="text/javascript">
var n = 0;
function Mea(value) {
n = value;
setBg(value);
plays(value);
}
function setBg(value) {
for (var i = 0; i < 6; i++)
document.getElementById("t" + i + "").className = "bg";
document.getElementById("t" + value + "").className = "active";
}
function plays(value) {
try {
with (hotpic) {
filters[0].Apply();
for (i = 0; i < 6; i++) i == value ? children[i].style.display = "block" : children[i].style.display = "none";
filters[0].play();
}
}
catch (e) {
var d = document.getElementById("hotpic").getElementsByTagName("div");
for (i = 0; i < 6; i++) i == value ? d[i].style.display = "block" : d[i].style.display = "none";
}
}
function clearAuto() { clearInterval(autoStart) }
function setAuto() { autoStart = setInterval("auto(n)", 4000) }
function auto() {
n++;
if (n > 5) n = 0;
Mea(n);
}
setAuto(); 
</script> 
</div>
</div>
</div>
<div class="DataBox">
<div class="box_t bco">
<div class="box_tr"></div>
</div>
<div id="Tab2"> <span class="tab">
<h2 class="up" onMouseOver="showTab(2,1);"><a href="#"  class="db1">查疾病</a></h2>
<h2 onMouseOver="showTab(2,2);"><a href="#"  class="db2">查症状</a></h2>
<h2 onMouseOver="showTab(2,3);"><a href="#"  class="db3">查药品</a></h2>
<h2 onMouseOver="showTab(2,4);"><a href="#"  class="db4">找医院</a></h2>
<h2 onMouseOver="showTab(2,5);"><a href="#"  class="db5">找医生</a></h2>
<h2 onMouseOver="showTab(2,6);"><a href="#"  class="db9">药膳食材</a></h2>
<h2 onMouseOver="showTab(2,7);"><a href="#"  class="db7">整形项目</a></h2>
<h2 onMouseOver="showTab(2,8);"><a href="#"  class="db8">检查项目</a></h2>
</span>
<div class="block"> <ul class="jbk">
  <li><a href="#" >手足口病</a></li>
  <li><a href="#" >颈椎病</a></li>
  <li><a href="#" >乳腺癌</a></li>
  <li><a href="#" >尖锐湿疣</a></li>
  <li><a href="#" >不孕不育</a></li>
  <li><a href="#" >牛皮癣</a></li>
  <li><a href="#" >白癜风</a></li>
  <li><a href="#" >高血压</a></li>
  <li><a href="#" >癫痫</a></li>
</ul>
<ul class="jbk">
  <li><a href="#"  title="按科室查询">按科室查</a></li>
  <li><a href="#"  title="心血管疾病">心血管</a></li>
  <li><a href="#" >呼吸内科</a></li>
  <li><a href="#" >消化内科</a></li>
  <li><a href="#" >内分泌科</a></li>
  <li><a href="#" >五官科</a></li>
  <li><a href="#" >肿瘤科</a></li>
  <li><a href="#" >传染科</a></li>
  <li><a href="#"  title="精神心理科">精神心理</a></li>
</ul>
<ul class="jbk">
  <li><a href="#"  class="orange">男科</a> >></li>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >淋病</a></li>
  <li><a href="#"  class="orange">妇科</a> >></li>
  <li><a href="#" >宫颈癌</a></li>
  <li><a href="#" >阴道炎</a></li>
</ul>
<ul class="jbk nobline">
  <li><a href="#"  class="orange">儿科</a> >></li>
  <li><a href="#" >小儿感冒</a></li>
  <li><a href="#" >婴儿腹泻</a></li>
  <li><a href="#"  class="orange">老人</a> >></li>
  <li><a href="#" >冠心病</a></li>
  <li><a href="#" >糖尿病</a></li>
</ul> </div>
<div> <ul class="zzk">
                        <li><a href="#" >妇科</a> >></li>
                        <li><a href="#" >盆腔积液</a></li>
                        <li><a href="#" >宫颈囊肿</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >男科</a> >></li>
                        <li><a href="#" >阴囊瘙痒</a></li>
                        <li><a href="#" >包皮粘连</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >全身</a> >></li>
                        <li><a href="#"  title="淋巴结肿大">淋巴结肿</a></li>
                        <li><a href="#"  title="血小板减少">血小板少</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >头部</a> >></li>
                        <li><a href="#" >舌苔发黑</a></li>
                        <li><a href="#" >牙疼</a></li>
                        <li><a href="#" >耳鸣</a></li>
                        <li><a href="#" >脸上长斑</a></li>
                        <li><a href="#" >头痛</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >胸部</a> >></li>
                        <li><a href="#" >乳房胀痛</a></li>
                        <li><a href="#" >心悸</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >腰部</a> >></li>
                        <li><a href="#" >肾阴虚</a></li>
                        <li><a href="#" >腰骶疼痛</a></li>
                    </ul>
                	<ul class="zzk">
                        <li><a href="#" >下肢</a> >></li>
                        <li><a href="#" >脚臭</a></li>
                        <li><a href="#" >小腿酸疼</a></li>
                    </ul>
                	<ul class="zzk nobline">
                        <li><a href="#" >皮肤</a> >></li>
                        <li><a href="#" >下巴长痘</a></li>
                        <li><a href="#" >疱疹</a></li>
                    </ul> </div>
<div> <ul class="ypk">
  <li><a href="#"  class="orange">常用药品</a> >></li>
  <li><a href="#" >万艾可</a></li>
  <li><a href="#" >六味地黄丸</a></li>
  <li><a href="#" >希爱力</a></li>
  <li><a href="#" >男宝胶囊</a></li>
  <li><a href="#" >前列康</a></li>
  <li><a href="#" >固元颗粒</a></li>
  <li><a href="#" >妇科千金片</a></li>
  <li><a href="#" >气血和胶囊</a></li>
  <li><a href="#" >999感冒灵颗粒</a></li>
</ul>
<ul class="ypk nobline">
  <li><a href="#"  class="orange">药品分类</a> >></li>
  <li><a href="#" >感冒药</a></li>
  <li><a href="#" >妇科用药</a></li>
  <li><a href="#" >男科用药</a></li>
  <li><a href="#" >儿科用药</a></li>
  <li><a href="#" >胃肠用药</a></li>
  <li><a href="#" >皮肤用药</a></li>
  <li><a href="#" >五官镇痛类</a></li>
  <li><a href="#" >家庭常备</a></li>
  <li><a href="#" >维生素</a></li>
  <li><a href="#" >糖尿病药</a></li>
  <li><a href="#" >肿瘤用药</a></li>
</ul> </div>
<div> <ul class="yyk" style="padding:0px;">
  <li><a href="#" >妇科医院排行</a></li>
  <li><a href="#" >男科医院排行</a></li>
  <li><a href="#" >儿科医院排行</a></li>
  <li><a href="#" >眼科医院排行</a></li>
  <li><a href="#" >肿瘤医院排行</a></li>
  <li><a href="#" >中医医院排行</a></li>
  <li><a href="#" >全国医院排行</a></li>
  <li><a href="#" >北京医院排行</a></li>
  <li><a href="#" >上海医院排行</a></li>
  <li><a href="#" >广州医院排行</a></li>
</ul>
<ul class="yyk1 nobline" style="padding:0px;">
  <li style="width:102px; " class="name"><a href="#"  class="orange">按专科查询</a> >></li>
  <li style="width: 60px;"><a href="#" >整形美容院</a></li>
  <li><a href="#" >呼吸内科</a></li>
  <li><a href="#" >消化内科</a></li>
  <li><a href="#" >心内科</a></li>
  <li><a href="#" >传染病科</a></li>
  <li><a href="#" >精神心理</a></li>
  <li><a href="#" >心胸外科</a></li>
</ul>
<ul class="yyk2 nobline" style="padding:0px;">
  <li style="width:86px;"  class="name"><a href="#"  class="orange">按城市查询</a> >></li>
  <li><a href="#" >北京</a></li>
  <li><a href="#" >上海</a></li>
  <li><a href="#" >广州</a></li>
  <li><a href="#" >深圳</a></li>
  <li><a href="#" >重庆</a></li>
  <li><a href="#" >成都</a></li>
  <li><a href="#" >西安</a></li>
  <li><a href="#" >武汉</a></li>
  <li><a href="#" >沈阳</a></li>
  <li><a href="#" >杭州</a></li>
</ul> </div>
<div> <ul class="ysk">
  <li><a href="#"  class="orange">内科专家</a></li>
  <li><a href="#" >冠心病</a></li>
  <li><a href="#" >糖尿病</a></li>
  <li><a href="#"  class="orange">外科专家</a></li>
  <li><a href="#" >肺癌</a></li>
  <li><a href="#" >颈椎病</a></li>
</ul>
<ul class="ysk">
  <li><a href="#"  class="orange">妇科专家</a></li>
  <li><a href="#" >盆腔炎</a></li>
  <li><a href="#" >月经不调</a></li>
  <li><a href="#"  class="orange">男科专家</a></li>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >男性不育</a></li>
</ul>
<ul class="ysk">
  <li><a href="#"  class="orange">儿科专家</a></li>
  <li><a href="#" >小儿感冒</a></li>
  <li><a href="#" >小儿多动</a></li>
  <li><a href="#"  class="orange">五官科</a></li>
  <li><a href="#" >青光眼</a></li>
  <li><a href="#" >慢性鼻炎</a></li>
</ul>
<ul class="ysk">
  <li><a href="#"  class="orange">按科室查询</a></li>
  <li><a href="#" >呼吸内科</a></li>
  <li><a href="#" >心血管内科</a></li>
  <li><a href="#" >泌尿外科</a></li>
  <li><a href="#" >心胸外科</a></li>
  <li><a href="#" >骨科</a></li>
</ul>
<ul class="ysk nobline">
  <li><a href="#" >肿瘤科</a></li>
  <li><a href="#" >传染科</a></li>
  <li><a href="#" >精神心理</a></li>
  <li><a href="#" >整形美容</a></li>
  <li><a href="#" >中医专家</a></li>
  <li><a href="#" >附睾炎</a></li>
</ul> </div>
<div> <ul class="hzp">
                        <li><a href="#" >当归</a></li>
                        <li><a href="#" >枸杞子</a></li>
                        <li><a href="#" >黄芪</a></li>
                        <li><a href="#" >人参</a></li>
                        <li><a href="#" >党参</a></li>
                        <li><a href="#" >熟地</a></li>
                        <li><a href="#" >虫草</a></li>
                        <li><a href="#" >木耳</a></li>
                        <li><a href="#" >菊花</a></li>
                    </ul>
                	<ul class="hzp">
                        <li><a href="#" >玉竹</a></li> 
                        <li><a href="#" >沙参</a></li> 
                        <li><a href="#" >川贝</a></li> 
                        <li><a href="#" >百合</a></li> 
                        <li><a href="#" >白果</a></li> 
                        <li><a href="#" >无花果</a></li> 
                        <li><a href="#" >罗汉果</a></li> 
                        <li><a href="#" >莲子心</a></li> 
                        <li><a href="#" >冬瓜皮</a></li> 
                        <li><a href="#" >玉米须</a></li> 
                        <li><a href="#" >赤小豆</a></li> 
                        <li><a href="#" >苦竹笋</a></li> 
                    </ul>
                	<ul class="hzp nobline">
                        <li><a href="#" >山药</a></li>
                        <li><a href="#" >山楂</a></li>
                        <li><a href="#" >杏仁</a></li>
                        <li><a href="#" >茯苓</a></li>
                        <li><a href="#" >石斛</a></li>
                        <li><a href="#" >芡实</a></li>
                        <li><a href="#" >橘红</a></li>
                        <li><a href="#" >桂圆</a></li>
                        <li><a href="#" >红豆</a></li>
                        <li><a href="#" >甘草</a></li>
                        <li><a href="#" >薏苡仁</a></li>
                        <li><a href="#" >薄荷</a></li>
  
                    </ul> </div>
<div> <ul class="zxk">
                        <li><a href="#"  class="orange">常规整形</a></li>
                        <li><a href="#" >腋臭祛除</a></li>
                        <li><a href="#" >皮肤移植</a></li>
                        <li><a href="#" >腿形矫正</a></li>
                        <li><a href="#" >光子脱毛</a></li>
                        <li><a href="#" >头发移植</a></li>
                    </ul>
                	<ul class="zxk">
                        <li><a href="#"  class="orange">五官头部</a></li>
                        <li><a href="#" >隆鼻</a></li>
                        <li><a href="#" >双眼皮</a></li>
                        <li><a href="#" >去眼袋</a></li>
                        <li><a href="#" >洗牙</a></li>
                        <li><a href="#" >补牙</a></li>
                    </ul>
                	<ul class="zxk">
                        <li><a href="#"  class="orange">美体塑形</a></li>
                        <li><a href="#" >隆胸</a></li>
                        <li><a href="#" >减肥</a></li>
                        <li><a href="#" >生物瘦脸</a></li>
                        <li><a href="#" >激光溶脂</a></li>
                        <li><a href="#" >瘦小腿</a></li>
                    </ul>
                	<ul class="zxk">
                        <li><a href="#"  class="orange">非手术</a></li>
                        <li><a href="#" >痣切除</a></li>
                        <li><a href="#" >美白针</a></li>
                        <li><a href="#" >光子嫩肤</a></li>
                        <li><a href="#" >激光脱毛</a></li>
                        <li><a href="#" >激光祛斑</a></li>
                    </ul>
                	<ul class="zxk nobline">
                        <li><a href="#" >美白</a></li>
                        <li><a href="#" >嫩肤</a></li>
                        <li><a href="#" >除皱</a></li>
                        <li><a href="#" >祛斑</a></li>
                        <li><a href="#" >祛疤</a></li>
                        <li><a href="#" >抗衰老</a></li>
                    </ul> </div>
<div> 	<ul class="jck">
                        <li><a href="#" >肝功能</a></li>
                        <li><a href="#" >血液检查</a></li>
                        <li><a href="#" >溶血试验</a></li>
                        <li><a href="#" >尿液检查</a></li>
                        <li><a href="#" >白带检查</a></li>
                        <li><a href="#" >清洁度</a></li>
		</ul>
                	<ul class="jck">
                        <li><a href="#" >肾功能</a></li>
                        <li><a href="#" >内分泌</a></li>
                        <li><a href="#" >醛固酮</a></li>
                        <li><a href="#" >肿瘤检查</a></li>
                        <li><a href="#" >癌胚抗原</a></li>
                        <li><a href="#" >甲胎蛋白</a></li>
		</ul>
                	<ul class="jck">
                        <li><a href="#" >粪便检查</a></li>
                        <li><a href="#" >粪便颜色</a></li>
                        <li><a href="#" >粪便血液</a></li>
                        <li><a href="#" >病原体</a></li>
                        <li><a href="#" >脑脊液</a></li>
                        <li><a href="#" >免疫学</a></li>
		</ul>
                	<ul class="jck">
                        <li><a href="#" >生化检查</a></li>
                        <li><a href="#" >维生素C</a></li>
                        <li><a href="#" >维生素A</a></li>
                        <li><a href="#" >X线检查</a></li>
                        <li><a href="#" >输卵管造影</a></li>
                        <li><a href="#" >胸部透视</a></li>
		</ul>
                	<ul class="jck nobline">
                        <li><a href="#" >B超检查</a></li>
                        <li><a href="#" >妇科超声</a></li>
                        <li><a href="#" >产科B超</a></li>
                        <li><a href="#" >CT检查</a></li>
                        <li><a href="#" >盆腔CT</a></li>
                        <li><a href="#" >胸部CT</a></li>
		</ul> </div>
</div>
<div class="kwbox">
<div class="box_t">
<div class="box_tr"></div>
</div>
<div class="box_m">

</div>
<div class="box_b">
<div class="box_br"></div>
</div>
</div>
<div class="box_b bco">
<div class="box_br"></div>
</div>
</div>
</div>
<div class="Con_M">
<div class="NewsBox" id="Tab1">
<h2 class="up" onMouseOver="showTab(1,1);"><a href="#" >今日头条</a></h2>
<h2 onMouseOver="showTab(1,2);"><a href="#" >就医指南</a></h2>
<h2 onMouseOver="showTab(1,3);"><a href="#" >健康速递</a></h2>
<span class="yline"></span>
<div class="block"> 
<span class="toptitle">
<strong><a href="#"  class="tt1">肿瘤真相与误区：乙肝患者离肝癌并不远？</a></strong>
<span>[<a href="#" >乙肝+饮酒赛过喝砒霜</a>][<a href="#" >乙肝患者注意甲胎蛋白</a>][<a href="#" >防肝癌不妨多吃"三笋"</a>]</span>
<span class="clear"></span></span>
<ul class="newslist">
<li>[<a href="#" >要闻</a>] <strong><a href="#" >多美滋贿赂七省市区医护人员</a> <a href="#" >北京奶价远高于美国</a></strong></li>
<li>[<a href="#" >新闻</a>] <a href="#" >湖南3名护士被持刀砍伤</a> <a href="#" >传南昌2女童爬进洗衣机被绞死</a></li> 
<li>[<a href="#" >饮食</a>] <a href="#" >台风天囤积的瓜果怎么保鲜</a> <a href="#" >多吃哪种鱼肉可降乳癌风险</a></li> 
<li>[<a href="#" >保健</a>] <a href="#" >白领颈椎保养的最佳时间表</a> <a href="#" >为孩子选购玩具该由谁决定</a></li> 
<li>[<a href="#" >美容</a>] <a href="#" >广东省二医免费体验玻尿酸美容</a> <a href="#" >角质护理≠单纯去角质</a></li> 
<li>[<a href="#" >减肥</a>] <a href="#" >秋冬季寒性体质如何减肥</a> <a href="#" >自制双豆减肥汤3月轻松瘦20斤</a></li>
</ul>
<span class="toptitle">
<strong><a href="#"  class="tt1">豆中之王营养高 黄豆三餐料理清新又美味</a></strong>
<span>[<a href="#" >补钙西兰花怎吃最好</a>][<a href="#" >"植物肉"豆腐好吃又营养</a>][<a href="#" >山药食疗补虚效果好</a>]</span>
<span class="clear"></span></span>
<ul class="newslist nobline">
<li>[<a href="#" >疾病</a>] <strong><a href="#" >喷嚏连串打小心过敏性鼻炎</a> <a href="#" >多排汗有助治疗牛皮癣</a></strong></li>
<li>[<a href="#" >诊疗</a>] <a href="#" >大鱼大肉后腹痛警惕胰腺炎</a> <a href="#" >营养不足或诱发灰指甲感染</a></li> 
<li>[<a href="#" >肿瘤</a>] <a href="#" >二甲双胍不但控糖还能抗癌</a> <a href="#" >美媒称喝橙汁或可预防癌症</a></li> 
<li>[<a href="#" >骨科</a>] <a href="#" >内衣太紧当心有害颈椎健康</a> <a href="#" >初秋流感高发留心咳嗽发热</a></li> 
<li>[<a href="#" >咨询</a>] <a href="#" >睡觉流口水或是病如对症治疗</a> <a href="#" >《问健康画报》创刊首发</a></li> 
<li>[关注] <a href="#" >内裤，女性私密健康第一源头</a> <a href="#" >39小调查:你的胃健康吗？</a></li> 
</ul> 
</div>
<span class="clear"></span>
<div> 
<span class="toptitle">			
<strong><a href="#"  class="tt1">豆中之王营养高！黄豆料理让你健康一整天！</a></strong><span> [<a href="#" >西兰花健康又补钙</a>][<a href="#" >“植物肉”豆腐美味又营养</a>][<a href="#" >山药滋补食疗最佳</a>]</span>					
<span class="clear"></span>					
</span>					
					
				
				
				
								
				
				
		
<ul class="newslist  nobline">					
<li>[<a href="#" >糖尿病</a>] <strong><a href="#" >谁的阿尔茨海默病风险增倍</a> <a href="#" >部分疾病高血糖信号</a></strong></li>					
<li>[<a href="#" >肿瘤</a>] <a href="#" >人一定会出现“癌细胞”</a> <a href="#" >防肺癌对二手烟和保健品说不<br></a></li>					
<li>[<a href="#" >骨科</a>] <a href="#" >骨质疏松并非都是缺钙</a> <a href="#" >关节运动少白领多受关节炎困扰<br></a></li>					
<li>[<a href="#" >妇科</a>] <a href="#" >私处常用湿巾当心患上妇科病</a> <a href="#" >月经期不适合运动是误传<br></a></li>					
<li>[<a href="#" >皮肤</a>] <a href="#" >防治水痘日常护理是关键</a> <a href="#" >薏米或能用于辅助治疗扁平疣<br></a></li>					
					
					
					
					
					
					
				
					
			
				
				
					
			
		
					
					
				
					

	


<li>[<a href="#" >诊疗</a>] <a href="#" >私处小不适易引发妇科大问题</a> <a href="#" >[9.27]暨大呼吸减痛讲座<br></a></li>	

			


</ul>




<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_136261.jpg"  alt="五种错误行为要子宫命" width="120" height="80" border="0" /></a><a href="#" >五种错误行为要子宫命</a></span>



<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_137415.jpg"  alt="治湿疹试试穴位按摩" width="120" height="80" border="0" /></a><a href="#" >治湿疹试试穴位按摩</a></span>



<span class="sd_pic"><a href="#" ><img src="
images/f76/c200026/org_131030.jpg"  alt="常发怒爱吵架查查甲功
" width="120" height="80" border="0" /></a><a href="#" >常发怒爱吵架查查甲功</a></span>



<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_134507.jpg"  alt="常喝6种水易致癌！" width="120" height="80" border="0" /></a><a href="#" >常喝6种水易致癌！</a></span>



<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_134535.jpg"  alt="补钙美食排行前10强" width="120" height="80" border="0" /></a><a href="#" >补钙美食排行前10强</a></span>



<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_126417.jpg"  alt=" 失眠很伤身！如何治？
" width="120" height="80" border="0" /></a><a href="#" > 失眠很伤身！如何治？</a></span> 
</div>
<div> 
<span class="toptitle">
 
                              <strong><a href="#"  class="tt1">玻尿酸免费打！享权威专家一对一注射设计</a></strong> 
<span>[<a href="#" >玻尿酸能有哪些好处</a>][<a href="#" >整形医生眼中的完美身材</a>][<a href="#" >肉毒素除皱6大副作用</a>]</span>
                    <span class="clear"></span>


                </span>

<ul class="newslist  nobline">	

		      <li>[<a href="#" >育儿</a>] <strong><a href="#" >少吃糖多吃肉更易生男孩吗</a> <a href="#" >易过敏儿童要慎吃芒果</a></strong></li>

                      <li>[<a href="#" >饮食</a>] <a href="#" >便秘者及盆腔炎患者慎食石榴</a> <a href="#" >女性每天饮酒易患乳腺癌</a></li>  		 
	
  <li>[<a href="#" >减肥</a>] <a href="#" >零食这样分级吃健康不发胖</a> <a href="#" >慢慢做仰卧起坐瘦腹更有效</a></li>  

                      <li>[<a href="#" >女性</a>] <a href="#" >换季易过敏主妇少用洗涤剂</a> <a 
href="#" >秋季子宫养护应做好18件事</a></li>

		              <li>[<a href="#" >心理</a>] <a href="#" >短期压力能让人头脑更清醒</a> <a 
href="#" >聪明的孩子或更早开始饮酒</a> </li>

                      <li>[<a href="#" >保健</a>] <a 
href="#" >女人不得不知的私密“内经”</a> <a href="#" >40岁以上男性更容易尿歪</a> </li>

</ul>


<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_138742.jpg"  alt="台风天囤积瓜果怎保鲜"/></a><a href="#" >台风天囤积瓜果怎保鲜</a></span>

<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_139012.jpg"  alt="康有为死于睾丸移植？"/></a><a href="#" >康有为死于睾丸移植？</a></span>

<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_137507.jpg"  alt="梦露罕见健身照曝光"/></a><a href="#" >梦露罕见健身照曝光</a></span>

<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_137490.jpg"  alt="不吃糖为什么也烂牙？"/></a><a href="#" >不吃糖为什么也烂牙？</a></span>

<span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_133885.jpg"  alt="毛孔粗大真的没救吗"/></a><a href="#" >毛孔粗大真的没救吗</a></span>



  <span class="sd_pic"><a href="#" ><img src="images/f76/c200026/org_138679.jpg"  alt="急救肥胖 三日排毒餐"/></a><a href="#" >节后三日排毒餐甩肉</a></span> 
</div>
</div>
<div class="box_b">
<div class="box_br"></div>
</div>
<div class="cust430">

</div>
</div>
<div class="Con_R">
<div class="cust210">

</div>
<div class="cust210_1">
<div class="top_pic">
        	<h4><a href="#" >名医在线</a></h4>
        </div>
        <span class="myzx_main">
        		<span class="title"><strong>本期主题：</strong><a href="#" >乳腺癌的手术治疗</a></span>
                <span class="pic_3">
                	<a href="#" ><img src="images/f76/c200026/org_137740.jpg"  alt="http://myzx.39.net/zb-339.html" /></a>
                </span> 
                <span class="text">
                	 复旦大学附属肿瘤医院<br /><a class="a2" href="#" >侯意枫</a> &nbsp;副主任医师                </span>
                <span id="span_dt">
                     <span class="djs_t">离活动开始还有:</span>
                     <span class="djs" >
                         <span class="pic_4"  id="span_dt_dt"></span>
                         <span class="djs_1">天</span>
                         <span class="pic_4" id="span_dt_dt1"></span>
                         <span class="djs_1">小时</span>
                         <span class="pic_4"  id="span_dt_dt2"></span>
                         <span class="djs_1">分钟</span>
                	</span>
       		 	</span>
<span id="span_dt_ing" style="display:none;">
                    <img src="images/minyi/images/ing.jpg"  /><p>医生正在答题</p>
                </span>
                <span id="span_dt_end" style="display:none;">
                    <img src="images/minyi/images/end.jpg"  /><p>敬请关注下一期</p>
                </span>
        		<span class="fiask"><a href="#"  id="span_dtt">抢先提问</a></span>
                <ul class="wqhg">
                      <li class="list_1" >
                            <strong>往期回顾</strong><span class="f1"></span><em class="e1"><a href="#" >更多></a></em>
                      </li>
                     <li class="t1"><a href="#" >风湿病只能吃药吗？</a><em><a href="#" >查看></a></em></li>
                      <li class="b1"><span>武警上海市总队医院 朱敬峰</span></li>
                 <li class="t1"><a href="#" >爱牙日关注口腔健康</a><em><a href="#" >查看></a></em></li>
                      <li class="b1">
                       <span class="b1">中日友好医院 徐宝华</span></li>
      
                 </ul>
		</span>
        <div class="bottom_pic"></div>
        
<script type="text/javascript">
function _fresh() 
{ 
var endtime=new Date("2013/9/24 14:30:00"); //括号中的内容修改时间
var nowtime = new Date(); 
var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000); 
var rightsecond=parseInt((nowtime.getTime()-endtime.getTime())/1000);  
__hour=parseInt((rightsecond/3600)); 
__d=parseInt(leftsecond/3600/24); 
__h=parseInt((leftsecond/3600)%24); 
__m=parseInt((leftsecond/60)%60);
__s=parseInt(leftsecond%60); 
__all = __d+"天 "+__h+"小时"+__m+"分"+__s+"秒"; 
document.getElementById("span_dt_dt").innerHTML=__d; 
document.getElementById("span_dt_dt1").innerHTML=__h; 
document.getElementById("span_dt_dt2").innerHTML=__m;
if(leftsecond<=0){
	    jQuery('#span_dt').hide();
	    jQuery('#span_dt_ing').show();
		document.getElementById("span_dtt").innerHTML="马上提问";
       
		}

if(__hour>=1){
            jQuery('#span_dt').hide();
	    jQuery('#span_dt_ing').hide();
        jQuery('#span_dt_end').show();
		document.getElementById("span_dtt").innerHTML="我还要提问";
        }
}  
_fresh() 
setInterval(_fresh,1000);
</script>

<style>
.cust210_1{ width:210px;margin:10px 0 0 0; background:#fff;float:left;  overflow:hidden; _zoom:1;}
.top_pic{ background:url("images/minyi/images/2_r2_c2.png") no-repeat 0 0; width:210px; height:30px;left:-1px; top:0;}
.top_pic h4{ font-size:14px; color:#FFF; font-weight:bold; line-height:30px; margin-left:10px; width:120px;}
.top_pic h4 a{color:#fff;}
.top_pic h4 a:hover{color:#fff;}
.myzx_main{ width:208px;border-left:1px solid #b2cbcb; border-right:1px solid #b2cbcb; display:block; background:#f7fafa; clear:both; overflow:hidden;_zoom:1;}
.myzx_main .title{font-weight:bold; color: #333;width:206px;color:#f60; display:block;text-indent:10px; padding:7px 0;} 
.myzx_main .title a{color:#333;}
.myzx_main .title a:hover{ color:#f60;}
.myzx_main .pic_3 {float:left; margin:0px 10px 0 10px;}
.myzx_main .text {display:inline; line-height:20px; width:50px;}
.myzx_main.text .a2{ color:#069;}
.myzx_main .text .a1{color:#333;}
.djs_t{ float:left; margin:0px 0 5px -10px; line-height:20px; width:160px; color:#666666; text-align:left; font-size:12px;}
.djs{ float:left; margin:0px 0 0 5px; line-height:26px; width:170px; color:#666666;}
.djs .pic_4{ background:url("images/minyi/images/pic_2.gif"/*tpa=http://image.39.net/images/minyi/images/pic_2.gif*/) no-repeat 0 0;  color:#f60; display:block; width:26px; height:26px; float:left;margin:0 3px;overflow:hidden;font:bold 12px/26px Verdana;text-align:center;}
.djs .djs_1{ float:left; font-size:12px;}
#span_dt{ width:180px; height:50px; padding:8px 0 5px 20px; *padding-top:4px; _padding-top:3px; display:block; color:#666; line-height:40px; text-align:center; overflow:hidden;_zoom:1;}
#span_dt img{ margin-left:-15px;}
#span_dt p{ text-indent:-20px; line-height:20px; height:20px; margin-top:10px;}
#span_dt_end,#span_dt_ing{ width:180px; height:50px; padding:8px 0 5px 20px; *padding-top:4px; _padding-top:3px; display:block; color:#666; line-height:40px; text-align:center; overflow:hidden;_zoom:1;}
#span_dt_end img,#span_dt_ing img{ margin-left:-15px;}
#span_dt_end p,#span_dt_ing p{ text-indent:-20px; line-height:20px; height:20px; margin-top:10px;}
.fiask{width:100px; background:url("images/minyi/images/pic_3.gif"/*tpa=http://image.39.net/images/minyi/images/pic_3.gif*/) no-repeat 0 0;line-height:26px; margin:0 auto; display:block; margin-top:3px;}
.fiask a{ width:100px; height:26px; text-decoration:none; text-align:center;font-weight:bold; color:#000; display:block;}
.fiask a:hover{ text-decoration:underline;}
ul.wqhg{ width:200px;padding: 8px 0 3px 3px;}
.wqhg li{ width:194px; height:15px; line-height:15px; padding:4px; }
.wqhg .list_1{background:url("images/minyi/images/xian_r2_c5.gif"/*tpa=http://image.39.net/images/minyi/images/xian_r2_c5.gif*/) no-repeat 15px 5px;text-align:right;}
.wqhg .t1{color:#006699; text-indent:8px; background:url("images/minyi/images/list.gif"/*tpa=http://image.39.net/images/minyi/images/list.gif*/) no-repeat 2px 10px;}
.wqhg .t1 a {float: left;}
.wqhg .list_1 strong{float:left;}
.wqhg .list_1 span{float:right;}
.wqhg .b1{ color:#666666;text-indent:8px;overflow:hidden;}
.wqhg em{font-style:normal;float:right;}
.wqhg span{float:left;}
.wqhg .e1{ margin-left:110px;}
.wqhg em a{ color:#006699; font-size:12px;}
.wqhg em a:hover{ color:#f60;}
.bottom_pic{ background:url("images/minyi/images/bottom.png") no-repeat 0 -3px; width:210px; height:5px;}
#ad_210{ width:210px; height:35px; background:#F00; margin-top:8px;_margin-top:0px;}</style>
<div id="ad_210">
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="wrap">
<div class="Con_L">
<div class="DataBox">
<div id="Tab3">
<h2 class="up" onMouseOver="showTab(3,1);"><a href="#" >健康自诊</a></h2>
<h2 onMouseOver="showTab(3,2);"><a href="#" >健康自测</a></h2>
<h2 onMouseOver="showTab(3,3);"><a href="#" >十大疾病</a></h2>
<div class="block"> 

</div>
<div> <a href="#"  class="test1">减肥方案<br /><span class="gray">看看该如何减肥</span></a>
                	<a href="#"  class="test3">乙肝自测<br /><span class="gray">用化验结果自测</span></a>
                	<a href="#"  class="test2">安全期自测<br /><span class="gray">女性安全期推算</span></a>
                	<a href="#"  class="test4">智商测试<br /><span class="gray">测您的IQ有多高</span></a>
                    <ul class="test">
                    	<li><a href="#" >看眉形自测健康状况 </a></li>
                    	<li><a href="#" >从臀部解密女人性格  </a></li>
                    	<li><a href="#" >乳房形状看女人性格  </a></li>
                    	<li><a href="#" >哪些饮食习惯易致病 </a></li>
                    	<li><a href="#" >吃西红柿看婚外情？</a></li>
                    	<li><a href="#" >最准的宝宝血型测试  </a></li>
                    	<li><a href="#" >民间高招测宝宝性别 </a></li>
                    	<li><a href="#" >你会看唇形识女人吗</a></li>
                    </ul> </div><span class="clear"></span>
<div> <ul class="dtopten">
  <li><span class="a1"><a href="#" >颈椎病</a></span><span class="a2">>> <a href="#" >颈椎病咨询</a></span><span class="a3">>> <a href="#" >颈椎病就医</a></span></li>
  <li><span class="a1"><a href="#" >感冒</a></span><span class="a2">>> <a href="#" >感冒咨询</a></span><span class="a3">>> <a href="#" >感冒就医</a></span></li>
  <li><span class="a1"><a href="#" >乙肝</a></span><span class="a2">>> <a href="#" >乙肝咨询</a></span><span class="a3">>> <a href="#" >乙肝就医</a></span></li>
  <li><span class="a1"><a href="#" >胃病</a></span><span class="a2">>> <a href="#" >胃病咨询</a></span><span class="a3">>> <a href="#" >胃病就医</a></span></li>
  <li><span class="a1"><a href="#" >湿疹</a></span><span class="a2">>> <a href="#" >湿疹咨询</a></span><span class="a3">>> <a href="#" >湿疹就医</a></span></li>
  <li><span class="a1"><a href="#" >高血压</a></span><span class="a2">>> <a href="#" >高血压咨询</a></span><span class="a3">>> <a href="#" >高血压就医</a></span></li>
  <li><span class="a1"><a href="#" >糖尿病</a></span><span class="a2">>> <a href="#" >糖尿病咨询</a></span><span class="a3">>> <a href="#" >糖尿病就医</a></span></li>
  <li><span class="a1"><a href="#" >乳腺癌</a></span><span class="a2">>> <a href="#" >乳腺癌咨询</a></span><span class="a3">>> <a href="#" >乳腺癌就医</a></span></li>
  <li><span class="a1"><a href="#" >失眠</a></span><span class="a2">>> <a href="#" >失眠咨询</a></span><span class="a3">>> <a href="#" >失眠就医</a></span></li>
  <li><span class="a1"><a href="#" >胆结石</a></span><span class="a2">>> <a href="#" >胆结石咨询</a></span><span class="a3">>> <a href="#" >胆结石就医</a></span></li></ul> </div>
</div>
<div class="box_b bco">
<div class="box_br"></div>
</div>
<div class="cust306"><div class="HealthCal">
  <div class="Health_Address"><a href="#"  class="rili_link" title="进入健康日历首页"></a><span id="userCity"></span><a id="Health_Address" ></a>
    <div id="Health_Address_more">
      <form action="" class="Health_Address_select">
        <label>选择城市:</label>
        <select size="1" id="Provinces" >
        </select>
        <select size="1" id="Citys">
        </select>
        <select size="1" id="Regions">
        </select>
        <input  type="button" class="Health_Address_selectBut" id="btn_change" value="确 认" />
      </form>
    </div>
  </div>
  <div class="Health_date"><span id="index_sp_month">0</span>月<span class="span_date" id="index_sp_date">0</span>日<br />
    <p id="index_sp_lunar"></p></div>
  <div class="Health_Weather"> <span class="Health_Weather1" id="index_weather_tiqi">0℃-0℃</span><br />
    <span id="index_weather_wendu"></span></div>
  <div class="Health_con"><strong><a href="#" >甘蔗润燥止渴 脾胃虚寒者少吃</a></strong>
    <ul>
      <li><span>[<a href="#" >保健</a>]<a href="#" >台风天囤积的瓜果怎么保鲜</a> </span> <a href="#"  class="Health_conB">健康心得</a></li>
      <li><span>[<a href="#" >疾病</a>]<a href="#" >专家解密体检报告如何读懂</a> </span> <a href="#"  class="Health_conB">每日一测</a></li></ul></div>
</div>
</div>
</div>
</div>
<div class="Con_M">
<div class="CommunityBox" id="Tab4">
<h2 class="up" onMouseOver="showTab(4,1);"><a href="#" >健康问答</a></h2>
<h2 onMouseOver="showTab(4,2);"><a href="#" >健康论坛</a></h2>
<h2 onMouseOver="showTab(4,3);"><a href="#" >健康博客</a></h2>
<h2 onMouseOver="showTab(4,4);"><a href="#" >健康视频</a></h2>
<div class="block"> <ul class="ask_list ask2_list">              



<li class="gtop"><a href="#" >惊！别随便用盐水漱口




</a></li>           
<li><a href="#" >警惕：胃不好喝酸奶要谨慎




</a></li>    
<li><a href="#" >口干口苦是胃病还是肝病？




</a></li>   	  
 <li><a href="#" >揭示：膝盖怕冷是不是病？




</a></li>
<li><a href="#" >每天一杯茶能有效控血糖？





</a></li>



</ul>

<span class="ask2_my">
<ul> 




<li><i class="icon1_c">精彩专题</i><a href="#" ><img src="../askimg.39.net/topic/20130912/418669.jpg"  alt="必知怀孕知识"/></a><strong><a href="#" >必知怀孕知识</a></strong></li>

<li><i>知识库</i><a href="#" ><img src="../askimg.39.net/topic/20130718/395254.jpg"  alt="健康问答知识库"/></a><strong><a href="#" >健康问答知识库</a></strong></li>
</ul>
</span>



<span class="ask_ks"><u><a href="#" >健康知识</a></u>　
<a href="#" >怀孕</a> | 
<a href="#"  class="orange">咳嗽</a> | 
<a href="#" >感冒</a> | 
<a href="#" >癫痫</a> | 
<a href="#" >早泄</a> | 
<a href="#"  class="orange">月经</a> | 
<a href="#" >肛肠</a> | 
<a href="#" >糖尿病</a></span> </div>
<div> <span class="bbs_pic"><a href="#" ><img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-07-09/201307091501142520.jpg"  alt="甩肉34斤胖妹有春天" /></a><a href="#" >甩肉34斤胖妹有春天</a></span>

<span class="bbs_pic"><a href="#" ><img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-07-09/201307091501145489.jpg"  alt="减重后时光倒流10年" /></a><a href="#" >减重后时光倒流10年</a></span>

<span class="bbs_pic"><a href="#" ><img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-04-07/201304071048310707.jpg"  alt="我成功减掉44斤" /></a><a href="#" >我成功减掉44斤</a></span>



<span class="bbs_hd">【活动】<a href="#" >39减肥团长招募令 欢迎热心的有志人士报名！（长期有效）</a></span>


<span class="bbs_flt"><u><a href="#" >人气论坛</a></u>　　<a href="#" >减肥论坛</a>| <a href="#" >整形论坛</a>| <a href="#" >生活健康论坛</a>| <a href="#"  class="orange">病友论坛</a>| <a href="#" >妇科论坛</a> </span> </div>
<div> <span class="blog_pic"><a href="#" ><img src="images/f76/c200026/org_138789.jpg"  alt="十种头痛应警惕"></a><a href="#" >十种头痛应警惕</a></span>
            <span class="blog_pic"><a href="#" ><img src="images/f76/c200026/org_138790.jpg"  alt="秋季防脱发妙方"></a><a href="#" >秋季防脱发妙方</a></span>
            <ul class="blog_list">
                <li class="gtop"><a href="#" >女性生理期十大误传</a></li>
                <li><a href="#" >事后一支烟 危害增十倍</a></li>
                <li><a href="#" >秋季养肺五法</a></li>
                <li><a href="#" >家庭常用急救知识与方法</a></li>
                <li><a href="#" >十问题女性体检最该问医生</a></li>
             	
            </ul>
            <span class="blog_mb"><u><a href="#" >名博推荐</a></u>　<a href="#"  class="orange">廖新波</a> 
            <a href="#"  class="orange">游涵</a> <a href="#"  class="orange">马冠生</a> | <a 

href="#" >医生博客</a> | <a href="#" >育儿博客</a></span>

            <span class="blog_kb"><a href="#" >我要开博</a></span> </div>
<div> <span class="sp_pic"><a href="#" >
<img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-07-09/201307091013402763.jpg"  alt="减肥跟我学：加强侧伸展瑜伽灭赘肉" /></a><br />
<a href="#" >加强侧伸展瑜伽灭赘肉</a>
<img src="../image.39.net/art2011/images/ico.gif"  class="sp_anniu" alt="" />
</span>


<span class="sp_pic"><a href="#" >
<img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-05-08/201305081646093145.jpg"  alt="薛奇：详解肺癌外科治疗" /></a><br />
<a href="#" >专家详解肺癌外科治疗</a>
<!-- <img src="http://image.39.net/art2011/images/ico.gif" class="sp_anniu" alt="" /> -->
</span>


<span class="sp_pic"><a href="#" >
<img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-05-08/201305081647155096.jpg"  alt="刘尚梅：淋巴瘤为何要做病理诊断" /></a><br />
<a href="#" >淋巴瘤要做病理诊断</a>
<!-- <img src="http://image.39.net/art2011/images/ico.gif" class="sp_anniu" alt="" /> -->
</span>


<span class="sp_hd">
    <span class="sp_link"><a href="#" ><FONT color=ff6600> 肾亏不宜喝鸡汤</FONT></a></span>
    <span class="sp_link"><a href="#" >智商高睡眠时间短</FONT></a></span> 
    <span class="sp_link"><a href="#" ><FONT color=ff6600> 女人裸睡的七大好处</FONT></a></span>
</span>
<span class="sp_flt"><u><a href="#" >更多健康视频</a></u>　 <a href="#"  class="orange">健康直播间</a> | <a href="#" >饮食说说帮</a> | <a href="#" >疾病视频</a> | <a href="#" >今日<span class="orange">热推</span>视频</a></span> </div>
<span class="clear"></span> </div>
<div id="Tab5">
<h2 class="up" onMouseOver="showTab(5,1);"><a href="#" >独家策划</a></h2>
<h2 onMouseOver="showTab(5,2);"><a href="#" >行业会议</a></h2>
<h2 onMouseOver="showTab(5,3);"><a>精品栏目</a></h2>
<h2 onMouseOver="showTab(5,4);"><a href="#" >权威评测</a></h2>
<div class="block"> <span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_136137.jpg"  alt="填肥胖调查赢10万大奖" /></a><a href="#" >填肥胖调查赢10万大奖</a></span>


<span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_120230.jpg"  alt="健康有益事：图说养生教你生姜食疗" /></a><a href="#" >图说养生教你生姜食疗</a></span>


<span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_136003.jpg"  alt="过半肥胖者应主动防病" /></a><a href="#" >过半肥胖者应主动防病</a></span>



<span class="ch_flt"><span class="r_more"><a href="#"  class="orange">更多 >></a></span>[<a href="#" >新知:玩暴力游戏或有益健康</a>] [<a href="#" >洗头后自然风干好OR吹干好？</a>]</span> </div>
<span class="clear"></span>
<div> <span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_119288.jpg"  alt="2013中国医院论坛在京举行" /></a><a href="#"  title="2013中国医院论坛在京举行">中国医院论坛在京举行</a></span>
<span class="ch_tit"><a href="#" >2013中国医院论坛</a></span>
<span class="ch_box">
<span class="art_hy"><a href="#" >陈竺:将健康理念融入所有政策</a></span>
<span class="art_hy"><a href="#" >黄洁夫:公立医院改革缺向下推进通用模式</a></span>
<span class="art_hy"><a href="#" >2012暴力伤医调研报告发布</a></span>

</span>
<span class="ch_flt"><span class="r_more"><a href="#"  class="orange">更多 >></a></span>[<a href="#" >2013中国药店年度大会</a>] [<a href="#" >首届华南国际美容医学大会即将召开</a>]</span> </div>
<span class="clear"></span>
<div> <span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_135241.jpg"  alt="女性健康私密事儿：女性秋季要护好私处" /></a><a href="#" >女性秋季要护好私处</a></span>


<span class="ch_pic"><a href="#" ><img src="images/f76/c200026/org_132151.jpg"  alt="皮肤大件事：精神压力大或致斑秃" /></a><a href="#" >精神压力大或致斑秃</a></span>


<span class="ch_pic"><a href="#" ><img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-04-03/201304031147452632.jpg"  alt="数说整形：如何正确矫正牙齿" /></a><a href="#" >如何正确矫正牙齿</a></span>



<span class="ch_flt"><span class="r_more"><a href="#"  class="orange">更多 >></a></span>[<a href="#" >节育环，想说爱你不容易</a>] [<a href="#" >五类高危人群需慎防中暑</a>]</span> </div>
<span class="clear"></span>
<div> 
<!--<span class="sy_hot">
                <span class="sy_pic"><a href="http://tuan.39.net/team.php?id=90"><img src="http://image.39.net/117/26/894053_100-75.jpg" alt="魔力瘦茶多酚纤瘦胶囊" /></a></span><span class="sy_title"><a href="http://tuan.39.net/team.php?id=90">茶多酚减肥胶囊</a></span>
                <span class="tuan_jg">原　价：<u>120元</u><br /><i>团购价：</i><b>68元</b></span>
                <span class="iadd"><a href="http://tuan.39.net/team.php?id=90">我要团购</a></span>
            </span>
<span class="sy_hot">
                <span class="sy_pic"><a href="http://tuan.39.net/team.php?id=92"><img src="http://image.39.net/117/29/895394_100-7501.jpg" alt="抗辐射螺旋藻咀嚼片" /></a></span><span class="sy_title"><a href="http://tuan.39.net/team.php?id=92">螺旋藻咀嚼片</a></span>
                <span class="tuan_jg">原　价：<u>148元</u><br /><i>团购价：</i><b>76元</b></span>
                <span class="iadd"><a href="http://tuan.39.net/team.php?id=92">我要团购</a></span>
            </span>
                          <span class="sy_flt"><s><b>16</b>个活动进行中</s>　<a href="http://tuan.39.net">母婴(2)</a> | <a href="http://tuan.39.net">美容(5)</a> | <a href="http://tuan.39.net">家居(2)</a> | <a href="http://tuan.39.net/">更多</a>>></span>--><span class="pc_pic"><a href="#" ><img src="images/f76/c200026/org_137915.jpg"  alt="5款热卖幼儿牙刷横评  哪款最适合宝宝" border="0" /></a></span><span class="pc_title"><a href="#"  title="5款热卖幼儿牙刷横评  哪款最适合宝宝">5款热卖幼儿牙刷横评  哪款最适合宝宝</a></span>
<span class="pc_text">宝宝牙刷要精心挑选。本次评测主要从价格、牙刷外观、牙刷规格、起泡实验、摩擦实验及残留物实验等方面……</span>
<ul class="pc_list">
                    <li><a href="#"  title="5款热销平价婴儿原味米粉横评">5款热销平价婴儿原味米粉横评</a></li>
                    <li><a href="#"  title="护龈防出血 哪款牙膏更好用">护龈防出血 哪款牙膏更好用</a></li>
                    <li><a href="#"  title="6款热销宽口径玻璃奶瓶横向评测">6款热销宽口径玻璃奶瓶横评</a></li>
                    <li><a href="#"  title="6款婴儿驱蚊止痒膏横向评测">6款婴儿驱蚊止痒膏横向评测</a></li>

</ul> </div>
</div>
<div class="box_b">
<div class="box_br"></div>
</div>
</div>
<div class="Con_R">
<div id="Tab6"> <span class="first">一周排行榜</span> <div><ul><li><a href="#" >孕期游泳或致宝宝哮喘</a></li><li><a href="#" >吃不完的月饼该如何处理</a></li><li><a href="#" >内裤正面晒还是反面晒好？</a></li><li><a href="#" >炒菜1小时=半包烟？</a></li><li><a href="#" >解密解酒药背后的“神效”</a></li><li><a href="#" >餐后犯困或是血糖在抗议</a></li><li><a href="#" >六种水果有助女性滋养秀发</a></li><li><a href="#" >8个运动诀窍助你燃脂快</a></li><li><a href="#" >饮水机的冷热水混喝会中毒？</a></li><li><a href="#" >5款热卖幼儿牙刷横向评测</a></li></ul></div> </div>
<div class="box_b bco">
<div class="box_br"></div>
</div>
<div class="cust210 tspace">

</div>
</div>
<div class="clear"></div>
</div>
<div class="tonglan">

</div>
<div class="wrap"> <div class="con_left">
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >妇科疾病库</a></b></div></div>
        <ul>
  <li><a href="#" >霉菌阴道炎</a></li>
  <li><a href="#" >月经不调</a></li>
  <li><a href="#" >宫颈糜烂</a></li>
  <li><a href="#" >子宫肌瘤</a></li>
  <li><a href="#" >盆腔炎</a></li>
  <li><a href="#" >痛经</a></li>
   <li><a href="#" >滴虫阴道炎</a></li>
  <li><a href="#" >卵巢囊肿</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >男科疾病库</a></b></div></div>
        <ul>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >早泄</a></li>
  <li><a href="#" >前列腺癌</a></li>
  <li><a href="#" >睾丸扭转</a></li>
  <li><a href="#" >阴囊湿疹</a></li>
  <li><a href="#" >男性不育</a></li>
  <li><a href="#" >前列腺增生</a></li>
  <li><a href="#" >包皮过长</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >内科疾病库</a></b></div></div>
        <ul>
            <li><a href="#" >感冒</a></li>
            <li><a href="#" >高血压</a></li>
            <li><a href="#" >腹泻</a></li>
            <li><a href="#" >癫痫病</a></li>
            <li><a href="#" >中风</a></li>
            <li><a href="#" >白血病</a></li>
            <li><a href="#" >肌萎缩</a></li>
            <li><a href="#" >红斑狼疮</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >外科疾病库</a></b></div></div>
        <ul>
  <li><a href="#" >肾结石</a></li>
  <li><a href="#" >乳腺增生</a></li>
  <li><a href="#" >肩周炎</a></li>
  <li><a href="#" >腰椎盘突出</a></li>
  <li><a href="#" >腰肌劳损</a></li>
  <li><a href="#" >乳腺癌</a></li>
  <li><a href="#" >股骨头坏死</a></li>
  <li><a href="#" >胃溃疡</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >五官科疾病库</a></b></div></div>
        <ul>
            <li><a href="#" >屈光不正</a></li>
            <li><a href="#" >中耳炎</a></li>
            <li><a href="#" >鼻窦炎</a></li>
            <li><a href="#" >牙周病</a></li>
            <li><a href="#" >红眼病</a></li>
            <li><a href="#" >麦粒肿</a></li>
            <li><a href="#" >龋齿</a></li>
            <li><a href="#" >口腔溃疡</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >皮肤科疾病库</a></b></div></div>
        <ul>
  <li><a href="#" >湿疹</a></li>
  <li><a href="#" >白癜风</a></li>
  <li><a href="#" >荨麻疹</a></li>
  <li><a href="#" >股癣</a></li>
  <li><a href="#" >带状疱疹</a></li>
  <li><a href="#" >脚气</a></li>
  <li><a href="#" >皮肤过敏</a></li>
  <li><a href="#" >灰指甲</a></li>
        </ul>
    </div>
</div>
<div class="con_right">
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="妇科十大热门文章"></a></b><b><a href="#" >妇科疾病</a></b></span><span class="t2"></span>
                <span class="t3"><a href="#" >阴道</a> | <a href="#" >子宫</a> | <a href="#" >月经</a> | <a href="#" >流产</a> | <a href="#" >女性不孕</a> | <a href="#" >乳房</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_136641.jpg"  alt="安全避孕 过“性”福小长假" /></a></span>
<span class="txt"><a href="#" >如何安全避孕</a></span> </div>
<h2><a href="#" >私处常用湿巾当心患妇科病</a></h2>
<ul>
<li><a href="#" >如何防治外阴瘙痒最有效</a></li><li><a href="#" >阴道炎为何会找上未婚少女</a></li><li><a href="#" >月经期不适合运动是误传</a></li>
</ul>
<ul class="list2">
<li><a href="#" >健康讲堂</a>| <a href="#" >黑木耳、羊肉、藕 常见食物调理月经不调</a></li>
<li><a href="#" >妇科咨询</a>| <a href="#" >每月例假来前都会牙痛是为啥？</a></li>
<li><a href="#" >妇科博客</a>| <a href="#" >当心腹痛背后隐藏的疾病</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="男科十大热门文章"></a></b><b><a href="#" >男科疾病</a></b></span><span class="t2"></span>
                <span class="t3"><a href="#" >前列腺</a> | <a href="#" >不育症</a> | <a href="#" >生殖整形</a> | <a href="#" >生殖感染</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_137967.jpg"  alt="性功能问题别不敢看医生" /></a></span>
<span class="txt"><a href="#" >性功能障碍得就医</a></span> </div>
<h2><a href="#" >秋天老是掉头发正常吗？</a></h2>
<ul>
<li><a href="#" >睡眠不好会影响白癜风治疗</a></li><li><a href="#" >勃起后贴向腹部是咋回事？</a></li><li><a href="#" >男人阴茎青筋是怎么回事？</a></li>
</ul>
<ul class="list2">
<li><a href="#" >健康讲堂</a>| <a href="#" >男性早泄谨慎选择手术治疗</a></li>
<li><a href="#" >男科咨询</a>| <a href="#" >同房时不射精是什么原因导致的？</a></li>
<li><a href="#" >男科博客</a>| <a href="#" >想要孩子孕爸要做哪些准备</a></li>
</ul>
</div>
</div>
<div class="space10"></div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"></b><b><a href="#" >糖尿病</a>·<a href="#" >心血管</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >高血压</a> | <a href="#" >降糖药</a> | <a href="#" >胰岛素</a> | <a href="#" >冠心病</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138597.jpg"  alt="王宗伟：二甲双胍抗癌的前世今生" /></a></span>
<span class="txt"><a href="#" >二甲双胍抗癌</a></span> </div>
<h2><a href="#" >糖尿病阿尔茨海默病风险增倍</a></h2>
<ul>
<li><a href="#" >糖尿病的监测项目怎么做</a></li><li><a href="#" >糖尿病人饮食控糖好处多</a></li><li><a href="#" >揭秘糖尿病患者的奇怪病症</a></li>
</ul>
<ul class="list2">
<li><a href="#" >糖友治疗</a>| <a href="#" >餐后犯困是你的血糖在抗议</a></li>
<li><a href="#" >糖友问答</a>| <a href="#" >胰岛素注射时间不固定后果很严重？</a></li>
<li><a href="#" >糖友博客</a>| <a href="#" >揭秘糖尿病患者的奇怪病症</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"></b><b><a href="#" >肿瘤</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >肺癌</a> | <a href="#" >胃癌</a> | <a href="#" >肝癌</a> | <a href="#" >肠癌</a> | <a href="#" >乳腺癌</a> | <a href="#" >宫颈癌</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138268.jpg"  alt="美媒：喝橙汁有助预防癌症" /></a></span>
<span class="txt"><a href="#" >橙汁预防癌症</a></span> </div>
<h2><a href="#" >长期共同生活夫妻两人患肝癌</a></h2>
<ul>
<li><a href="#" >酸奶是乳腺癌的“克星”？</a></li><li><a href="#" >人一生一定会出现“癌细胞”</a></li><li><a href="#" >不刷锅接着炒菜容易致癌</a></li>
</ul>
<ul class="list2">
<li><a href="#" >肿瘤治疗</a>| <a href="#" >防肺癌对二手烟和保健品说不</a></li>
<li><a href="#" >肿瘤咨询</a>| <a href="#" >注意：肺癌患者饮食注意一览表！</a></li>
<li><a href="#" >肿瘤博客</a>| <a href="#" >5种食物会加速肝病癌变</a></li>
</ul>
</div>
</div>
<div class="space10"></div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="药品十大热门文章"></a></b><b><a href="#" >药品频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >药品报价</a> | <a href="#" >药品对比</a>  | <a href="#" >药企</a> | <a href="#" >医药招商</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="../pimg.39.net/PictureLib/A/CT1500016770/CT1500016777/2013-06-17/201306171107473649.jpg"  alt="药物戒烟 远离11种癌症" /></a></span>
<span class="txt"><a href="#" >药物戒烟 远离癌症</a></span> </div>
<h2><a href="#" >安全用药焦点问答</a></h2>
<ul>
<li><a href="#" >止咳药不宜睡前服用</a></li><li><a href="#" >服抗生素把好4道关</a></li><li><a href="#" >服用胶囊勿随意去掉外壳</a></li>
</ul>
<ul class="list2">
<li><a href="#" >用药指南</a>| <a href="#" >六个民间小偏方巧治口腔溃疡</a></li>
<li><a href="#" >药品常识</a>| <a href="#" >调查：您了解外敷镇痛药的危害么？</a></li>
</ul>
<div class="drugsearch">
<form >
<span>药品搜索：</span>
<!-- <select name="lb" id="lb">
<option value="产品_药品" selected>西药</option>
<option value="产品_药品_中成">中成药</option>
<option value="产品_保健品">保健品</option>
<option value="产品_中草药">中草药</option>
</select>-->
<input id="words"  name="words" type="text" value="" class="tbox" /><!--20130628c-->
<input type="button" class="btn" value="查询" id="btndrug"/>
<input type="button" class="btn" value="问医生" onclick="getAskword()"  />            
</form>
<script type="text/javascript" src="../image.39.net/daoyao/js/morecity.js" ></script>
<script language="javascript" type="text/javascript">
$(function () {
$(document).ready(function () {
var drugOptions =
{
selectFirst: false,
width: 348,
minChars: 1,
max: 100,
dataType: 'json',
extraParams: {
format: 'json',
act: 'drugkeywordoutomap'
},
parse: function (data) {
var parsed = [];
for (var i = 0; i < data.length; i++) {
parsed[parsed.length] = {
data: data[i],
value: data[i].ShowName,
result: data[i].ShowName
};
}
return parsed;
},
formatItem: function (item) {
return item.ShowName + "<span>" + item.RecordCount + "个药品</span>";
}
};
// $("#words").autocomplete("http://ypk.39.net/IndexHandle.ashx", drugOptions);
});
$("#words").keydown(function (event) {
if (event.keyCode == '13') {
if ($.trim($('#words').val()) == "" || $(".ac_results .ac_over").length > 0) {
return false;
}
$("#btndrug").click();
return false;
}
});
//新增药品搜索
$("#btndrug").click(function () {
if($('#words').val()=='可通过药品名称、症状、疾病搜索药品'||$('#words').val()==''){
return ;
}
else{
window.open('http://ypk.39.net/search/all?k='+escape($('#words').val()),"drugsearch");
}
});

});                  
</script>
<script language="javascript" type="text/javascript">
$("#city_more_b p a").click(function () {
$("#newipregion").html($(this).attr("cityname"));
$.cookie("ydkregion", escape($.toJSON({ "RegionName": $(this).attr("cityname"), "RegionId": $(this).attr("regionid") })), { "domain": "http://www.39.net/39.net", "path": "/" });
if ($("#redirecturl").val() != undefined) {
document.location.href = document.location.href;
} else {
document.location.href = document.location.href;
}
});

$(function () {
if ($.cookie("ydkregion") != null) {
var cookieData = $.parseJSON(unescape($.cookie("ydkregion")));
$("#newipregion").html(cookieData.RegionName);
}
else {
$.ajax({
type: "POST",
url: "http://ypk.39.net/yd/RegionHandle.ashx",
data: "act=getcity",
contentType: "application/x-www-form-urlencoded; charset=utf-8",
dataType: 'json',
success: function (returnData) {
$("#newipregion").html(returnData.RegionName);
$.cookie("ydkregion", escape($.toJSON(returnData)), { "domain": "http://www.39.net/39.net", "path": "/" });
},
beforeSend: function () {
}
});
}
});
</script>
</div>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot h2"><a href="#"  title="中医十大热门文章"></a></b><b><a href="#" >中医</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >针灸</a> | <a href="#" >艾灸</a> | <a href="#" >食疗</a> | <a href="#" >按摩</a> | <a href="#" >养生</a> | <a href="#" >偏方</a> | <a href="#" >药膳</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_128794.jpg"  alt="白露进补荐四款进补药膳方" /></a></span>
<span class="txt"><a href="#" >白露进药膳</a></span> </div>
<h2><a href="#" >百花茶祛暑气 薄荷茶健胃</a></h2>
<ul>
<li><a href="#" >中秋如何健康吃月饼？</a></li><li><a href="#" >白露养生先护肠胃</a></li><li><a href="#" >白露养生要护阳养阴防秋燥</a></li>
</ul>
<ul class="list2">
<li><a href="#" >中医疗法</a>| <a href="#" >中医祛斑帮你解决面子问题</a></li>
<li><a href="#" >中医养生</a>| <a href="#" >春季房事“男三至女五至”</a></li>
<li><a href="#" >中医咨询</a>| <a href="#" >每天喝很多水还很干？中药帮你解决</a></li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="tonglan">

</div>
<div class="wrap"> <div class="con_left">
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >心理频道</a></b></div></div>
        <ul>
            <li><a href="#" >人际交往</a></li>
            <li><a href="#" >婚恋心理</a></li>
            <li><a href="#" >职场心理</a></li>
            <li><a href="#" >心理问答</a></li>
            <li><a href="#" >心灵鸡汤</a></li>
            <li><a href="#" >心理测试</a></li>
            <li><a href="#" >心理减压</a></li>
            <li><a href="#" >心理常识</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a 

href="#" >美容</a><a href="#" >整形</a><a href="#" >减肥</a></b></div></div>
        <ul>
            <li><a href="#" >护肤</a></li>
            <li><a href="#" >美白</a></li>
            <li><a href="#" >保湿</a></li>
            <li><a href="#" >去痘</a></li>
            <li><a href="#" >Me减重方案</a></li>
            <li><a href="#" >减肥方法</a></li>
            <li><a href="#" >减肥食谱</a></li>
            <li><a href="#" >明星减肥</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a 

href="#" >保健</a><a href="#" >饮食

</a></b></div></div>
        <ul>
            <li><a href="#" >亚健康</a></li>
            <li><a href="#" >养生</a></li>
            <li><a href="#" >保健品</a></li>
            <li><a href="#" >保健操</a></li>
            <li><a href="#" >营养</a></li>
            <li><a href="#" >营养搭配</a></li>
            <li><a href="#" >烹饪</a></li>
            <li><a href="#" >夏季饮食</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a 

href="#" >健身</a><a href="#" >增肥</a><a 

href="#" >瑜伽</a></b></div></div>
        <ul>
            <li><a href="#" >卧室健身</a></li>
            <li><a href="#" >做家务健身</a></li>
            <li><a href="#" >办公室健身</a></li>
            <li><a href="#" >户外健身</a></li>
            <li><a href="#" >瑜伽体式</a></li>
            <li><a href="#" >瑜伽分类</a></li>
            <li><a href="#" >增肥常识</a></li>
            <li><a href="#" >增肥产品</a></li>
        </ul>
    </div>
</div>
<div class="con_right">
<div class="conbox">
<div class="title"><span class="t1"><b class="hot h1"><a href="#"  title="心理十大热门文章"></a></b><b><a href="#" >心理频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >心理前沿</a> | <a href="#" >心理IN词</a> | <a href="#" >生活心理</a> | <a href="#" >心理测试</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_132201.jpg"  alt="生活久了真有夫妻相？" /></a></span>
<span class="txt"><a href="#" >生活久了有夫妻相</a></span> </div>
<h2><a href="#" >女人撒娇发小脾气是性暗示</a></h2>
<ul>
<li><a href="#" >女性失贞后的焦虑从何而来？</a></li><li><a href="#" >男人压力越大越爱丰满女人</a></li>
<li><a href="#" >揭秘男人为什么喜欢情人？</a></li>
</ul>
<ul class="list2">
<li><a href="#" >心理咨询</a>| <a href="#" >克制不住总想吃东西怎么克服心理？</a></li>
<li><a href="#" >心理问答</a>| <a href="#" >丈夫爱沉默，我该怎么办？</a></li>
<li><a href="#" >婚恋博客</a>| <a href="#" >热恋中的感觉，你有过吗？</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot h2"><a href="#"  title="美容整形减肥十大热门文章"></a></b><b><a href="#" >美容</a>·<a href="#" >整形</a>·<a href="#" >减肥</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >护肤技巧</a> | <a href="#" >明星整形</a> | <a href="#" >减肥方法</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_137947.jpg"  alt="杨钰莹发福黄奕变潮辣妈(图)" /></a></span>
<span class="txt"><a href="#" >杨钰莹发福胸下垂</a></span> </div>
<h2><a href="#" >换季长痘要注意更换洁面方式</a></h2>
<ul>
<li><a href="#" >黑头导出液tips 去黑头不伤肤 </a></li>
<li><a href="#" >揭秘整形医生眼中的完美身材标准</a></li>
<li><a href="#" >懒人瘦身必知的低卡饮食技巧</a></li>
</ul>
<ul class="list2">
<li><a href="#" >整形咨询</a>| <a href="#" >下巴整形手术安全系数为多少？</a></li>
<li><a href="#" >减肥论坛</a>| <a href="#" >4个月瘦百斤为减肥切掉9成胃(图)</a></li>
<li><a href="#" >减肥博客</a>| <a href="#" >水动力吸脂完美瘦身三步曲</a></li>
</ul>
</div>
</div>
<div class="space10"></div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot h1"><a href="#"  title="保健十大热门文章"></a></b><b><a href="#" >保健</a>·<a href="#" >饮食</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >养生智慧</a> | <a href="#" >饮食调理</a> | <a href="#" >每日一菜</a> | <a href="#" >防暑祛湿</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138642.jpg"  alt="幽门螺杆菌杀还是不杀？" /></a></span>
<span class="txt"><a href="#" >杀不杀幽门螺杆菌</a></span> </div>
<h2><a href="#" >甘蔗润燥 脾胃虚寒者少吃</a></h2>
<ul>
<li><a href="#" >肌肉减少症？人老肉先衰</a></li><li><a href="#" >40岁以上男性容易尿歪</a></li>
<li><a href="#" >鱼肉中DHA和EPA能降低乳癌风险</a></li>
</ul>
<ul class="list2">
<li><a href="#" >健康厨房</a>| <a href="#" >台风天 囤积的瓜果要怎么保鲜</a></li>
<li><a href="#" >生活百科</a>| <a href="#" >吃点葡萄可以抑制胃酸</a></li>
<li><a href="#" >保健博客</a>| <a href="#" >肾积水的保健方法</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot h2"><a href="#"  title="健身十大热门文章"></a></b><b><a href="#" >健身</a>·<a href="#" >增肥</a>·<a href="#" >瑜伽</a></b></span><span class="t2"></span>
<span class="t3"><a href=" javascript:if(confirm('http://fitness.39.net/jfff/ydjf/  \n\n该文件未被 Teleport Pro 下载，因为 它位于起始地址以设置的边界以外的域或路径中。  \n\n你想要从服务器打开它吗?'))window.location='http://fitness.39.net/jfff/ydjf/'" >运动减肥</a> | <a href="#" >健身课程</a> | <a href="#" >饮食增肥</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_134496.jpg"  alt="超有效的瘦脸瑜伽(图)" /></a></span>
<span class="txt"><a href="#" >超有效的瘦脸瑜伽</a></span> </div>
<h2><a href="#" >超有效的减肥瑜伽操大全</a></h2>
<ul>
<li><a href="#" >上班族每周出透一次汗</a></li>
<li><a href="#" >“俯卧撑”可以对着墙练</a></li>
<li><a href="#" >4组减肥瑜伽 坐着消除全身赘肉(图)</a></li>
</ul>
<ul class="list2">
<li><a href="#" >健身课程</a>| <a href="#" >教你快速紧实小腿的三绝招 </a></li>
<li><a href="#" >健身装备</a>| <a href="#" >健身器材巧搭配 极致运动助减肥</a></li>
<li><a href="#" >健身博客</a>| <a href="#" >骨性关节炎患者适宜的活动</a></li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="wrap"> <div class="con_left">
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >女性保健</a></b></div></div>
        <ul>
            <li><a href="#" >私处护理</a></li>
            <li><a href="#" >乳房保健</a></li>
            <li><a href="#" >女性调养</a></li>
            <li><a href="#" >月经期</a></li>
            <li><a href="#" >内分泌调节</a></li>
            <li><a href="#" >补血</a></li>
            <li><a href="#" >排卵</a></li>
            <li><a href="#" >白带</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >男性保健</a></b></div></div>
        <ul>
            <li><a href="#" >男性营养</a></li>
            <li><a href="#" >男性保健品</a></li>
            <li><a href="#" >男性健身</a></li>
            <li><a href="#" >自慰</a></li>
            <li><a href="#" >男性生理</a></li>
            <li><a href="#" >男性脱发</a></li>
            <li><a href="#" >男性心理</a></li>
            <li><a href="#" >戒烟</a></li>
        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >育儿指南</a></b></div></div>
        <ul>
            <li><a href="#" >备孕</a></li>
            <li><a href="#" >怀孕</a></li>
            <li><a href="#" >分娩</a></li>
            <li><a href="#" >产后</a></li>
            <li><a href="#" >育儿呵护</a></li>
            <li><a href="#" >育儿喂养</a></li>
            <li><a href="#" >育儿教育</a></li>
            <li><a href="#" >亲子游戏</a></li>

        </ul>
    </div>
    <div class="space10"></div>
    <div class="keybox">
        <div class="title"><div class="tt"><b class="t1"></b><b class="t2"><a href="#" >老人养生</a></b></div></div>
        <ul>
            <li><a href="#" >老人保健</a></li>
            <li><a href="#" >老人饮食</a></li>
            <li><a href="#" >老人心理</a></li>
            <li><a href="#" >老人健身</a></li>
            <li><a href="#" >老人生活</a></li>
            <li><a href="#" >老人自测</a></li>
            <li><a href="#" >老人趣闻</a></li>
            <li><a href="#" >老人用品</a></li>
        </ul>
    </div>
</div>
<div class="con_right">
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="女性十大热门文章"></a></b><b><a href="#" >女性频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >女性保健</a> | <a href="#" >女性饮食</a> | <a href="#" >女性生理</a> | <a href="#" >女性情感</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138640.jpg"  alt="秋季子宫养护应做好18件事" /></a></span>
<span class="txt"><a href="#" >秋季如何养护子宫</a></span> </div>
<h2><a href="#" >主妇换季易过敏少用洗涤剂</a></h2>
<ul>
<li><a href="#" >女性经期是排毒的黄金时期</a></li><li><a href="#" >揭露女性生理期的十大误传</a></li><li><a href="#" >挤“事业线”会产生什么影响</a></li>
</ul>
<ul class="list2">
<li><a href="#" >女性用品</a>| <a href="#" >高跟鞋与十种疾病形影相随</a></li>
<li><a href="#" >女性自测</a>| <a href="#" >从女人臀部解密女人性格特征</a></li>
<li><a href="#" >女性博客</a>| <a href="#" >两地分居的婚姻怎么办？</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="男性十大热门文章"></a></b><b><a href="#" >男性频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >男性保健</a> | <a href="#" >男性饮食</a> | <a href="#" >男性生理</a> | <a href="#" >男性生活</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138020.jpg"  alt="晨尿看出男人健康" /></a></span>
<span class="txt"><a href="#" >晨尿看出男人健康</a></span> </div>
<h2><a href="#" >男人排尿后可挤一下会阴处</a></h2>
<ul>
<li><a href="#" >体外射精引发男科病</a></li><li><a href="#" >7个绝招让男人硬起来</a></li><li><a href="#" >男性阴茎衰老的征兆</a></li>
</ul>
<ul class="list2">
<li><a href="#" >男性用品</a>| <a href="#" >从内裤窥测男人性年龄</a></li>
<li><a href="#" >男性自测</a>| <a href="#" >男人你的性能力究竟有多强？</a></li>
<li><a href="#" >男性论坛</a>| <a href="#" >男人支招:常搓三部位可以补肾健脑</a></li>
</ul>
</div>
</div>
<div class="space10"></div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="育儿十大热门文章"></a></b><b><a href="#" >育儿频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >备孕</a> | <a href="#" >怀孕</a> | <a href="#" >分娩</a> | <a href="#" >喂养</a> | <a href="#" >胎教</a> | <a href="#" >亲子</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138690.jpg"  alt="孕妇慎服止痛药" /></a></span>
<span class="txt"><a href="#" >孕妇慎服止痛药</a></span> </div>
<h2><a href="#" >少吃糖多吃肉更易生男孩？</a></h2>
<ul>
<li><a href="#" >经常打孩子屁股会影响智力</a></li><li><a href="#" >5种水果孩子别多吃</a></li><li><a href="#" >宝宝智商高不高 关键看营养</a></li>
</ul>
<ul class="list2">
<li><a href="#" >育儿用品</a>| <a href="#" >选购玩具 该由谁说了算</a></li>
<li><a href="#" >育儿论坛</a>| <a href="#" >父母帮忙带孩子 要不要给工资？</a></li>
<li><a href="#" >育儿博客</a>| <a href="#" >如何赞美孩子？</a></li>
</ul>
</div>
</div>
<div class="conbox">
<div class="title"><span class="t1"><b class="hot"><a href="#"  title="老人十大热门文章"></a></b><b><a href="#" >老人频道</a></b></span><span class="t2"></span>
<span class="t3"><a href="#" >老人保健</a> | <a href="#" >老人饮食</a> | <a href="#" >老人生活</a> | <a href="#" >老人心理</a></span></div>
<div class="content">
<div class="sfocus"> <span class="pic"><a href="#" ><img src="images/f76/c200026/org_138681.jpg"  alt="谁说旅游是年轻人的事" /></a></span>
<span class="txt"><a href="#" >老人旅游那些事儿</a></span> </div>
<h2><a href="#" >红肉吃多了容易老年痴呆</a></h2>
<ul>
<li><a href="#" >测测你的退休焦虑指数</a></li><li><a href="#" >学金鱼吐泡 防眼睑下垂</a></li><li><a href="#" >8种性格能让你增寿</a></li>
</ul>
<ul class="list2">
<li><a href="#" >老人用品</a>| <a href="#" >枕头低可提高老年人的睡觉质量</a></li>
<li><a href="#" >老人自测</a>| <a href="#" >20个问题 了解自己的心脏状况</a></li>
<li><a href="#" >老人论坛</a>| <a href="#" >这些健康习惯让您远离心血管病</a></li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="tonglan">

</div>
<div class="wrap">
<div class="module_title"> <ul class="module_title_l show_title">
	39数据中心</ul>
<ul id="data_tabs" class="module_title_tabs2">
	<li class="green"><a class="selected" href="#"  rel="d_tab1">查疾病</a></li>
	<li class="green"><a href="#"  rel="d_tab2">查症状</a></li>
	<li class="green"><a href="#"  rel="d_tab3">检查项目</a></li>
	<li class="green"><a href="#"  rel="d_tab4">好医院</a></li>
	<li class="green"><a href="#"  rel="d_tab5">好科室</a></li>
	<li class="green"><a href="#"  rel="d_tab6">好医生</a></li>
	<li><a href="#"  rel="d_tab7">查药品</a></li>
	<li><a href="#"  rel="d_tab8">找药企</a></li>
	<li><a href="#"  rel="d_tab9">找药店</a></li>
	<li class="green"><a href="#"  rel="d_tab10">整形项目</a></li>
	<li class="green"><a href="#"  rel="d_tab11">化妆品库</a></li>
	<li class="green"><a href="#"  rel="d_tab12">健康百科</a></li>
           <li class="green"><a href="#"  rel="d_tab13">健康食品</a></li>
</ul>
<ul class="module_title_r">
</ul>
</div>
<div class="top_line"></div>
<!--d_tab1-->
<div class="data39" id="d_tab1" style="display:block"> <ul class="bw">
  <li class="zm_hot">热门查询</li>
  <li><a href="#" >高血压</a></li>
  <li><a href="#" >糖尿病</a></li>
  <li><a href="#" >手足口病</a></li>
  <li><a href="#" >颈椎病</a></li>
  <li><a href="#" >艾滋病</a></li>
  <li><a href="#" >大肠癌</a></li>
  <li><a href="#" >慢性咽炎</a></li>
  <li><a href="#" >肺结核</a></li>
  <li><a href="#" >胃病</a></li>
  <li><a href="#" >感冒</a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li><a href="#" >乙肝</a></li>
  <li><a href="#" >鼻窦炎</a></li>
  <li><a href="#" >乳腺癌</a></li>
  <li><a href="#" >宫外孕</a></li>
  <li><a href="#" >低血压</a></li>
  <li><a href="#" >附件炎</a></li>
  <li><a href="#" >直肠癌</a></li>
  <li><a href="#" >过敏性紫癜</a></li>
  <li><a href="#" >癫痫</a></li>
  <li><a href="#" >胃癌</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >按科室查询</a></li>
  <li><a href="#" >内分泌科</a></li>
  <li><a href="#" >肾内科</a></li>
  <li><a href="#" >传染科</a></li>
  <li><a href="#" >心血管内科</a></li>
  <li><a href="#" >呼吸内科</a></li>
  <li><a href="#" >消化内科</a></li>
  <li><a href="#" >眼科</a></li>
  <li><a href="#" >口腔科</a></li>
  <li><a href="#" >耳鼻喉科</a></li>
  <li><a href="#" >神经内科</a></li>
</ul>
<ul>
  <li>&nbsp;</li>
  <li><a href="#" >肝病</a></li>
  <li><a href="#" >肿瘤科</a></li>
  <li><a href="#" >精神病科</a></li>
  <li><a href="#" >妇产科</a></li>
  <li><a href="#" >骨科</a></li>
  <li><a href="#" >乳腺外科</a></li>
  <li><a href="#" >老年科</a></li>
  <li><a href="#" >肛肠外科</a></li>
  <li><a href="#" >生殖健康</a></li>
  <li><a href="#" >泌尿科</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >男 科</a></li>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >睾丸炎</a></li>
  <li><a href="#" >早泄</a></li>
  <li><a href="#" >前列腺癌</a></li>
  <li><a href="#" >尿路感染</a></li>
  <li><a href="#" >睾丸扭转</a></li>
  <li><a href="#" >阴囊湿疹</a></li>
  <li><a href="#" >男性不育</a></li>
  <li><a href="#" >前列腺增生</a></li>
  <li><a href="#" >包皮过长</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >妇 科</a></li>
  <li><a href="#" >霉菌性阴道炎</a></li>
  <li><a href="#" >宫颈癌</a></li>
  <li><a href="#" >月经不调</a></li>
  <li><a href="#" >宫颈糜烂</a></li>
  <li><a href="#" >子宫肌瘤</a></li>
  <li><a href="#" >盆腔炎</a></li>
  <li><a href="#" >痛经</a></li>
  <li><a href="#" >附件炎</a></li>
  <li><a href="#" >滴虫性阴道炎</a></li>
  <li><a href="#" >卵巢囊肿</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >儿 科</a></li>
  <li><a href="#" >地中海贫血</a></li>
   <li><a href="#" >小儿感冒</a></li>
  <li><a href="#" >小儿肺炎</a></li>
  <li><a href="#" >奶癣</a></li>
  <li><a href="#" >新生儿黄疸</a></li>
  <li><a href="#" >婴幼儿腹泻</a></li>
  <li><a href="#" >小儿发烧</a></li>
  <li><a href="#" >鹅口疮</a></li>
  <li><a href="#" >小儿急支</a></li>
  <li><a href="#" >新生儿肺炎</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内 科</a></li>
  <li><a href="#" >冠心病</a></li>
  <li><a href="#" >肺结核</a></li>
  <li><a href="#" >类风湿关节炎</a></li>
  <li><a href="#" >慢性支气管炎</a></li>
  <li><a href="#" >肺炎</a></li>
  <li><a href="#" >慢性胃炎</a></li>
  <li><a href="#" >心肌梗死</a></li>
  <li><a href="#" >坐骨神经痛</a></li>
  <li><a href="#" >痛风</a></li>
  <li><a href="#" >失眠</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >外 科</a></li>
  <li><a href="#" >肾结石</a></li>
  <li><a href="#" >乳腺增生</a></li>
  <li><a href="#" >肩周炎</a></li>
  <li><a href="#" >腰椎间盘突出</a></li>
  <li><a href="#" >腰肌劳损</a></li>
  <li><a href="#" >肺癌</a></li>
  <li><a href="#" >乳腺癌</a></li>
  <li><a href="#" >尿路感染</a></li>
  <li><a href="#" >股骨头坏死</a></li>
  <li><a href="#" >胃溃疡</a></li>
</ul>
<ul class="noline">
  <li class="zm"><a href="#" >皮肤科</a></li>
  <li><a href="#" >湿疹</a></li>
  <li><a href="#" >白癜风</a></li>
  <li><a href="#" >荨麻疹</a></li>
  <li><a href="#" >狐臭</a></li>
  <li><a href="#" >股癣</a></li>
  <li><a href="#" >带状疱疹</a></li>
  <li><a href="#" >脚气</a></li>
  <li><a href="#" >皮肤过敏</a></li>
  <li><a href="#" >灰指甲</a></li>
  <li><a href="#" >神经性皮炎</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab1 end--> 
<!--d_tab2-->
<div class="data39" id="d_tab2"> <ul>
  <li class="zm_hot">按疾病查询</li>
  <li><a href="#" >宫颈糜烂</a></li>
  <li><a href="#" >霉菌性阴道炎</a></li>
  <li><a href="#" >盆腔炎</a></li>
  <li><a href="#" >月经不调</a></li>
  <li><a href="#" >子宫肌瘤</a></li>
  <li><a href="#" >乳腺增生</a></li>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >睾丸炎</a></li>
  <li><a href="#" >前列腺增生</a></li>
  <li><a href="#" >龟头炎</a></li>
</ul>
<ul>
  <li>&nbsp;</li>
  <li><a href="#" >艾滋病</a></li>
  <li><a href="#" >白癜风</a></li>
  <li><a href="#" >狐臭</a></li>
  <li><a href="#" >股癣</a></li>
  <li><a href="#" >湿疹</a></li>
  <li><a href="#" >水痘</a></li>
  <li><a href="#" >荨麻疹</a></li>
  <li><a href="#" >慢性咽炎</a></li>
  <li><a href="#" >鼻窦炎</a></li>
  <li><a href="#" >肺结核</a></li>
</ul>
<ul>
  <li>&nbsp;</li>
  <li><a href="#" >高血压</a></li>
  <li><a href="#" >糖尿病</a></li>
  <li><a href="#" >冠心病</a></li>
  <li><a href="#" >颈椎病</a></li>
  <li><a href="#" >痔疮</a></li>
  <li><a href="#" >肩周炎</a></li>
  <li><a href="#" >腰椎间盘突出</a></li>
  <li><a href="#" >肺炎</a></li>
  <li><a href="#" >慢性胃炎</a></li>
  <li><a href="#" >肾结石</a></li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >按部位查询</a></li>
  <li class="bw1"><a href="#" >女性生殖</a></li>
  <li class="bw1"><a href="#" >男性生殖</a></li>
  <li class="bw2"><a href="#" >全身</a></li>
  <li class="bw2"><a href="#" >皮肤</a></li>
  <li class="bw2"><a href="#" >腹部</a></li>
  <li class="bw2"><a href="#" >腰部</a></li>
  <li class="bw2"><a href="#" >胸部</a></li>
  <li class="bw2"><a href="#" >颈部</a></li>
  <li class="bw2"><a href="#" >眼部</a></li>
  <li class="bw2"><a href="#" >口腔</a></li>
  <li class="bw2"><a href="#" >鼻部</a></li>
  <li class="bw2"><a href="#" >心理</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >妇科症状</a></li>
  <li><a href="#" >盆腔积液</a></li>
  <li><a href="#" >白带增多</a></li>
  <li><a href="#" >宫颈囊肿</a></li>
  <li><a href="#" >乳房胀痛</a></li>
  <li><a href="#" >阴道出血</a></li>
  <li><a href="#" >月经期长痘</a></li>
  <li><a href="#" >女性不孕</a></li>
  <li><a href="#" >霉菌感染</a></li>
  <li><a href="#" >月经量多</a></li>
  <li><a href="#" >经期提前</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >男科症状</a></li>
  <li><a href="#" >阴囊水肿</a></li>
  <li><a href="#" >肾阴虚</a></li>
  <li><a href="#" >器质性早泄</a></li>
  <li><a href="#" >包皮粘连</a></li>
  <li><a href="#" >阴囊瘙痒</a></li>
  <li><a href="#" >鞘膜积水</a></li>
  <li><a href="#" >附睾囊肿</a></li>
  <li><a href="#" >前列腺肥大</a></li>
  <li><a href="#" >射精疼</a></li>
  <li><a href="#" >超雄</a></li>

</ul>
<ul>
  <li class="zm"><a href="#" >皮肤症状</a></li>
  <li><a href="#" >瘙痒</a></li>
  <li><a href="#" >疱疹</a></li>
  <li><a href="#" >婴儿湿疹</a></li>
  <li><a href="#" >头皮痒</a></li>
  <li><a href="#" >皮肤红斑</a></li>
  <li><a href="#" >丘疹</a></li>
  <li><a href="#" >下巴长痘</a></li>
  <li><a href="#" >脚臭</a></li>
  <li><a href="#" >雀斑</a></li>
  <li><a href="#" >紫癜</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >全身症状</a></li>
  <li><a href="#" >淋巴结肿大</a></li>
  <li><a href="#" >血小板减少</a></li>
  <li><a href="#" >贫血</a></li>
  <li><a href="#" >发烧</a></li>
  <li><a href="#" >失眠</a></li>
  <li><a href="#" >水肿</a></li>
  <li><a href="#" >囊肿</a></li>
  <li><a href="#" >打呼噜</a></li>
  <li><a href="#" >消瘦</a></li>
  <li><a href="#" >容易上火</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >头部症状</a></li>
  <li><a href="#" >咳嗽</a></li>
  <li><a href="#" >耳鸣</a></li>
  <li><a href="#" >打呼噜</a></li>
  <li><a href="#" >头痛</a></li>
  <li><a href="#" >头晕</a></li>
  <li><a href="#" >牙疼</a></li>
  <li><a href="#" >口腔溃疡</a></li>
  <li><a href="#" >口干舌燥</a></li>
  <li><a href="#" >舌苔发黑</a></li>
  <li><a href="#" >牙龈出血</a></li>
</ul>
<ul class="noline">
  <li class="zm"><a href="#" >腹部症状</a></li>
  <li><a href="#" >便秘</a></li>
  <li><a href="#" >胃痛</a></li>
  <li><a href="#" >肝区痛</a></li>
  <li><a href="#" >腹痛</a></li>
  <li><a href="#" >脾虚</a></li>
  <li><a href="#" >便血</a></li>
  <li><a href="#" >胃酸过多</a></li>
  <li><a href="#" >尿频</a></li>
  <li><a href="#" >消化不良</a></li>
  <li><a href="#" >腹胀</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab2 end--> 
<!--d_tab3-->
<div id="d_tab3" class="data39"> <ul>
  <li class="zm_hot"><a href="#" >按疾病查询</a></li>
  <li><a href="#" >宫颈糜烂</a></li>
  <li><a href="#" >月经不调</a></li>
  <li><a href="#" >霉菌性阴道炎</a></li>
  <li><a href="#" >盆腔炎</a></li>
  <li><a href="#" >子宫肌瘤</a></li>
  <li><a href="#" >乳腺增生</a></li>
  <li><a href="#" >睾丸炎</a></li>
  <li><a href="#" >前列腺炎</a></li>
  <li><a href="#" >水痘</a></li>
  <li><a href="#" >艾滋病</a></li>
</ul>
<ul>
  <li>&nbsp;</li>
  <li><a href="#" >高血压</a></li>
  <li><a href="#" >糖尿病</a></li>
  <li><a href="#" >冠心病</a></li>
  <li><a href="#" >颈椎病</a></li>
  <li><a href="#" >腰椎间盘突出</a></li>
  <li><a href="#" >坐骨神经痛</a></li>
  <li><a href="#" >肩周炎</a></li>
  <li><a href="#" >痔疮</a></li>
  <li><a href="#" >肺结核</a></li>
  <li><a href="#" >荨麻疹</a></li>
</ul>
<ul  class="bw">
  <li class="zm_hot"><a href="#" >化学检查</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >免疫学检查</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >不孕不育</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >优生五项</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >早孕检查</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >染色体</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >内分泌检查</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >便常规</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >尿常规</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >血常规</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >白带检查</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >乙肝两对半</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >阴道检查</a></li>
  <li class="column_jc"><a href="#" >阴道分泌物检查</a></li>
  <li class="column_jc"><a href="#" >阴道清洁度检查</a></li>
  <li class="column_jc"><a href="#" >阴道病原体检查</a></li>
  <li class="zm"><a href="#" >精液检查</a></li>
  <li class="column_jc"><a href="#" >精液检查</a></li>
  <li class="column_jc"><a href="#" >精子数</a></li>
  <li class="column_jc"><a href="#" >精液量</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内分泌检查</a></li>
  <li class="column_jc"><a href="#" >人绒毛膜促性腺激素</a></li>
  <li class="column_jc"><a href="#" >雌激素</a></li>
  <li class="column_jc"><a href="#" >孕酮(P)</a></li>
  <li class="zm"><a href="#" >肿瘤检查</a></li>
  <li class="column_jc"><a href="#" >血清甲胎蛋白(AFP)</a></li>
  <li class="column_jc"><a href="#" >癌胚抗原（CEA）</a></li>
  <li class="column_jc"><a href="#" >肿瘤标志物检测</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >生化检查</a></li>
  <li class="column_jc"><a href="#" >维生素C（VitC,Vc）</a></li>
  <li class="column_jc"><a href="#" >低密度脂蛋白胆固醇</a></li>
  <li class="column_jc"><a href="#" >甘油三酯</a></li>
  <li class="column_jc"><a href="#" >维生素A（VitA）</a></li>
  <li class="column_jc"><a href="#" >维生素E</a></li>
  <li class="column_jc"><a href="#" >维生素B1(VitB1,VB1)</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >粪便检查</a></li>
  <li class="column_jc"><a href="#" >粪便颜色</a></li>
  <li class="column_jc"><a href="#" >粪便血液</a></li>
  <li class="column_jc"><a href="#" >粪便量</a></li>
  <li class="column_jc"><a href="#" >粪便脂肪</a></li>
  <li class="column_jc"><a href="#" >粪便粘液</a></li>
  <li class="column_jc"><a href="#" >粪便白细胞</a></li>
</ul>
<ul  class="bw">
  <li class="zm_hot"><a href="#" >物理检查</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >显微镜</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >肝脏疾病</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >ECT检查</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >阴茎超声</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >乳腺检查</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >MRI</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >高考体检</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >婚前体检</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >男科检查</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >宫颈刮片</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >妇科检查</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >X线检查</a></li>
  <li class="column_jc"><a href="#" >子宫输卵管造影</a></li>
  <li class="column_jc"><a href="#" >胸部透视</a></li>
  <li class="column_jc"><a href="#" >心血管造影</a></li>
  <li class="zm"><a href="#" >B超检查</a></li>
  <li class="column_jc"><a href="#" >产科B超</a></li>
  <li class="column_jc"><a href="#" >妇科超声检查</a></li>
  <li class="column_jc"><a href="#" >乳房超声检查</a></li>
</ul>
<ul class="noline">
  <li class="zm"><a href="#" >内窥镜</a></li>
  <li class="column_jc"><a href="#" >宫腔镜</a></li>
  <li class="column_jc"><a href="#" >腹腔镜</a></li>
  <li class="column_jc"><a href="#" >阴道镜检查</a></li>
  <li class="zm"><a href="#" >心电图</a></li>
  <li class="column_jc"><a href="#" >心电图</a></li>
  <li class="column_jc"><a href="#" >动态心电图</a></li>
  <li class="column_jc"><a href="#" >脑电图检查</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab3 end--> 
<!--d_tab4-->
<div class="data39" id="d_tab4"> <ul class="bw">
  <li class="zm_hot"><a href="#" >按专科查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >精神科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >传染科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >皮肤科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >中医科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >肿瘤科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >五官科</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >男科</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >儿科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >妇产科</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >外 科</a></li>
  <li class="column_9"><a href="#" >心胸外科医院</a></li>
  <li class="column_9"><a href="#" >脑外科医院</a></li>
  <li class="column_9"><a href="#" >肝胆外科医院</a></li>
  <li class="column_9"><a href="#" >泌尿外科医院</a></li>
  <li class="column_9"><a href="#" >骨科医院</a></li>
  <li class="column_9"><a href="#" >胃肠外科医院</a></li>
  <li class="column_9"><a href="#" >血管外科医院</a></li>
  <li class="column_9"><a href="#" >烧伤科医院</a></li>
  <li class="column_9"><a href="#" >乳腺外科医院</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内科</a></li>
  <li class="column_9"><a href="#" >呼吸内科医院</a></li>
  <li class="column_9"><a href="#" >心血管医院</a></li>
  <li class="column_9"><a href="#" >消化内科医院</a></li>
  <li class="column_9"><a href="#" >肾内科医院</a></li>
  <li class="column_9"><a href="#" >神经内科医院</a></li>
  <li class="column_9"><a href="#" >内分泌科医院</a></li>
  <li class="column_9"><a href="#" >血液科医院</a></li>
  <li class="column_9"><a href="#" >风湿科医院</a></li>
  <li class="column_9"><a href="#" >中医科医院</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >其他科室</a></li>
  <li class="column_9"><a href="#" >眼科医院</a></li>
  <li class="column_9"><a href="#" >口腔科医院</a></li>
  <li class="column_9"><a href="#" >耳鼻喉医院</a></li>
  <li class="column_9"><a href="#" >肝病医院</a></li>
  <li class="column_9"><a href="#" >老年科医院</a></li>
  <li class="column_9"><a href="#" >营养科医院</a></li>
  <li class="column_9"><a href="#" >生殖健康医院</a></li>
  <li class="column_9"><a href="#" >康复科医院</a></li>
  <li class="column_9"><a href="#" >急诊科医院</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >综合实力榜</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >按科室查询</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >按地区查询</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >地 区</a></li>
  <li class="column_6"><a href="#" >全国三甲医院排行榜</a></li>
  <li class="column_6"><a href="#" >北京三甲医院排行榜</a></li>
  <li class="column_6"><a href="#" >上海三甲医院排行榜</a></li>
  <li class="column_6"><a href="#" >广州三甲医院排行榜</a></li>
  <li class="column_6"><a href="#"></a></li>
  <li class="column_6"><a href="#"></a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >专 科</a></li>
  <li class="column_6"><a href="#" >妇产科医院排行榜</a></li>
  <li class="column_6"><a href="#" >心血管医院排行榜</a></li>
  <li class="column_6"><a href="#" >消化内科医院排行榜</a></li>
  <li class="column_6"><a href="#" >呼吸内科医院排行榜</a></li>
  <li class="column_6"><a href="#" >儿科医院排行榜</a></li>
  <li class="column_6"><a href="#" >眼科医院排行榜</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="column_6"><a href="#" >骨科医院排行榜</a></li>
  <li class="column_6"><a href="#" >口腔科医院排行榜</a></li>
  <li class="column_6"><a href="#" >耳鼻喉科医院排行榜</a></li>
  <li class="column_6"><a href="#" >内分泌科医院排行榜</a></li>
  <li class="column_6"><a href="#" >肿瘤科医院排行榜</a></li>
  <li class="column_6"><a href="#" >传染科医院排行榜</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="column_6"><a href="#" >泌尿外科医院排行榜</a></li>
  <li class="column_6"><a href="#" >皮肤科医院排行榜</a></li>
  <li class="column_6"><a href="#" >脑外科医院排行榜</a></li>
  <li class="column_6"><a href="#" >心胸外科医院排行榜</a></li>
  <li class="column_6"><a href="#" >肝胆外科医院排行榜</a></li>
  <li class="column_6"><a href="#" >中医科医院排行榜</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul class="bw noline">
  <li class="zm_hot"><a href="#" >按地区查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >河北</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >沈阳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >海南</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >江西</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >福建</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >杭州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >济南</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >天津</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >西安</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >武汉</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >重庆</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >成都</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >深圳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >广州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >上海</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >北京</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab4 end--> 
<!--d_tab5-->
<div class="data39" id="d_tab5"> <ul  class="bw">
  <li class="zm_hot"><a href="#" >按专科查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多>></a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >精神心理科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >乳腺外科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >烧伤科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >肾内科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >血液科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >肝病科</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >中医科</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >男科</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >外 科</a></li>
  <li class="zm_nav"><a href="#" >心胸外科</a></li>
  <li class="column_3"><a href="#" >阜外心血管病医院</a></li>
  <li class="column_3"><a href="#" >北京安贞医院</a></li>
  <li class="column_3"><a href="#" >中南大学湘雅二院</a></li>
  <li class="zm_nav"><a href="#" >脑外科</a></li>
  <li class="column_3"><a href="#" >北京天坛医院</a></li>
  <li class="column_3"><a href="#" >上海华山医院</a></li>
  <li class="column_3"><a href="#" >西安唐都医院</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="zm_nav"><a href="#" >泌尿外科</a></li>
  <li class="column_3"><a href="#" >北京大学第一医院</a></li>
  <li class="column_3"><a href="#" >武汉协和医院</a></li>
  <li class="column_3"><a href="#" >武汉同济医院</a></li>
  <li class="zm_nav"><a href="#" >骨科</a></li>
  <li class="column_3"><a href="#" >北京积水潭医院</a></li>
  <li class="column_3"><a href="#" >西京医院</a></li>
  <li class="column_3"><a href="#" >北京大学第三医院</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内 科</a></li>
  <li class="zm_nav"><a href="#" >呼吸内科</a></li>
  <li class="column_3"><a href="#" >广医一院</a></li>
  <li class="column_3"><a href="#" >武汉同济医院</a></li>
  <li class="column_3"><a href="#" >北京朝阳医院</a></li>
  <li class="zm_nav"><a href="#" >消化内科</a></li>
  <li class="column_3"><a href="#" >西京医院</a></li>
  <li class="column_3"><a href="#" >广州南方医院</a></li>
  <li class="column_3"><a href="#" >四川大学华西医院</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="zm_nav"><a href="#" >内分泌科</a></li>
  <li class="column_3"><a href="#" >北京协和医院</a></li>
  <li class="column_3"><a href="#" >中国医大一院</a></li>
  <li class="column_3"><a href="#" >上海瑞金医院</a></li>
  <li class="zm_nav"><a href="#" >心血管内科</a></li>
  <li class="column_3"><a href="#" >阜外心血管病医院</a></li>
  <li class="column_3"><a href="#" >北京安贞医院</a></li>
  <li class="column_3"><a href="#" >广东省人民医院</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >妇产科</a></li>
  <li class="zm_nav"><a href="#" >妇产科</a></li>
  <li class="column_3"><a href="#" >华西妇产儿童医院</a></li>
  <li class="column_3"><a href="#" >上海红房子医院</a></li>
  <li class="column_3"><a href="#" >山东大学齐鲁医院</a></li>
  <li class="zm_nav"><a href="#" >不孕不育科</a></li>
  <li class="column_3"><a href="#" >北京大学第三医院</a></li>
  <li class="column_3"><a href="#" >武汉同济医院</a></li>
  <li class="column_3"><a href="#" >华西妇产儿童医院</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >五官科</a></li>
  <li class="zm_nav"><a href="#" >眼 科</a></li>
  <li class="column_3"><a href="#" >中山大学眼科中心</a></li>
  <li class="column_3"><a href="#" >北京同仁医院</a></li>
  <li class="column_3"><a href="#" >上海市五官科医院</a></li>
  <li class="zm_nav"><a href="#" >口腔科</a></li>
  <li class="column_3"><a href="#" >四川华西口腔医院</a></li>
  <li class="column_3"><a href="#" >北京大学口腔医院</a></li>
  <li class="column_3"><a href="#" >第四军医口腔医院</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >其他科室</a></li>
  <li class="zm_nav"><a href="#" >儿 科</a></li>
  <li class="column_3"><a href="#" >北京儿童医院</a></li>
  <li class="column_3"><a href="#" >重庆医大儿童医院</a></li>
  <li class="column_3"><a href="#" >复旦大学儿科医院</a></li>
  <li class="zm_nav"><a href="#" >传染科</a></li>
  <li class="column_3"><a href="#" >北京地坛医院</a></li>
  <li class="column_3"><a href="#" >302医院</a></li>
  <li class="column_3"><a href="#" >上海华山医院</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="zm_nav"><a href="#" >皮肤科</a></li>
  <li class="column_3"><a href="#" >四川省人民医院</a></li>
  <li class="column_3"><a href="#" >北京中医医院</a></li>
  <li class="column_3"><a href="#" >北京大学第三医院</a></li>
  <li class="zm_nav"><a href="#" >肿瘤科</a></li>
  <li class="column_3"><a href="#" >中科院肿瘤医院</a></li>
  <li class="column_3"><a href="#" >中山大学肿瘤医院</a></li>
  <li class="column_3"><a href="#" >天津市肿瘤医院</a></li>
</ul>
<ul  class="bw noline">
  <li class="zm_hot"><a href="#" >按地区查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多>></a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >杭州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >南昌</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >天津</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >长沙</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >郑州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >沈阳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >济南</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >重庆</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >南京</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >武汉</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >西安</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >成都</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >深圳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >广州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >上海</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >北京</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab5 end--> 
<!--d_tab6-->
<div class="data39" id="d_tab6"> <ul class="bw">
  <li class="zm_hot"><a href="#" >按专科查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >精神科专家</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >肿瘤科专家</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >传染科专家</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >眼科专家</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >口腔科专家</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >男科专家</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >儿科专家</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >妇产科专家</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >外 科</a></li>
  <li class="column_9"><a href="#" >心胸外科专家</a></li>
  <li class="column_9"><a href="#" >脑外科专家</a></li>
  <li class="column_9"><a href="#" >肝胆外科专家</a></li>
  <li class="column_9"><a href="#" >泌尿外科专家</a></li>
  <li class="column_9"><a href="#" >骨科专家</a></li>
  <li class="column_9"><a href="#" >乳腺外科专家</a></li>
  <li class="column_9"><a href="#" >胃肠外科专家</a></li>
  <li class="column_9"><a href="#" >血管外科专家</a></li>
  <li class="column_9"><a href="#" >手外科专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内科</a></li>
  <li class="column_9"><a href="#" >呼吸内科专家</a></li>
  <li class="column_9"><a href="#" >心血管科专家</a></li>
  <li class="column_9"><a href="#" >消化内科专家</a></li>
  <li class="column_9"><a href="#" >肾内科专家</a></li>
  <li class="column_9"><a href="#" >神经内科专家</a></li>
  <li class="column_9"><a href="#" >内分泌科专家</a></li>
  <li class="column_9"><a href="#" >血液科专家</a></li>
  <li class="column_9"><a href="#" >风湿科专家</a></li>
  <li class="column_9"><a href="#" >中医科专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >其他科室</a></li>
  <li class="column_9"><a href="#" >烧伤科专家</a></li>
  <li class="column_9"><a href="#" >耳鼻喉专家</a></li>
  <li class="column_9"><a href="#" >男科专家</a></li>
  <li class="column_9"><a href="#" >肝病专家</a></li>
  <li class="column_9"><a href="#" >老年科专家</a></li>
  <li class="column_9"><a href="#" >精神科专家</a></li>
  <li class="column_9"><a href="#" >生殖健康专家</a></li>
  <li class="column_9"><a href="#" >营养科专家</a></li>
  <li class="column_9"><a href="#" >急诊科专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >按疾病查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg4"><a href="#" >不孕症好医生</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >乙肝专家</a></li>
  <li class="d_btn d_btn_bg4"><a href="#" >乳腺癌好医生</a></li>
  <li class="d_btn d_btn_bg4"><a href="#" >颈椎病好医生</a></li>
  <li class="d_btn d_btn_bg3"><a href="#" >哮喘好医生</a></li>
  <li class="d_btn d_btn_bg4"><a href="#" >糖尿病好医生</a></li>
  <li class="d_btn d_btn_bg4"><a href="#" >高血压好医生</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >内科疾病</a></li>
  <li class="column_9"><a href="#" >冠心病专家</a></li>
  <li class="column_9"><a href="#" >高血压专家</a></li>
  <li class="column_9"><a href="#" >胃病专家</a></li>
  <li class="column_9"><a href="#" >糖尿病专家</a></li>
  <li class="column_9"><a href="#" >肺炎专家</a></li>
  <li class="column_9"><a href="#" >癫痫专家</a></li>
  <li class="column_9"><a href="#" >慢性肾炎专家</a></li>
  <li class="column_9"><a href="#" >白血病专家</a></li>
  <li class="column_9"><a href="#" >骨关节炎专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >外科疾病</a></li>
  <li class="column_9"><a href="#" >阴道炎专家</a></li>
  <li class="column_9"><a href="#" >中风专家</a></li>
  <li class="column_9"><a href="#" >脑积水专家</a></li>
  <li class="column_9"><a href="#" >颈椎病专家</a></li>
  <li class="column_9"><a href="#" >烧伤专家</a></li>
  <li class="column_9"><a href="#" >骨折专家</a></li>
  <li class="column_9"><a href="#" >肺癌专家</a></li>
  <li class="column_9"><a href="#" >胆结石专家</a></li>
  <li class="column_9"><a href="#" >前列腺炎专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >其他疾病</a></li>
  <li class="column_9"><a href="#" >不孕症专家</a></li>
  <li class="column_9"><a href="#" >感冒专家</a></li>
  <li class="column_9"><a href="#" >鼻炎专家</a></li>
  <li class="column_9"><a href="#" >青光眼专家</a></li>
  <li class="column_9"><a href="#" >鼻咽癌专家</a></li>
  <li class="column_9"><a href="#" >小儿感冒专家</a></li>
  <li class="column_9"><a href="#" >前列腺炎专家</a></li>
  <li class="column_9"><a href="#" >月经不调专家</a></li>
  <li class="column_9"><a href="#" >抑郁症专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm_none">&nbsp;</li>
  <li class="column_9"><a href="#" >甲亢专家</a></li>
  <li class="column_9"><a href="#" >白内障专家</a></li>
  <li class="column_9"><a href="#" >咽炎专家</a></li>
  <li class="column_9"><a href="#" >子宫肌瘤专家</a></li>
  <li class="column_9"><a href="#" >小儿哮喘专家</a></li>
  <li class="column_9"><a href="#" >白内障专家</a></li>
  <li class="column_9"><a href="#" >湿疹专家</a></li>
  <li class="column_9"><a href="#" >胆结石专家</a></li>
  <li class="column_9"><a href="#" >焦虑症专家</a></li>
  <li class="column_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul class="bw noline">
  <li class="zm_hot"><a href="#" >按地区查询</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >山东</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >河南</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >海南</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >长沙</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >天津</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >杭州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >南京</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >沈阳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >西安</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >武汉</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >成都</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >重庆</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >深圳</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >广州</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >上海</a></li>
  <li class="d_btn d_btn_bg1"><a href="#" >北京</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab6 end--> 
<!--d_tab7-->
<div id="d_tab7" class="data39"> <ul class="bw">
  <li class="zm_hot"><a href="#" >药 品</a></li>
  <li class="column_8"><a href="#" >家庭常备</a></li>
  <li class="column_8"><a href="#" >感冒发热</a></li>
  <li class="column_8"><a href="#" >皮肤用药</a></li>
  <li class="column_8"><a href="#" >胃肠用药</a></li>
  <li class="column_8"><a href="#" >五官用药</a></li>
  <li class="column_8"><a href="#" >呼吸系统类</a></li>
  <li class="column_8"><a href="#" >泌尿系统用药</a></li>
  <li class="column_8"><a href="#" >心脑血管</a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li class="column_8"><a href="#" >男科用药</a></li>
  <li class="column_8"><a href="#" >妇科用药</a></li>
  <li class="column_8"><a href="#" >儿科用药</a></li>
  <li class="column_8"><a href="#" >维生素</a></li>
  <li class="column_8"><a href="#" >肝胆胰用药</a></li>
  <li class="column_8"><a href="#" >内分泌失常</a></li>
  <li class="column_8"><a href="#" >免疫功能调节</a></li>
  <li class="column_8"><a href="#" >肾病</a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li class="column_8"><a href="#" >神经/精神</a></li>
  <li class="column_8"><a href="#" >肿瘤科</a></li>
  <li class="column_8"><a href="#" >补益安神类</a></li>
  <li class="column_8"><a href="#" >抗寄生虫类</a></li>
  <li class="column_8"><a href="#" >血液疾病类</a></li>
  <li class="column_8"><a href="#" >抗结核及麻风类</a></li>
  <li class="column_8"><a href="#" >水电解质</a></li>
  <li class="column_8">&nbsp;</li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >保健品</a></li>
  <li class="column_8"><a href="#" >保肝护肝</a></li>
  <li class="column_8"><a href="#" >改善记忆</a></li>
  <li class="column_8"><a href="#" >女性保健</a></li>
  <li class="column_8"><a href="#" >宁心安眠</a></li>
  <li class="column_8"><a href="#" >抗疲抗衰</a></li>
  <li class="column_8"><a href="#" >降糖降脂</a></li>
  <li class="column_8"><a href="#" >免疫调节</a></li>
  <li class="column_8"><a href="#" >戒烟解酒</a></li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >中草药</a></li>
  <li class="column_8"><a href="#" >清热药</a></li>
  <li class="column_8"><a href="#" >祛风湿药</a></li>
  <li class="column_8"><a href="#" >止咳化痰药</a></li>
  <li class="column_8"><a href="#" >消食药</a></li>
  <li class="column_8"><a href="#" >补虚药</a></li>
  <li class="column_8"><a href="#" >理气药</a></li>
  <li class="column_8"><a href="#" >活血化瘀药</a></li>
  <li class="column_8"><a href="#" >燥湿止痒药</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >高血压用药</a></li>
  <li class="column_8"><a href="#" >伊泰青</a></li>
  <li class="column_8"><a href="#" >安博维</a></li>
  <li class="column_8"><a href="#" >三精司乐平片</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >糖尿病用药</a></li>
  <li class="column_8"><a href="#" >美迪康片</a></li>
  <li class="column_8"><a href="#" >降糖宁胶囊</a></li>
  <li class="column_8"><a href="#" >达美康</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >感冒用药</a></li>
  <li class="column_8"><a href="#" >新康泰克</a></li>
  <li class="column_8"><a href="#" >优卡丹</a></li>
  <li class="column_8"><a href="#" >抗病毒口服液</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >颈椎病用药</a></li>
  <li class="column_8"><a href="#" >抗骨增生片</a></li>
  <li class="column_8"><a href="#" >氨糖美辛肠溶片</a></li>
  <li class="column_8"><a href="#" >根痛平片</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >前列腺用药</a></li>
  <li class="column_8"><a href="#" >前列康</a></li>
  <li class="column_8"><a href="#" >尿塞通胶囊</a></li>
  <li class="column_8"><a href="#" >前列舒乐胶囊</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >阴道炎用药</a></li>
  <li class="column_8"><a href="#" >妇科达克宁</a></li>
  <li class="column_8"><a href="#" >抗宫炎片</a></li>
  <li class="column_8"><a href="#" >妇炎康复片</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >胃肠病用药</a></li>
  <li class="column_8"><a href="#" >丁桂儿脐贴</a></li>
  <li class="column_8"><a href="#" >斯达舒</a></li>
  <li class="column_8"><a href="#" >胃康灵胶囊</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >抗过敏用药</a></li>
  <li class="column_8"><a href="#" >开瑞坦</a></li>
  <li class="column_8"><a href="#" >息斯敏</a></li>
  <li class="column_8"><a href="#" >乌蛇止痒丸</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="noline">
  <li class="zm"><a href="#" >清热解毒药</a></li>
  <li class="column_8"><a href="#" >三金片</a></li>
  <li class="column_8"><a href="#" >蓝芩口服液</a></li>
  <li class="column_8"><a href="#" >双黄连口服液</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >维生素</a></li>
  <li class="column_8"><a href="#" >善存多维元素片</a></li>
  <li class="column_8"><a href="#" >金施尔康多维元素片</a></li>
  <li class="column_8"><a href="#" >伊可新维生素AD滴剂</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab7 end--> 
<!--d_tab8-->
<div id="d_tab8" class="data39"> 	<ul class="bw">
            <li class="zm_hot"><a href="#" >按地区查询</a></li>
            <li class="column_7"><a href="#" >北京市</a></li>
            <li class="column_7"><a href="#" >上海市</a></li>
            <li class="column_7"><a href="#" >广东省</a></li>
            <li class="column_7"><a href="#" >重庆市</a></li>
            <li class="column_7"><a href="#" >辽宁省</a></li>
            <li class="column_7"><a href="#" >吉林省</a></li>
            <li class="column_7"><a href="#" >黑龙江省</a></li>
            <li class="column_more2"><a href="#" >更多>></a></li>
        </ul>
        <ul class="bw">
            <li>&nbsp;</li>
            <li class="column_7"><a href="#" >江苏省</a></li>
            <li class="column_7"><a href="#" >浙江省</a></li>
            <li class="column_7"><a href="#" >安徽省</a></li>
            <li class="column_7"><a href="#" >福建省</a></li>
            <li class="column_7"><a href="#" >江西省</a></li>
            <li class="column_7"><a href="#" >湖北省</a></li>
            <li class="column_7"><a href="#" >湖南省</a></li>
            <li class="column_more2"><a href="#" >更多>></a></li>
        </ul>
        <ul class="bw">
            <li>&nbsp;</li>
            <li class="column_7"><a href="#" >山东省</a></li>
            <li class="column_7"><a href="#" >河南省</a></li>
            <li class="column_7"><a href="#" >四川省</a></li>
            <li class="column_7"><a href="#" >贵州省</a></li>
            <li class="column_7"><a href="#" >云南省</a></li>
            <li class="column_7"><a href="#" >陕西省</a></li>
            <li class="column_7"><a href="#" >甘肃省</a></li>
            <li class="column_more2"><a href="#" >更多>></a></li>
        </ul>
        <ul class="bw">
            <li class="zm_hot"><a href="#" >按类别查询</a></li>
            <li class="column_7"><a href="#" >抗菌消炎类</a></li>
            <li class="column_7"><a href="#" >解热镇痛类</a></li>
            <li class="column_7"><a href="#" >呼吸系统类</a></li>
            <li class="column_7"><a href="#" >肝胆胰用药类</a></li>
            <li class="column_7"><a href="#" >清热解毒类</a></li>
            <li class="column_7"><a href="#" >神经系统类</a></li>
            <li class="column_7"><a href="#" >胃肠疾病类</a></li>
            <li class="column_more2"><a href="#" >更多>></a></li>
        </ul>
        <ul class="bw">
            <li>&nbsp;</li>
            <li class="column_7"><a href="#" >心脑血管类</a></li>
            <li class="column_7"><a href="#" >免疫功能调节</a></li>
            <li class="column_7"><a href="#" >泌尿系统类</a></li>
            <li class="column_7"><a href="#" >内分泌及代谢类</a></li>
            <li class="column_7"><a href="#" >血液疾病类</a></li>
            <li class="column_7"><a href="#" >补益安神类</a></li>
            <li class="column_7"><a href="#" >其它类</a></li>
            <li class="column_more2"><a href="#" >更多>></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >北京市</a></li>
            <li class="column_jc"><a href="#" >北京同仁堂集团有限责任公司</a></li>
            <li class="column_jc"><a href="#" >北京双鹤现代医药技术有限责任公司
</a></li>
            <li class="column_jc"><a href="#" >张家口圣大药业有限公司
</a></li>


            <li class="zm"><a href="#" >上海市</a></li>
            <li class="column_jc"><a href="#" >上海新先锋药业有限公司</a></li>
            <li class="column_jc"><a href="#" >上海新亚药业有限公司
</a></li>
            <li class="column_jc"><a href="#" >上海现代制药股份有限公司
</a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >广东省</a></li>
            <li class="column_jc"><a href="#" >广州白云山制药总厂
</a></li>
            <li class="column_jc"><a href="#" >丽珠集团丽珠制药厂
</a></li>
            <li class="column_jc"><a href="#" >三九医药股份有限公司
</a></li>



            <li class="zm"><a href="#" >广西</a></li>
            <li class="column_jc"><a href="#" >广西万寿堂药业有限公司
</a></li>
            <li class="column_jc"><a href="#" >桂林大华药业有限公司
</a></li>
            <li class="column_jc"><a href="#" >广西禾力药业有限公司
</a></li>
        </ul>

        <ul>
            <li class="zm"><a href="#" >江苏省</a></li>
            <li class="column_jc"><a href="#" >苏州第四制药厂有限公司
</a></li>
            <li class="column_jc"><a href="#" >南京白敬宇制药有限责任公司
</a></li>
            <li class="column_jc"><a href="#" >常州制药厂有限公司
</a></li>


            <li class="zm"><a href="#" >浙江省</a></li>
            <li class="column_jc"><a href="#" >浙江金华康恩贝生物制药有限公司
</a></li>
            <li class="column_jc"><a href="#" >浙江亚太药业股份有限公司
</a></li>
            <li class="column_jc"><a href="#" >杭州民生药业集团有限公司
</a></li>
        </ul>

        <ul>
            <li class="zm"><a href="#" >山东省</a></li>
            <li class="column_jc"><a href="#" >山东鲁抗辰欣药业有限公司
</a></li>
            <li class="column_jc"><a href="#" >山东博士伦福瑞达制药有限公司
</a></li>
            <li class="column_jc"><a href="#" >山东仁和制药有限公司
</a></li>

            <li class="zm"><a href="#" >湖北省</a></li>
            <li class="column_jc"><a href="#" >湖北潜江制药股份有限公司
</a></li>
            <li class="column_jc"><a href="#" >武汉马应龙药业集团股份有限公司
</a></li>
            <li class="column_jc"><a href="#" >武汉第六制药有限公司
</a></li>
        </ul>


        <ul class="noline">
            <li class="zm"> <a href="#" >重庆市</a></li>
            <li class="column_jc"><a href="#" >太极集团重庆桐君阁药厂有限公司
</a></li>
            <li class="column_jc"><a href="#" >葛兰素史克制药(重庆)有限公司
</a></li>
            <li class="column_jc"><a href="#" >葵花药业集团(重庆)有限公司
</a></li>


            <li class="zm"><a href="#" >黑龙江省</a></li>
            <li class="column_jc"><a href="#" >哈药集团制药总厂
</a></li>
            <li class="column_jc"><a href="#" >黑龙江省珍宝岛制药有限公司
</a></li>
            <li class="column_jc"><a href="#" >黑龙江葵花药业股份有限公司
</a></li>
        </ul>

<div class="clear"></div>
</div>
<!--d_tab8 end--> 
<!--d_tab9-->
<div id="d_tab9" class="data39"> <ul class="bw">
  <li class="zm_hot"><a href="#" >按地区查询</a></li>
  <li class="column_7"><a href="#" >北京市</a></li>
  <li class="column_7"><a href="#" >广东省</a></li>
  <li class="column_7"><a href="#" >山东省</a></li>
  <li class="column_7"><a href="#" >安徽省</a></li>
  <li class="column_7"><a href="#" >江苏省</a></li>
  <li class="column_7"><a href="#" >上海市</a></li>
  <li class="column_7"><a href="#" >河北省</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li class="column_7"><a href="#" >天津市</a></li>
  <li class="column_7"><a href="#" >浙江省</a></li>
  <li class="column_7"><a href="#" >福建省</a></li>
  <li class="column_7"><a href="#" >江西省</a></li>
  <li class="column_7"><a href="#" >湖北省</a></li>
  <li class="column_7"><a href="#" >湖南省</a></li>
  <li class="column_7"><a href="#" >河南省</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li class="column_7"><a href="#" >吉林省</a></li>
  <li class="column_7"><a href="#" >黑龙江省</a></li>
  <li class="column_7"><a href="#" >四川省</a></li>
  <li class="column_7"><a href="#" >重庆市</a></li>
  <li class="column_7"><a href="#" >山西省</a></li>
  <li class="column_7"><a href="#" >辽宁省</a></li>
  <li class="column_7"><a href="#" >广西壮族自治区</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="bw">
  <li>&nbsp;</li>
  <li class="column_7"><a href="#" >云南省</a></li>
  <li class="column_7"><a href="#" >贵州省</a></li>
  <li class="column_7"><a href="#" >陕西省</a></li>
  <li class="column_7"><a href="#" >甘肃省</a></li>
  <li class="column_7"><a href="#" >青海省</a></li>
  <li class="column_7"><a href="#" >海南省</a></li>
  <li class="column_7"><a href="#" >宁夏回族自治区</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="bw">
  <li class="zm_hot"><a href="#" >按类别查询</a></li>
  <li class="column_7"><a href="#" >实体药店</a></li>
  <li class="column_7"><a href="#" >网上药店</a></li>
  <li class="column_7"><a href="#" >连锁药店</a></li>
  <li class="column_7"><a href="#" >个体经营</a></li>
  <li class="column_7"><a href="#" >定点医保</a></li>
  <li class="column_7"><a href="#" >非定点医保</a></li>
  <li class="column_7">　　　　</li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >广东省</a></li>
  <li class="column_8"><a href="#" >健客网-中国最大的网上药店</a></li>
  <li class="column_8"><a href="#" >广州采芝林药业</a></li>
  <li class="column_8"><a href="#" >中国海王星辰连锁药店</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >北京市</a></li>
  <li class="column_8"><a href="#" >嘉事堂连锁药店</a></li>
  <li class="column_8"><a href="#" >北京同仁堂</a></li>
  <li class="column_8"><a href="#" >北京百姓阳光大药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >上海市</a></li>
  <li class="column_8"><a href="#" >国药控股国大药房</a></li>
  <li class="column_8"><a href="#" >上海雷允上药品连锁经营有限公司</a></li>
  <li class="column_8"><a href="#" >上海百济新特药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >山东省</a></li>
  <li class="column_8"><a href="#" >济南鹤年堂大药店</a></li>
  <li class="column_8"><a href="#" >康润大药房</a></li>
  <li class="column_8"><a href="#" >济南汇康肿瘤药店</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >湖南省</a></li>
  <li class="column_8"><a href="#" >老百姓大药房</a></li>
  <li class="column_8"><a href="#" >湖南千金大药房</a></li>
  <li class="column_8"><a href="#" >湖南芝林大药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >湖北省</a></li>
  <li class="column_8"><a href="#" >湖北俊华医药有限公司</a></li>
  <li class="column_8"><a href="#" >湖北天齐医药有限公司</a></li>
  <li class="column_8"><a href="#" >湖北荆州新世纪大药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >安徽省</a></li>
  <li class="column_8"><a href="#" >安徽百姓缘大药房连锁</a></li>
  <li class="column_8"><a href="#" >太湖县刘畈阳光大药房</a></li>
  <li class="column_8"><a href="#" >芜湖市中泰大药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >云南省</a></li>
  <li class="column_8"><a href="#" >昆明福林堂药业</a></li>
  <li class="column_8"><a href="#" >云南鸿翔一心堂药业（集团）股份有限公司</a></li>
  <li class="column_8"><a href="#" >旭盛药店</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<ul class="noline">
  <li class="zm"><a href="#" >陕西省</a></li>
  <li class="column_8"><a href="#" >陕西省渭南市医药总公司康达经营部</a></li>
  <li class="column_8"><a href="#" >西安怡康医药连锁有限责任公司</a></li>
  <li class="column_8"><a href="#" >西安中医肾病医院</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
  <li class="zm"><a href="#" >其他</a></li>
  <li class="column_8"><a href="#" >南宁市华泰康大药房</a></li>
  <li class="column_8"><a href="#" >泉州市丰泽区保生药店</a></li>
  <li class="column_8"><a href="#" >天瑞堂药房</a></li>
  <li class="column_more2"><a href="#" >更多>></a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab9 end--> 
<!--d_tab10-->
<div class="data39" id="d_tab10"> <ul class="bw">
	<li class="zm_hot"><a href="#" >无创医学美容</a></li>
	<li class="column_9"><a href="#" >妇科整形</a></li>
	<li class="column_9"><a href="#" >光子嫩肤</a></li>
	<li class="column_9"><a href="#" >美白针</a></li>
	<li class="column_9"><a href="#" >生物除皱</a></li>
	<li class="column_9"><a href="#" >生物瘦脸</a></li>
	<li class="column_9"><a href="#" >超声去眼袋</a></li>
	<li class="column_9"><a href="#" >激光祛疤</a></li>
	<li class="column_9"><a href="#" >冷光美白</a></li>
	<li class="column_9"><a href="#" >玻尿酸丰唇</a></li>
	<li class="column_9"><a href="#" >干细胞抗衰</a></li>
</ul>
<ul class="bw">
	<li class="zm_hot"><a href="#" >美 肤</a></li>
	<li class="column_9"><a href="#" >美白</a></li>
	<li class="column_9"><a href="#" >除皱</a></li>
	<li class="column_9"><a href="#" >祛斑</a></li>
	<li class="column_9"><a href="#" >祛疤</a></li>
	<li class="column_9"><a href="#" >痣切除</a></li>
	<li class="column_9"><a href="#" >光子祛斑</a></li>
	<li class="column_9"><a href="#" >彩光嫩肤</a></li>
	<li class="column_9"><a href="#" >激光脱毛</a></li>
	<li class="column_9"><a href="#" >激光祛疤</a></li>
	<li class="column_9"><a href="#" >彩光祛痘</a></li>
</ul>
<ul class="bw">
	<li class="zm_hot"><a href="#" >美 胸</a></li>
	<li class="column_9"><a href="#" >隆胸</a></li>
	<li class="column_9"><a href="#" >韩式隆胸</a></li>
	<li class="column_9"><a href="#" >垂乳上提</a></li>
	<li class="column_9 zm_hot"><a href="#" >塑 鼻</a></li>
	<li class="column_9"><a href="#" >隆鼻</a></li>
	<li class="column_9"><a href="#" >注射隆鼻</a></li>
	<li class="column_9"><a href="#" >韩式隆鼻</a></li>
	<li class="column_9 zm_hot"><a href="#" >瘦 脸</a></li>
	<li class="column_9"><a href="#" >生物瘦脸</a></li>
	<li class="column_9"><a href="#" >磨骨瘦脸</a></li>
</ul>
<ul class="bw">
	<li class="zm_hot"><a href="#" >减 肥</a></li>
	<li class="column_9"><a href="#" >减肥</a></li>
	<li class="column_9"><a href="#" >埋线减肥</a></li>
	<li class="column_9"><a href="#" >激光溶脂</a></li>
	<li class="column_9 zm_hot"><a href="#" >瘦腿手</a></li>
	<li class="column_9"><a href="#" >手臂吸脂</a></li>
	<li class="column_9"><a href="#" >大腿吸脂</a></li>
	<li class="column_9"><a href="#" >瘦小腿</a></li>
	<li class="column_9 zm_hot"><a href="#" >瘦腰背</a></li>
	<li class="column_9"><a href="#" >腰部吸脂</a></li>
	<li class="column_9"><a href="#" >背部吸脂</a></li>
</ul>
<ul>
	<li class="zm"><a href="#" >眼 睛</a></li>
	<li class="column_9"><a href="#" >双眼皮</a></li>
	<li class="column_9"><a href="#" >去黑眼圈</a></li>
	<li class="column_9"><a href="#" >祛眼袋</a></li>
	<li class="column_9 zm"><a href="#" >鼻 型</a></li>
	<li class="column_9"><a href="#" >隆鼻</a></li>
	<li class="column_9"><a href="#" >假体隆鼻</a></li>
	<li class="column_9"><a href="#" >玻尿酸隆鼻</a></li>
	<li class="column_9 zm"><a href="#" >耳 朵</a></li>
	<li class="column_9"><a href="#" >打耳洞</a></li>
	<li class="column_9"><a href="#" >耳廓再造</a></li>
</ul>
<ul>
	<li class="zm"><a href="#" >嘴 型</a></li>
	<li class="column_9"><a href="#" >丰唇</a></li>
	<li class="column_9"><a href="#" >纹唇</a></li>
	<li class="column_9"><a href="#" >大口变小</a></li>
	<li class="column_9 zm"><a href="#" >牙 齿</a></li>
	<li class="column_9"><a href="#" >牙齿美白</a></li>
	<li class="column_9"><a href="#" >超声洗牙</a></li>
	<li class="column_9"><a href="#" >美容冠</a></li>
	<li class="column_9 zm"><a href="#" >眉 形</a></li>
	<li class="column_9"><a href="#" >绣眉</a></li>
	<li class="column_9"><a href="#" >眉毛种植</a></li>
</ul>
<ul>
	<li class="zm"><a href="#" >头 部</a></li>
	<li class="column_9"><a href="#" >隆下巴</a></li>
	<li class="column_9"><a href="#" >前额整形</a></li>
	<li class="column_9"><a href="#" >太阳穴填充</a></li>
	<li class="column_9 zm"><a href="#" >颈 部</a></li>
	<li class="column_9"><a href="#" >颈部吸脂</a></li>
	<li class="column_9"><a href="#" >颈部除皱</a></li>
	<li class="column_9"><a href="#" >斜颈修复</a></li>
	<li class="column_9 zm"><a href="#" >胸 部</a></li>
	<li class="column_9"><a href="#" >乳房再造</a></li>
	<li class="column_9"><a href="#" >针灸丰胸</a></li>
</ul>
<ul>
	<li class="zm"><a href="#" >腹 部</a></li>
	<li class="column_9"><a href="#" >腹壁整形</a></li>
	<li class="column_9"><a href="#" >腹部除皱</a></li>
	<li class="column_9"><a href="#" >腹壁松弛整形</a></li>
	<li class="column_9 zm"><a href="#" >臀 部</a></li>
	<li class="column_9"><a href="#" >丰臀</a></li>
	<li class="column_9"><a href="#" >提臀</a></li>
	<li class="column_9"><a href="#" >上臂脂肪抽吸</a></li>
	<li class="column_9 zm"><a href="#" >上 肢</a></li>
	<li class="column_9"><a href="#" >手指再造</a></li>
	<li class="column_9"><a href="#" >手臂吸脂</a></li>
</ul>
<ul>
	<li class="zm"><a href="#" >下 肢</a></li>
	<li class="column_9"><a href="#" >腿形矫正</a></li>
	<li class="column_9"><a href="#" >O型腿矫正</a></li>
	<li class="column_9"><a href="#" >脚指外翻矫正</a></li>
	<li class="column_9 zm"><a href="#" >全 身</a></li>
	<li class="column_9"><a href="#" >变性手术</a></li>
	<li class="column_9"><a href="#" >输卵管修复</a></li>
	<li class="column_9"><a href="#" >嘴角除皱</a></li>
	<li class="column_9 zm"><a href="#" >皮 肤</a></li>
	<li class="column_9"><a href="#" >疤痕修复</a></li>
	<li class="column_9"><a href="#" >皮肤移植</a></li>
</ul>
<ul class="noline">
	<li class="zm"><a href="#" >毛 发</a></li>
	<li class="column_9"><a href="#" >毛发移植</a></li>
	<li class="column_9"><a href="#" >头发移植</a></li>
	<li class="column_9"><a href="#" >彩光脱毛</a></li>
	<li class="column_9 zm"><a href="#" >生 殖</a></li>
	<li class="column_9"><a href="#" >阴道紧缩</a></li>
	<li class="column_9"><a href="#" >处女膜修补</a></li>
	<li class="column_9"><a href="#" >包皮修复</a></li>
	<li class="column_9 zm"><a href="#" >其 他</a></li>
	<li class="column_9"><a href="#" >腋臭祛除 </a></li>
	<li class="column_9"><a href="#" >声音整形</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab10 end--> 
<!--d_tab11-->
<div id="d_tab11" class="data39"> <ul class="bw">
            <li class="d_btn2 d_btn_bg2"><a href="#" >查药妆</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >查品牌</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >查新品</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >网友心得</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >免费试用</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >专题汇总</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >热门排行</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >产品大全</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >护肤产品</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >彩妆产品</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >洗浴护体</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >美容食品</a></li>
            <li class="d_btn2 d_btn_bg2"><a href="#" >男士护理</a></li>
        </ul>
        <ul>
            <li class="zm_hot"><a href="#" >欧美品牌</a></li>
            <li><a href="#" >香奈儿</a></li>
            <li><a href="#" >迪奥</a></li>
            <li><a href="#" >兰蔻</a></li>
            <li><a href="#" >雅诗兰黛</a></li>
            <li><a href="#" >SK-II</a></li>
            <li><a href="#" >欧莱雅</a></li>
            <li><a href="#" >娇兰</a></li>
            <li><a href="#" >玉兰油</a></li>
            <li><a href="#" >雅芳</a></li>
            <li><a href="#" >美宝莲</a></li>
        </ul>
        <ul>
            <li class="zm_none">&nbsp;</li>
            <li><a href="#" >倩碧</a></li>
            <li><a href="#" >芭比布朗</a></li>
            <li><a href="#" >海蓝之谜</a></li>
            <li><a href="#" >妮维雅</a></li>
            <li><a href="#" >碧欧泉</a></li>
            <li><a href="#" >水芝澳</a></li>
            <li><a href="#" >玫琳凯</a></li>
            <li><a href="#" >安娜苏</a></li>
            <li><a href="#" >贝玲妃</a></li>
            <li><a href="#" >露得清</a></li>
        </ul>
        <ul>
            <li class="zm_hot"><a href="#" >日韩品牌</a></li>
            <li><a href="#" >资生堂</a></li>
            <li><a href="#" >植村秀</a></li>
            <li><a href="#" >Fancl</a></li>
            <li><a href="#" >DHC</a></li>
            <li><a href="#" >Za</a></li>
            <li><a href="#" >泊美</a></li>
            <li><a href="#" >兰皙欧</a></li>
            <li><a href="#" >芙丽芳丝</a></li>
            <li><a href="#" >菲诗小铺</a></li>
            <li><a href="#" >兰芝</a></li>
        </ul>

        <ul>
            <li class="zm_hot"><a href="#" >国产品牌</a></li>
            <li><a href="#" >佰草集</a></li>
            <li><a href="#" >相宜本草</a></li>
            <li><a href="#" >大宝</a></li>
            <li><a href="#" >羽西</a></li>
            <li><a href="#" >李医生</a></li>
            <li><a href="#" >丁家宜</a></li>
            <li><a href="#" >小护士</a></li>
            <li><a href="#" >蝶妆</a></li>
            <li><a href="#" >自然堂</a></li>
            <li><a href="#" >屈臣氏</a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >功 效</a></li>
            <li><a href="#" >美白</a></li>
            <li><a href="#" >保湿</a></li>
            <li><a href="#" >祛痘</a></li>
            <li><a href="#" >防晒</a></li>
            <li><a href="#" >去黑头</a></li>
            <li><a href="#" >祛斑</a></li>
            <li><a href="#" >控油</a></li>
            <li><a href="#" >抗皱</a></li>
            <li><a href="#" >清洁</a></li>
            <li><a href="#" >抗老化</a></li>
        </ul>
		<ul>
            <li class="zm_none">&nbsp;</li>
            
            <li><a href="#" >去眼袋</a></li>
            <li><a href="#" >去黑眼圈</a></li>
            <li><a href="#" >去角质</a></li>
            <li><a href="#" >收毛孔</a></li>
            <li><a href="#" >除细纹</a></li>
            <li><a href="#" >抗氧化</a></li>
            <li><a href="#" >紧致</a></li>
            <li><a href="#" >遮瑕</a></li>
            <li><a href="#" >改善肤色</a></li>
            <li><a href="#" >抗敏</a></li>
            
        </ul>

        <ul>
            <li class="zm"><a href="#" >护 肤</a></li>
            <li><a href="#" >清洁/卸妆</a></li>
            <li><a href="#" >化妆水</a></li>
            <li><a href="#" >精华液</a></li>
            <li><a href="#" >乳液</a></li>
            <li><a href="#" >面霜</a></li>
            <li><a href="#" >防晒</a></li>
            <li><a href="#" >面膜</a></li>
            <li><a href="#" >眼部护理</a></li>
            <li><a href="#" >唇部护理</a></li>
            <li><a href="#" >特殊保养</a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >彩 妆</a></li>
            <li><a href="#" >遮瑕</a></li>
            <li><a href="#" >粉底</a></li>
            <li><a href="#" >蜜粉/散粉</a></li>
            <li><a href="#" >唇膏/唇彩</a></li>
            <li><a href="#" >腮红/修容</a></li>
            <li><a href="#" >眼影</a></li>
            <li><a href="#" >眼线</a></li>
            <li><a href="#" >睫毛膏</a></li>
            <li><a href="#" >眉笔/眉粉</a></li>
            <li><a href="#" >指甲油</a></li>
        </ul>
        <ul class="noline">
            <li class="zm"><a href="#" >其 他</a></li>
            <li><a href="#" >颈部护理</a></li>
            <li><a href="#" >身体护理</a></li>
            <li><a href="#" >手部护理</a></li>
            <li><a href="#" >足部护理</a></li>
            <li><a href="#" >精油</a></li>
            <li><a href="#" >发膜</a></li>
            <li><a href="#" >男士香水</a></li>
            <li><a href="#" >护发素</a></li>
            <li><a href="#" >洗发水</a></li>
            <li><a href="#" >造型</a></li>
        </ul>
<div class="clear"></div>
</div>
<!--d_tab11 end--> 
<!--d_tab12-->
<div id="d_tab12" class="data39"> <ul>
            <li class="zm"><a href="#" >医院常识</a></li>
            <li class="column_bk"><a href="#" >三甲医院</a></li>
            <li class="column_bk"><a href="#" >二甲医院</a></li>
            <li class="column_bk"><a href="#" >社区医院</a></li>
            <li class="column_bk"><a href="#" >专科医院</a></li>
            <li class="column_bk"><a href="#" >门诊部</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >美容潮语</a></li>
            <li class="column_bk"><a href="#" >深层补水</a></li>
            <li class="column_bk"><a href="#" >去黑头</a></li>
            <li class="column_bk"><a href="#" >低碳美容</a></li>
            <li class="column_bk"><a href="#" >美甲</a></li>
            <li class="column_bk"><a href="#" >遮瑕</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >健康职称</a></li>
            <li class="column_bk"><a href="#" >主任医师</a></li>
            <li class="column_bk"><a href="#" >主治医师</a></li>
            <li class="column_bk"><a href="#" >护士</a></li>
            <li class="column_bk"><a href="#" >住院医师</a></li>
            <li class="column_bk"><a href="#" >主任药师</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >美容器械</a></li>
            <li class="column_bk"><a href="#" >修眉刀</a></li>
            <li class="column_bk"><a href="#" >眉笔</a></li>
            <li class="column_bk"><a href="#" >睫毛夹</a></li>
            <li class="column_bk"><a href="#" >眼线刷</a></li>
            <li class="column_bk"><a href="#" >粉扑</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >药学常识</a></li>
            <li class="column_bk"><a href="#" >OTC</a></li>
            <li class="column_bk"><a href="#" >处方药</a></li>
            <li class="column_bk"><a href="#" >通用名</a></li>
            <li class="column_bk"><a href="#" >中成药</a></li>
            <li class="column_bk"><a href="#" >甲类药</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >美容方法</a></li>
            <li class="column_bk"><a href="#" >蒸汽美容</a></li>
            <li class="column_bk"><a href="#" >苦瓜美容</a></li>
            <li class="column_bk"><a href="#" >针灸美容</a></li>
            <li class="column_bk"><a href="#" >绿茶美容</a></li>
            <li class="column_bk"><a href="#" >花粉美容</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >药品剂型</a></li>
            <li class="column_bk"><a href="#" >片剂</a></li>
            <li class="column_bk"><a href="#" >胶囊剂</a></li>
            <li class="column_bk"><a href="#" >注射剂</a></li>
            <li class="column_bk"><a href="#" >颗粒剂</a></li>
            <li class="column_bk"><a href="#" >溶液剂</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >减肥项目</a></li>
            <li class="column_bk"><a href="#" >针灸减肥</a></li>
            <li class="column_bk"><a href="#" >粗盐浴</a></li>
            <li class="column_bk"><a href="#" >点穴减肥</a></li>
            <li class="column_bk"><a href="#" >火疗减肥</a></li>
            <li class="column_bk"><a href="#" >拔罐减肥</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >中药术语</a></li>
            <li class="column_bk"><a href="#" >道地药材</a></li>
            <li class="column_bk"><a href="#" >四气五味</a></li>
            <li class="column_bk"><a href="#" >药引</a></li>
            <li class="column_bk"><a href="#" >配伍</a></li>
            <li class="column_bk"><a href="#" >炮制</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >宝宝热点</a></li>
            <li class="column_bk"><a href="#" >螳螂齿</a></li>
            <li class="column_bk"><a href="#" >百岁毛</a></li>
            <li class="column_bk"><a href="#" >襁緥</a></li>
            <li class="column_bk"><a href="#" >婴儿潮</a></li>
            <li class="column_bk"><a href="#" >胎痣</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >中医名词</a></li>
            <li class="column_bk"><a href="#" >把脉</a></li>
            <li class="column_bk"><a href="#" >针灸</a></li>
            <li class="column_bk"><a href="#" >艾灸</a></li>
            <li class="column_bk"><a href="#" >针刺</a></li>
            <li class="column_bk"><a href="#" >五行</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >宝宝养育</a></li>
            <li class="column_bk"><a href="#" >入托</a></li>
            <li class="column_bk"><a href="#" >抚触</a></li>
            <li class="column_bk"><a href="#" >搂抱</a></li>
            <li class="column_bk"><a href="#" >圈养</a></li>
            <li class="column_bk"><a href="#" >开拳之旅</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >古代名医</a></li>
            <li class="column_bk"><a href="#" >华佗</a></li>
            <li class="column_bk"><a href="#" >李时珍</a></li>
            <li class="column_bk"><a href="#" >孙思邈</a></li>
            <li class="column_bk"><a href="#" >张仲景</a></li>
            <li class="column_bk"><a href="#" >扁鹊</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >生育常识</a></li>
            <li class="column_bk"><a href="#" >坐月子</a></li>
            <li class="column_bk"><a href="#" >早孕反应</a></li>
            <li class="column_bk"><a href="#" >药物流产</a></li>
            <li class="column_bk"><a href="#" >妊娠</a></li>
            <li class="column_bk"><a href="#" >上环</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        
        <ul>
            <li class="zm"><a href="#" >生物医学</a></li>
            <li class="column_bk"><a href="#" >生殖细胞</a></li>
            <li class="column_bk"><a href="#" >细胞免疫</a></li>
            <li class="column_bk"><a href="#" >基因芯片</a></li>
            <li class="column_bk"><a href="#" >免疫分子</a></li>
            <li class="column_bk"><a href="#" >免疫耐受</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >分娩方式</a></li>
            <li class="column_bk"><a href="#" >剖腹产</a></li>
            <li class="column_bk"><a href="#" >水中分娩</a></li>
            <li class="column_bk"><a href="#" >自然分娩</a></li>
            <li class="column_bk"><a href="#" >无痛分娩</a></li>
            <li class="column_bk"><a href="#" >导乐分娩</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul>
            <li class="zm"><a href="#" >营养常识</a></li>
            <li class="column_bk"><a href="#" >卡路里</a></li>
            <li class="column_bk"><a href="#" >摄入量</a></li>
            <li class="column_bk"><a href="#" >膳食纤维</a></li>
            <li class="column_bk"><a href="#" >粗粮</a></li>
            <li class="column_bk"><a href="#" >五谷杂粮</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >母婴用品</a></li>
            <li class="column_bk"><a href="#" >孕妇装</a></li>
            <li class="column_bk"><a href="#" >卫生巾</a></li>
            <li class="column_bk"><a href="#" >纸尿裤</a></li>
            <li class="column_bk"><a href="#" >尿布</a></li>
            <li class="column_bk"><a href="#" >吸奶器</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
        <ul class="noline">
            <li class="zm"><a href="#" >人体器官</a></li>
            <li class="column_bk"><a href="#" >肝脏</a></li>
            <li class="column_bk"><a href="#" >心脏</a></li>
            <li class="column_bk"><a href="#" >鼻窦</a></li>
            <li class="column_bk"><a href="#" >睾丸</a></li>
            <li class="column_bk"><a href="#" >前列腺</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
            <li class="zm"><a href="#" >性百科</a></li>
            <li class="column_bk"><a href="#" >发情期</a></li>
            <li class="column_bk"><a href="#" >猥亵</a></li>
            <li class="column_bk"><a href="#" >性虐待</a></li>
            <li class="column_bk"><a href="#" >性和谐</a></li>
            <li class="column_bk"><a href="#" >性交换</a></li>
            <li class="column_bk data_more"><a href="#" >更多 >></a></li>
        </ul>
<div class="clear"></div>
</div>
<!--d_tab12 end--> 
<!--d_tab13-->
<div id="d_tab13" class="data39"> <ul>
  <li class="zm"><a href="#" >谷 物</a></li>
  <li class="column_bk"><a href="#" >米饭</a></li>
  <li class="column_bk"><a href="#" >麦片</a></li>
  <li class="column_bk"><a href="#" >小麦</a></li>
  <li class="column_bk"><a href="#" >玉米</a></li>
  <li class="column_bk"><a href="#" >白粥</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >水 果</a></li>
  <li class="column_bk"><a href="#" >苹果</a></li>
  <li class="column_bk"><a href="#" >柠檬</a></li>
  <li class="column_bk"><a href="#" >葡萄</a></li>
  <li class="column_bk"><a href="#" >芒果</a></li>
  <li class="column_bk"><a href="#" >西瓜</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >蔬 菜</a></li>
  <li class="column_bk"><a href="#" >西红柿</a></li>
  <li class="column_bk"><a href="#" >黄瓜</a></li>
  <li class="column_bk"><a href="#" >油菜</a></li>
  <li class="column_bk"><a href="#" >西兰花</a></li>
  <li class="column_bk"><a href="#" >菠菜</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >奶制品</a></li>
  <li class="column_bk"><a href="#" >牛奶</a></li>
  <li class="column_bk"><a href="#" >奶粉</a></li>
  <li class="column_bk"><a href="#http://fitness.39.net/food/3768.html">酸奶</a></li>
  <li class="column_bk"><a href="#" >奶油</a></li>
  <li class="column_bk"><a href="#" >母乳</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >畜 类</a></li>
  <li class="column_bk"><a href="#" >猪肉</a></li>
  <li class="column_bk"><a href="#" >牛肉</a></li>
  <li class="column_bk"><a href="#" >火腿</a></li>
  <li class="column_bk"><a href="#" >牛排</a></li>
  <li class="column_bk"><a href="#" >羊肉</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >禽 类</a></li>
  <li class="column_bk"><a href="#" >鸡肉</a></li>
  <li class="column_bk"><a href="#" >鹅肉</a></li>
  <li class="column_bk"><a href="#" >鸭肉</a></li>
  <li class="column_bk"><a href="#" >鸡腿</a></li>
  <li class="column_bk"><a href="#" >鸡翅</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >水产类</a></li>
  <li class="column_bk"><a href="#" >草鱼</a></li>
  <li class="column_bk"><a href="#" >鲤鱼</a></li>
  <li class="column_bk"><a href="#" >鲫鱼</a></li>
  <li class="column_bk"><a href="#" >河虾</a></li>
  <li class="column_bk"><a href="#" >生蚝</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >汤酱类</a></li>
  <li class="column_bk"><a href="#" >面汤</a></li>
  <li class="column_bk"><a href="#" >南瓜汤</a></li>
  <li class="column_bk"><a href="#" >鱼汤</a></li>
  <li class="column_bk"><a href="#" >鸡汁</a></li>
  <li class="column_bk"><a href="#" >卤汁</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >坚果类</a></li>
  <li class="column_bk"><a href="#" >核桃</a></li>
  <li class="column_bk"><a href="#" >莲子</a></li>
  <li class="column_bk"><a href="#" >白果</a></li>
  <li class="column_bk"><a href="#" >榛子</a></li>
  <li class="column_bk"><a href="#" >开心果</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >豆 类</a></li>
  <li class="column_bk"><a href="#" >毛豆</a></li>
  <li class="column_bk"><a href="#" >四季豆</a></li>
  <li class="column_bk"><a href="#" >豆腐</a></li>
  <li class="column_bk"><a href="#" >大豆</a></li>
  <li class="column_bk"><a href="#" >红豆</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >饮 料</a></li>
  <li class="column_bk"><a href="#" >红茶</a></li>
  <li class="column_bk"><a href="#" >绿茶</a></li>
  <li class="column_bk"><a href="#" >咖啡</a></li>
  <li class="column_bk"><a href="#" >豆奶</a></li>
  <li class="column_bk"><a href="#" >木瓜汁</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >速食食品</a></li>
  <li class="column_bk"><a href="#" >方便面</a></li>
  <li class="column_bk"><a href="#" >粟米脆</a></li>
  <li class="column_bk"><a href="#" >关东煮</a></li>
  <li class="column_bk"><a href="#" >香芋派</a></li>
  <li class="column_bk"><a href="#" >麦香鱼</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >糖 果</a></li>
  <li class="column_bk"><a href="#" >冰糖</a></li>
  <li class="column_bk"><a href="#" >奶糖</a></li>
  <li class="column_bk"><a href="#" >巧克力</a></li>
  <li class="column_bk"><a href="#" >棒棒糖</a></li>
  <li class="column_bk"><a href="#" >橡皮糖</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >小吃零食</a></li>
  <li class="column_bk"><a href="#" >小笼包</a></li>
  <li class="column_bk"><a href="#" >爆米花</a></li>
  <li class="column_bk"><a href="#" >绿豆糕</a></li>
  <li class="column_bk"><a href="#" >鱿鱼丝</a></li>
  <li class="column_bk"><a href="#" >沙琪玛</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul>
  <li class="zm"><a href="#" >烘培食品</a></li>
  <li class="column_bk"><a href="#" >油条</a></li>
  <li class="column_bk"><a href="#" >小麦面包</a></li>
  <li class="column_bk"><a href="#" >菠萝包</a></li>
  <li class="column_bk"><a href="#" >猪仔包</a></li>
  <li class="column_bk"><a href="#" >餐包</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >婴儿食品</a></li>
  <li class="column_bk"><a href="#" >婴儿奶粉</a></li>
  <li class="column_bk"><a href="#" >婴儿饼干</a></li>
  <li class="column_bk"><a href="#" >燕麦粉</a></li>
  <li class="column_bk"><a href="#" >牙仔饼</a></li>
  <li class="column_bk"><a href="#" >玉米糊</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul  class="noline">
  <li class="zm"><a href="#" >香辛草药</a></li>
  <li class="column_bk"><a href="#" >黄姜</a></li>
  <li class="column_bk"><a href="#" >梅菜</a></li>
  <li class="column_bk"><a href="#" >陈醋</a></li>
  <li class="column_bk"><a href="#" >花椒</a></li>
  <li class="column_bk"><a href="#" >豆瓣酱</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
  <li class="zm"><a href="#" >油脂食物</a></li>
  <li class="column_bk"><a href="#" >色拉油</a></li>
  <li class="column_bk"><a href="#" >花生油</a></li>
  <li class="column_bk"><a href="#" >大豆油</a></li>
  <li class="column_bk"><a href="#" >千岛酱</a></li>
  <li class="column_bk"><a href="#" >植物牛油</a></li>
  <li class="column_bk data_more"><a href="#" >更多 &gt;&gt;</a></li>
</ul>
<ul class="bw noline">
  <li class="zm_hot"><a href="#" >常见菜分类</a></li>
  <li class="d_btn d_btn_bg2"><a href="#" >更多&gt;&gt;</a></li>
  <li class="d_btn d_btn_bg1"><a title="炒" href="#" >炒</a></li>
  <li class="d_btn d_btn_bg1"><a title="煮" href="#" >煮</a></li>
  <li class="d_btn d_btn_bg1"><a title="炸" href="#" >炸</a></li>
  <li class="d_btn d_btn_bg1"><a title="炖" href="#" >炖</a></li>
  <li class="d_btn d_btn_bg1"><a title="烧" href="#" >烧</a></li>
  <li class="d_btn d_btn_bg1"><a title="煎" href="#" >煎</a></li>
  <li class="d_btn d_btn_bg1"><a title="腌" href="#" >腌</a></li>
  <li class="d_btn d_btn_bg1"><a title="煲" href="#" >煲</a></li>
  <li class="d_btn d_btn_bg1"><a title="扒" href="#" >扒</a></li>
  <li class="d_btn d_btn_bg1"><a title="炝" href="#" >炝</a></li>
  <li class="d_btn d_btn_bg1"><a title="熏" href="#" >熏</a></li>
  <li class="d_btn d_btn_bg1"><a title="烘焙" href="#" >烘焙</a></li>
  <li class="d_btn d_btn_bg1"><a title="干锅" href="#" >干锅</a></li>
  <li class="d_btn d_btn_bg1"><a title="微波" href="#" >微波</a></li>
  <li class="d_btn d_btn_bg1"><a title="拔丝" href="#" >拔丝</a></li>
</ul>
<div class="clear"></div>
</div>
<!--d_tab13 end-->
<div class="clear"></div>
</div>
<div class="wrap">
<div class="module_title2">
<ul class="module_title2_l">
</ul>
<ul id="module_tabs" class="module_title2_tabs">
<li><a class="selected" href="javascript:void(null);" target="_self" rel="m_tab1">协会机构</a></li>
<li><a href="#"  rel="m_tab2">友情链接</a></li>
<li><a href="#"  rel="m_tab3">合作媒体</a></li>
<li><a href="#"  rel="m_tab4">健康图书</a></li>
<!--<li><a href="http://corp.39.net/info/sjhz.html" rel="m_tab5">合作动态</a></li>-->
<!--<li><a href="http://news.39.net/mtbd/" rel="m_tab6">媒体报道</a></li>-->
<!--<li><a href="http://ask.39.net/zt2011/" rel="m_tab5">热点标签</a></li>-->
<li><a href="javascript:void(null);" target="_self" rel="m_tab0">热门关注</a></li>
</ul>
<ul class="module_title2_r">
</ul>
</div>
<!--m_tab1-->
<div id="m_tab1" class="module_content" style="display:block"> <ul class="s4">
	<li><a href="#"  rel="nofollow">中华人民共和国卫计委</a></li>
	<li><a href="#"  rel="nofollow">中华预防医学会</a></li>
	<li><a href="#"  rel="nofollow">中华医学会</a></li>
	<li><a href="#"  rel="nofollow">国家食品药品监督总局</a></li>
	<li><a href="#"  rel="nofollow">中国医学科学院</a></li>
</ul>
<ul class="s4">
	<li><a href="#"  rel="nofollow">中国医师协会</a></li>
	<li><a href="#"  rel="nofollow">国家中医药管理局</a></li>
	<li><a href="#"  rel="nofollow">中国医院协会</a></li>
	<li><a href="#"  rel="nofollow">中国红十字基金会</a></li>
	<li><a href="#"  rel="nofollow">中国非处方药物协会</a></li>
</ul>
<ul class="s4">
	<li><a href="#"  rel="nofollow">中国保健协会</a></li>
	<li><a href="#"  rel="nofollow">医药质量管理协会</a></li>
	<li><a href="#"  rel="nofollow">广东省健康教育研究所</a></li>
	<li><a href="#"  rel="nofollow">国家医学教育发展中心</a></li>
	<li><a href="#"  rel="nofollow">中华慈善总会</a></li>
	
</ul>
<ul class="s4">
	<li><a href="#"  rel="nofollow">中国红十字会</a></li>
	<li><a href="#"  rel="nofollow">中国儿童少年基金会</a></li>
	<li><a href="#"  rel="nofollow">中国青少年发展基金会</a></li>
	<li><a href="#"  rel="nofollow" title="中国医药卫生事业发展基金会">中国医药卫生事业发展基金会</a></li>
	<li><a href="#"  rel="nofollow">中华国际医学交流基金会</a></li>
</ul>
<ul class="s4 end">
	<li><a href="#"  rel="nofollow">卫生部人才交流服务中心</a></li>
	<li><a href="#"  rel="nofollow">广东省保健行业协会</a></li>
	<li><a href="#"  rel="nofollow">国际健康生活方式博览会</a></li>
	<li><a href="#"  rel="nofollow">中国性学会</a></li>
	<li><a href="#"  rel="nofollow">国药励展</a></li>
</ul>
<div class="clear"></div>
</div>
<!--m_tab1 end--> 
<!--m_tab2-->
<div id="m_tab2" class="module_content"> <ul>
	
        <li><a href="#" >凤凰网健康</a></li>
       <li><a href="#" >MSN中国</a></li>
       <li><a href="#" >新浪健康</a></li>
       <li><a href="#" >腾讯健康</a></li>
      <li><a href="#" >CNTV健康台</a></li>
       <li><a href="#" >新华网健康</a></li>
      <li><a href="#" >人民网健康</a></li>
      <li><a href="#" >呵护妈妈商城</a></li>
    
      
	
</ul>
<ul>

	<li><a href="#" >hao123</a></li>
	<li><a href="#" >淘宝健康</a></li>
      <li><a href="#" >四川新闻网</a></li>
      <li><a href="#" >中华网健康</a></li>
      <li><a href="#" >新民网健康</a></li>
      <li><a href="#" >嘉人网</a></li>
        <li><a href="#" >播种网</a></li>
       <li><a href="#" >爱美网</a></li>
       
</ul>
<ul class="end">
          <li><a href="#" >太平洋女性网</a></li>
          <li><a href="#" >114啦导航</a></li>
	<li><a href="#" >2345导航</a></li>
	<li><a href="#" >ELLE中文网</a></li>
	<li><a href="#" >美通社</a></li>
	<li><a href="#" >生物谷</a></li>
	<li><a href="#" >米内网</a></li>	
      <li><a href="#" >环球网健康</a></li>  
</ul>
<div class="clear"></div>
</div>
<!--m_tab2 end--> 
<!--m_tab3-->
<div id="m_tab3" class="module_content"> <ul>
	<li class="pic"><a href="#" >
	<img alt="自我药疗" src="images/corplogo9.gif"  /></a></li>
	<li class="pic"><a href="#"  rel="nofollow">
	<img alt="家庭用药" src="images/corplogo2.gif"  /></a></li>
	<li class="pic"><img alt="家庭医药" src="images/logo_jtyy.gif"  /></li>
	<li class="pic"><a href="#"  title="保健时报">
	<img alt="保健时报" src="images/logo_bjsb.gif"  /></a></li>
	<li class="pic"><img alt="中国卫生产业" src="images/corplogo1.gif"  /></li>
	<li class="pic"><a href="#"  rel="nofollow">
	<img alt="国际肝病" src="images/corplogo7.gif"  /></a></li>
	<li class="pic"><a href="#" >
	<img alt="中国处方药" src="images/corplogo8.gif"  /></a></li>
	<li class="pic">
	<img alt="亲子" src="images/corplogo3.gif"  /></li>
</ul>
<ul>
	<li class="pic"><a href="#" >
	<img alt="健康之家" src="images/corplogo10.jpg"  /></a></li>
	<li>《妈妈宝宝》</li>
	<li>《妈咪宝贝》</li>
	<li>《婴儿世界》</li>
	<li>《妇幼健康》</li>
	<li>《中外妇儿健康》</li>
	<li>《好家长》</li>
	<li>《健康族》</li>
</ul>
<ul>
	<li>《伴侣》</li>
	<li>《健康时尚》</li>
	<li>《现代保健》</li>
	<li>《健康大视野》</li>
	<li>《中老年保健》</li>
	<li>《青年心理》</li>
	<li>《健康新视野》</li>
	<li>《现代养生》</li>

</ul>
<ul class="end">
	<li>《新天地》</li>
	<li>《抗癌之窗》</li>
	<li>《养生大世界》</li>
	<li><a href="#"  rel="nofollow">《健康时报》</a></li>
	<li><a href="#"  rel="nofollow">《羊城晚报》</a></li>
	<li>《生命时报》</li>
	<li>《中国医药导报》</li>
	<li><a href="#"  rel="nofollow">健康卫视官网</a></li>
</ul>
<div class="clear"></div>
</div>
<!--m_tab3 end--> 
<!--m_tab4-->
<div id="m_tab4" class="module_content"> <ul class="s4">
	<li><a href="#"  title="《30天“整骨”美形DIY计划》">《30天&ldquo;整骨&rdquo;美形DIY计划》</a></li>
	<li><a href="#"  title="《24节气吃什么》">《24节气吃什么》</a></li>
	<li><a href="#"  title="《单桂敏灸除不孕不育》">《单桂敏灸除不孕不育》</a></li>
	<li><a href="#"  title="《乱乱脑》">《乱乱脑》</a></li>
	<li><a href="#"  title="《医疗急救指南》">《医疗急救指南》</a></li>
</ul>
<ul class="s4">
	<li><a href="#"  title="《艾灸扫除常见病》">《艾灸扫除常见病》</a></li>
	<li><a href="#"  title="《餐桌上的营养学》">《餐桌上的营养学》</a></li>
	<li><a href="#"  title="《养生的智慧》">《养生的智慧》</a></li>
	<li><a href="#"  title="《不上火的生活》">《不上火的生活》</a></li>
	<li><a href="#"  title="《易经养生法》">《易经养生法》</a></li>
</ul>
<ul class="s4">
	<li><a href="#"  title="《写给上班族的营养书》">《写给上班族的营养书》</a></li>
	<li><a href="#"  title="《不疲劳的活法》">《不疲劳的活法》</a></li>
	<li><a href="#"  title="《好孩子需要“坏”父母》">《好孩子需要&ldquo;坏&rdquo;父母》</a></li>
	<li><a href="#"  title="《给孩子的人生先修班》">《给孩子的人生先修班》</a></li>
	<li><a href="#"  title="《看得远的，就是好母亲》">《看得远的，就是好母亲》</a></li>
</ul>
<ul class="s4">
	<li><a href="#"  title="《单桂敏灸除百病2》">《单桂敏灸除百病2》</a></li>
    <li><a href="#"  title="《非常完美养颜术》">《非常完美养颜术》</a></li>
    <li><a href="#"  title="《等待NEMO的日子》">《等待NEMO的日子》</a></li>
    <li><a href="#"  title="《斯波克育儿经》">《斯波克育儿经》</a></li>
    <li><a href="#"  title="《做自己的情绪调节师》">《做自己的情绪调节师》</a></li>
</ul>
<ul class="s4 end">
	<li><a href="#"  title="《减肥那些事儿》">《减肥那些事儿》</a></li>
    <li><a href="#"  title="《非常爱情手册》">《非常爱情手册》</a></li>
    <li><a href="#"  title="《男孩的勇敢书》">《男孩的勇敢书》</a></li>
    <li><a href="#"  title="《女孩的教养书》">《女孩的教养书》</a></li>
    <li><a href="#"  title="《潜意识的力量》">《潜意识的力量》</a></li>
</ul>
<div class="clear"></div>
</div>
<!--m_tab4 end--> 
<!--m_tab5-->
<div id="m_tab55" class="module_content"> <ul class="s3">
          <li><span class="date"></span><a href="#"  rel="nofollow">39健康网联合“中国中药博览会”打造药材行业巨擘</a></li>
	<li><span class="date"></span><a href="#"  rel="nofollow">39健康网携手“世界康博会”直击健康盛事</a></li>
	<li><span class="date"></span><a href="#" >39健康网应用正式上线百度开放平台！</a></li>
	</ul>
<ul class="s3">
           <li><span class="date"></span>39健康网与114啦共建“健康网址导航”</li>
	<li><span class="date"></span>39健康网与卫生厅合作直通车信息平台</li>
	<li><span class="date"></span><a href="#"  rel="nofollow">39健康网与健康生活方式博览会合作</a></li>
	</ul>
<ul class="s3">
           <li><span class="date"></span>39健康网与主流地方门户合作“疾病库”</li>
	<li><span class="date"></span><a href="#" >39健康网参与五部委慢病防治进社区活动</a></li>
	<li><span class="date"></span><a href="#" >39健康网携手中国国际健康产业展览会</a></li>
</ul>
<ul class="s3 end">
	<li class="no_dot">&nbsp;</li>
</ul>
<div class="clear"></div>
</div>
<!--m_tab5 end--> 
<!--m_tab6-->
<div id="m_tab66" class="module_content"> <ul class="s3">
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">艾瑞：2011年中国十大最佳独立健康类网站-39居首</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">39健康网荣获“健康中国2011健康促进奖”</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">“39”商标获“2011年广州市著名商标”称号</a></li>
</ul>
<ul class="s3">
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">2011中国健康年度总评榜：创新让健康更给力</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">专业的便民医药应用 “药品通”正式上线</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">
	39健康网推出iPhone应用软件勇夺健康类排行第一名</a></li>
</ul>
<ul class="s3">
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">
	39健康网获艾瑞2010—2011年度中国最佳互联网企业奖</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">39健康网荣获“最具人气健康门户网站”</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">2010中国健康年度总评榜：汇聚与时俱进的品牌力量</a></li>
</ul>
<ul class="s3 end">
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">39健康网：下一个垂直门户明星？</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">搜狐IT：39上线健康数据库 网民“健康自诊”受关注</a></li>
	<li><span class="date"></span>
	<a href="#"  rel="nofollow">39健康网获媒体行业“中国标杆品牌”</a></li>
	<!--<li class="no_dot">&nbsp;</li>-->
</ul>
<div class="clear"></div>
</div>
<!--m_tab6 end--> 
<!--m_tab7-->
<div id="m_tab5" class="module_content"> 
<div class="clear"></div>
</div>
<!--m_tab7 end-->
<!--m_tab8-->
<div id="m_tab0" class="module_content"> <ul>
<li class="hot_tab"><a href="#"  title="备孕">备孕</a></li>
<li class="hot_tab"><a href="#"  title="奶粉">奶粉</a></li>
<li class="hot_tab"><a href="#"  title="婴儿">婴儿</a></li>
<li class="hot_tab"><a href="#"  title="怀孕的征兆">怀孕的征兆</a></li>
<li class="hot_tab"><a href="#"  title="胎教音乐">胎教音乐</a></li>
<li class="hot_tab"><a href="#"  title="孕期计算器">孕期计算器</a></li>
<li class="hot_tab"><a href="#"  title="月经量少">月经量少</a></li>
<li class="hot_tab"><a href="#"  title="分娩">分娩</a></li>
<li class="hot_tab"><a href="#"  title="新生儿">新生儿</a></li>
<li class="hot_tab"><a href="#"  title="剖腹产后饮食">剖腹产后饮食</a></li>
<li class="hot_tab"><a href="#"  title="坐月子注意事项">坐月子注意事项</a></li>
<li class="hot_tab"><a href="#"  title="孕妇奶粉">孕妇奶粉</a></li>
</ul>


<ul class="end">
<li class="hot_tab"><a href="#"  title="产后恢复">产后恢复</a></li>
<li class="hot_tab"><a href="#"  title="胎教">胎教</a></li>
<li class="hot_tab"><a href="#"  title="怀孕饮食">怀孕饮食</a></li>
<li class="hot_tab"><a href="#"  title="坐月子">坐月子</a></li>
<li class="hot_tab"><a href="#"  title="产后如何减肥">产后如何减肥</a></li>
<li class="hot_tab"><a href="#"  title="小孩">小孩</a></li>
<li class="hot_tab"><a href="#"  title="孕早期">孕早期</a></li>
<li class="hot_tab"><a href="#"  title="4岁宝宝教育">4岁宝宝教育</a></li>
<li class="hot_tab"><a href="#"  title="幼儿奶粉">幼儿奶粉</a></li>
<li class="hot_tab"><a href="#"  title="3岁宝宝教育">3岁宝宝教育</a></li>
<li class="hot_tab"><a href="#"  title="孕妇奶粉">孕妇奶粉</a></li>
<li class="hot_tab"><a href="#"  title="婴儿智力">婴儿智力</a></li>
</ul>
<div class="clear"></div>
</div>
<!--m_tab8 end--> 
<div class="clear"></div>
</div>
<script type="text/javascript" src="js/tabs2.js" ></script> 
<script type="text/javascript">     
var m_tab=new ddtabcontent("module_tabs")
m_tab.setpersist(true)
m_tab.setselectedClassTarget("link") //"link" or "linkparent"
m_tab.init() 
var d_tab=new ddtabcontent("data_tabs")
d_tab.setpersist(true)
d_tab.setselectedClassTarget("link") //"link" or "linkparent"
d_tab.init()       
</script> 
<div class="wrap">
    <div class="allsite">
		<a href="#" >城市分站</a> | <a href="#" >北京</a> | <a href="#" >上海</a> | <a href="#" >广州</a> | <a href="#" >深圳</a> | <a href="#"  target="_blank">西安</a> | <a href="#"  target="_blank">武汉</a>

    </div>
    <div class="bline"></div>
</div>
<!--右侧快捷按钮-->
<script type="text/javascript" src="js/r_rollbtn.js"  defer="defer"></script>
<style type="text/css">
.rightToolbox{ display:block; position:fixed; right:20px; top:-450px; _position:absolute; _top:expression(eval(document.documentElement.scrollTop)+450); _float:right; _text-align:right;_bottom:auto;_width:45px;}
.rightToolbox ul{ float:none;height:125px;}
.rightToolbox li{ width:45px; height:40px; display:block; margin-bottom:1px; float:none;}
.rightToolbox li a{ background:url("images/r_rollbtn.png") no-repeat; display:block; height:40px; width:45px;}
.rightToolbox li a:hover{text-decoration:none; overflow:hidden; text-indent:-100em;}
.rightToolbox .rFavorite a{ background-position:0 0;}
.rightToolbox .rFavorite a:hover{background-position:-46px 0;}
.rightToolbox .rFeedback a{ background-position:0 -41px;}
.rightToolbox .rFeedback a:hover{ background-position:-46px -41px;}
.rightToolbox .rTgotoTop a{ background-position:0 -82px;}
.rightToolbox .rTgotoTop a:hover{ background-position:-46px -82px;}
.rbtn-move-act {transition:all .2s ease 0s}
</style>
<div class="rightToolbox">
	<ul>
        <li class="rFavorite"><a href="javascript:void(0);" onclick="javascript:bookmark('index.htm'/*tpa=http://www.39.net/*/,'39健康网_中国第一健康门户网站');" id="gotoFavorite" target="_self" class="rbtn-move-act" title="加入收藏夹"></a></li>
		<li class="rFeedback"><a href="#"  id="gotoFeedback" target="_blank" class="rbtn-move-act" title="问题反馈"></a></li>
		<li class="rTgotoTop"><a href="javascript:void(0);" id="gotoTop" target="_self" class="rbtn-move-act" title="回到顶部"></a></li>
	</ul>
</div>
<!--右侧快捷按钮 END-->
<div class="bottominfo">
    <div class="shiming"><img src="images/shiming.gif"  /></div>
    <a href="#"  rel="nofollow">网站简介</a> | 
    <a href="#"  rel="nofollow">媒体报道</a> | 
    <a href="#"  rel="nofollow">网络营销</a> | 
    <a href="#"  rel="nofollow">产品中心</a> | 
    <a href="#"  rel="nofollow">人才招聘</a> | 
    <a href="#"  rel="nofollow">联系方式</a> | 
    <a href="sitemap/index.htm" >网站地图</a> | 
    <a href="#"  rel="nofollow">健康导航</a> | 
    <a href="#"  rel="nofollow">问题反馈</a><br />
    Copyright  &copy; 2000-2013　www.39.net　版权所有　39健康网 - 中国第一健康门户网站　<a href="#"  rel="nofollow">未经授权请勿转载</a><br />
</div>
<script src="../image.39.net/tools/bdtj20120508.js"  type="text/javascript"></script>
<script src="../image.39.net/tools/googleanalytics121112.js"  type="text/javascript"></script>
<div class="gshanginfo">
    <div class="divbox">
    	<div class="g4">
    		<a href="#"  rel="nofollow">中国互联网行业自律公约</a> | <a href="#"  rel="nofollow">广东互联网行业反垃圾邮件自律公约</a> | <a href="#"  rel="nofollow">博客服务自律公约</a> | <a href="#"  rel="nofollow">中国互联网视听节目服务自律公约</a>
        </div>
        <div class="gg g1" style="width:45px; padding-left:15px;"><a href="#"  rel="nofollow"><img src="images/beian_gt.gif"  /></a></div>
        <div class="gg g2" style="width:483px; _width:484px; padding-right:15px; margin-left:0;"><a href="#"  rel="nofollow">穗公网监备案证第4401060100041号</a> <a href="gy/cert/Licence/sp.htm-v=20130709.htm" >跨地区SP证B2-20090166</a>  <a href="gy/cert/Licence/culture.htm-v=20130709.htm"  rel="nofollow">网络文化经营许可证</a><br/>
<a href="gy/cert/Licence/drug.htm-v=20130709.htm"  rel="nofollow">互联网药品信息服务资格证书</a> <a href="gy/cert/Licence/icp.htm-v=20130709.htm"  rel="nofollow">ICP证粤B2-20060744</a>  <a href="#"  rel="nofollow">信息网络传播视听节目许可证</a><br/><a href="gy/cert/Licence/health.htm-v=20130709.htm"  rel="nofollow">互联网医疗保健信息服务审核同意书 粤卫网审(2012)343号</a>
        </div>
        <div class="gg" style="padding-left:13px; padding-right:10px;"><a href="#"  rel="nofollow"><img src="images/biaogan.gif"  />中国标杆品牌</a></div>
        <div class="gg" style="padding-left:8px; padding-right:10px;"><a target="_self" rel="nofollow"><img src="images/4048_gold.gif"  />百度黄金伙伴</a></div>
        <div class="gg" style="padding-left:14px;"><span style="display:block; padding-top:8px;"><a href="#"  rel="nofollow"><img src="images/time_cnnic.jpg"  width="95" /></a></span></div>
    </div>
</div>
<script src="js/djan.js"  type="text/javascript"></script>

<script id="import" type="text/javascript" src="../rili.39.net/js/import.js-importjs=0,3,4,5,8&p=Index39" ></script>
<!-- AFP Control Code/Caption.浮标(左)--> 
<SCRIPT LANGUAGE="JavaScript1.1" SRC="../dpvc.39.net/adpolestar/door/;ap=6A2C1A4B-9061-4FBD-B145-056E7380BA97;ct=js;pu=san9;/-" >
</SCRIPT> 
<!-- AFP Control Code End/No.AD00-09-->
<!-- AFP Control Code/Caption.浮标(右)--> 
<SCRIPT LANGUAGE="JavaScript1.1" SRC="../dpvc.39.net/adpolestar/door/;ap=C5BA825B-1C58-44CB-A671-C5246EF1928F;ct=js;pu=san9;/-" >
</SCRIPT> 
<!-- AFP Control Code End/No.AD00-10-->
<!-- AFP Control Code/Caption.首页焦点图广告第三帧--> 
<script LANGUAGE="JavaScript1.1" SRC="../dpvc.39.net/adpolestar/door/;ap=030B651D_6686_2EB0_94C0_8FA8A09FE705;ct=js;pu=san9;/-" ></script> 
<!-- AFP Control Code End/No.-->
<!-- AFP Control Code/Caption.首页焦点图广告第六帧--> 
<SCRIPT LANGUAGE="JavaScript1.1" SRC="../dpvc.39.net/adpolestar/door/;ap=B0951EBF_8272_B784_EA2C_6B0DB058F60E;ct=js;pu=san9;/-" >
</SCRIPT> 
<!-- AFP Control Code End/No.-->

<script type="text/javascript">
function getAskword(){
var url = "http://ask.39.net/addtopic.aspx?words="+document.getElementById("words").value;
window.open(url);	
}
</script>
</body>
</html>
