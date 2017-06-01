<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $CAT['catname'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>list.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>content.css">
	<link href="<?php echo CSS_PATH;?>sucaijiayuan.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->	
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>demo.css"/>
	<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>jquery.easydropdown.js"></script>
	<script src="<?php echo JS_PATH;?>sucaijiayuan.js"></script> 
	<script type="text/javascript" src="<?php echo JS_PATH;?>koala.min.1.5.js"></script>
</head>
<body>
	<!--头部-->
	<?php include template('content','header'); ?>
	<!--结束-->

	<!--主体-->
	<div class="ad7">
	<!--<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=44"></script>-->
		  <div id="fsD1" class="focus1">  
			    <div id="D1pic1" class="fPic"> 
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e55b1f00c1968ee4997849bd712a6d84&action=lists&catid=36\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						
						<div class="fcon" style="display: none;">
							<a target="_blank" href="<?php echo $r['link'];?>"><img src="<?php echo $r['image'];?>" style="opacity: 1; "></a>
						</div>
						 
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>				
			    </div>
			    <div class="fbg">  
			    <div class="D1fBt" id="D1fBt">  
			        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>  
			        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>  
			        <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>3</i></a>  
			        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  
			    </div>  
			    </div>  
			</div>   
	</div>

	<div class="position_box">
		当前位置:<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?>
	</div>

	<div class="main2">
		<div class="main2_left">
			<h3><?php echo $title;?></h3>
			<div class="content_box">
				<?php echo $content;?>
			</div>
		</div>

		<div class="main_right">
			<ul>
				<li class="mt0"><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=42"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=43"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=46"></script></li>
				
			</ul>
		</div>

	</div>
	<!--结束-->


	<div class="ad7">
		 <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=45"></script>
	</div>
		

	<?php include template('content','footer'); ?>


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
	Qfast.add('widgets', { path: "<?php echo JS_PATH;?>terminator2.2.min.js", type: "js", requires: ['fx'] });  
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //½¹µãÍ¼°ü¹üid  
			conId: "D1pic1",  //** ´óÍ¼Óò°ü¹üid  
			tabId:"D1fBt",  
			tabTn:"a",
			conCn: '.fcon', //** ´óÍ¼ÓòÅäÖÃclass       
			auto: 1,   //×Ô¶¯²¥·Å 1»ò0
			effect: 'fade',   //Ð§¹ûÅäÖÃ
			eType: 'click', //** Êó±êÊÂ¼þ
			pageBt:true,//ÊÇ·ñÓÐ°´Å¥ÇÐ»»Ò³Âë
			bns: ['.prev', '.next'],//** Ç°ºó°´Å¥ÅäÖÃclass                          
			interval: 3000  //** Í£¶ÙÊ±¼ä  
		}) 
	})  
</script>
</body>
</html>