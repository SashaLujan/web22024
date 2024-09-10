 {include 'header.tpl'}

    <div class="contenedor">
    <h4>Noticia</h4>
    </div>
    <div class="container mt-5">
        <div class="noticia">
                <h5 class="mb-5">{strtoupper($titulo)}</h5>
                <p class="lead mt-3" >{strtoupper($contenido)}</p>
                <img class="noticia-image" src={($imagen)}>
        </div>
        
            <a class="btn btn-dark" href="showNoticias"><b>Volver</b></a>
    </div>

{include 'footer.tpl'}