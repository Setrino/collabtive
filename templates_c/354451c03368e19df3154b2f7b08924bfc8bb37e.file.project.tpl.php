<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:50:24
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67454183654117e702cff21-69720527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354451c03368e19df3154b2f7b08924bfc8bb37e' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/project.tpl',
      1 => 1389576320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67454183654117e702cff21-69720527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'project' => 0,
    'userpermissions' => 0,
    'done' => 0,
    'tree' => 0,
    'tmilestyle' => 0,
    'trackerstyle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e70540019_35650445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e70540019_35650445')) {function content_54117e70540019_35650445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax",'stage'=>"project",'jsload1'=>"tinymce"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('projecttab'=>"active"), 0);?>

<div id="content-left">
<div id="content-left-in">
<div class="projects">


	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/projects.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('projectwasedited');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="timeadded"){?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/timetracker.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('timetrackeradded');?>
</span>
		<?php }?>
	</div>
	
	<script type = "text/javascript">
		systemMsg('systemmsg');
	 </script>
	

<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['project']->value['name'],45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('overview');?>
</span></h1>

	<div class="statuswrapper">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['close']){?>
			        <?php if ($_smarty_tpl->tpl_vars['project']->value['status']==1){?>
					    <li class="link" id = "closetoggle"><a class="close" href="javascript:closeElement('closetoggle','manageproject.php?action=close&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');" title="<?php echo $_smarty_tpl->getConfigVariable('close');?>
"></a></li>
					<?php }else{ ?>
					<li class="link" id = "closetoggle"><a class="closed" href="manageproject.php?action=open&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"></a></li>
				    <?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
				<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_project','smooth','nosmooth');toggleClass('sm_project_desc','smooth','nosmooth');" title="<?php echo $_smarty_tpl->getConfigVariable('edit');?>
"></a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['project']->value['desc']){?>
				<li class="link" onclick="blindtoggle('descript');toggleClass('desctoggle','desc_active','desc');"><a class="desc" id="desctoggle" href="#" title="<?php echo $_smarty_tpl->getConfigVariable('open');?>
"><?php echo $_smarty_tpl->getConfigVariable('description');?>
</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['del']){?>
				<?php if ($_smarty_tpl->tpl_vars['project']->value['budget']){?>
				<li><a><?php echo $_smarty_tpl->getConfigVariable('budget');?>
: <?php echo $_smarty_tpl->tpl_vars['project']->value['budget'];?>
</a></li>
				<?php }?><?php }?>

				<?php if ($_smarty_tpl->tpl_vars['project']->value['daysleft']!=''||$_smarty_tpl->tpl_vars['project']->value['daysleft']=="0"){?>
					<li <?php if ($_smarty_tpl->tpl_vars['project']->value['daysleft']<0){?>class="red"<?php }elseif($_smarty_tpl->tpl_vars['project']->value['daysleft']=="0"){?>class="green"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['project']->value['daysleft'];?>
 <?php echo $_smarty_tpl->getConfigVariable('daysleft');?>
</a></li>
				<?php }?>
			</ul>

			<div class="status">
				<?php echo $_smarty_tpl->tpl_vars['done']->value;?>
%
				<div class="statusbar"><div class="complete" id = "completed" style="width:0%;"></div></div>
			</div>
	</div>

			
			<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['projects']['edit']){?>
				<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
					<div class="content-spacer"></div>
					<?php echo $_smarty_tpl->getSubTemplate ("editform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showhtml'=>"no"), 0);?>

				</div>
			<?php }?>

<div class="nosmooth" id="sm_project_desc">
		<div id="descript" class="descript" style="display:none;">
		<div class="content-spacer"></div>
			<?php echo $_smarty_tpl->tpl_vars['project']->value['desc'];?>

		</div>
</div>

</div> 
<div class="content-spacer"></div>

<div class="nosmooth" id="sm_project">



<?php if ($_smarty_tpl->tpl_vars['tree']->value[0][0]>0){?>
<div class="projects dtree">
	<div class="headline">
		<a href="javascript:void(0);" id="treehead_toggle" class="win_block" onclick = "toggleBlock('treehead');"></a>
				<h2>
					<img src="./templates/standard/images/symbols/projects.png" alt="" />Project Tree
				</h2>

	</div>

	<div class = "block" id = "treehead">
		<div class="block_in_wrapper" style="padding-top:0px;">

	<script type="text/javascript">
		d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
 = new dTree('d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
');
		d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.config.useCookies = true;
		d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.config.useSelection = false;

		d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.add(0,-1,'');
		//milestones
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['titem'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['name'] = 'titem';
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tree']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['titem']['total']);
?>
			d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.add("m"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['ID'];?>
,0,'<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['name'];?>
','managemilestone.php?action=showmilestone&msid=<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['ID'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','','','templates/standard/images/symbols/miles.png','templates/standard/images/symbols/miles.png','',<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['daysleft'];?>
);

				//tasklists
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['name'] = 'tlist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tlist']['total']);
?>
								d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.add("tl"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['ID'];?>
,"m"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['milestone'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['name'];?>
','managetasklist.php?action=showtasklist&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&tlid=<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['ID'];?>
','','','templates/standard/images/symbols/tasklist.png','templates/standard/images/symbols/tasklist.png');

						//Tasks from lists
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['name'] = 'ttask';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ttask']['total']);
?>
									d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.add("ta"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['ttask']['index']]['ID'];?>
,"tl"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['ttask']['index']]['liste'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['ttask']['index']]['title'];?>
','managetask.php?action=showtask&tid=<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['ttask']['index']]['ID'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','','','templates/standard/images/symbols/task.png','templates/standard/images/symbols/task.png','',<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['tasklists'][$_smarty_tpl->getVariable('smarty')->value['section']['tlist']['index']]['tasks'][$_smarty_tpl->getVariable('smarty')->value['section']['ttask']['index']]['daysleft'];?>
);
						<?php endfor; endif; ?>

				//End tasklists
				<?php endfor; endif; ?>

				//Messages
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['name'] = 'tmsg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tmsg']['total']);
?>
					<?php if ($_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['tmsg']['index']]['milestone']>0){?>
									d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.add("msg"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['tmsg']['index']]['ID'];?>
,"m"+<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['tmsg']['index']]['milestone'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['tmsg']['index']]['title'];?>
','managemessage.php?action=showmessage&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&mid=<?php echo $_smarty_tpl->tpl_vars['tree']->value[$_smarty_tpl->getVariable('smarty')->value['section']['titem']['index']]['messages'][$_smarty_tpl->getVariable('smarty')->value['section']['tmsg']['index']]['ID'];?>
','','','templates/standard/images/symbols/msgs.png','templates/standard/images/symbols/msgs.png');
					<?php }?>

				//End Messages
				<?php endfor; endif; ?>

	//End milestones
	<?php endfor; endif; ?>

		document.write(d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
);

	</script>
	<br />
	<form id = "treecontrol" action = "#">
		<fieldset>
			<div class="row-butn-bottom">
				<button type = "reset" id = "openall" onclick = "d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.openAll();" >Open all</button>
				<button type = "reset" id = "closeall" onclick = "d<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
.closeAll();" >Close all</button>
			</div>
		</fieldset>
	</form>
	</div>
	</div>
</div>
<div class="content-spacer"></div>

<?php }?>


<div class="miles" >
			<div class="headline">
				<a href="javascript:void(0);" id="milehead_toggle" class="win_block" onclick = "toggleBlock('milehead');"></a>

				<div class="wintools">
					<!-- <div class="export-main">
						<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
						<div class="export-in"  style="width:23px;left: -23px;"> 
							<a class="ical" href="managetask.php?action=ical"><span><?php echo $_smarty_tpl->getConfigVariable('icalexport');?>
</span></a>
						</div>
					</div>-->
					<div class = "progress" id = "progress" style = "display:none;">
						<img src = "templates/standard/images/symbols/loader-cal.gif" />
					</div>
				</div>


				<h2>
					<img src="./templates/standard/images/symbols/miles.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('calendar');?>

				</h2>

			</div>


			<div class="block" id="milehead" style = "<?php echo $_smarty_tpl->tpl_vars['tmilestyle']->value;?>
">
				<div id = "thecal" class="bigcal"></div>
			</div> 
</div>	
<div class="content-spacer"></div>






<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['timetracker']['add']){?>
<div class="timetrack">
	<div class="headline">
		<a href="javascript:void(0);" id="trackerhead_toggle" class="win_block" onclick = "toggleBlock('trackerhead');"></a>

		<!-- Export-block
		<div class="wintools">
			<div class="export-main">
				<a class="export"><span><?php echo $_smarty_tpl->getConfigVariable('export');?>
</span></a>
				<div class="export-in"  style="width:23px;left: -23px;"> 
					<a class="ical" href="managetask.php?action=ical"><span><?php echo $_smarty_tpl->getConfigVariable('icalexport');?>
</span></a>
				</div>
			</div>
		</div>
		-->

		<h2>
			<a href="managetimetracker.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
"><img src="./templates/standard/images/symbols/timetracker.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
</a>
		</h2>
	</div>

	<div class="block" id="trackerhead" style = "<?php echo $_smarty_tpl->tpl_vars['trackerstyle']->value;?>
">
		<div id = "trackerform" class="addmenue">
			<?php echo $_smarty_tpl->getSubTemplate ("addtimetracker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="tablemenue"></div>
	</div> 
</div> 

<div class="content-spacer"></div>
<?php }?>




<div class="neutral">
	<?php echo $_smarty_tpl->getSubTemplate ("log.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>



</div> 



	<script type = "text/javascript">
	changeshow('manageproject.php?action=cal&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
','thecal','progress');
	</script>


</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showcloud'=>"1"), 0);?>



	<script type = "text/javascript">
		Event.observe(window,"load",function()
		{
			new Effect.Morph('completed', {
				style: 'width:<?php echo $_smarty_tpl->tpl_vars['done']->value;?>
%',
				duration: 4.0
			});
		});
	</script>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>