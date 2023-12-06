@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-50 mt-3 mb-3 border p-3">
    <form method="POST" action="/users/store" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h5 class="text-center mb-3 p-2 rounded text-bg-light border">Novo Usuário</h5>
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Nome" maxlength="50" value="{{old('name')}}" />
            @error('name')
                <p class="text-danger">{{$message}}</p>        
            @enderror
        </div>                
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="E-mail" maxlength="50" value="{{old('email')}}" />
            @error('email')
                <p class="text-danger">{{$message}}</p>        
            @enderror
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="Senha" maxlength="60" value="{{old('password')}}" />
            @error('password')
                <p class="text-danger">{{$message}}</p>        
            @enderror
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Repetir a senha" maxlength="60" value="{{old('password_confirmation')}}" />
            @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>        
            @enderror
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="button">Foto</button>
            <input class="form-control" type="file" name="photo" value="{{old('photo')}}" />
        </div>                  
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-sm btn-primary">
                <i class="bi bi-floppy-fill"></i> Salvar
            </button>
        </div>
    </form>        
    
</div>
@include('partials.footer')