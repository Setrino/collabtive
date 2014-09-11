<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:09
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/projectmilestones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101239551954117e6137e333-70590811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0886df3028d2d920cfdc46b9287ec2f0d4ddcd44' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/projectmilestones.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101239551954117e6137e333-70590811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'projectname' => 0,
    'userpermissions' => 0,
    'countlate' => 0,
    'latemilestones' => 0,
    'project' => 0,
    'myprojects' => 0,
    'milestones' => 0,
    'members' => 0,
    'ordner' => 0,
    'folders' => 0,
    'upcomingcount' => 0,
    'upcomingStones' => 0,
    'donemilestones' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e618aadc1_71885463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e618aadc1_71885463')) {function content_54117e618aadc1_71885463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('milestab'=>"active"), 0);?>


<div id="content-left">
	<div id="content-left-in">
		<div class="miles">
			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasadded');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasedited');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasdeleted');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="opened"){?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasopened');?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="closed"){?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasclosed');?>
</span>
				<?php }?>

				<span id = "deleted" class="info_in_red" style = "display:none;"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasdeleted');?>
</span>
				<span class="info_in_green" id = "closed" style = "display:none;"><img src="templates/standard/images/symbols/miles.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('milestonewasclosed');?>
</span>

			</div>

			
				<script type = "text/javascript">
					systemMsg('systemmsg');
				</script>
			

			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</span></h1>

			
			<div class="headline">
				<a href="javascript:void(0);" id="milehead_toggle" class="win_block" onclick = "toggleBlock('milehead');"></a>

				<div class="wintools">
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['add']){?>
						<a class="add" href="javascript:blindtoggle('addstone');" id="add" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn','butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addmilestone');?>
</span></a>
					<?php }?>
				</div>

				<h2><img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</h2>
			</div>

			<div class="block" id="milehead">

				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['add']){?>
					<div id = "addstone" class="addmenue" style = "display:none;">
					<?php echo $_smarty_tpl->getSubTemplate ("addmilestone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>

				<div class="nosmooth" id="sm_miles">

					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $_smarty_tpl->getConfigVariable('milestone');?>
</th>
								<th class="c"><?php echo $_smarty_tpl->getConfigVariable('due');?>
</th>
								<th class="days" style="text-align:right"><?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
&nbsp;&nbsp;</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="5"></td>
							</tr>
						</tfoot>
					</table>

					
					<?php if ($_smarty_tpl->tpl_vars['countlate']->value>0){?>

						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('togglelate');toggleClass('togglemileslate','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemileslate" class="acc-toggle-active"><?php echo $_smarty_tpl->getConfigVariable('latestones');?>
</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>

						<div id="togglelate" class="toggleblock">

							<table id="accordion_miles_late" cellpadding="0" cellspacing="0" border="0">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['name'] = 'latestone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['latemilestones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['latestone']['total']);
?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']%2==0){?>
									<tbody class="color-a" id="miles_late_<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
">
									<?php }else{ ?>
									<tbody class="color-b" id="miles_late_<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
">
									<?php }?>

										<tr class="marker-late">
											<td class="a">
												<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['close']){?>
												<a class="butn_check" href="javascript:closeElement('miles_late_<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
','managemilestone.php?action=close&amp;mid=<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>

												<?php }?>
											</td>
											<td class="b">
												<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_miles_late.activate($$('#accordion_miles_late .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index'];?>
]);toggleAccordeon('done_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
',this);"></span>
													<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['name'],30,"...",true);?>
</a>
												</div>
											</td>
											<td class="c"><?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['fend'];?>
</td>
											<td class="days" style="text-align:right">-<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['dayslate'];?>
&nbsp;&nbsp;</td>
											<td class="tools">
												<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
													<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['del']){?>
														<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'miles_late_<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
\',\'managemilestone.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>

												<?php }?>
											</td>
										</tr>
										<tr class="acc">
											<td colspan="5">
												<div class="accordion_toggle"></div>
												<div class="accordion_content">
													<div class="acc-in">
														<div class="message-in">
															<?php echo $_smarty_tpl->tpl_vars['latemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['latestone']['index']]['desc'];?>

														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								<?php endfor; endif; ?>
							</table>

						</div> 
					<?php }?> 

					
							<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('togglenew');toggleClass('togglemiles','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemiles" class="acc-toggle-active"><?php echo $_smarty_tpl->getConfigVariable('currentmiles');?>
</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>
					<div id="togglenew" class="toggleblock">

						<table id="accordion_miles_new" cellpadding="0" cellspacing="0" border="0" style="clear:both;">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['name'] = 'stone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<tbody class="color-a" id="miles_<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="miles_<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
								<?php }?>
									<tr<?php if ($_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
										<td class="a">
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['close']){?>
									<a class="butn_check" href="javascript:closeElement('miles_<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
','managemilestone.php?action=close&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
										<?php }?></td>
										<td class="b">
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_miles_new.activate($$('#accordion_miles_new .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stone']['index'];?>
]);toggleAccordeon('done_<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'])===null||$tmp==='' ? '' : $tmp);?>
',this);"></span>
												<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'],30,"...",true);?>
</a>
											</div>
										</td>
										<td class="c"><?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['fend'];?>
</td>
										<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['dayslate'];?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
												<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['del']){?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'miles_<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
\',\'managemilestone.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>

											<?php }?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['desc'];?>


										
										<?php if ($_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][0][0]){?>
											<div class="content-spacer-b"></div>
													<h2><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</h2>

															<div class="inwrapper">
																<ul style = "list-style-type:none;"	>
																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
																	<li>
																		<div class="itemwrapper">

																				<table cellpadding="0" cellspacing="0" border="0">
																					<tr>
																						<td class="leftmen" valign="top">
																							<div class="inmenue">
																									<!-- <a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>	-->
																							</div>
																						</td>
																						<td class="thumb">
																							<a href="managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
																									<img src = "./templates/standard/images/symbols/tasklist.png" style="width: 32px; height: auto;" alt="" />
																							</a>
																						</td>
																						<td class="rightmen" valign="top">
																							<div class="inmenue">
																							<!--
																								<a class="del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'files_focus<?php echo $_smarty_tpl->tpl_vars['ordner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\',\'managefile.php?action=delete&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" onclick="fadeToggle('iw_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
');"></a>
																								<a class="edit" href="#" title="<?php echo $_smarty_tpl->getConfigVariable('editfile');?>
"></a>
																							-->
																							</div>
																						</td>
																					</tr>
																					<tr>
																						<td colspan="3">
																							<span class="name">
																								<a href = "managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
																									<?php if ($_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name']!=''){?>
																										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['milestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'],13,"...",true);?>

																									<?php }else{ ?>
																										<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>

																									<?php }?>
																								</a>
																							</span>
																						</td>
																					<tr/>
																				</table>

																		</div> 
																	</li>
																<?php endfor; endif; ?> 

																</ul>
															</div> 

													<?php }?>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>
						</table>
					</div> 


			<?php if ($_smarty_tpl->tpl_vars['upcomingcount']->value>0){?>
					
							<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('toggleupcoming');toggleClass('togglemilesupcoming','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemilesupcoming" class="acc-toggle-active">Upcoming milestones</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>
						<div id="toggleupcoming" class="toggleblock">

						<table id="accordion_miles_new" cellpadding="0" cellspacing="0" border="0" style="clear:both;">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['name'] = 'ustone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['upcomingStones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ustone']['total']);
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']%2==0){?>
								<tbody class="color-a" id="miles_upcoming_<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="miles_upcoming_<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
">
								<?php }?>
									<tr<?php if ($_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
										<td class="a">
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['close']){?>
										<a class="butn_check" href="javascript:closeElement('miles_upcoming_<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
','managemilestone.php?action=close&amp;mid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
										<?php }?></td>
										<td class="b">
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_miles_new.activate($$('#accordion_miles_new .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stone']['index'];?>
]);toggleAccordeon('done_<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'])===null||$tmp==='' ? '' : $tmp);?>
',this);"></span>
												<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['name'],30,"...",true);?>
</a>
											</div>
										</td>

										<td class="c"><?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['startstring'];?>
 - <?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['endstring'];?>
</td>
										<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['dayslate'];?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
												<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'miles_<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
\',\'managemilestone.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
											<?php }?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">
													<div class="message-in">
														<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['desc'];?>


										
										<?php if ($_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][0][0]){?>
											<div class="content-spacer-b"></div>
													<h2><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</h2>

															<div class="inwrapper">
																<ul style = "list-style-type:none;"	>
																<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
																	<li>
																		<div class="itemwrapper">

																				<table cellpadding="0" cellspacing="0" border="0">
																					<tr>
																						<td class="leftmen" valign="top">
																							<div class="inmenue">
																									<!-- <a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>	-->
																							</div>
																						</td>
																						<td class="thumb">
																							<a href="managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
																									<img src = "./templates/standard/images/symbols/tasklist.png" style="width: 32px; height: auto;" alt="" />
																							</a>
																						</td>
																						<td class="rightmen" valign="top">
																							<div class="inmenue">
																							<!--
																								<a class="del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'files_focus<?php echo $_smarty_tpl->tpl_vars['ordner']->value[$_smarty_tpl->getVariable('smarty')->value['section']['file']['index']]['ID'];?>
\',\'managefile.php?action=delete&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;file=<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
" onclick="fadeToggle('iw_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
');"></a>
																								<a class="edit" href="#" title="<?php echo $_smarty_tpl->getConfigVariable('editfile');?>
"></a>
																							-->
																							</div>
																						</td>
																					</tr>
																					<tr>
																						<td colspan="3">
																							<span class="name">
																								<a href = "managetasklist.php?action=showtasklist&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'];?>
">
																									<?php if ($_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name']!=''){?>
																										<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['upcomingStones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ustone']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['name'],13,"...",true);?>

																									<?php }else{ ?>
																										<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>

																									<?php }?>
																								</a>
																							</span>
																						</td>
																					<tr/>
																				</table>

																		</div> 
																	</li>
																<?php endfor; endif; ?> 

																</ul>
															</div> 

													<?php }?>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endfor; endif; ?>
						</table>
					</div> 
					<?php }?>
					



					
					<div id="doneblock" class="doneblock" style="display: none;">

						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock');toggleClass('donebutn','butn_link_active','butn_link');toggleClass('togglemilesdone','acc-toggle','acc-toggle-active');">
							<tr>
								<td class="a"></td>
								<td class="b"><span id="togglemilesdone" class="acc-toggle"><?php echo $_smarty_tpl->getConfigVariable('donemilestones');?>
</span></td>
								<td class="c"></td>
								<td class="days"></td>
								<td class="tools"></td>
							</tr>
						</table>

						<div class="toggleblock">

							<table id="accordion_miles_done" cellpadding="0" cellspacing="0" border="0">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['stone']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['name'] = 'stone';
$_smarty_tpl->tpl_vars['smarty']->value['section']['stone']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['donemilestones']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<tbody class="color-a" id="miles_<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
									<?php }else{ ?>
									<tbody class="color-b" id="miles_<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
">
									<?php }?>
										<?php if (time()>$_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['end']){?>
										<tr class="marker-late">
										<?php }else{ ?>
										<tr>
										<?php }?>
											<td class="a">
												<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['close']){?>
													<a class="butn_checked" href="managemilestone.php?action=open&amp;mid=<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a>
												<?php }?>
											</td>
											<td class="b">
												<div class="toggle-in">
													<span class="acc-toggle" onclick="javascript:accord_miles_done.activate($$('#accordion_miles_done .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['stone']['index'];?>
]);toggleAccordeon('done_<?php echo $_smarty_tpl->tpl_vars['myprojects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['project']['index']]['ID'];?>
',this);"></span>
													<a href="managemilestone.php?action=showmilestone&amp;msid=<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['name'],30,"...",true);?>
</a>
												</div>
											</td>
											<td class="c"><?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['fend'];?>
</td>
											<?php if (time()>$_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['end']){?>
												<td class="days" style="text-align:right">-<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['dayslate'];?>
&nbsp;&nbsp;</td>
											<?php }else{ ?>
												<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['dayslate'];?>
&nbsp;&nbsp;</td>
											<?php }?>
											<td class="tools">
												<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['edit']){?>
													<a class="tool_edit" href="managemilestone.php?action=editform&amp;mid=<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['del']){?>
													<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'miles_<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
\',\'managemilestone.php?action=del&amp;mid=<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');" title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
"></a>
												<?php }?>
											</td>
										</tr>

										<tr class="acc">
											<td colspan="5">
												<div class="accordion_toggle"></div>
												<div class="accordion_content">
													<div class="acc-in">
														<div class="message-in">
															<?php echo $_smarty_tpl->tpl_vars['donemilestones']->value[$_smarty_tpl->getVariable('smarty')->value['section']['stone']['index']]['desc'];?>

														</div>
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

				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['add']>0){?>
							<a class="butn_link" href="javascript:blindtoggle('addstone');" id="add_butn" onclick="toggleClass('add','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_miles','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addmilestone');?>
</a>
						<?php }?>
						<a class="butn_link" href="javascript:blindtoggle('doneblock');" id="donebutn" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('togglemilesdone','acc-toggle','acc-toggle-active');"><?php echo $_smarty_tpl->getConfigVariable('donemilestones');?>
</a>
					</div>
				</div>
			</div> 

			
				<script type = "text/javascript">
					try{
					var accord_miles_late = new accordion('accordion_miles_late');
					}
					catch(e)
					{}

					try{
					var accord_miles_new = new accordion('accordion_miles_new');
					}
					catch(e)
					{}

					try{
					var accord_miles_done = new accordion('accordion_miles_done');
					}
					catch(e){}
				</script>
			

		</div> 
		<div class="content-spacer"></div>
	</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>