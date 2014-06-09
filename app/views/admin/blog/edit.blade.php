@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
                <form action="{{ action('BlogController@handleEdit') }}" method="post" role="form">
                    <input type="hidden" name="id" value="{{ $blog->id }}">
                    <label for="title">&raquo; Blog title</label>
                    <input type="text" name="title" placeholder="Blog title" value="{{ $blog->title }}">
                    <label for="slug">&raquo; URL slug</label>
                    <input type="text" name="slug" placeholder="Slug" value="{{ $blog->slug }}">
                    <label for="description">&raquo; Blog content</label>
                    <textarea class="large" name="content" placeholder="Blog content">{{ $blog->content }} </textarea></br>
                    <label for="available">
                        <input type="checkbox" name="available" {{ $blog->available ? 'checked' : '' }}/> Make public
                    </label>
                    <label for="allow_comments">
                        <input type="checkbox" name="allow_comments" {{ $blog->allow_comments ? 'checked' : '' }}/> Enable comments
                    </label>
                    <div class="panel">
                        <input type="submit" class="btn accept" value="Save Updates">
                        <a href="{{ action('BlogController@adminIndex') }}" class="btn warning">Cancel</a>
                    </div>
                </form>
            </article>
@stop