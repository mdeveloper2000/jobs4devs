@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-50 mt-3 mb-3 p-3 border shadow">    
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
                            <td style="width: 70%;">{{$job->title}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/jobs/show/{{$job->job_id}}" style="min-width: 120px;">
                                    <i class="bi bi-info-circle-fill"></i> Informações
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@include('partials.footer')