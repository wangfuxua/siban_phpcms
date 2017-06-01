<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>四板财经</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>index.css">
	<link href="<?php echo CSS_PATH;?>sucaijiayuan.css" rel="stylesheet" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->	
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>demo.css"/>
	<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>jquery.easydropdown.js"></script>
	<script src="<?php echo JS_PATH;?>sucaijiayuan.js"></script> 
	<script type="text/javascript" src="<?php echo JS_PATH;?>koala.min.1.5.js"></script>
<script type="text/javascript">
//图片滚动 调用方法 imgscroll({speed: 30,amount: 1,dir: "up"});
$.fn.imgscroll = function(o){
	var defaults = {
		speed: 40,
		amount: 0,
		width: 1,
		dir: "left"
	};
	o = $.extend(defaults, o);
	
	return this.each(function(){
		var _li = $("li", this);
		_li.parent().parent().css({overflow: "hidden", position: "relative"}); //div
		_li.parent().css({margin: "0", padding: "0", overflow: "hidden", position: "relative", "list-style": "none"}); //ul
		_li.css({position: "relative", overflow: "hidden"}); //li
		if(o.dir == "left") _li.css({float: "left"});
		
		//初始大小
		var _li_size = 0;
		for(var i=0; i<_li.size(); i++)
			_li_size += o.dir == "left" ? _li.eq(i).outerWidth(true) : _li.eq(i).outerHeight(true);
		
		//循环所需要的元素
		if(o.dir == "left") _li.parent().css({width: (_li_size*3)+"px"});
		_li.parent().empty().append(_li.clone()).append(_li.clone()).append(_li.clone());
		_li = $("li", this);

		//滚动
		var _li_scroll = 0;
		function goto(){
			_li_scroll += o.width;
			if(_li_scroll > _li_size)
			{
				_li_scroll = 0;
				_li.parent().css(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll });
				_li_scroll += o.width;
			}
				_li.parent().animate(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll }, o.amount);
		}
		
		//开始
		var move = setInterval(function(){ goto(); }, o.speed);
		_li.parent().hover(function(){
			clearInterval(move);
		},function(){
			clearInterval(move);
			move = setInterval(function(){ goto(); }, o.speed);
		});
	});
};
</script>
</head>
<body>
	<!--头部-->
		<?php include template('content','header'); ?>
	<!--结束-->
		
	<!--交易所列表-->
		<div class="excharge_list">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=410f3b63c4a56f4ef29a0231df894368&action=lists&catid=37&order=id&num=1000\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'37','order'=>'id','limit'=>'1000',));}?>
				<?php $i=0;?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li <?php if($i%5==0) { ?>class="ml0"<?php } ?>><a target="_blank" href="<?php echo $r['website'];?>"><?php echo $r['title'];?></a></li>
						<?php $i++; ?>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
			</ul>
		</div>
	<!--结束-->

	<!--信息/广告-->
		<div class="hot_box">

			<div class="hotspot">

				<div class="hotspot_tit"> 
						<a  target="_blank" href="#"><span>热</span> <span>点</span></a>
				</div>

				<div class="hotspot_content">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b0a4a1da596ef14fc245b3d9b7db92d&action=hits&siteid=1&catid=15&num=3&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('siteid'=>'1','catid'=>'15','order'=>'views DESC',)).'8b0a4a1da596ef14fc245b3d9b7db92d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('siteid'=>'1','catid'=>'15','order'=>'views DESC','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?> 
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
						<p><a  target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></p>
					<?php $n++;}unset($n); ?> 
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
				</div>

			</div>

			<div class="ad_box" style="display:block !important">
				<ul>
					<li class="w611"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=28"></script></a></li>
					<li class="w199"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=29"></script></a></li>
					<li class="mt8 ml0"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=30"></script></a></li>
					<li class="mt8"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=31"></script></a></li>
					<li class="mt8"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=40"></script></a></li>
					<li class="ml6 w199"><a href="#" target="_blank"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=33"></script></a></li>
				</ul>
			</div>	

		</div>
	<!--结束-->

	<!--政策解析-->
		<div class="main">

			<div class="main_left">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=acb291e0c3a1eb4d073d79d13cc17553&action=category&catid=0&order=id+ASC+Limit+4%2C12&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'id ASC Limit 4,12','limit'=>'12',));}?>
					<?php $i=1;?>
				<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
					<div class="policy_box">
						<div class="poicy_tit_box">
							<span><?php echo $v['catname'];?> </span><a target="_blank" href="<?php echo $v['url'];?>">MORE</a>
						</div>

						<div class="poicy_content_box">
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a8bc8b33ec5de0f969907bdc2440051&action=lists&catid=%24k&order=id+desc&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$k,'order'=>'id desc','limit'=>'8',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<?php if($r['area']) { ?>
									<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],58,'...');?></a></li>
									<?php } else { ?>
									<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],64,'...');?></a></li>
									<?php } ?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>
					<?php if($i%2==0) { ?>
						<?php if($i+5==7 ) { ?>
											
						<div class="ad4"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=<?php echo $i+5;?>"></script></a></div>

						<div class="ad4"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=<?php echo $i+6;?>"></script></a></div>
						<?php } else { ?>
						<div class="ad4"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=<?php echo $i+14;?>"></script></a></div>

						<div class="ad4"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=<?php echo $i+15;?>"></script></a></div>
						<?php } ?>
					<?php } ?>
				
					<?php $i++; ?>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

				

			</div>

			<div class="main_right">
			
				<div class="four_box">

					<div class="four_tit_box">
						<span><?php echo $CATEGORYS['24']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['24']['url'];?>">MORE</a>
					</div>

					<div class="four_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=beb7fd67af9faee4e8c71798f391af29&action=lists&catid=24&order=id+desc&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'id desc','limit'=>'9',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="four_box">

					<div class="four_tit_box">
						<span><?php echo $CATEGORYS['25']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['25']['url'];?>">MORE</a>
					</div>

					<div class="four_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b8bd9e9cbd93c751ba15728ea3df8da4&action=lists&catid=25&order=id+desc&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'id desc','limit'=>'9',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="recommed_box">

					<div class="recommed_tit_box">
						<span><?php echo $CATEGORYS['26']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['26']['url'];?>">MORE</a>
					</div>

					<div class="recommed_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=082892a960fe617ad8886e38c21b9429&action=lists&catid=26&order=id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','order'=>'id desc','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="recommed_box">

					<div class="recommed_tit_box">
						<span><?php echo $CATEGORYS['27']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['27']['url'];?>">MORE</a>
					</div>

					<div class="recommed_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11d48121c7788889c146fece6e2f5e6a&action=lists&catid=27&order=id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'27','order'=>'id desc','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="ad5"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=34"></script></a></div>
				<div class="ad5"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=35"></script></a></div>
				<div class="ad5"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=36"></script></a></div>
				
				<div class="trad_box">
					<div class="trad_tit_box">
						<span><?php echo $CATEGORYS['32']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['32']['url'];?>">MORE</a>
					</div>

					<div class="trad_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0611978e0780ff5f6ae5513a8871fb9e&action=lists&catid=32&order=id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','order'=>'id desc','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="trad_box">

					<div class="trad_tit_box">
						<span><?php echo $CATEGORYS['33']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['33']['url'];?>">MORE</a>
					</div>

					<div class="trad_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=82e8df939b40552cf66d1d3d3068290d&action=lists&catid=33&order=id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'id desc','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="trad_box">

					<div class="trad_tit_box">
						<span><?php echo $CATEGORYS['34']['catname'];?></span>
						<a target="_blank" href="<?php echo $CATEGORYS['34']['url'];?>">MORE</a>
					</div>

					<div class="trad_content_box">
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5b7f8a354bd8b30dcdabacbaaf553520&action=lists&catid=34&order=id+desc&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'34','order'=>'id desc','limit'=>'7',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php if($r['area']) { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['area'];?>:<?php echo str_cut($r['title'],64,'...');?></a></li>
								<?php } else { ?>
								<li><a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],70,'...');?></a></li>
								<?php } ?>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>

				</div>

				<div class="ad5"><a target="_blank" href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=41"></script></a></div>

			</div>

		</div>

	<!--结束-->

	<!--广告-->
		<div class="ad6"><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=37"></script></a></div>
	<!--结束-->
	<!--合作专区-->
		<div class="partner_box">

			<div class="partner_tit">
				合<br/>作<br/>专<br/>区
			</div>

			<div class="scrollleft">
					<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7ecc583ff26b6e563935bdf8a33a74a&action=lists&catid=35&order=id&num=16\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'35','order'=>'id','limit'=>'16',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li>
									<a target="_blank" href="<?php echo $r['website'];?>">
										<span><img src="<?php echo $r['logo'];?>"></span>
										<p><?php echo $r['title'];?></p>
									</a>
								</li>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				
			</div>

		</div>
	<!--结束-->


	<!--底部-->
	<?php include template('content','footer'); ?>
	<!--结束-->

	<script type="text/javascript">
		$(".hotspot_content:not(:first)").hide();
        var news_li=$(".hotspot_tit ul li");

        news_li.hover(function(){
        	 $(this).addClass("current")
                  .siblings().removeClass("current");
            var news_index= news_li.index(this);
            $(".hotspot_content").eq(news_index).show()
                            .siblings().hide();
             $(".hotspot_tit").show();     

		});
	</script>


<script type="text/javascript">
$(document).ready(function(){

	$(".scrollleft").imgscroll({
		speed: 40,    //图片滚动速度
		amount: 0,    //图片滚动过渡时间
		width: 1,     //图片滚动步数
		dir: "left"   // "left" 或 "up" 向左或向上滚动
	});
	
	
});
</script> 



</body>
</html>