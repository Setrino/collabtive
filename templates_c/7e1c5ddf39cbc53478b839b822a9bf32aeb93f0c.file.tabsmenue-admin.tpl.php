<?php /* Smarty version Smarty-3.1.13, created on 2014-08-12 19:37:21
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/tabsmenue-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173932122453ea50d17c3465-85959587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1c5ddf39cbc53478b839b822a9bf32aeb93f0c' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/tabsmenue-admin.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173932122453ea50d17c3465-85959587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projecttab' => 0,
    'customertab' => 0,
    'usertab' => 0,
    'settingstab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53ea50d17f9407_31893048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea50d17f9407_31893048')) {function content_53ea50d17f9407_31893048($_smarty_tpl) {?><div class="tabswrapper">
	<ul class="tabs">
		<li class="projects"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['projecttab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=projects"><span><?php echo $_smarty_tpl->getConfigVariable('projectadministration');?>
</span></a></li>
		<!--<li class="customers"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['customertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=customers"><span><?php echo $_smarty_tpl->getConfigVariable('customeradministration');?>
</span></a></li>-->
		<li class="user"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['usertab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=users"><span><?php echo $_smarty_tpl->getConfigVariable('useradministration');?>
</span></a></li>
		<li class="system-settings"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settingstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="admin.php?action=system"><span><?php echo $_smarty_tpl->getConfigVariable('systemadministration');?>
</span></a></li>
	</ul>
</div><?php }} ?>