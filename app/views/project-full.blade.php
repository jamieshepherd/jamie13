@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_projects.png"/><br/><br/>
            <hr/>
            <div id="portfolio_display">
                <div class="gallery">
                    <img src="/images/project/{{$project->img1}}"/>
                    <img src="/images/project/{{$project->img2}}"/>
                </div>
                <div class="details">
                    <h3>{{$project->title}}</h3>
                    @if ($project->available == true)
                        <h4><a href="{{$project->url}}">Launch project</a></h4>
                    @else
                        <h4 class="deprecated">Website Unavailable</h4>
                    @endif
                    <p>{{nl2br($project->description)}}</p>
                    <div class="tags">
                    <?php $tags = explode (',', $project->tags); ?>
                    @foreach($tags as $tag)
                        <span class="tag">{{$tag}}</span>
                    @endforeach
                    </div>
                </div>
            </div>
            <hr/>
            <p><a href="/projects">Back to projects <img src="/images/icons/curved_arrow_16x12.png"></a></p>
        </article>
@stop