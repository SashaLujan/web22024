<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-06 23:56:05
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\showNoticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66db7a757c0185_85097004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1cc5747e333fc5ac3ed5eaafb8f4add23be21ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\showNoticias.tpl',
      1 => 1725659762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66db7a757c0185_85097004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
   <h4>Noticias</h4>
</div>
<div class="container mt-5">
    <div class="noticias">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
            <div class="card">
                <img class="card-img-top"  src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value->imagen;?>
" > 
                <div class="card-body">
                    <h5 class="card-title"> <?php echo strtoupper($_smarty_tpl->tpl_vars['noticia']->value->titulo);?>
 </h5>
                    <p class="card-text"> <?php echo strtoupper($_smarty_tpl->tpl_vars['noticia']->value->contenido);?>
</p>
                      
                </div>
                <div>
                    <h4><a href="showNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value->id_noticia;?>
" class="btn btn-link">ver mas</a></h4>
                </div>   
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
