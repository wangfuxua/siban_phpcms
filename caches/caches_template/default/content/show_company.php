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

			<h3><?php echo $name;?></h3>

			<div class="content_box">

				<table class="w700" text-align="center">
				<?php if($name) { ?>
					<tr class="tr">
						<td class="w150">公司名称</td>
						<td class="w550">
							<p><?php echo $name;?></p>
						</td>

					</tr>
				<?php } ?>
			 
				<?php if($description) { ?>
					<tr class="tr">
						<td class="w150">公司简称</td>
						<td class="w550">
							<p><?php echo $description;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($code) { ?>
					<tr class="tr">
						<td class="w150">股权代码</td>
						<td class="w550">
							<p><?php echo $code;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($address) { ?>
					<tr class="tr">
						<td class="w150">注册地址</td>
						<td class="w550">
							<p><?php echo $address;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($regmoney) { ?>
					<tr class="tr">
						<td class="w150">注册资金</td>
						<td class="w550">
							<p><?php echo $regmoney;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($representative) { ?>
					<tr class="tr">
						<td class="w150">法定代表人</td>
						<td class="w550">
							<p><?php echo $representative;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($regdate) { ?>
					<tr class="tr">
						<td class="w150">挂牌日期</td>
						<td class="w550">
							<p><?php echo $regdate;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if(industry) { ?>
					<tr class="tr">
						<td class="w150">所属行业</td>
						<td class="w550">
							<p><?php echo $industry;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($telephone) { ?>
					<tr class="tr">
						<td class="w150">公司电话</td>
						<td class="w550">
							<p><?php echo $telephone;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($email) { ?>
					<tr class="tr">
						<td class="w150">公司邮箱</td>
						<td class="w550">
							<p><?php echo $email;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($business) { ?>
					<tr class="tr">
						<td class="w150">经营范围</td>
						<td class="w550">
							<p><?php echo $business;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($mainbusiness) { ?>
					<tr class="tr">
						<td class="w150">主营业务</td>
						<td class="w550">
							<p><?php echo $mainbusiness;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($content) { ?>
					<tr class="tr">
						<td class="w150">公司简介</td>
						<td class="w550">
							<p><?php echo $content;?></p>
						</td>

					</tr>
				<?php } ?>
				<?php if($suggestagency) { ?>
					<tr class="tr">
						<td class="w150">推荐机构</td>
						<td class="w550">
							<p><?php echo $suggestagency;?></p>
						</td>

					</tr>
				<?php } ?>
				</table>

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