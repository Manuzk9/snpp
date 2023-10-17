<?php
/* Smarty version 4.3.1, created on 2023-10-10 16:59:44
  from 'C:\xampp\htdocs\mitienda\admin123456\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6525ad304b30e5_53410765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c692eaa0670d2e21ab7e4c20b9dff34c95bc5f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin123456\\themes\\default\\template\\content.tpl',
      1 => 1694707576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525ad304b30e5_53410765 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
