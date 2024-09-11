<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-11 02:48:34
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66e0e8e2295966_95201962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8803edc98add200f202ed9f057fe8209e1eee7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\formUser.tpl',
      1 => 1726015708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_66e0e8e2295966_95201962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedor">
        <form action="guardar_usuario" method="POST">
            <h1>Suscribirse</h1>
            <div class="form-group">
                <label>Ingrese su nombre</label>
                <input type="text" placeholder="NOMBRE" name="nombre">
            </div>
            <div class="form-group">
                <label>Ingrese su correo electronico</label>
                <input type="email" placeholder="EMAIL" name="email">
            </div>
            <div class="form-group">
                <label>Ingrese la contraseña</label>
                <input type="password" placeholder="CONTRASEÑA" name="contraseña">
            </div>
            <div class="form-group">
                <label>Repita la contraseña</label>
                <input type="password" placeholder="REPITA CONTRASEÑA" name="repitaContraseña">
            </div> 
            <button type="submit" class="btn btn-dark"><b>Suscribirse</b></button>
            <a class="btn btn-dark" href="#"><b>Salir</b></a>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
