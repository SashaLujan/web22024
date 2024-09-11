{include 'templates/header.tpl'}
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
{include 'templates/footer.tpl'}