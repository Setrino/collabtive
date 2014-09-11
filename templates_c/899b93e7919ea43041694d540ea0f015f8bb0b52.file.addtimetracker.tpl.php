<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:24
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/addtimetracker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37502044854117e70bb9478-59481831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899b93e7919ea43041694d540ea0f015f8bb0b52' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/addtimetracker.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37502044854117e70bb9478-59481831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
    'theM' => 0,
    'theY' => 0,
    'settings' => 0,
    'ptasks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e70cbe172_49924434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e70cbe172_49924434')) {function content_54117e70cbe172_49924434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><div class="block_in_wrapper">

	<form novalidate class="main" id="trackeradd" method="post" action="managetimetracker.php?action=add" onsubmit="return validateCompleteForm(this,'input_error');">
		<fieldset>
	
		  <input type="hidden" name="project" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" />
	
		 	<div class="row">
		  		<label for="ttday"><?php echo $_smarty_tpl->getConfigVariable('startday');?>
:</label>
		  		<input type="text" class="text" style="width:80px;margin:0 6px 0 0;" id="ttday" name="ttday" realname="<?php echo $_smarty_tpl->getConfigVariable('date');?>
" />
			</div>
	
			<div class="datepick">
				<div id="datepicker_addtt" class="picker" style="display:none;"></div>
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
				theCal.relateTo = "ttday";
				theCal.keepEmpty = false;
				theCal.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal.getDatepicker("datepicker_addtt");
		        </script>
	        	        
	
		  	<div class="row">
		  		<label for="started"><?php echo $_smarty_tpl->getConfigVariable('started');?>
:</label>
		  		<input type="text" class="text" style="width:80px;margin:0 6px 0 0;" id="started" name="started" required="1" regexp="^([01]?\d|2[0123]):[012345]\d$" realname="<?php echo $_smarty_tpl->getConfigVariable('started');?>
 (Format: hh:mm)" />
	
		  		<button onclick="getnow('started');return false;" onfocus="this.blur();" title="<?php echo $_smarty_tpl->getConfigVariable('inserttime');?>
">hh:mm</button>
			</div>

		  <input type="hidden" name="project" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" />
	
		 	<div class="row">
		  		<label for="ttendday"><?php echo $_smarty_tpl->getConfigVariable('endday');?>
:</label>
		  		<input type="text" class="text" style="width:80px;margin:0 6px 0 0;" id="ttendday" name="ttendday" realname="<?php echo $_smarty_tpl->getConfigVariable('date');?>
" />
			</div>
	
			<div class="datepick">
				<div id="datepicker_addttend" class="picker" style="display:none;"></div>
			</div>
			<script type="text/javascript">
				theCal2 = new calendar(<?php echo $_smarty_tpl->tpl_vars['theM']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['theY']->value;?>
);
				theCal2.dayNames = ["<?php echo $_smarty_tpl->getConfigVariable('monday');?>
","<?php echo $_smarty_tpl->getConfigVariable('tuesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('wednesday');?>
","<?php echo $_smarty_tpl->getConfigVariable('thursday');?>
","<?php echo $_smarty_tpl->getConfigVariable('friday');?>
","<?php echo $_smarty_tpl->getConfigVariable('saturday');?>
","<?php echo $_smarty_tpl->getConfigVariable('sunday');?>
"];
				theCal2.monthNames = ["<?php echo $_smarty_tpl->getConfigVariable('january');?>
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
				theCal2.relateTo = "ttendday";
				theCal2.keepEmpty = false;
				theCal2.dateFormat = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['dateformat'];?>
";
				theCal2.getDatepicker("datepicker_addttend");
		        </script>
	
	
		  	<div class="row">
		  		<label for="ended"><?php echo $_smarty_tpl->getConfigVariable('ended');?>
:</label>
				<input type="text" class="text" style="width:80px;margin:0 6px 0 0;" id="ended" name="ended" required="1" regexp="^([01]?\d|2[0123]):[012345]\d$" realname="<?php echo $_smarty_tpl->getConfigVariable('ended');?>
 (Format: hh:mm)" />
	
				<button onclick="getnow('ended');return false;" onfocus="this.blur();" title="<?php echo $_smarty_tpl->getConfigVariable('inserttime');?>
">hh:mm</button>
			</div>
	
		  	<div class="row">
		  		<label for="trackcomm"><?php echo $_smarty_tpl->getConfigVariable('comment');?>
:</label>
		  		<textarea name="comment" id="trackcomm"></textarea>
		  	</div>
		  	
		  	<div class="clear_both_b"></div>
	
		  	<div class="row">
				<label for="ttask"><?php echo $_smarty_tpl->getConfigVariable('task');?>
:</label>
				<select name="ttask" id="ttask">
				  	<option value="0"><?php echo $_smarty_tpl->getConfigVariable('chooseone');?>
</option>
				  	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ptasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['task']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['task']['total']);
?>
				  		<?php if ($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title']!=''){?>
				  		<option value="<?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
</option>
				  		<?php }else{ ?>
				  		<option value="<?php echo $_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ptasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'],30,"...",true);?>
</option>
						<?php }?>
					<?php endfor; endif; ?>
			  	</select>
		  	</div>
	
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('addbutton');?>
</button>
			</div>
	
		</fieldset>
	</form>

</div> 
<?php }} ?>