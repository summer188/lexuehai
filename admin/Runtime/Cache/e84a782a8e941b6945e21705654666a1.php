<?php if (!defined('THINK_PATH')) exit();?><DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script><script language="javascript">
var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var lang_please_select = "<?php echo (L("please_select")); ?>";
var def=<?php echo ($def); ?>;
$(function($){
	$("#ajax_loading").ajaxStart(function(){
		$(this).show();
	}).ajaxSuccess(function(){
		$(this).hide();
	});
});

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><style type="text/css"> table {font-size: 12px} </style><div class="pad_10"><form action="<?php echo u('SellerList/insert');?>" method="post" name="myform" id="myform" enctype="multipart/form-data"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th><?php echo L('installment');?> : </th><td>&nbsp;
		  初一&nbsp;<input type="radio" name="installment" value="7" checked="checked"/>&nbsp;
		  初二&nbsp;<input type="radio" name="installment" value="8" />&nbsp;
		  初三&nbsp;<input type="radio" name="installment" value="9" />&nbsp;
		  高一&nbsp;<input type="radio" name="installment" value="10" />&nbsp;
		  高二&nbsp;<input type="radio" name="installment" value="11" />&nbsp;
		  高三&nbsp;<input type="radio" name="installment" value="12" />&nbsp;
		</td></tr><tr><th><?php echo L('url');?> :</th><td><input type="text" name="click_url"  id="click_url" class="input-text" style="width:400px;" value="" /></td></tr><tr><th><?php echo L('net_logo');?> :</th><td><input class="input-text" type="text" name="net_logo" class="input-text" style="width:400px;" value=""/></td></tr><tr><th width="80"><?php echo L('name');?> :</th><td><textarea name="name" style="width:400px; height:120px;" id="name" class="input-text"></textarea></td></tr><!--tr><th class="text_right"><?php echo L('has_invoice');?> :</th><td class="text_left"><input type="text" name="has_invoice"  id="has_invoice" class="input-text" style="width:400px;" value="" /></td></tr><tr><th class="text_right"><?php echo L('services');?> :</th><td class="text_left">
			&nbsp;
			<input type="radio" name="format" value="文本" checked/>
			文本&nbsp;
			<input type="radio" name="format" value="视频+文本" />
			&nbsp;视频+文本 		
		</td></tr--><tr><th><?php echo L('description');?> :</th><td>			&nbsp;A&nbsp;<input type="radio" name="description" value="a" />&nbsp;B&nbsp;
		  <input type="radio" name="description" value="b" />&nbsp;C&nbsp;
		  <input type="radio" name="description" value="c" checked="checked" />&nbsp;D&nbsp;
		  <input type="radio" name="description" value="d" />&nbsp;
		</td></tr><tr><th><?php echo L('recommend');?> :</th><td>			&nbsp;1&nbsp;
		  <input type="radio" name="recommend" value="1"/>&nbsp;2&nbsp;
		  <input type="radio" name="recommend" value="2" />&nbsp;3&nbsp;
		  <input type="radio" name="recommend" value="3" />&nbsp;4&nbsp;
		  <input type="radio" name="recommend" value="4" checked="checked" />&nbsp;
		</td></tr><tr><th width="80"><?php echo L('cash_back_rate');?> :</th><td>&nbsp;1&nbsp;<input type="radio" name="cash_back_rate" value="1" />&nbsp;2&nbsp;
		  <input type="radio" name="cash_back_rate" value="2" />&nbsp;3&nbsp;
		  <input type="radio" name="cash_back_rate" value="3" checked="checked" />&nbsp;4&nbsp;
		  <input type="radio" name="cash_back_rate" value="4" />&nbsp;5&nbsp;
		  <input type="radio" name="cash_back_rate" value="5" />&nbsp;</td></tr><tr><th width="80"><?php echo L('has_invoice');?> :</th><td>&nbsp;1&nbsp;<input type="radio" name="has_invoice" value="1" />&nbsp;2&nbsp;
		  <input type="radio" name="has_invoice" value="2" />&nbsp;3&nbsp;
		  <input type="radio" name="has_invoice" value="3" checked="checked" />&nbsp;4&nbsp;
		  <input type="radio" name="has_invoice" value="4" />&nbsp;5&nbsp;
		  <input type="radio" name="has_invoice" value="5" />&nbsp;</td></tr><tr><th><?php echo L('site_logo');?> :</th><td><input type="text" name="site_logo"  id="site_logo" class="input-text" style="width:400px;" value="" /></td></tr><tr><th><?php echo L('title_attribute');?> :</th><td><input type="text" name="title_attribute"  id="title_attribute" class="input-text" style="width:400px;" value="" /></td></tr><!--tr><th><?php echo L('sort');?> :</th><td><input type="text" name="sort" id="sort" class="input-text"></td></tr--><tr><th class="text_right">所属学科 :</th><td class="text_left">
			&nbsp; <input type="radio" value="chymistry" name="subject" checked="checked"> 化学 <input type="radio" value="physical" name="subject"> 物理 <input type="radio" value="Chinese" name="subject"> 语文 <input type="radio" value="mathematics" name="subject"> 数学 <input type="radio" value="English" name="subject"> 英语 <!--input type="radio" value="106" name="cate_id[]"> 政治 <input type="radio" value="107" name="cate_id[]"> 历史 <input type="radio" value="108" name="cate_id[]"> 生物><input type="radio" value="109" name="cate_id[]"> 化学 <input type="radio" value="110" name="cate_id[]"> 物理 <input type="radio" value="111" name="cate_id[]"> 语文 <input type="radio" value="112" name="cate_id[]" checked="checked"> 数学 <input type="radio" value="122" name="cate_id[]"> 英语--></td></tr><!--tr><th><?php echo L('state');?> :</th><td><input type="radio" name="status" class="radio_style" value="1" checked="checked" > &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0"> &nbsp;禁用
      </td></tr--></table><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" "></form><script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({
			formid:"myform",
			autotip:true,
			onerror:function(msg,obj){
				window.top.art.dialog({
					content:msg,
					lock:true,
					width:'200',
					height:'50'},
					 function()
					 {
					 	this.close();
						$(obj).focus();
					 })
		}});		
		
		$("#name").formValidator({
			onshow:"不能为空",onfocus:"不能为空"
		}).inputValidator({
			min:1,onerror:"请填写分类名称"
		});
	})
</script></div></body></html>