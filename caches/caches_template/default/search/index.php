<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>搜索结果</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>list.css">
	<link href="<?php echo CSS_PATH;?>sucaijiayuan.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->	
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>demo.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>search_list.css" />
	<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>jquery.easydropdown.js"></script>
	<script src="<?php echo JS_PATH;?>sucaijiayuan.js"></script> 
	<script type="text/javascript" src="<?php echo JS_PATH;?>koala.min.1.5.js"></script>
</head>
<body>
	<?php include template('content','header'); ?>
	<!--结束-->

	<!--主体-->
	 

	<div class="position_box">
		当前位置: <a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span>搜索结果
	</div>

	<div class="main2">

		<div class="main2_left">

			<div class="search_menu">
				<h2>关于 "<?php echo $_GET['q'];?>" ,共找到约<?php echo $totalnums;?>个内容。用时<?php echo sprintf("%01.2f", $execute_time);?> 秒）</h2>
				<p>类别：
					<a href="index.php?m=search&c=index&a=init&typeid=0&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=<?php echo $time;?>" <?php if($_GET['typeid']==$typeid) { ?> class="current"<?php } ?>>不限</a>
				<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
					<a href="index.php?m=search&c=index&a=init&typeid=<?php echo $v['typeid'];?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=<?php echo $time;?>" <?php if($v['typeid']==$typeid) { ?> class="current"<?php } ?>><?php echo $v['name'];?></a>
				<?php $n++;}unset($n); ?>					
				</p>
				<p>时间：
					 <a href="index.php?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=all" <?php if($time=='all' || empty($time)) { ?>class="current"<?php } ?>>全部时间</a> 
					 <a href="index.php?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=day" <?php if($time=='day') { ?>class="current"<?php } ?>>一天内</a> 
					 <a href="index.php?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=week" <?php if($time=='week') { ?>class="current"<?php } ?>>一周内</a> 
					 <a href="index.php?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=month" <?php if($time=='month') { ?>class="current"<?php } ?>>一月内</a> 
					 <a href="index.php?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=year" <?php if($time=='year') { ?>class="current"<?php } ?>>一年内</a> 
				</p>
				<p>最近搜索：
					
				</p>
			</div>

			<div class="list_box">
				<ul>
					<?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
						<li>
							<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>'
						</li>
					<?php $n++;}unset($n); ?>
					<?php if(empty($data)) { ?>未找到结果<?php } ?>
				</ul>
				
				<?php if($setting['relationenble']) { ?>
					<div class="wrap sgch"><strong>相关搜索：</strong>
					<?php $n=1; if(is_array($relation)) foreach($relation AS $k => $v) { ?>
					<a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&siteid=<?php echo $siteid;?>&q=<?php echo $v['keyword'];?>"><?php echo $v['keyword'];?></a> 
					<?php $n++;}unset($n); ?>
					</div>
				<?php } ?>
			</div>
			<div class="submenu">
				<ul>
					<?php echo $pages;?>
				</ul>
			</div>
			
		</div>

		<div class="main_right">
			<ul>
				<li class="mt0"><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=42"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=43"></script></a></li>
				<li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=46"></script></li>
				<!-- <li><a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=47"></script></a></li> -->
			</ul>
		</div>

	</div>
	<!--结束-->


	<div class="ad7">
		 <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=45"></script>
	</div>
		

	<!--底部-->
	<?php include template('content','footer'); ?>
	<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
	<?php if($setting['suggestenable']) { ?>
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
	<?php } ?>

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