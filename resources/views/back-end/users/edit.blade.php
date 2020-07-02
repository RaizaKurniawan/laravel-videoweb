@extends('back-end.layout.app')

@section('title')
{{    
    $modulName = "Users",
    $pageTitle = "Edit" . $modulName ,
    $pageDes = "Here you can edit " .$modulName
    }}
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
