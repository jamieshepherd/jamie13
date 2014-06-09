@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
                <form action="{{ action('ProjectController@handleCreate') }}" method="post" role="form">
                    <label for="title">&raquo; Project title</label>
                    <input type="text" name="title" placeholder="Name">
                    <label for="slug">&raquo; URL slug</label>
                    <input type="text" name="slug" placeholder="Slug">
                    <label for="slug">&raquo; 720 character description</label>
                    <textarea name="description" placeholder="Description"></textarea></br>
                    <label for="url">&raquo; Website URL</label>
                    <input type="text" name="url" placeholder="Website URL">
                    <label for="available">
                        <input type="checkbox" name="available"/> Is this site still available?
                    </label>
                    <label for="im1">&raquo; Project Image 1 (name.jpg)</label>
                    <input type="text" name="img1" placeholder="Header image">
                    <label for="img2">&raquo; Project Image 2 (name.jpg)</label>
                    <input type="text" name="img2" placeholder="Header image">
                    <label for="tags">&raquo; Project tags (comma separated)</label>
                    <input type="text" name="tags" value="" placeholder="e.g. HTML5, PHP, PHP">
                    <div class="panel">
                        <input type="submit" class="btn accept" value="Create Project">
                        <a href="{{ action('ProjectController@adminIndex') }}" class="btn warning">Cancel</a>
                    </div>
                </form>
            </article>
@stop