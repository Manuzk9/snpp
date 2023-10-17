<?php
/* Smarty version 4.3.1, created on 2023-10-11 13:27:16
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526cce4d41d09_12563008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f92fa5bda3702c2d6dcaa703ad1f89403f5def2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526cce4d41d09_12563008 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
