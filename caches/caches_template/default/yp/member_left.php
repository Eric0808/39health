<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="col-left col-1 left-memu">
            <?php if(module_exists('pay')) { ?>
<h6 class="title"> 收货管理</h6>
            <ul class="left-info">
                <li<?php if(ROUTE_A=="company" && ROUTE_C=="business") { ?> class="on"<?php } ?>><a href="index.php?m=yp&c=business&a=company&t=3" hidefocus="true">收货地址</a></li>
      </ul>
      <?php } ?>
      <h6 class="title">我的订单</h6>
            <ul class="left-info">
			  <?php if($this->setting['isbusiness']) { ?>
			  <li<?php if(ROUTE_A=="pay" && ROUTE_C=="business") { ?> class="on"<?php } ?>><a href="index.php?m=yp&c=business&a=pay&t=3">订单处理(<font color=red><?php echo get_orders();?></font>)</a> </li>
			  <?php } ?>
           </ul>
      <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>