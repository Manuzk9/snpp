<?php
/* Smarty version 4.3.1, created on 2023-10-11 16:17:57
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526f4e5a7f7e2_74528168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da86d576211f0a0e6b973fb9110c65e2f87447d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526f4e5a7f7e2_74528168 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
