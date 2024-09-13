<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-14 00:50:33
  from 'C:\xampp\htdocs\web22024\diarioDigital\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66e4c1b9e52ff7_23375874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8803edc98add200f202ed9f057fe8209e1eee7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22024\\diarioDigital\\templates\\formUser.tpl',
      1 => 1726267811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_66e4c1b9e52ff7_23375874 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input class="form-control" type="password" name="contrasenia">
            </div>
            <div class="col-12">
                <label class="form-label">Repetir contraseña</label>
                <input class="form-control" type="password" name="repitaContrasenia">
            </div> 
            <div class="col-12">
                <button type="submit" class="btn btn-dark"><b>Suscribirse</b></button>
    
            </div>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
