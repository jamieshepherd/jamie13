@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
                <form action="{{ action('BlogController@handleCreate') }}" method="post" role="form">
                    <label for="title">&raquo; Blog title</label>
                    <input type="text" name="title" placeholder="Name">
                    <label for="slug">&raquo; URL slug</label>
                    <input type="text" name="slug" placeholder="Slug">
                    <label for="description">&raquo; Blog content</label>
                    <textarea class="large" name="content" placeholder="Blog content"></textarea></br>
                    <label for="available">
                        <input type="checkbox" name="available"/> Make public
                    </label>
                    <label for="allow_comments">
                        <input type="checkbox" name="allow_comments"/> Enable comments
                    </label>
                    <div class="panel">
                        <input type="submit" class="btn accept" value="Create Blog Post">
                        <a href="{{ action('BlogController@adminIndex') }}" class="btn warning">Cancel</a>
                    </div>
                </form>
            </article>
@stop