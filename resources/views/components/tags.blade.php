@props(['tags'])

@php
    $tagsCsv = explode(',', $tags);
@endphp

@foreach ($tagsCsv as $tag)
    <span class="badge rounded-pill text-bg-info p-2">{{$tag}}</span>
@endforeach