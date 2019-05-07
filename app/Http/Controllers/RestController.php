<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class RestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Project::all();    
        return view('admin.home', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agregar-producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $files = $request->file('img');
        $count = 0;
        // recorremos cada archivo y lo subimos individualmente
        foreach($files as $file) {
            $filename =  time()."_".$file->getClientOriginalName();
            $upload_success = $file->move(public_path().'/images/', $filename );
            $data[] = $filename;
        }
        $project = new Project();
        $project->img_01 = $data[0];
        $project->img_02 = $data[1];
        $project->img_03 = $data[2];
        $project->img_04 = $data[3];
        $project->img_05 = $data[4];
        $project->project_title = $request->input('project_title');
        $project->location = $request->input('location');
        $project->description = $request->input('description');
        $project->type = $request->input('type');
        $project->status = $request->input('status');
        $project->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Project::find($id);
        return view('admin.edit', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->project_title = $request->get('project_title');
        $project->location = $request->get('location');
        $project->description = $request->get('description');
        $project->type = $request->get('type');
        $project->status = $request->get('status');
        $project->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = Project::find($id);   
        $eliminar->delete();

        return redirect('/admin');
    }
}
