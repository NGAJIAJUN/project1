@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
@guest
	 @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
                            
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
     @endif
@else    
  
<div class="my-upload">
<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Thumbnail</th>
		            <th>Style</th>
                    <th>Location</th>
		            <th>Budget</th>
		            <th>Description</th>
                    <th>Size</th>
                    
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($projects as $project)
               
		            <tr>
                  
		                <td>{{$project->id}}</td>
                        <td><img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" alt="" width="50"></td>
		                <td style="max-width:300px">
                        
		                    <em class="text-muted">	
                            {{$project->style}} 	                       
		                    </em>

		                </td>
                        <td>{{$project->location}}</td>
		                <td>RM{{$project->budget}} </td>
                        <td>{{$project->description}} </td>
                        <td>{{$project->size}}sq. ft</td>
		                <td>
                     
                     
                        
 
		                    <a href="{{ route('deleteproject', ['id' => $project->id]) }}" 
                       class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
                    
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		

	</div>
    </div>
    </div>
    @endguest
@endsection
