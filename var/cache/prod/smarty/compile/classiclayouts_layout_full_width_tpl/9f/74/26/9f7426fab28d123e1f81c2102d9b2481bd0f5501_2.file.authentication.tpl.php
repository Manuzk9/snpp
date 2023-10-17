<?php
/* Smarty version 4.3.1, created on 2023-10-11 09:37:16
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652696fc4c19a0_13790695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7426fab28d123e1f81c2102d9b2481bd0f5501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\customer\\authentication.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652696fc4c19a0_13790695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_978734378652696fc4ae341_74727189', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1199495815652696fc4b9988_24018053', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_978734378652696fc4ae341_74727189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_978734378652696fc4ae341_74727189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_299470587652696fc4bd1e5_05529992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_208043073652696fc4b9d82_49434862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <hr/>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299470587652696fc4bd1e5_05529992', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_1199495815652696fc4b9988_24018053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1199495815652696fc4b9988_24018053',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_208043073652696fc4b9d82_49434862',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_299470587652696fc4bd1e5_05529992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208043073652696fc4b9d82_49434862', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
