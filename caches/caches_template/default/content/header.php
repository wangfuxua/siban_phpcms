<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<div class="dateBox">
		<span class="date">2015年3月10日&nbsp;星期二&nbsp;农历&nbsp;正月廿</span>
		<span class="collection"><a href="javascript:void(0)">加入收藏</a>
		|<a href="javascript:vid(0)" >设为首页</a></span>
		
	</div>

	<div class="headerWrap">

		<div class="header_box">

			<div class="logo">
				<a href="/"><img src="<?php echo IMG_PATH;?>logo.png" alt=""></a>
			</div>

			<div class="search">
				<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
					<option value="0">不限</option>
				<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
					<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
						<option value="<?php echo $v['typeid'];?>"><?php echo $v['name'];?></option>
					<?php $n++;}unset($n); ?>
					
				</select>
				<script type="text/javascript">
			
					var typeid;
					
					function getTypeId(){
					
					var select = $('.selected').html();
									
					$('.old select option').each(function(x){
					
					if(select==$(this).html()){
						typeid=$(this).val();
					}
					
					});
					 $('#typeid').val(typeid);
					 
					}
										
				</script>

				<form action="<?php echo APP_PATH;?>index.php" name="myform" id="myform" method="get" target="_blank">
					<input type="hidden" name="m" value="search"/>
					<input type="hidden" name="c" value="index"/>
					<input type="hidden" name="a" value="init"/>
					<input type="hidden" name="typeid"  id="typeid"/>
					<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
					<input type="text" class="search_input" name="q" >
					<a href="javascript:void(0);" onclick="getTypeId();myform.submit();"><img src="<?php echo IMG_PATH;?>sezrch_button.png"/></a>
				</form>
			</div>
			
			

			<div class="share">
				<a href="#"><img src="<?php echo IMG_PATH;?>weixin.png"></a>
				<a href="http://weibo.com/u/5572009742/home"><img src="<?php echo IMG_PATH;?>weibo.png"></a>
			</div>

		</div>

	</div>