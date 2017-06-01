<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<div class="footer_wrap">

	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc7cc59d2a659cdd679cd623317476b7&action=category&catid=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
	<?php $i=0;?>
		<div class="footer_box">
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<?php if($i==3) { ?>
					<li><a class="bgn" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
					<?php } ?>
					<?php $i++; ?>
				<?php $n++;}unset($n); ?>
			</ul>
			<p>京IC备5474735&nbsp;技术支持：普世联创</p>
			<p>版权所有：四板财经 &nbsp;&nbsp;联系电话：69943608&nbsp;&nbsp; 传真：69943607&nbsp; &nbsp;  邮箱：zuwenjin@126.com &nbsp;  &nbsp; 地址：北京市海淀区中关村西区丹棱街甲1号互联网金融中心16层   </p>
		</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
	<!--结束-->

	<div class="float_adl">
		<a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=38"></script></a>
		<a href="javascript:void(0);" id="closeButtonleft"><img src="<?php echo IMG_PATH;?>close_buton.png" alt=""></a>
	</div>

	<div class="float_adr">
		<a href="#"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=39"></script></a>
		<a href="javascript:void(0);" id="closeButtonright"><img src="<?php echo IMG_PATH;?>close_buton.png" alt=""></a>
	</div>

	<a href="#0" class="cd-top">Top</a>


	<script type="text/javascript">
	$(document).ready(function(){

		$(".float_adl #closeButtonleft").click(function(){
			$(".float_adl").hide();
		});

		$(".float_adr #closeButtonright").click(function(){
			$(".float_adr").hide();
		});
		
		
	});
	</script>
	
	
	<script type="text/javascript" src="<?php echo APP_PATH;?>statics/js/ueditor/ueditor.parse.js"></script>
	<script type="text/javascript">
	setTimeout(function(){ uParse('#content', {
	 'highlightJsUrl':'<?php echo APP_PATH;?>statics/js/ueditor/third-party/SyntaxHighlighter/shCore.js',
	 'highlightCssUrl':'<?php echo APP_PATH;?>statics/js/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css'})
	}, 300);
	</script>