@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>

                <form action="{{ action('ProjectController@handleDelete') }}" method="post" role="form">
                <h3>Are you sure?</h3>
                <p>Delete: {{ $project->name }}</p>
                    <input type="hidden" name="project" value="{{ $project->id }}" />
                    <br/><br/>
                    <div class="panel">
                        <input type="submit" class="btn warning" value="Yes, delete this project" />
                        <a href="{{ action('ProjectController@adminIndex') }}" class="btn">Cancel</a>
                    </div>
                </form>
            </article>
@stop