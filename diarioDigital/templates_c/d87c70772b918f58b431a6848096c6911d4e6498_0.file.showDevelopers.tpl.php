<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-07 02:06:21
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\showDevelopers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66db98fd33ded3_46652415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd87c70772b918f58b431a6848096c6911d4e6498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\showDevelopers.tpl',
      1 => 1725667578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66db98fd33ded3_46652415 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
   <h4>About</h4>
</div>

<div>
    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['desarrolladores']->value, 'developers');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['developers']->value) {
?>

                <div>
                  <a class="btn btn-link" href="showDeveloper/<?php echo $_smarty_tpl->tpl_vars['developers']->value->id_developer;?>
"> <?php echo strtoupper($_smarty_tpl->tpl_vars['developers']->value->nombre);?>
 </a>
                  
                </div>
                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

 <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
