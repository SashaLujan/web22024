<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-11 04:09:00
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66e0fbbc4d7078_17083941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8803edc98add200f202ed9f057fe8209e1eee7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\formUser.tpl',
      1 => 1726020537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_66e0fbbc4d7078_17083941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <form class="row g-3" action="guardar_usuario" method="POST">
            <h4 class="text-center" class="blockquote">Suscribirse</h4>
            <div class="col-md-6">
                <label class="form-label">Ingresar nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
            <div class="col-md-6">
                <label class="form-label">Ingresar correo electronico</label>
                <input class="form-control" type="email" placeholder="name@example.com" name="email">
            </div>
            <div class="col-12">
                <label class="form-label">Ingresar contraseña</label>
                <input class="form-control" type="password" name="contraseña">
            </div>
            <div class="col-12">
                <label class="form-label">Repetir contraseña</label>
                <input class="form-control" type="password" name="repitaContraseña">
            </div> 
            <div class="col-12">
                <button type="submit" class="btn btn-dark"><b>Suscribirse</b></button>
                <a class="btn btn-dark" href="#"><b>Salir</b></a>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
