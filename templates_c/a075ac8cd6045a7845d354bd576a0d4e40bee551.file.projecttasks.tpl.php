<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:49:58
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/projecttasks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64054156654117e5628da10-06409879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a075ac8cd6045a7845d354bd576a0d4e40bee551' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/projecttasks.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64054156654117e5628da10-06409879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'projectname' => 0,
    'userpermissions' => 0,
    'lists' => 0,
    'project' => 0,
    'oldlists' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e5680db65_33630910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e5680db65_33630910')) {function content_54117e5680db65_33630910($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'jsload1'=>"tinymce"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('taskstab'=>"active"), 0);?>


<div id="content-left">
<div id="content-left-in">
<div class="tasks">

	
	<div class="infowin_left" style="display:none;" id="systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasadded');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasedited');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasdeleted');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="opened"){?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasopened');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="closed"){?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasclosed');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="assigned"){?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasassigned');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deassigned"){?>
			<span class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasdeassigned');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="listadded"){?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasadded');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="listclosed"){?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/tasklist-done.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasclosed');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="listdeleted"){?>
			<span class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasdeleted');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="listopened"){?>
			<span class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasopened');?>
</span>
		<?php }?>

		
		<span id = "added" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasadded');?>
</span>
		<span id = "edited" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasedited');?>
</span>
		<span id = "deleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasdeleted');?>
</span>
		<span id = "opened" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasopened');?>
</span>
		<span id = "closed" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasclosed');?>
</span>
		<span id = "assigned" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasassigned');?>
</span>
		<span id = "deassigned" style = "display:none;" class="info_in_yellow"><img src="templates/standard/images/symbols/task.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('taskwasdeassigned');?>
</span>
		<span id = "listadded" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasadded');?>
</span>
        <span id = "listclosed" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/tasklist-done.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasclosed');?>
</span>
		<span id = "listdeleted" style = "display:none;" class="info_in_red"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasdeleted');?>
</span>
		<span id = "listopened" style = "display:none;" class="info_in_green"><img src="templates/standard/images/symbols/tasklist.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('tasklistwasopened');?>
</span>
	</div>

	
		<script type = "text/javascript">
			systemMsg('systemmsg');
		</script>
	

	<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</span></h1>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
		<div class="add-main">
			<a id="addtasklists" class="add" href="javascript:blindtoggle('addlist');" onclick="toggleClass(this,'add-active','add');"><span><?php echo $_smarty_tpl->getConfigVariable('addtasklist');?>
</span></a>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?> 
		<div id = "addlist" class="addmenue" style="display:none;">
			<?php echo $_smarty_tpl->getSubTemplate ("addtasklist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	<?php }?> 

	
	<?php if ($_smarty_tpl->tpl_vars['lists']->value[0][0]){?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lists']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
			<div class="headline">
				<a href="javascript:void(0);" id="block-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
_toggle" class="win_block" onclick = "toggleBlock('block-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');"></a>

				<div class="wintools">
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?>
						<a class="close" href="managetasklist.php?action=close&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('close');?>
</span></a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
						<a class="edit" href="managetasklist.php?action=editform&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('edit');?>
</span></a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
						<a class="del" href="javascript:confirmit('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','managetasklist.php?action=del&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');"><span><?php echo $_smarty_tpl->getConfigVariable('delete');?>
</span></a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
						<a class="add" href="javascript:blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');" id="add_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</span></a>
					<?php }?>
				</div>

				<h2>
					<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
 <?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
"><img src="./templates/standard/images/symbols/tasklist.png" alt="" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'],70,"...",true);?>
</a>
				</h2>
			</div>

			<div id="block-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="block">

				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
					<div id = "form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("addtask.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>

				<div class="nosmooth" id="sm_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
">
					<table id="acc_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" cellpadding="0" cellspacing="0" border="0">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b"><?php echo $_smarty_tpl->getConfigVariable('tasks');?>
</th>
								<th class="c"><?php echo $_smarty_tpl->getConfigVariable('user');?>
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

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['task'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['task']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['name'] = 'task';
$_smarty_tpl->tpl_vars['smarty']->value['section']['task']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
							<?php }else{ ?>
							<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
">
							<?php }?>
								<tr <?php if ($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?>
											<a class="butn_check" href="javascript:closeElement('task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
','managetask.php?action=close&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a>
										<?php }?>
									</td>
									<td>
										<div class="toggle-in">
										<span class="acc-toggle" onclick="javascript:accord_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.activate($$('#acc_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['task']['index'];?>
]);toggleAccordeon('acc_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
',this);"></span>
											<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'];?>
">
												<?php if ($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title']!=''){?>
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['title'],30,"...",true);?>

												<?php }else{ ?>
												<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text'],30,"...",true);?>

												<?php }?>
											</a>
										</div>
									</td>
									<td>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['name'] = 'theusers';
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['theusers']['total']);
?>
											<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['users'][$_smarty_tpl->getVariable('smarty')->value['section']['theusers']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['users'][$_smarty_tpl->getVariable('smarty')->value['section']['theusers']['index']]['name'],30,"...",true);?>
</a>
										<?php endfor; endif; ?>
									</td>
									<td style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
									<td class="tools">
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
											<a class="tool_edit" href="javascript:void(0);" onclick="change('managetask.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
\',\'managetask.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
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
													<?php echo nl2br($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['task']['index']]['text']);?>

												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
							
								<script type = "text/javascript">
									var accord_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new accordion('block-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');
								</script>
							
						<?php endfor; endif; ?>
					</table>

					
					<div id="doneblock_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="doneblock" style="display: none;">
						<table class="second-thead" cellpadding="0" cellspacing="0" border="0" onclick="blindtoggle('doneblock_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');toggleClass('donebutn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','acc-toggle','acc-toggle-active');">

								<tr>
									<td class="a"></td>
									<td class="b"><span id="toggle-done-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" class="acc-toggle"><?php echo $_smarty_tpl->getConfigVariable('donetasks');?>
</span></td>
									<td class="c"></td>
									<td class="days"></td>
									<td class="tools"></td>
								</tr>

						</table>

						<div class="toggleblock">
							<table cellpadding="0" cellspacing="0" border="0" id = "done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['name'] = 'oldtask';
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['oldtask']['total']);
?>

								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']%2==0){?>
								<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
">
								<?php }else{ ?>
								<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
">
								<?php }?>


									<tr>
										<td class="a"><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?><a class="butn_checked" href="javascript:closeElement('task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
','managetask.php?action=open&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a><?php }?></td>
										<td class="b">
											<div class="toggle-in">
											<span class="acc-toggle" onclick="javascript:accord_done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
.activate($$('#done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index'];?>
]);toggleAccordeon('done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
',this);"></span>
												<a href="managetask.php?action=showtask&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['project'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['title'];?>
">
													<?php if ($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['title']!=''){?>
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['title'],30,"...",true);?>

													<?php }else{ ?>
													<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['text'],30,"...",true);?>

													<?php }?>
												</a>
											</div>
										</td>
										<td class="c"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['user_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['user'],23,"...",true);?>
</a></td>
										<td class="days" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['daysleft'];?>
&nbsp;&nbsp;</td>
										<td class="tools">
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['edit']){?>
												<a class="tool_edit" href="javascript:void(0);" onclick="change('managetask.php?action=editform&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');toggleClass(this,'tool_edit_active','tool_edit');blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
												<a class="tool_del" href="javascript:confirmfunction('<?php echo $_smarty_tpl->getConfigVariable('confirmdel');?>
','deleteElement(\'task_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
\',\'managetask.php?action=del&amp;tid=<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
\')');"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
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
														<?php echo nl2br($_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['oldtasks'][$_smarty_tpl->getVariable('smarty')->value['section']['oldtask']['index']]['text']);?>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>

								
									<script type = "text/javascript">
										var accord_done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
 = new accordion('done_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');
									</script>
								
							<?php endfor; endif; ?> 

						</table>
					</div> 
				</div> 
			</div> 

			<div class="tablemenue">
				<div class="tablemenue-in">
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['add']){?>
						<a class="butn_link" href="javascript:blindtoggle('form_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');" id="add_butn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" onclick="toggleClass('add_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('addtask');?>
</a>
					<?php }?>
					<a class="butn_link" href="javascript:blindtoggle('doneblock_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
');" id="donebutn_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('toggle-done-<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
','acc-toggle','acc-toggle-active');"><?php echo $_smarty_tpl->getConfigVariable('donetasks');?>
</a>
				</div>
			</div>
		</div> 

		<div class="content-spacer"></div>
	<?php endfor; endif; ?> 
<?php }?> 
<?php if (!$_smarty_tpl->tpl_vars['lists']->value[0][0]&&!$_smarty_tpl->tpl_vars['oldlists']->value[0][0]){?>
	<tbody class="color-a">
		<tr>
			<td></td>
			<td colspan="3" class="info"><?php echo $_smarty_tpl->getConfigVariable('notasklists');?>
</td>
			<td class="tools"></td>
		</tr>
	</tbody>
<?php }?>

</div> 
</div> 
</div> 


<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['oldlists']->value[0][0]){?>  
<div class="content-spacer"></div>

<div id="content-left">
<div id="content-left-in">
<div class="tasks">
	<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('donetasklists');?>
</span></h1>

	<div class="headline">
		<a href="javascript:void(0);" id="block-donelists_toggle" class="win_block" onclick = "toggleBlock('block-donelists');"></a>
		<h2>
			<img src="./templates/standard/images/symbols/tasklist-done.png" alt="" />
		</h2>
	</div>



	<div id="block-donelists" class="block">
		<div class="dones">
			<table id="acc_donelists" cellpadding="0" cellspacing="0" border="0">

				<thead>
					<tr>
						<th class="a"></th>
						<th class="b"><?php echo $_smarty_tpl->getConfigVariable('tasklist');?>
</th>
						<th class="c"></th>
						<th class="days"></th>
						<th class="tools"></th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<td colspan="5"></td>
					</tr>
				</tfoot>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['name'] = 'oldlist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['oldlists']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['oldlist']['total']);
?>
					
					<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']%2==0){?>
					<tbody class="color-a" id="task_<?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['ID'];?>
">
					<?php }else{ ?>
					<tbody class="color-b" id="task_<?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['ID'];?>
">
					<?php }?>
						<tr <?php if ($_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['daysleft']<0){?> class="marker-late"<?php }elseif($_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['daysleft']==0){?> class="marker-today"<?php }?>>
							<td><?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['close']){?><a class="butn_check" href="managetasklist.php?action=open&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a><?php }?></td>
							<td>
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_donelists.activate($$('#block-donelists .accordion_toggle')[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index'];?>
]);toggleAccordeon('acc_<?php echo $_smarty_tpl->tpl_vars['lists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ID'];?>
',this);"></span>
									<a href="managetasklist.php?action=showtasklist&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['ID'];?>
">
									<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['name'],30,"...",true);?>

									</a>
								</div>
							</td>
							<td></td>
							<td><?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['daysleft'];?>
</td>
							<td class="tools">
								<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['del']){?>
								<a class="tool_del" href="managetasklist.php?action=del&amp;tlid=<?php echo $_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['ID'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"  title="<?php echo $_smarty_tpl->getConfigVariable('delete');?>
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
											<?php echo nl2br($_smarty_tpl->tpl_vars['oldlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['oldlist']['index']]['desc']);?>

										</div>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				<?php endfor; endif; ?>
			</table>

			<div class="tablemenue"></div>
		</div> 
	</div> 

	<div class="content-spacer"></div>

	
		<script type = "text/javascript">
			var accord_donelists = new accordion('block-donelists');
		</script>
	

</div> 
</div> 
</div> 

<?php }?> 




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>