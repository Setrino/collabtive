<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:09
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/addmilestone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56020486254117e61d96182-74442750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9372b2620653de22f2de35c6b4c6882cf90af63a' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/addmilestone.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56020486254117e61d96182-74442750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showhtml' => 0,
    'project' => 0,
    'projectname' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'day' => 0,
    'month' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e61ea9fe0_03638292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e61ea9fe0_03638292')) {function content_54117e61ea9fe0_03638292($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)=="yes"){?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('milestab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="miles">

			<div class="breadcrumb">
				<a href="managemilestone.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,40,"...",true);?>
</a>
			</div>


			<h1><?php echo $_smarty_tpl->getConfigVariable('addmilestone');?>
</h1>
<?php }?>

			<div class="block_in_wrapper">
			<h2><?php echo $_smarty_tpl->getConfigVariable('addmilestone');?>
</h2>

				<form novalidate class="main" method="post" action="managemilestone.php?action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  onsubmit="return validateCompleteForm(this);" >
					<fieldset>
						<div class="row">
							<label for="name"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
						</div>

						<div class = "row">
							<label for="desc"><?php echo $_smarty_tpl->getConfigVariable('description');?>
:</label>
							<div class="editor">
								<textarea name="desc" id="desc" realname="<?php echo $_smarty_tpl->getConfigVariable('description');?>
" rows="3" cols="1" ></textarea>
							</div>
						</div>

						<div class="clear_both_b"></div>

						<div class="row">
							<label for="end">Starts on:</label>
							<input type="text" class="text" name="start" id="start" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
"  />
						</div>

						<div class="datepick">
							<div id = "datepicker_miles_start" class="picker" style = "display:none;"></div>
						</div>

						<script type="text/javascript">
							theCal = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
							theCal.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
							theCal.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
","<?php echo $_smarty_tpl->getConfigVariable('february');?>
","<?php echo $_smarty_tpl->getConfigVariable('march');?>
","<?php echo $_smarty_tpl->getConfigVariable('april');?>
","<?php echo $_smarty_tpl->getConfigVariable('may');?>
","<?php echo $_smarty_tpl->getConfigVariable('june');?>
","<?php echo $_smarty_tpl->getConfigVariable('july');?>
","<?php echo $_smarty_tpl->getConfigVariable('august');?>
","<?php echo $_smarty_tpl->getConfigVariable('september');?>
","<?php echo $_smarty_tpl->getConfigVariable('october');?>
","<?php echo $_smarty_tpl->getConfigVariable('november');?>
","<?php echo $_smarty_tpl->getConfigVariable('december');?>
"];
							theCal.relateTo = "start";
							theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCal.getDatepicker("datepicker_miles_start");
						</script>


						<div class="row">
							<label for="end"><?php echo $_smarty_tpl->getConfigVariable('due');?>
:</label>
							<input type="text" class="text" name="end" id="end" required="1" realname="<?php echo $_smarty_tpl->getConfigVariable('due');?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['day']->value)===null||$tmp==='' ? '' : $tmp)&&$_smarty_tpl->tpl_vars['month']->value&&$_smarty_tpl->tpl_vars['year']->value){?> value = "<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php }?> />
						</div>

						<div class="datepick">
							<div id = "datepicker_miles" class="picker" style = "display:none;"></div>
						</div>

						<script type="text/javascript">
							theCal = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
							theCal.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
							theCal.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
","<?php echo $_smarty_tpl->getConfigVariable('february');?>
","<?php echo $_smarty_tpl->getConfigVariable('march');?>
","<?php echo $_smarty_tpl->getConfigVariable('april');?>
","<?php echo $_smarty_tpl->getConfigVariable('may');?>
","<?php echo $_smarty_tpl->getConfigVariable('june');?>
","<?php echo $_smarty_tpl->getConfigVariable('july');?>
","<?php echo $_smarty_tpl->getConfigVariable('august');?>
","<?php echo $_smarty_tpl->getConfigVariable('september');?>
","<?php echo $_smarty_tpl->getConfigVariable('october');?>
","<?php echo $_smarty_tpl->getConfigVariable('november');?>
","<?php echo $_smarty_tpl->getConfigVariable('december');?>
"];
							theCal.relateTo = "end";
							theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
							theCal.getDatepicker("datepicker_miles");
						</script>

						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
							<button onclick="blindtoggle('addstone');toggleClass('add','add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('cancel');?>
</button>
						</div>

					</fieldset>
				</form>

			</div> 

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['showhtml']->value)===null||$tmp==='' ? '' : $tmp)=="yes"){?>
			<div class="content-spacer"></div>

		</div> 
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?><?php }} ?>