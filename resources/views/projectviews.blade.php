@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>      
 @endif 
 
 
<div class="row">
        @foreach($projects as $project)
        
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Style requirements- {{$project->style}} </h5>  
                    <img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" class="img-fluid">
                    <div class="card-heading">Location- {{$project->location}} 
                    <br>Budget- RM{{$project->budget}} 
                    <br>Description- {{$project->description}} 
                    <br>Size- {{$project->size}}sq. ft
                    <br><button class="btn btn-danger btn-xs width=100%" button style="width: 100%;" >Email</button></div>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>

@endsection