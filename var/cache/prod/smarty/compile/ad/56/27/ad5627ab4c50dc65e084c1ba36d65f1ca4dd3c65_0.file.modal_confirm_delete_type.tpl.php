<?php
/* Smarty version 4.3.1, created on 2023-10-11 15:46:11
  from 'C:\xampp\htdocs\mitienda\admin123456\themes\default\template\controllers\images\modal_confirm_delete_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526ed73c9ebf4_50036488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5627ab4c50dc65e084c1ba36d65f1ca4dd3c65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin123456\\themes\\default\\template\\controllers\\images\\modal_confirm_delete_type.tpl',
      1 => 1694707576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526ed73c9ebf4_50036488 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <div class="form-group">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

  </div>

  <div class="modal-checkbox">
    <input type="checkbox" id="delete_linked_images" name="delete">
    <label for="delete_linked_images"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Delete the images linked to this image setting",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>
</label>
  </div>
</div>
<?php }
}
