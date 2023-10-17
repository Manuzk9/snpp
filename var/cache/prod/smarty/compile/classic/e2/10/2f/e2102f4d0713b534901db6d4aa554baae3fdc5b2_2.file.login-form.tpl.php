<?php
/* Smarty version 4.3.1, created on 2023-10-11 09:37:16
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652696fc8c6164_38515965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2102f4d0713b534901db6d4aa554baae3fdc5b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_652696fc8c6164_38515965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1982810646652696fc8aa4b1_57332052', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_1740226837652696fc8aab40_86415408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_1324631667652696fc8b1b86_99093122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_1646222704652696fc8c1c34_23834513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_310597560652696fc8b2927_71526864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646222704652696fc8c1c34_23834513', 'form_field', $this->tplIndex);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_1208641151652696fc8c5206_06693371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_898871417652696fc8c4e99_26687715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208641151652696fc8c5206_06693371', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_1982810646652696fc8aa4b1_57332052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_1982810646652696fc8aa4b1_57332052',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_1740226837652696fc8aab40_86415408',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_1324631667652696fc8b1b86_99093122',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_310597560652696fc8b2927_71526864',
  ),
  'form_field' => 
  array (
    0 => 'Block_1646222704652696fc8c1c34_23834513',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_898871417652696fc8c4e99_26687715',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1208641151652696fc8c5206_06693371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740226837652696fc8aab40_86415408', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1324631667652696fc8b1b86_99093122', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

    <div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310597560652696fc8b2927_71526864', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_898871417652696fc8c4e99_26687715', 'login_form_footer', $this->tplIndex);
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
