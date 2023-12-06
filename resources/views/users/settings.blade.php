@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container">    
    <div class="row">
        <div class="col-4">
            <div class="card mt-5 mb-5 text-bg-light">
                <h1 class="text-center mt-3">
                    <i class="bi bi-pc-display-horizontal"></i>
                </h1>                    
                <div class="card-body text-center">
                    <h5 class="card-title">Vagas anunciadas</h5>
                    <p class="card-text">Você anunciou {{$posted}} vaga(s)</p>
                </div>
                <div class="card-footer text-center">
                    <a type="button" href="/jobs/list/{{auth()->id()}}" class="btn btn-primary btn-sm w-50 {{$posted > 0 ? 'enabled' : 'disabled'}}">
                        <i class="bi bi-mouse2-fill"></i> Ir
                    </a>
                </div>                
              </div>
        </div>
        <div class="col-4">
            <div class="card mt-5 mb-5 text-bg-light">
                <h1 class="text-center mt-3">
                    <i class="bi bi-briefcase-fill"></i>
                </h1>
                <div class="card-body text-center">
                    <h5 class="card-title">Vagas concorridas</h5>
                    <p class="card-text">Você concorre a {{$competing}} vaga(s)</p>
                </div>
                <div class="card-footer text-center">
                    <a type="button" href="/jobs/competing/{{auth()->id()}}" class="btn btn-info btn-sm w-50 {{$competing > 0 ? 'enabled' : 'disabled'}}">
                        <i class="bi bi-mouse2-fill"></i> Verificar
                    </a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card mt-5 mb-5 text-bg-light">
                <h1 class="text-center mt-3">
                    <i class="bi bi-person-vcard-fill"></i>
                </h1>
                <div class="card-body text-center">
                    <h5 class="card-title">Perfil</h5>
                    <p class="card-text">Atualizar seu perfil</p>
                </div>
                <div class="card-footer text-center">
                    <a href="/users/edit/{{auth()->id()}}" type="button" class="btn btn-success btn-sm w-50">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                </div>
              </div>
        </div>
    </div>
</div>
@include('partials.footer')