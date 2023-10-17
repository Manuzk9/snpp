<?php
/* Smarty version 4.3.1, created on 2023-10-10 17:00:36
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6525ad647c1284_85378315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1678753094,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525ad647c1284_85378315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10869627596525ad647be840_04439011';
?>
<a class="banner" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" loading="lazy" width="1110" height="213">
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }
}
