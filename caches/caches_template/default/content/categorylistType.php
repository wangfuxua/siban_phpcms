<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $CAT['catname'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>list.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>listType.css">
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
		<div class="main4_left">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=95e9a82b6106ab548a0c15cf8001e1bb&action=category&catid=%24catid&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id ASC','limit'=>'20',));}?>
				 
				<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
					<div class="list_box2">
						<div class="list_tit_box">
							<span><?php echo $v['catname'];?></span>
							<a href="<?php echo $v['url'];?>">MORE</a>
						</div>
						<div class="list_content_box">
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=adcb89a3aa9775aa0ff516f685aa8895&action=lists&catid=%24k&order=id+desc&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$k,'order'=>'id desc','limit'=>'10',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li>
									<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('Y-m-d',$r['inputtime']);?></span>
								</li>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>

		<div class="main_right2">
			<ul>
				<li class="mt0"><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=42"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=43"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=46"></script></li>
				<!-- <li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=47"></script></a></li> -->
			</ul>
		</div>

	</div>
	<!--结束-->


	<div class="ad7_7">
		 <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=45"></script>
	</div>
		

	<!--底部-->
	<?php include template('content','footer'); ?>

	 

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