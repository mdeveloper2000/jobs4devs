@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container">    
    <div style="overflow-y: auto; overflow-x: hidden;">
            @include('partials.search')
            @if(count($jobs) > 0)
                <div class="row">
                    @foreach ($jobs as $job)
                        <div class="col-4">
                            <x-card :job="$job" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-bg-danger bg-opacity-75 mt-3 mb-3 p-5 border shadow">
                    <h5>
                        <i class="bi bi-0-square-fill"></i> Não foram encontradas vagas com base na pesquisa informada. Tente outras palavras chaves
                    </h5>
                </div>
            @endif            
        </div>    
</div>
@include('partials.footer')