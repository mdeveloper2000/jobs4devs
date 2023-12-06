@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-50 mt-3 mb-3 p-3">
    <div class="row">
        <div class="col-12">
            <div class="card text-bg-light mb-3 mt-5 mb-5 w-75" style="margin: 0 auto;">
                <div class="card-header">{{$job->title}}</div>
                <div class="card-body">
                    <h5 class="card-title">
                        @php
                            $tags = explode(',', $job->tags);
                        @endphp
                        @foreach ($tags as $tag)
                            <span class="badge rounded-pill text-bg-info">{{$tag}}</span>
                        @endforeach
                    </h5>
                    <p class="card-text">{{$job->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-geo-alt-fill"></i> {{$job->city}}</li>
                    <li class="list-group-item"><i class="bi bi-clock-fill"></i> {{$job->time}}</li>
                    <li class="list-group-item"><i class="bi bi-person-badge-fill"></i> {{$job->contract}}</li>
                    @if($compete)
                        @if($competing == 0)
                            <li class="list-group-item">
                                <span>Quero concorrer a essa vaga</span>
                                <form method="post" action="/jobs/compete/{{$job->id}}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary float-end">
                                        <i class="bi bi-trophy-fill"></i> Concorrer
                                    </button>
                                </form>                   
                            </li>
                        @else
                            <li class="list-group-item">
                                <span>Cancelar minha candidatura a essa vaga</span>
                                <form method="post" action="/jobs/compete/{{$job->id}}" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger float-end">
                                        <i class="bi bi-x-circle-fill"></i> Cancelar
                                    </button>
                                </form>                   
                            </li>
                        @endif
                    @else
                        <li class="list-group-item">
                        <div class="row">
                            <div class="col-6 text-start">
                                @if(auth()->id() == $job->user_id)
                            <a class="btn btn-warning btn-sm" href="/jobs/edit/{{$job->id}}">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>            
                            <form method="POST" action="/jobs/delete/{{$job->id}}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="bi bi-trash-fill"></i> Excluir
                                </button>
                            </form>
                        @endif
                            </div>
                            <div class="col-6 text-end">
                                <a type="button" class="btn btn-primary btn-sm {{$numbers == 0 ? 'disabled' : ''}}" href="/jobs/competitors/{{$job->id}}">
                                    <i class="bi bi-people-fill"></i> Concorrentes
                                </a>
                            </div>
                        </div>
                        </li>
                    @endif
                    <li class="list-group-item text-end">
                        Quantidade de pessoas concorrendo a essa vaga: <span class="fw-bold">( {{$numbers}} )</span>
                    </li>
                  </ul>
                <div class="card-footer">
                    @php
                        $now = new DateTime();
                        $days = $now->diff($job->created_at)->format("%d dia(s) e %h hora(s)");
                    @endphp
                    <small class="text-muted">Anúncio publicado em {{$job->created_at->format('d/m/Y')}} - {{$days}}</small>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>