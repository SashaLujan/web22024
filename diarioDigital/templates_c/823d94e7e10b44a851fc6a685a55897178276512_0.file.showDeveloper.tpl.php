<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-11 00:09:33
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\showDeveloper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66e0c39d064e81_19361260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '823d94e7e10b44a851fc6a685a55897178276512' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\showDeveloper.tpl',
      1 => 1726006162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66e0c39d064e81_19361260 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div >
    <div >
        <div class="card card-body" >
                <h5 class="mb-5"><?php echo strtoupper($_smarty_tpl->tpl_vars['nombre']->value);?>
</h5>
                <h5 class="mb-5"><?php echo strtoupper($_smarty_tpl->tpl_vars['email']->value);?>
</h5>
                <h5 class="mb-5"><?php echo strtoupper($_smarty_tpl->tpl_vars['rol']->value);?>
</h5>
        </div>
    </div>
</div>



 <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
