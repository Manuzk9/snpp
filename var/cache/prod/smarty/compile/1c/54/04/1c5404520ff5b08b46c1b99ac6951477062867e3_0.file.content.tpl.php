<?php
/* Smarty version 4.3.1, created on 2023-10-10 16:59:07
  from 'C:\xampp\htdocs\mitienda\admin123456\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6525ad0b8a90a6_56121174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5404520ff5b08b46c1b99ac6951477062867e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin123456\\themes\\new-theme\\template\\content.tpl',
      1 => 1694707576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525ad0b8a90a6_56121174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
