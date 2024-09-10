{include 'header.tpl'}

<div>
   <h4>Noticias</h4>
</div>
<div class="container mt-5">
    <div class="noticias">
        {foreach $noticias item= noticia}
            <div class="card">
                <img class="card-img-top"  src="{$noticia->imagen}" > 
                <div class="card-body">
                    <h5 class="card-title"> {strtoupper($noticia->titulo)} </h5>
                    <p class="card-text"> {strtoupper($noticia->contenido)}</p>
                      
                </div>
                <div>
                    <h4><a href="showNoticia/{$noticia->id_noticia}" class="btn btn-link">ver mas</a></h4>
                </div>   
            </div>
        {/foreach}
    </div>
</div>
 
{include 'footer.tpl'}