 {include 'header.tpl'}

<div>
   <h4>About</h4>
</div>

<div>
    <div class="list-group">
        {foreach $desarrolladores item= developers}

                <div>
                  <a class="btn btn-link" href="showDeveloper/{$developers->id_developer}"> {strtoupper($developers->nombre)} </a>
                  
                </div>
                
        {/foreach}
    </div>
</div>

 {include 'footer.tpl'}