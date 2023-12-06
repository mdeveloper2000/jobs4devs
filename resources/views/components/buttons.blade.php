<div class="text-bg-primary bg-opacity-75 p-3 w-100 text-end">
    @auth
        <span class="">
            <img class="rounded-circle border border-light" width="50" height="50" 
                src="{{auth()->user()->photo ? asset('storage/'. auth()->user()->photo) : asset('/images/no-picture.jpg')}}" />
        </span>
        <span class="pe-5 fw-bold">Olá, {{auth()->user()->name}}</span>
        <a class="btn btn-sm btn-primary" href="/users/settings" style="min-width: 150px;">
            <i class="bi bi-gear-fill"></i> Configurações
        </a>
        <form method="post" action="/users/logout" style="display: inline;">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit" style="min-width: 150px;">
                <i class="bi bi-door-open-fill"></i> Sair
            </button>
        </form>
    @else
        <img class="rounded-circle border border-light" width="70" height="70" src="{{asset('/images/no-picture.jpg')}}" />
        <span class="pe-5 fw-bold">Olá, visitante</span>
        <a class="btn btn-success" href="/users/login" style="min-width: 150px;">
            <i class="bi bi-person-check-fill"></i> Login
        </a>
        <a class="btn btn-warning" href="/users/create" style="min-width: 150px;">
            <i class="bi bi-person-fill-add"></i> Registrar
        </a>
    @endauth    
</div>