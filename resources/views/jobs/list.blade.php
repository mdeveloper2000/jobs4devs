@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-75 mt-3 mb-3 p-3 border">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TÍTULO</th>
                    <th scope="col">AÇÕES</th>                
                  </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->id}}</td>
                            <td style="width: 50%;">{{$job->title}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/jobs/show/{{$job->id}}" style="min-width: 120px;">
                                    <i class="bi bi-info-circle-fill"></i> Informações
                                </a>
                                <a class="btn btn-warning btn-sm" href="/jobs/edit/{{$job->id}}" style="min-width: 120px;">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <form method="POST" action="/jobs/delete/{{$job->id}}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit" style="min-width: 120px;">
                                            <i class="bi bi-trash-fill"></i> Excluir
                                        </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@include('partials.footer')