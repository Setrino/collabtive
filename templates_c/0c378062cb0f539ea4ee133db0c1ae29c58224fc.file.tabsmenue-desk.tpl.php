<?php /* Smarty version Smarty-3.1.13, created on 2014-09-11 12:49:40
         compiled from "/Applications/MAMP/htdocs/collabtive/templates/standard/tabsmenue-desk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36714713854117e44279bd5-69547375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c378062cb0f539ea4ee133db0c1ae29c58224fc' => 
    array (
      0 => '/Applications/MAMP/htdocs/collabtive/templates/standard/tabsmenue-desk.tpl',
      1 => 1389140218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36714713854117e44279bd5-69547375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desktab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54117e4428ac02_80205495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54117e4428ac02_80205495')) {function content_54117e4428ac02_80205495($_smarty_tpl) {?><div class="tabswrapper">

<ul class="tabs">
		<li class="desk"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['desktab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="index.php"><span><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</span></a></li>
	</ul>
</div><?php }} ?>