<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ProjectView;
use Session;

class ProjectViewController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){    
       $r=request(); 
       $thumbnail=$r->file('thumbnail-img');  
       $thumbnail->move('thumbnails',$thumbnail->getClientOriginalName()); 
       $thumbnailName=$thumbnail->getClientOriginalName();

        $addProject=ProjectView::create([   
            'id'=>$r->ID, 
            'location'=>$r->location, 
            'budget'=>$r->budget,
            'style'=>$r->style,
            'description'=>$r->description,
            'size'=>$r->size,
            'thumbnail'=>$thumbnailName,
        ]);
        Return view('upload');
}

public function delete($id){
    $projects=ProjectView::find($id);
    $projects->delete();
    return redirect()->route('myupload');
}



public function show(){
    $projects=ProjectView::paginate(12);
    return view('projectviews')->with('projects',$projects);
}

public function showupload(){
    $projects=ProjectView::paginate(12);
    return view('myupload')->with('projects',$projects);
}



    
}