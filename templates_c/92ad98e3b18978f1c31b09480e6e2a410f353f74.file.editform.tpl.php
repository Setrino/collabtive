<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:24
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/editform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36842363554117e70a30660-68512520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ad98e3b18978f1c31b09480e6e2a410f353f74' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/editform.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36842363554117e70a30660-68512520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'async' => 0,
    'locale' => 0,
    'langfile' => 0,
    'lists' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'projectov' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e70bb2e50_32175829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e70bb2e50_32175829')) {function content_54117e70bb2e50_32175829($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('projecttab'=>"active"), 0);?>


<div id="content-left">
<div id="content-left-in">
<div class="projects">

<div class="breadcrumb">
	<a href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['project']->value['name'],50,"...",true);?>
</a>
	<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</h1>

<?php }?>


<?php if ((($tmp = @$_smarty_tpl->tpl_vars['async']->value)===null||$tmp==='' ? '' : $tmp)=="yes"){?>



	<script type="text/javascript">
		//	theme_advanced_statusbar_location : "bottom",
		tinyMCE.init({
			mode : "textareas",
			theme : "advanced",
			language: "<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
",
			width: "400px",
			height: "250px",
			plugins : "inlinepopups,style,advimage,advlink,xhtmlxtras,safari,template",
			theme_advanced_buttons1 : "bold,italic,underline,|,fontsizeselect,forecolor,|,bullist,numlist,|,link,unlink,image",
			theme_advanced_buttons2 : "",
			theme_advanced_buttons3 : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_path : false,
			extended_valid_elements : "a[name|href|target|title],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|name],font[face|size|color|style],span[class|align|style]",
		    theme_advanced_statusbar_location: "bottom",
		    theme_advanced_resizing : true,
			theme_advanced_resizing_use_cookie : false,
			theme_advanced_resizing_min_width : "400px",
			theme_advanced_resizing_max_width : "600px",
			theme_advanced_resize_horizontal : false,
			force_br_newlines : true,
			cleanup: true,
			cleanup_on_startup: true,
			force_p_newlines : false,
			convert_newlines_to_brs : false,
			forced_root_block : false,
			external_image_list_url: 'manageajax.php?action=jsonfiles&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
'
		});
	</script>

<?php }?>

<div class="block_in_wrapper">

	<h2><?php echo $_smarty_tpl->tpl_vars['langfile']->value['editproject'];?>
</h2>

	<form novalidate class="main" method="post" action="manageproject.php?action=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" onsubmit="return validateCompleteForm(this,'input_error');">
	<fieldset>

	<div class="row">
		<label for="name"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['name'];?>
:</label>
		<input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" />
	</div>
	
	<div class="row">
		<label for="desc"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['description'];?>
:</label>
		<div class="editor">
			<textarea name="desc" id="desc" rows="3" cols="1"><?php echo $_smarty_tpl->tpl_vars['project']->value['desc'];?>
</textarea>
		</div>
	</div>

	<div class="row">
		<label for="budget"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['budget'];?>
:</label>
		<input type="text" class="text" name="budget" id="budget" realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['budget'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['budget'];?>
" />
	</div>

	<div class="row">
		<label for="end"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['due'];?>
:</label>
		<input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['endstring'];?>
" name="end" id="end" <?php if ($_smarty_tpl->tpl_vars['project']->value['end']==0){?>disabled = "disabled"<?php }?> realname="<?php echo $_smarty_tpl->tpl_vars['langfile']->value['due'];?>
" />
	</div>
	<div class="row">
		<label for="neverdue"></label>
		<input type="checkbox" class="checkbox" value="neverdue" name="neverdue" id="neverdue" <?php if ($_smarty_tpl->tpl_vars['project']->value['end']==0){?>checked = "checked"<?php }?> onclick="$('end').value='';$('end').disabled=!$('end').disabled;">
		<label><?php echo $_smarty_tpl->tpl_vars['langfile']->value['neverdue'];?>
</label>
	</div>

	<div class="datepick">
		<div id = "datepicker_project" class="picker" style = "display:none;"></div>
	</div>

	<script type="text/javascript">
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dayNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['monday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['tuesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['wednesday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['thursday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['friday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['saturday'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['sunday'];?>
"];
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.monthNames = ["<?php echo $_smarty_tpl->tpl_vars['langfile']->value['january'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['february'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['march'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['april'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['may'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['june'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['july'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['august'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['september'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['october'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['november'];?>
","<?php echo $_smarty_tpl->tpl_vars['langfile']->value['december'];?>
"];
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.relateTo = "end";
		theCal<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.getDatepicker("datepicker_project");
	</script>


	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['send'];?>
</button>
		<button type="button" onclick="blindtoggle('form_edit');<?php if ($_smarty_tpl->tpl_vars['projectov']->value=="no"){?> toggleClass('edit_butn','edit-active','edit');toggleClass('sm_project','smooth','nosmooth');toggleClass('sm_project_desc','smooth','nosmooth');<?php }else{ ?>toggleClass('edit_butn<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','tool_edit_active','tool_edit');<?php }?> return false;" onfocus="this.blur();" <?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['langfile']->value['cancel'];?>
</button>
	</div>

	</fieldset>
	</form>

</div> 



<?php if ($_smarty_tpl->tpl_vars['showhtml']->value!="no"){?>
	<div class="content-spacer"></div>
	</div> 
	</div> 
	</div> 

	<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>