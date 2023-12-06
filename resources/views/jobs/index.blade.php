@extends('layouts.base')
@include('partials.navbar')
@include('components.flash')
@include('components.buttons')

<div class="container">
    @include('components.center')
    @include('partials.search')
    @include('components.news')
    <div class="row">
        <div class="col-12">            
            @include('components.hero')
        </div>
    </div>
</div>
@include('partials.footer')