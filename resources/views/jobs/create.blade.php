@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-50 mt-3 mb-3 border p-3">
    <div class="row">
        <div class="col-12">            
            <form method="POST" action="/jobs/store">
                @csrf
                <h5 class="text-center mb-3 p-2 rounded text-bg-light border">Criar Vaga</h5>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Título (ex: Desenvolvedor PHP)" maxlength="50" value="{{old('title')}}" />
                    @error('title')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror  
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="company" placeholder="Nome da empresa" maxlength="50" value="{{old('company')}}" />
                    @error('company')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="city" placeholder="Nome da cidade" maxlength="50" value="{{old('city')}}" />
                    @error('city')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button">Carga horária</button>
                    <select class="form-select" name="time">
                        <option value=""></option>
                        <option>Tempo integral</option>
                        <option>Meio período</option>
                    </select>
                    @error('time')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button">Tipo de contrato</button>
                    <select class="form-select" name="contract">
                        <option value=""></option>
                        <option>CLT</option>
                        <option>Estágio</option>
                        <option>PJ</option>
                        <option>Temporário</option>
                    </select>
                    @error('contract')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="E-mail da empresa" maxlength="50" value="{{old('email')}}" />
                    @error('email')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="website" placeholder="Site da empresa" maxlength="50" value="{{old('website')}}" />
                    @error('website')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="description" placeholder="Descrição da vaga" cols="2" style="resize: none;">{{old('description')}}</textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="tags" placeholder="Tags" maxlength="50" value="{{old('tags')}}" />
                    @error('tags')
                        <p class="text-danger">{{$message}}</p>        
                    @enderror
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="bi bi-floppy-fill"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('partials.footer')