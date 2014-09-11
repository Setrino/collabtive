<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:49:40
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/calbody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37828153554117e44722924-56985189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222670619979ea85863b65d1a197db736faa9ee6' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/calbody.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37828153554117e44722924-56985189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'py' => 0,
    'pm' => 0,
    'mstring' => 0,
    'y' => 0,
    'ny' => 0,
    'nm' => 0,
    'langfile' => 0,
    'weeks' => 0,
    'thism' => 0,
    'm' => 0,
    'thisy' => 0,
    'thisd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e44a886d1_01710070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e44a886d1_01710070')) {function content_54117e44a886d1_01710070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?>
<table  id="timeline1" cellpadding="0" cellspacing="1" border="0" class="thecal"">


	<thead class="calhead">
		<tr>
			<th><a class="scroll_left" href = "javascript:changeshow('manageajax.php?action=newcal&y=<?php echo $_smarty_tpl->tpl_vars['py']->value;?>
&m=<?php echo $_smarty_tpl->tpl_vars['pm']->value;?>
','thecal','progress');"></a></th>
			<th colspan="5" align="center">
				
				<?php echo $_smarty_tpl->tpl_vars['mstring']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['y']->value;?>

			</th>
			<th><a class="scroll_right" href = "javascript:changeshow('manageajax.php?action=newcal&y=<?php echo $_smarty_tpl->tpl_vars['ny']->value;?>
&m=<?php echo $_smarty_tpl->tpl_vars['nm']->value;?>
','thecal','progress');"></a></th>
	</tr>
	
	<tr class="dayhead">
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['monday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['tuesday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['wednesday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['thursday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['friday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['saturday'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['sunday'];?>
</th>
	</tr>
	</thead>
	
	<tbody class = "content">

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['week'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['week']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['name'] = 'week';
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weeks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['week']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['week']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['week']['total']);
?>
		
		<tr valign="top">
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['name'] = 'day';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day']['total']);
?>
		
			
			<?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['currmonth']==1){?>
							
				<?php if ($_smarty_tpl->tpl_vars['thism']->value==$_smarty_tpl->tpl_vars['m']->value&&$_smarty_tpl->tpl_vars['thisy']->value==$_smarty_tpl->tpl_vars['y']->value&&$_smarty_tpl->tpl_vars['thisd']->value==$_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val']){?>
				<td class="today" id = "<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
"><a href = "javascript:void(0)" onclick = "fadeToggle('t<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
');"><?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
</a>
				<?php }else{ ?>
				<td class="second" id = "<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
"><a href = "javascript:void(0)" onclick = "fadeToggle('t<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
');"><?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
</a>
				<?php }?>
			<?php }else{ ?>
				<td class="othermonth" id = "<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
"><?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>

			<?php }?>
			
			<!--
			
			<?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['currmonth']==1){?>
			<div id = "t<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" class="calinmenue"  style = "display:none;" onclick="fadeToggle(this);">
			<ul>
			<li class="closewin"><a href="javascript:fadeToggle('t<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
');"><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
.<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</a></li>
			<li class="link"><a href="#"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['addtask'];?>
</a></li>
			<li class="link"><a href="#"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['addmilestone'];?>
</a></li>
			</ul>
			</div>
			<?php }?>
			-->
			
			
			<?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['currmonth']==1){?>

			<div class="calcontent">
				
					<?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milesnum']>0){?>
						<a href = "#miles<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" id = "mileslink<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" ><img src = "templates/standard/images/symbols/miles.png" alt = ""></a>
						<div id = "miles<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" style = "display:none;">
							<div class="modaltitle">
								<img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $_smarty_tpl->tpl_vars['langfile']->value['milestones'];?>

								<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
.<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['y']->value;?>

								<a class="winclose" href="javascript:Control.Modal.close();"></a>
							</div>
							<div class="inmodal">
								<div class="miles">
									<div class="block">
									<table class="acc_modal" id="acc_m" cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="m_a" />
											<col class="m_b" />
											<col class="m_c" />
										</colgroup>
										<thead>
											<th></th>
											<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['project'];?>
: <?php echo $_smarty_tpl->tpl_vars['langfile']->value['milestone'];?>
</th>
											<th class="tools"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['daysleft'];?>
</th>
										</thead>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['name'] = 'stone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['total']);
?>
											<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']%2==0){?>
											<tbody class="color-a" id="mile_m_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
											<?php }else{ ?>
											<tbody class="color-b" id="mile_m_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
											<?php }?>	
											<tr <?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>		
												<td class="icon"><img src="./templates/standard/images/symbols/miles.png" alt="" /></td>				
												<td>
													<div class="toggle-in">
														<span class="acc-toggle" onclick="javascript:accord_m.activate($$('#acc_m .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stone']['index'];?>
]);toggleAccordeon('acc_m',this);"></span>
														<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['title'];?>
">
															<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['pname'];?>
:
															<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'],30,"...",true);?>

														</a>
													</div>
												</td>
												<td class="tools"><?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['daysleft'];?>
</td>
											</tr>

											<tr class="acc">												
												<td colspan="3">
												<div class="accordion_toggle"></div>				
													<div class="accordion_content">											
														<div class="content_in">
																<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['milestones'][$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['desc'];?>

														</div>											
													</div>
												</td>													
											</tr>
										</tbody>											
										<?php endfor; endif; ?>
									</table>
									</div>
								</div>										
							</div>
						</div>
						
						<script type = "text/javascript">
							accord_m = new accordion('acc_m');							
						</script>
													
						
						
						<script type = "text/javascript">
						new Control.Modal('mileslink<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
',{
						opacity: 0.8,
						position: 'absolute',
						width: 550,
						fade: true,
						containerClassName: 'milesmodal',
						overlayClassName: 'milesoverlay'
						});
						</script>
						
					<?php }?>
					
					
					
					<?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasksnum']>0){?>
						<a href = "#tasks<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" id = "tasklink<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" ><img src = "templates/standard/images/symbols/task.png" alt = ""></a>
						<div id = "tasks<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" style = "display:none;">
							<div class="modaltitle">
								<img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo $_smarty_tpl->tpl_vars['langfile']->value['tasklist'];?>

								<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
.<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['y']->value;?>

								<a class="winclose" href="javascript:Control.Modal.close();"></a>
							</div>						
							<div class="inmodal">
								<div class="tasks">
									<div class="block">

									<table class="acc_modal" id="acc_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
" cellpadding="0" cellspacing="0" border="0">
										<colgroup>
											<col class="m_a" />
											<col class="m_b" />
											<col class="m_c" />
										</colgroup>
										<thead>
											<th></th>
											<th><?php echo $_smarty_tpl->tpl_vars['langfile']->value['project'];?>
: <?php echo $_smarty_tpl->tpl_vars['langfile']->value['task'];?>
</th>
											<th class="tools"><?php echo $_smarty_tpl->tpl_vars['langfile']->value['daysleft'];?>
</th>
										</thead>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['task']['index']%2==0){?>
											<tbody class="color-a" id="task_m_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
											<?php }else{ ?>
											<tbody class="color-b" id="task_m_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
											<?php }?>			
											<tr <?php if ($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>		
												<td class="icon"><img src="./templates/standard/images/symbols/task.png" alt="" /></td>				
												<td>
													<div class="toggle-in">
														<span class="acc-toggle" onclick="javascript:accord_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
.activate($$('#acc_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
 .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['task']['index'];?>
]);toggleAccordeon('acc_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
',this);"></span>
														<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
">
															<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['pname'];?>
: 
															<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'],30,"...",true);?>

														</a>
													</div>
												</td>
												<td class="tools"><?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
</td>
											</tr>

											<tr class="acc">												
												<td colspan="3">
												<div class="accordion_toggle"></div>				
													<div class="accordion_content">											
														<div class="content_in">
																<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'];?>

														</div>											
													</div>
												</td>													
											</tr>
										</tbody>
																		
										<?php endfor; endif; ?>
											
									</table>
									</div>
								</div>
							</div>
						</div>
						
						
						<script type = "text/javascript">
							accord_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
 = new accordion('acc_mb_<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
');
							//accord_mb = new accordion('acc_mb');							
						</script>
									
						

						
						
						<script type = "text/javascript">
						new Control.Modal('tasklink<?php echo $_smarty_tpl->tpl_vars['weeks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['week']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['day']['index']]['val'];?>
',{
						opacity: 0.8,
						position: 'absolute',
						width: 550,
						fade: true,
						containerClassName: 'tasksmodal',
						overlayClassName: 'tasksoverlay'
						});
						</script>
						

						
						
					<?php }?> 
			</div> 
			
				
			
			<?php }?>
			
			</td>
			
	
		
		<?php endfor; endif; ?>
		</tr>
		
	
	<?php endfor; endif; ?>

	</tbody>
</table>


<script type = "text/javascript">
stopWait('progress');
</script>
<?php }} ?>