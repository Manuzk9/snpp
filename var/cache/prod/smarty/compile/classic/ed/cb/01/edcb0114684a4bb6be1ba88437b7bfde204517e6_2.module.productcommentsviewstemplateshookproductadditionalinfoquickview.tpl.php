<?php
/* Smarty version 4.3.1, created on 2023-10-11 16:17:49
  from 'module:productcommentsviewstemplateshookproductadditionalinfoquickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526f4dd225667_89741672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcb0114684a4bb6be1ba88437b7bfde204517e6' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductadditionalinfoquickview.tpl',
      1 => 1678126272,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526f4dd225667_89741672 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <?php echo '<script'; ?>
 type="text/javascript">    
    $('#product-quickview-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
').insertAfter($('.quickview #product-description-short'));
    $('#product-quickview-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 .grade-stars').rating({ grade: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['average_grade']->value, ENT_QUOTES, 'UTF-8');?>
 });
    $('#product-quickview-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 .comments-nb').html('(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
)');
  <?php echo '</script'; ?>
>

  <div id="product-quickview-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-quickview-review">
    <div class="grade-stars"></div>
    <div class="comments-nb"></div>
  </div>
</div>
<?php }
}
}
