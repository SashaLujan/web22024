 {include 'header.tpl'}

<div>
   <h4 class="blockquote">About</h4>
</div>

{*<div>
    <div>
        {foreach $desarrolladores item= developers}

                <div  class="card">
                  <div class"card-body" >
                    <a class="list-group-item" class="btn btn-link" href="showDeveloper/{$developers->id_developer}"> 
                    {strtoupper($developers->nombre)} </a>
                  </div>
                </div>
                
        {/foreach}
    </div>
</div>*}

<div class="accordion" id="accordionExample">
    {foreach $desarrolladores item= developers}  
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button href="showDeveloper/{$developers->id_developer}" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            {strtoupper($developers->nombre)}
          </button>
        </h2>
      </div>
    {/foreach} 
    
     
</div>

 {include 'footer.tpl'}