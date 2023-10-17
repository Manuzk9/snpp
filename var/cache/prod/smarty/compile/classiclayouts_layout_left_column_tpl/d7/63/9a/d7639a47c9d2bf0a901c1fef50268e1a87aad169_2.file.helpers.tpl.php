<?php
/* Smarty version 4.3.1, created on 2023-10-11 13:27:16
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526cce4235c13_56535810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7639a47c9d2bf0a901c1fef50268e1a87aad169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526cce4235c13_56535810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\mitienda\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\d7\\63\\9a\\d7639a47c9d2bf0a901c1fef50268e1a87aad169_2.file.helpers.tpl.php',
    'uid' => 'd7639a47c9d2bf0a901c1fef50268e1a87aad169',
    'call_name' => 'smarty_template_function_renderLogo_10629528876526cce422eae3_47781052',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_10629528876526cce422eae3_47781052 */
if (!function_exists('smarty_template_function_renderLogo_10629528876526cce422eae3_47781052')) {
function smarty_template_function_renderLogo_10629528876526cce422eae3_47781052(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_10629528876526cce422eae3_47781052 */
}
