<div class="row">
    <div class="col-12">
        <form method="GET" action="/jobs/search" class="row row-cols-lg-auto">
            @csrf
            <div class="input-group mt-3">
                <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar vagas através de tags (exemplo: VueJS, Angular, React...)" aria-label="Search" />
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Pesquisar
                    </button>
            </div>
        </form>
    </div>
</div>