@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
            <div class="panel">
                <a href="{{ action('ProjectController@create') }}" class="btn accept">Create Project</a>
            </div>
            @if ($projects->isEmpty())
                    <p>There are no projects listed in the database.</p>
                @else
                    <table>
                        <thead>
                            <tr>
                                <th>Project title</th>
                                <th>Description</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>
                        </br>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td class="large">{{ substr($project->description,0,55) }}...</td>
                                <td class="actions">
                                    <a href="{{ action('ProjectController@edit', $project->id) }}" class="btn">Edit</a>
                                    <a href="{{ action('ProjectController@delete', $project->id) }}" class="btn warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </article>
@stop