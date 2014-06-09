@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
                <form action="{{ url('admin/install') }}" method="post">
                    <label for="username">&raquo; Username</label>
                    <input type="text" name="username" placeholder="Name">
                    <label for="email">&raquo; Email</label>
                    <input type="text" name="email" placeholder="Name">
                    <label for="password">&raquo; Password</label>
                    <input type="password" name="password" placeholder="Slug">
                    <div class="panel">
                        <input type="submit" class="btn accept" value="Create">
                    </div>
                </form>
            </article>
@stop