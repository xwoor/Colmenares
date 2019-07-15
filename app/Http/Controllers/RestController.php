<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class RestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Post::orderBy('id','DESC')->paginate(6);  
        return view('admin.home', compact('datos'));
    }


    public function create()
    {
        return view('admin.agregar');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        // recorremos cada archivo y lo subimos individualmente
            $filename =  time()."_".$file->getClientOriginalName();
            $upload_success = $file->move('upload', $filename );
            $data = $filename;
        $post = new Post();
        $post->name = $request->input('name');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->status = $request->input('status');
        $post->file = "upload/".$data;
        $post->save();
        Session::flash('mensaje','Publicación creada correctamente ');
        return redirect('/admin');
    }
   
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.show', compact('post'));
    }

    public function edit($id)
    {
       $post = Post::find($id);
       Session::flash('mensaje','Publicación actualizada correctamente');
       return view('admin.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->fill($request->all());
        $post->save();
        Session::flash('mensaje','Publicación actualizada correctamente');
        return redirect()->route('admin.edit',$post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return back()->with('info', 'Publicacionción');
    }
}
