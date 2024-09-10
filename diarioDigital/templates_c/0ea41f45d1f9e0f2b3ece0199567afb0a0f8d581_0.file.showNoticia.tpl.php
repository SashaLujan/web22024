<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-06 23:58:05
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\showNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66db7aedce3cb1_73810056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea41f45d1f9e0f2b3ece0199567afb0a0f8d581' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\showNoticia.tpl',
      1 => 1725659880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66db7aedce3cb1_73810056 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="contenedor">
    <h4>Noticia</h4>
    </div>
    <div class="container mt-5">
        <div class="noticia">
                <h5 class="mb-5"><?php echo strtoupper($_smarty_tpl->tpl_vars['titulo']->value);?>
</h5>
                <p class="lead mt-3" ><?php echo strtoupper($_smarty_tpl->tpl_vars['contenido']->value);?>
</p>
                <img class="noticia-image" src=<?php echo ($_smarty_tpl->tpl_vars['imagen']->value);?>
>
        </div>
        
            <a class="btn btn-dark" href="showNoticias"><b>Volver</b></a>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
