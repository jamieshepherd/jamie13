@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
            <div class="panel">
                <a href="{{ action('BlogController@create') }}" class="btn accept">Create Blog Post</a>
            </div>
            @if ($blogs->isEmpty())
                    <p>There are no blog posts listed in the database.</p>
                @else
                    <table>
                        <thead>
                            <tr>
                                <th>Blog title</th>
                                <th>Blog summary</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>
                        </br>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td class="large">{{ substr($blog->content,0,150) }}</td>
                                <td class="actions">
                                    <a href="{{ action('BlogController@edit', $blog->id) }}" class="btn">Edit</a>
                                    <a href="{{ action('BlogController@delete', $blog->id) }}" class="btn warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </article>
@stop