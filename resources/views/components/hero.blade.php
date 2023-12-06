<div id="#vagas" class="row mt-3 mb-3 p-3 border shadow">
    @if(count($jobs) > 0)
        <h5 class="mb-3">
            <i class="bi bi-calendar-check"></i> Últimas vagas registradas
        </h5>
        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-4">
                    <x-card :job="$job" />
                </div>                
            @endforeach
        </div>        
    @else
        <div class="alert alert-danger">
            <i class="bi bi-exclamation-triangle-fill"></i> Não há vagas registradas no momento
        </div>    
    @endif
    <div class="mt-3 text-center text-bg-warning fw-bold bg-opacity-25 p-3 border">
        <span>
            <i class="bi bi-binoculars-fill"></i> Para outras vagas, utilize nosso sistema de pesquisa
        </span>
    </div>
</div>