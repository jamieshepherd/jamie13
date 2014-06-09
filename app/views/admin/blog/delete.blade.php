@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>

                <form action="{{ action('BlogController@handleDelete') }}" method="post" role="form">
                <h3>Are you sure?</h3>
                <p>Delete: {{ $blog->title }}</p>
                    <input type="hidden" name="blog" value="{{ $blog->id }}" />
                    <br/><br/>
                    <div class="panel">
                        <input type="submit" class="btn warning" value="Yes, delete this post" />
                        <a href="{{ action('BlogController@adminIndex') }}" class="btn">Cancel</a>
                    </div>
                </form>
            </article>
@stop