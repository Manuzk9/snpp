<?php
/* Smarty version 4.3.1, created on 2023-10-10 17:00:30
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6525ad5eaa3c59_17664563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e0b51563a5335ced3263a57830b6a960675708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\page.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525ad5eaa3c59_17664563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19844720046525ad5ea9b4c8_45181117', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_319879546525ad5ea9c4c8_67884401 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2215451496525ad5ea9bc05_51545984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319879546525ad5ea9c4c8_67884401', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_18293871106525ad5eaa0a72_40328852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12989217026525ad5eaa1403_49103985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15801681626525ad5eaa03d0_14310900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18293871106525ad5eaa0a72_40328852', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12989217026525ad5eaa1403_49103985', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4730028056525ad5eaa28e7_26981156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5684130786525ad5eaa22b9_89341460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4730028056525ad5eaa28e7_26981156', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19844720046525ad5ea9b4c8_45181117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19844720046525ad5ea9b4c8_45181117',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2215451496525ad5ea9bc05_51545984',
  ),
  'page_title' => 
  array (
    0 => 'Block_319879546525ad5ea9c4c8_67884401',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15801681626525ad5eaa03d0_14310900',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18293871106525ad5eaa0a72_40328852',
  ),
  'page_content' => 
  array (
    0 => 'Block_12989217026525ad5eaa1403_49103985',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5684130786525ad5eaa22b9_89341460',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4730028056525ad5eaa28e7_26981156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2215451496525ad5ea9bc05_51545984', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15801681626525ad5eaa03d0_14310900', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5684130786525ad5eaa22b9_89341460', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
