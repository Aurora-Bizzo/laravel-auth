<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Project;
    use App\Http\Requests\StoreProjectRequest;
    use App\Http\Requests\UpdateProjectRequest;
    use App\Http\Controllers\Controller; 
    use Illuminate\Support\Facades\Auth;

    class ProjectController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $projects = Project::all();
            return view('admin.projects.index', compact('projects'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.projects.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreProjectRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreProjectRequest $request)
        {
            $form_data = $request->validated();
            $slug = Project::generateSlug($request->title, '-');
            $form_data['slug'] = $slug;

            $newProject = new Project();
            $newProject->fill($form_data);
            $newProject->save();

            

            return redirect()->route('admin.projects.index')->with('message','Project created');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Project  $project
         * @return \Illuminate\Http\Response
         */
        public function show(Project $project)
        {
            return view('admin.projects.show', compact('project'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Project  $project
         * @return \Illuminate\Http\Response
         */
        public function edit(Project $project)
        {
            return view('admin.projects.edit', compact('project'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateProjectRequest  $request
         * @param  \App\Models\Project  $project
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateProjectRequest $request, Project $project)
        {
            $form_data = $request->validated();
            $slug = Project::generateSlug($request->title, '-');
            $form_data['slug'] = $slug;
            $project->update($form_data);

            return redirect()->route('admin.projects.index')->with('message', 'Project modified successfully.');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Project  $project
         * @return \Illuminate\Http\Response
         */
        public function destroy(Project $project)
        {
            $project->delete();
            return redirect()->route('admin.projects.index')->with('message', 'Project deleted succesfully');
        }
    }
?>