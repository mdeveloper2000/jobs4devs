@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container w-50 mt-3 mb-3 border p-3">
    <form method="POST" action="/users/authenticate" class="mt-3" enctype="multipart/form-data">
        @csrf
        <h5 class="text-center mb-3 p-2 rounded text-bg-light border">Login</h5>
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
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-sm btn-primary">
                <i class="bi bi-check-circle-fill"></i> Logar
            </button>
        </div>
    </form>
</div>
@include('partials.footer')