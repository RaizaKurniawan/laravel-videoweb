@extends('back-end.layout.app')

@section('title')
{{    $pageTitle = "Home Page" }}
@endsection

@push('css')

    
@endpush


@section('content')
    
    @component('back-end.layout.header')   
            @slot('navtitle')
                {{$pageTitle}}
            @endslot
    @endcomponent
    
 
@endsection

@push('js')

@endpush