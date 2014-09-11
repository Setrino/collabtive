<?php /* Smarty version Smarty-3.1.13, created on 2014-08-12 19:37:35
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/projectmembers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165931323053ea50df50e384-99823966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69faa5ba656222503c1d9874fce74890e726295b' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/projectmembers.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165931323053ea50df50e384-99823966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'projectname' => 0,
    'userpermissions' => 0,
    'members' => 0,
    'folders' => 0,
    'project' => 0,
    'cl_config' => 0,
    'langfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53ea50df66fcd4_34657868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea50df66fcd4_34657868')) {function content_53ea50df66fcd4_34657868($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) include '/Applications/MAMP/htdocs/collabtive/include/plugins/function.paginate_next.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('jsload'=>"ajax"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("tabsmenue-project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('userstab'=>"active"), 0);?>

<div id="content-left">
<div id="content-left-in">
<div class="user">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="added"){?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasadded');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="edited"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasedited');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deleted"){?>
		<span class="info_in_red"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasdeleted');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="assigned"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasassigned');?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="deassigned"){?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/user-icon-male.png" alt=""/><?php echo $_smarty_tpl->getConfigVariable('userwasdeassigned');?>
</span>
		<?php }?>
	</div>
	
	<script type = "text/javascript">
	systemMsg('systemmsg');
	 </script>
	

<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['projectname']->value,45,"...",true);?>
<span>/ <?php echo $_smarty_tpl->getConfigVariable('members');?>
</span></h1>



			<div class="headline">
				<a href="javascript:void(0);" id="block_members_toggle" class="win_block" onclick = "toggleBlock('block_members');"></a>

				<div class="wintools">
					<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
					<a class="add" href="javascript:blindtoggle('form_member');" id="addmember" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');"><span><?php echo $_smarty_tpl->getConfigVariable('adduser');?>
</span></a>
					<?php }?>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" /><?php echo $_smarty_tpl->getConfigVariable('members');?>

				</h2>

			</div>


			<div id="block_members" class="blockwrapper">
				
				<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
					<div id = "form_member" class="addmenue" style = "display:none;">
						<?php echo $_smarty_tpl->getSubTemplate ("adduserproject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>

				<div class="nosmooth" id="sm_member">
					<div class="contenttitle">
						<div class="contenttitle_menue">
							
						</div>
						<div class="contenttitle_in">
							
						</div>
					</div>
					<div class="content_in_wrapper">
					<div class="content_in_wrapper_in">


						<div class="inwrapper">
							<ul>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['member'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['member']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['name'] = 'member';
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['members']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['member']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['member']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['member']['total']);
?>
								<li>
									<div class="itemwrapper" id="iw_<?php echo $_smarty_tpl->tpl_vars['folders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fold']['index']]['ID'];?>
">

											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td class="leftmen" valign="top">
														<div class="inmenue">
															<?php if ($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
																<a class="more" href="javascript:fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');"></a>
															<?php }?>
														</div>
													</td>
													<td class="thumb">
														<a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
">
															<?php if ($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['gender']=="f"){?>
																<img src = "./templates/standard/images/symbols/user-icon-female.png" alt="" />
															<?php }else{ ?>
																<img src = "./templates/standard/images/symbols/user-icon-male.png" alt="" />
															<?php }?>
														</a>
													</td>
													<td class="rightmen" valign="top">
														<div class="inmenue">
															<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
															<a class="del" href="manageproject.php?action=deassignform&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
&amp;user=<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('deassign');?>
"></a>
															<a class="edit" href="admin.php?action=editform&id=<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('editfile');?>
"></a>
															<?php }?>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														<span class="name">
															<a href = "manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'];?>
">
																<?php if ($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name']!=''){?>
																	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],13,"...",true);?>

																<?php }else{ ?>
																	<?php echo $_smarty_tpl->getConfigVariable('user');?>

																<?php }?>
															</a>
														</span>
													</td>
												<tr/>
											</table>

											<?php if ($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar']!=''){?>
											<div class="moreinfo-wrapper">
												<div class="moreinfo" id="info_<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
" style="display:none">
													<img src = "thumb.php?pic=files/<?php echo $_smarty_tpl->tpl_vars['cl_config']->value;?>
/avatar/<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['avatar'];?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
');" />
													<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['ID'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['members']->value[$_smarty_tpl->getVariable('smarty')->value['section']['member']['index']]['name'],15,"...",true);?>
</a></span>
												</div>
											</div>
											<?php }?>

									</div> 
								</li>
							<?php endfor; endif; ?> 

							</ul>
						</div> 



			</div> 

			</div> 

			<div class="staterow">
				<div class="staterowin">
					
				</div>

				<div class="staterowin_right"> <span ><?php echo $_smarty_tpl->tpl_vars['langfile']->value['page'];?>
 <?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>
</span></div>
			</div>


			</div> 
			<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['admin']['add']){?>
						<a class="butn_link" href="javascript:blindtoggle('form_member');" id="add_butn_member" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addmember','add-active','add');toggleClass('sm_member','smooth','nosmooth');"><?php echo $_smarty_tpl->getConfigVariable('adduser');?>
</a>
						<?php }?>
					</div>
			</div>
			</div> 


<div class="content-spacer"></div>


</div> 
</div> 
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("sidebar-a.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>