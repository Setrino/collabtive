<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:24
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163024849854117e70cc5347-28884714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1a7d597c2cdf94ebdad027d19dedf8f8f43456' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/log.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163024849854117e70cc5347-28884714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userpermissions' => 0,
    'project' => 0,
    'logstyle' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e70df2206_58122043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e70df2206_58122043')) {function content_54117e70df2206_58122043($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_next.php';
?><div class="headline">
	<a href="javascript:void(0);" id="loghead_toggle" class="win_block" onclick = "toggleBlock('loghead');"></a>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
		<div class="wintools">
			<div class="export-main">
				<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
				<div class="export-in"  style="width:46px;left: -46px;"> 
					<a class="pdf" href="manageproject.php?action=projectlogpdf&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('pdfexport');?>
</span></a>
					<a class="excel" href="manageproject.php?action=projectlogxls&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('excelexport');?>
</span></a>
				</div>
			</div>
		</div>
	<?php }?>

	<h2>
		<img src="./templates/standard/images/symbols/activity.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('activity');?>

	</h2>
</div>


<div class="block" id = "loghead" style = "<?php echo $_smarty_tpl->tpl_vars['logstyle']->value;?>
">
	<table class="log" cellpadding="0" cellspacing="0" border="0">

		<thead>
			<tr>
				<th class="a"></th>
				<th class="bc"><?php echo $_smarty_tpl->getConfigVariable('action');?>
</th>
				<th class="d"><?php echo $_smarty_tpl->getConfigVariable('user');?>
</th>
				<th class="tools"></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="5"></td>
			</tr>
		</tfoot>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['name'] = 'logitem';
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['log']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['logitem']['total']);
?>

			
			<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']%2==0){?>
			<tbody class="color-a" id="log_<?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['ID'];?>
">
			<?php }else{ ?>
			<tbody class="color-b" id="log_<?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['ID'];?>
">
			<?php }?>
				<tr>
					<td style="padding:0" class="symbols">
						<?php if ($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="tasklist"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/tasklist.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="user"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/userlist.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="task"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/task.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="projekt"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/projects.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="milestone"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/miles.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="message"){?>
							<img style="margin:0 0 0 3px;" src="./templates/standard/images/symbols/msgs.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="file"){?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/files.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="folder"){?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/folder-root.png" alt="" />
						<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['type']=="track"){?>
							<img style="margin:0 0 0 3px;" src = "./templates/standard/images/symbols/timetracker.png" alt="" />
						<?php }?>
					</td>
					<td>
						<div class="toggle-in">
							<strong><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['name'],55,"...",true);?>
</strong><br />
							<span class="info"><?php echo $_smarty_tpl->getConfigVariable('was');?>

								<?php if ($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==1){?>
									<?php echo $_smarty_tpl->getConfigVariable('added');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==2){?>
									<?php echo $_smarty_tpl->getConfigVariable('edited');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==3){?>
									<?php echo $_smarty_tpl->getConfigVariable('deleted');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==4){?>
									<?php echo $_smarty_tpl->getConfigVariable('opened');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==5){?>
									<?php echo $_smarty_tpl->getConfigVariable('closed');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==6){?>
									<?php echo $_smarty_tpl->getConfigVariable('assigned');?>

								<?php }elseif($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['action']==7){?>
									<?php echo $_smarty_tpl->getConfigVariable('deassigned');?>

								<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['datum'];?>

							</span>
						</div>
					</td>
					<td>
						<a href = "manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['user'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['log']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logitem']['index']]['username'],25,"...",true);?>
</a>
					</td>
					<td class="tools"></td>
				</tr>
			</tbody>
		<?php endfor; endif; ?>

		<tbody class="paging">
			<tr>
				<td></td>
				<td colspan="2">
					<div id="paging">
						<?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>

					</div>
				</td>
				<td class="tools"></td>
			</tr>
		</tbody>
	</table>

	<div class="tablemenue"></div>
</div> 

<div class="content-spacer"></div><?php }} ?>