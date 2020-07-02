@extends('back-end.layout.app')

@section('title')
{{    
    $modulName = "Users",
    $pageTitle =  "Control " . $modulName,
    $pageDes = "Here you can add/edit/delete " .$modulName
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
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">    
                        <h4 class="card-title ">{{$pageTitle}}</h4>
                        <p class="card-category"> {{$pageDes}}</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{route('users.create')}}" class="btn btn-white btn-round">
                            Add {{$modulName}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-rigt">Control</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td class="td-action text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit {{$modulName}}">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove {{$modulName}}">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
 
@endsection
