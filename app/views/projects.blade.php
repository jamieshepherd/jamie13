@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_projects.png"/><br/><br/>
            <hr/>
            <h4>Here are some projects I've worked on recently. Click on an image to find out more.</h4>
            <hr/>
                @foreach($projects as $project)
                <figure>
                    <a href="{{ action('ProjectController@display', $project->id) }}/{{$project->slug}}">
                    <img class="project_image" src="/images/project/{{$project->img1}}"/>
                    <figcaption>
                        {{ $project->title }}
                    </figcaption>
                    </a>
                </figure>
                @endforeach
            </article>
@stop