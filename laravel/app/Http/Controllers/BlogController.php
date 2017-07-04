<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blog;

class BlogController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
   public function index()
   {
$blogs= blog::all();
return view('blog.index',['blogs'=> $blogs]);  

   }
   public function create()
   {

        return view('blog.create');

   }
   public function store(Request $request)
   {

       $this->validate($request,[
       'title' => 'required',
       'post' => 'required',
        ] );
        $blog=new blog;

        $blog->title = $request ->title;
        $blog->post = $request ->post;
        $blog->save();
        return redirect('blog')->with  ('message','Post has been Updated!');
   }

   public function show($id)
   {
       $blog = Blog::find($id);
       if(!$blog)
       {
           abort(404);
       }
       return view('blog.details')->with ('detailpage',$blog);
   }
   public function edit($id){
       $blog=Blog::find($id);
   if(!$blog)
   {
       abort(404);
   }
   return view('blog.edit')->with('detailpage',$blog);
}

public function update(Request $request ,$id)
{
    $this->validate ($request,[
        'title' => 'required',
        'post' => 'required',
    ]);

   $blog = Blog::find($id);
    
        $blog->title = $request ->title;
        $blog->post = $request ->post;
        $blog->save();
        return redirect('blog')->with('message','Post has been Edited!');
}

public function destroy($id)
{
    $blog = Blog::find($id);
    $blog->delete();
     return redirect('blog')->with('message','Post has been Deleted!');
}
}
