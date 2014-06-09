@extends('layout.base')

@section('body')
<article>
            <img src="/images/icons/page_home.png"/><br/><br/>
            <hr/>
            @if (!Auth::guest())
            <h4>Successfully logged in, sir.<br/>You may use the admin options from the menu.</h4>
            <hr/>
            @elseif (Auth::guest())
            <h4>Please enter your username and password to sign in. <br/>If you are not Jamie, you won't have access :)</h4>
            <hr/>
            <form action="{{ url('admin') }}" method="post">
                <label for="name">Username</label>
                <input type="text" name="username" placeholder="Username">
                <label for="slug">Password</label>
                <input type="password" name="password" placeholder="Password">
                <label for="remember">
                    <input type="checkbox" name="remember"/> Remember me
                </label>
                <div class="panel">
                    <input type="submit" class="btn accept" value="Sign in, Mr. Shepherd">
                </div>
            </form>
            @endif
        </article>
@stop