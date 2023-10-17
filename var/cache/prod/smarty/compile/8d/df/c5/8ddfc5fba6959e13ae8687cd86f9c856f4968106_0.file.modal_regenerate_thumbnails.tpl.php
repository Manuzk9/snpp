<?php
/* Smarty version 4.3.1, created on 2023-10-11 15:46:11
  from 'C:\xampp\htdocs\mitienda\admin123456\themes\default\template\controllers\images\modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526ed73c8d9f8_58731472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ddfc5fba6959e13ae8687cd86f9c856f4968106' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin123456\\themes\\default\\template\\controllers\\images\\modal_regenerate_thumbnails.tpl',
      1 => 1694707576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526ed73c8d9f8_58731472 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
