<?php
/*
 * ProjectController.php by jamie (28/01/14 @ 21:58)
 */

class ProjectController extends BaseController {

    public function adminIndex()
    {
        // Show a list of projects for the admin user
        $projects = Project::orderBy('id','desc')->get();
        return View::make('admin.projects', compact('projects'));
    }
    public function publicIndex()
    {
        // Show a list of projects for the public user
        $projects = Project::orderBy('id','desc')->get();
        return View::make('projects', compact('projects'));
    }
    public function display(Project $project)
    {
        return View::make('project-full', compact('project'));
    }
    public function create()
    {
        return View::make('admin.project.create');
    }
    public function handleCreate()
    {
        // Handle the creation of a project
        $project = new Project;
        $project->title             = Input::get('title');
        $project->slug              = Input::get('slug');
        $project->description       = Input::get('description');
        $project->url               = Input::get('url');
        $project->available         = Input::has('available');
        $project->img1              = Input::get('img1');
        $project->img2              = Input::get('img2');
        $project->tags              = Input::get('tags');
        $project->save();

        return Redirect::action('ProjectController@adminIndex');
    }
    public function edit(Project $project)
    {
        return View::make('admin.project.edit', compact('project'));
    }
    public function handleEdit()
    {
        // Handle edit form submission
        $project                    = Project::findOrFail(Input::get('id'));
        $project->title             = Input::get('title');
        $project->slug              = Input::get('slug');
        $project->description       = Input::get('description');
        $project->url               = Input::get('url');
        $project->available         = Input::has('available');
        $project->img1              = Input::get('img1');
        $project->img2              = Input::get('img2');
        $project->tags              = Input::get('tags');
        $project->save();

        return Redirect::action('ProjectController@adminIndex');
    }
    public function delete(Project $project)
    {
        return View::make('admin.project.delete', compact('project'));
    }
    public function handleDelete()
    {
        // Handle the deletion of a project
        $id                         = Input::get('project');
        $project                       = Project::findOrFail($id);
        $project->delete();

        return Redirect::action('ProjectController@adminIndex');
    }

} 