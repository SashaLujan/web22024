 {include 'header.tpl'}

{*<div >
    <div >
        <div class="card card-body" >
                <h5 class="mb-5">{strtoupper($nombre)}</h5>
                <h5 class="mb-5">{strtoupper($email)}</h5>
                <h5 class="mb-5">{strtoupper($rol)}</h5>
        </div>
    </div>
</div>*}

<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
          <div class="accordion-body">
            <h5 class="mb-5">{strtoupper($nombre)}</h5>
                <h5 class="mb-5">{strtoupper($email)}</h5>
                <h5 class="mb-5">{strtoupper($rol)}</h5>
          </div>
        </div>



 {include 'footer.tpl'}