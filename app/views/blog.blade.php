@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_blog.png"/><br/><br/>
            <hr/>
            <h4>Occasionally, I write some words about things I find particularly interesting. Take a look, if you want. Perhaps you'll find them interesting too.</h4>
            <hr/>
            @foreach($blogs as $blog)
            <section>
            <a href="{{ action('BlogController@display', $blog->id) }}/{{ $blog->slug }}"><h3>{{ $blog->title }}</h3> <img src="/images/icons/arrow_right.png"></a>
                <p>{{ time_elapsed_string($blog->created_at) }}</p>
            </section>
            @endforeach
        </article>
@stop