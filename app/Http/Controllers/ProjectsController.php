<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Services\Twitter;


class ProjectsController extends Controller
{
    public function __construct() {
        // $this->middleware('auth')->only(['index','show']);
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Twitter $twitter)
    {
        $apiKey = $twitter->apiKey;
        $apiSecret = $twitter->apiSecret;
        // Prefer easy Readabillity

        $projects = auth()->user()->projects;
        // $projects = Project::where('owner_id', auth()->id())->get(); // not recomended approach

        return view('projects.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         *  * guarded vs fillable
         *  if require to store all data in request, need to use fillable property in model. -> Project::create($request->all());
         *  if not to store all data, we can use guarded property in model
         */

        // $attributes = $request->validate([
        //     'title' => "required|min:3|max:255",
        //     'description' => "required|min:3|max:255"
        // ]);

        // OR

        $attributes = $this->validateProject();


        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        /**
         * Authorization Methods:
         */

        // auth()->user()->cannot('view', $project);

        // if ($project->owner_id !== auth()->id()) {
        //     abort(403);
        // }

        // abort_if( $project->owner_id !== auth()->id(), 403);
        // abort_if( !auth()->user()->owns($project), 403);
        // abort_unless( !auth()->user()->owns($project), 403);

        // ===== GATE ===== //
        // abort_if(\Gate::denies('view', $project), 403);
        // abort_unless(\Gate::allows('view', $project), 403);
        // \Gate::denies('view', $project) ? abort(403) : '';
        // if (\Gate::denies('view', $project)) {
        //     abort(403);
        // }

        // ===== POLICY ===== //
        // authorize to view the given project
        
        $this->authorize('view', $project); // jeffery way's approach
        $tasks = $project->tasks;
        return view('projects.show')->withProject($project)->withTasks($tasks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit')->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $project->update($this->validateProject());

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'));
    }

    public function validateProject() {
        return request()->validate([
            'title' => "required|min:3|max:255",
            'description' => "required|min:3|max:255"
        ]);
    }
}
