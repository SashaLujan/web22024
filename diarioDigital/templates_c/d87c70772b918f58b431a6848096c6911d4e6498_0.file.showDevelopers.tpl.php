<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-11 04:03:11
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\showDevelopers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66e0fa5fe6d841_82109311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd87c70772b918f58b431a6848096c6911d4e6498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\showDevelopers.tpl',
      1 => 1726020185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66e0fa5fe6d841_82109311 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
   <h4 class="blockquote">About</h4>
</div>


<div class="accordion" id="accordionExample">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['desarrolladores']->value, 'developers');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['developers']->value) {
?>  
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button href="showDeveloper/<?php echo $_smarty_tpl->tpl_vars['developers']->value->id_developer;?>
" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <?php echo strtoupper($_smarty_tpl->tpl_vars['developers']->value->nombre);?>

          </button>
        </h2>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    
     
</div>

 <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
