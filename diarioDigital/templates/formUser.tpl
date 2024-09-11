{include 'templates/header.tpl'}
    <div>
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
{include 'templates/footer.tpl'}