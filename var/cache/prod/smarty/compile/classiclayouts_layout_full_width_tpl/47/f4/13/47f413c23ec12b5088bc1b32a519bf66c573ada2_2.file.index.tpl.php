<?php
/* Smarty version 4.3.1, created on 2023-10-10 17:00:37
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6525ad653f14d1_14447144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f413c23ec12b5088bc1b32a519bf66c573ada2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\index.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525ad653f14d1_14447144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9833590796525ad653ed992_71566436', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21095372026525ad653ee225_19220947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9719611436525ad653ef613_83695169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_9047491556525ad653eeef3_54623502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9719611436525ad653ef613_83695169', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9833590796525ad653ed992_71566436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9833590796525ad653ed992_71566436',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21095372026525ad653ee225_19220947',
  ),
  'page_content' => 
  array (
    0 => 'Block_9047491556525ad653eeef3_54623502',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9719611436525ad653ef613_83695169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21095372026525ad653ee225_19220947', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9047491556525ad653eeef3_54623502', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
