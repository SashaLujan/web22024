 {include 'header.tpl'}

<div>
   <h4 class="blockquote">About</h4>
</div>

<div>
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
</div>
    
     
</div>

 {include 'footer.tpl'}