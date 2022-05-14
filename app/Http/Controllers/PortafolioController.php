<?php

namespace App\Http\Controllers;

// use DB;

use App\Http\Requests\CreatePortafoliorequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portafolio = DB::table('projects')->get();
        // $portafolio = Project::orderBy('title')->get();
        // $portafolio = Project::latest()->paginate(1);

        // var_dump($portafolio);
        
        // foreach($portafolio as $portafolioItem){
        //     var_dump($portafolioItem->title);
        // }

        // die();

        return view('projects.index',[
            'projects' => Project::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePortafoliorequest $request)
    {
        // return $request->all();
        // $title =  $request->get('title');
        // $url = $request->get('url');
        // $description = $request->get('description');

        // Project::create([
        //     'title' => $title,
        //     'url' => $url,
        //     'description'=> $description
        // ]);

        // Project::create($request->all());

        // $fields = $request->validate([
            
        // ]);
        Project::create($request->validate());

        return redirect()->route('portafolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // $project =  Project::findOrFail($id);
        return view('projects.show',[
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
